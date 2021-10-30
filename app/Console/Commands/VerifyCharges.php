<?php

namespace App\Console\Commands;

use App\Http\Controllers\DiscordNotification;
use App\Models\Charge;
use Carbon\Carbon;
use Illuminate\Console\Command;

class VerifyCharges extends Command
{
    private bool $sendNotification = false;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'verify:charges';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verify Charges Command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $charges = Charge::all();

        $this->sendNotification = $this->confirm('Do you want to send notification to users?', true);

        foreach ($charges as $charge) {
            $expiredAt = Carbon::parse($charge->charged_expired)->timezone('America/Sao_Paulo')->format('d/m/Y H:i');
            $validation = $charge->validate();

            if ($validation === 0) {
                # expired
                $this->info('Charge: ' . $charge->id . ' EXPIROU');
                $this->info('Expired at: ' . $expiredAt);
                $this->newLine();
                $this->sendChargeNotification($charge);
                continue;
            }

            if ($validation === 1) {
                # OK
                $this->info('Charge: ' . $charge->id . ' TA OK');
                $this->info('Expired at: ' . $expiredAt);
                $this->newLine();
                continue;
            }

            if ($validation === 2) {
                # proximo a expirar
                $this->info('Charge: ' . $charge->id . ' FALTA POUCO PRA EXPIRAR');
                $this->info('Expired at: ' . $expiredAt);
                $this->newLine();
                $this->sendChargeNotification($charge);
                continue;
            }
        }

        return 0;
    }

    public function sendChargeNotification(Charge $charge)
    {
        if (!$this->sendNotification) {
            return;
        }

        (new DiscordNotification)->chargeVerify($charge);
    }

}
