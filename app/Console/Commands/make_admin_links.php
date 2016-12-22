<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class make_admin_links extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin:links {directories*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        foreach($this->argument('directories') as $directory) {
            $directory = escapeshellarg($directory);
            $withbasedir = "~/Desktop/page_bugle/" . $directory;
            //$withbasedir = __DIR__ . $directory;
            $name = basename($directory);
            $name = escapeshellarg($name);
            $withbasenam = "~/Desktop/page_bugle/public/" . $name;
            dd($withbasenam);
            exec("ln -s {$withbasenam} {$withbasedir}");
            $this->info('Added symbolic link to '. $name);
        }
    }
}
