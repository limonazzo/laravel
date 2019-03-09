<?php

namespace App\Console\Commands\Bitso;

use App\Lib\BitsoConnection;
use Illuminate\Console\Command;

class GetBitcointPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bitso:getbitcointprice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets bitocint price and saves to database';

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
    public function handle(BitsoConnection $bitsoConnection)
    {
        $price = $bitsoConnection->getBitcointPrice();
        if ($price) {
            $bitsoConnection->saveBitcointPrice($price);
        }
    }
}
