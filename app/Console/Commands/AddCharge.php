<?php

namespace App\Console\Commands;

use App\Http\Controllers\DiscordNotification;
use App\Models\Charge;
use App\Models\Client;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Console\Command;

class AddCharge extends Command
{
    private const TIMEZONE = 'America/Sao_Paulo';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:charge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add charge to user in a product';

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
        $this->info('Add charge to user in a product:');

        $productsId= Product::all()->pluck('id')->toArray();
        $productsName = Product::all()->pluck('name')->toArray();

        $products = array_combine($productsId, $productsName);
        $productsInverse = array_flip($products);

        $productName = $this->choice('Select a product?', $productsName);
        $productId = $productsInverse[$productName];
        $this->info('You have selected product: ' . $productName . ' ID: '. $productId);

        $this->newLine();

        $clientsId = Client::all()->pluck('id')->toArray();
        $clientsName = Client::all()->pluck('name')->toArray();

        $clients = array_combine($clientsId, $clientsName);
        $clientsInverse = array_flip($clients);
        
        $clientName = $this->choice('Select a client:', $clientsName);
        $clientId = $clientsInverse[$clientName];

        $this->info('You have selected client: ' . $clientName . ' ID: '. $clientId);

        $this->newLine();

        $chargeMonthly = $this->ask('Enter a value of charge in monthly:', 1);
        $this->info('You have selected ' . $chargeMonthly . ' monthly of charge');

        $this->newLine();

        $charge = new Charge([
            'client_id' => $clientId,
            'product_id' => $productId,
            'days' => $chargeMonthly * Carbon::now()->daysInMonth,
            'charged_at' => Carbon::now(),
            'charged_expired' => Carbon::now()->addMonth($chargeMonthly)
        ]);

        $this->info('Charge validity is in ' . Carbon::now()->addMonth($chargeMonthly)->format('d/m/Y'));

        if (!$this->confirm('Do you wish to continue?', true)) {
            return 0;
        }

        $result = $charge->save();

        if (!$result) {
            $this->error('Error while saving charge');
        }

        $this->info('Charge saved successfully, ID: ' . $charge->id);

        if ($this->confirm('Send notification in product discord?', true)) {
            (new DiscordNotification)->charged($charge);
            $this->comment('Discord notification send with success!');
        }

        return 0;
    }
}
