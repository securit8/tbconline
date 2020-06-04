<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Gateway\TbcPayProcessor;
use Illuminate\Support\Facades\Log;

class closeDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'close:tbc:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Close tbc payment day';

    private $payment;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->payment = new TbcPayProcessor(public_path().config('tbc.cert-path'), config('tbc.cert-key'), "139.59.208.66");
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $response = $this->payment->close_day();
        Log::info($response);
    }
}
