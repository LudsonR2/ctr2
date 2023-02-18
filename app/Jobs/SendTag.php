<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;


class SendTag implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->queue = Http::withOptions(["verify" => false])
        ->withHeaders([
            'Authorization' => 'Bearer ' . config('token'),
            'X-CleverTap-Account-Id' => '8RZ-RK8-W66Z',
            'X-CleverTap-Passcode' => 'SOK-IWW-YEUL',
            'Content-Type' => 'application/json'])
        ->post('https://us1.api.clevertap.com/1/upload', $this->data);

        return true;
    }

    
}
