<?php

namespace App\Console\Commands;

use App\Models\Charge;
use Illuminate\Console\Command;

class ViewCharges extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:charges';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all charges';

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
        $this->table(
            ['Id', 'Product', 'Client', 'Days', 'Charged at', 'Expired at', 'Active'],
            Charge::all([
                'id', 
                'product_id',
                'client_id',
                'days',
                'charged_at',
                'charged_expired',
                'status',
            ])->toArray()
        );

        return 0;
    }
}
