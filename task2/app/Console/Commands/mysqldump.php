<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class mysqldump extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:dump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dump the MySQL database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dbhost = env('DB_HOST');
        $dbport = env('DB_PORT');
        $dbname = env('DB_DATABASE');
        $dbuser = env('DB_USERNAME');
        $dbpass = env('DB_PASSWORD');

        $dbfile = $dbname . '-' . date("Y-m-d") . '.sql.gz';
        
        $command = "mysqldump --host=$dbhost --port=$dbport --user=$dbuser --password=$dbpass $dbname | gzip > $dbfile";
        system($command);

        return Command::SUCCESS;
    }
}