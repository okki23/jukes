<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\GetDataController;

class CrawlData extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getdata:crawlfromjson';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mengambil data dari json';

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
        return $this->ambil_data;
        // echo "ini datanya udah di store ke database";
    }
}
