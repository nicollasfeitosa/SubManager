<?php

namespace App\Console\Commands;

use App\Models\Client;
use Illuminate\Console\Command;

class AddClient extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:client';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a client to database';

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

        $name = $this->ask('What is client name?');
        $discordId = $this->ask('What is discord ID?');

        $this->info("[$appName] Name: $name");
        $this->info("[$appName] Discord ID: $discordId");

        if (!$this->confirm('Do you wish to continue?', true)) {
            return 0;
        }

        $client = new Client();
        $client->name = $name;
        $client->discord_id = $discordId;

        $result = $client->save();

        if (!$result) {
            $this->error('Client not saved');
            return 0;
        }

        $id = $client->id;
        $this->info("[$appName] Cliente criado com sucesso! ID: $id");

        return 0;
    }
}
