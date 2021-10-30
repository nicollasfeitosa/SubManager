<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class CreateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create product to manager a subscription';

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
        $appName = env('APP_NAME', 'Laravel');

        $name = $this->ask('Whats a name of the your product?');
        $description = $this->ask('Whats a description of the your product?');
        $discord = $this->ask('Enter a discord webhook to send notifications of this product!');

        $this->info("[$appName] Name: $name");
        $this->info("[$appName] Description: $description");
        $this->info("[$appName] Discord: $discord");

        if (!$this->confirm('Do you wish to continue?', true)) {
            return 0;
        }

        $product = new Product(
            [
                'name' => $name,
                'description' => $description,
                'discord' => $discord,
            ]
        );

        $result = $product->save();

        if (!$result) {
            $this->error('Product not created');
            return 0;
        }

        $this->info("[$appName] Product created successfully. ID: " . $product->id);

        return 0;
    }
}
