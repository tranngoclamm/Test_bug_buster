<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Crypt;


class EncryptEnv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:encrypt-env';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    protected function configure()
    {
        $this->setName('env:encrypt')
            ->setDescription('Encrypts the .env file');
    }

    public function handle()
    {
        $this->info('Encrypting the environment file ...');

        // Load the .env file contents
        $envContents = file_get_contents($this->laravel->environmentFilePath());

        // Encrypt the contents
        $encrypted = Crypt::encryptString($envContents);

        // Save the encrypted contents to a new file
        file_put_contents($this->laravel->environmentFilePath() . '.enc', $encrypted);

        $this->info('Environment file encrypted successfully!');
    }


}
