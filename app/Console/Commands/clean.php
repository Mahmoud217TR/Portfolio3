<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:storage';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To clean storage Directory';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        File::cleanDirectory(public_path("storage/uploads"));
        $this->info('Storage is clean!');
    }
}
