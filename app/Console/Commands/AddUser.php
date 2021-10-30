<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AddUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add user to login in plataform';

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

        $name = $this->ask('What is your name?');
        $email = $this->ask('What is your email?');
        $pass =$this->secret('What is the password?');

        $this->info("[$appName] Nome: $name");
        $this->info("[$appName] Email: $email");
        $this->info("[$appName] Senha: $pass");

        if (!$this->confirm('Do you wish to continue?', true)) {
            return 0;
        }

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($pass);

        $result = $user->save();

        if (!$result) {
            $this->error('Erro ao salvar usuário');
            return 0;
        }

        $id = $user->id;
        $this->info("[$appName] Usuario criado com sucesso! ID: $id");

        return 0;
    }
}
