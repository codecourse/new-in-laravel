<?php

namespace App\Jobs;

use App\Models\Podcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\Middleware\Skip;

class ProcessPodcast implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Podcast $podcast)
    {
        //
    }

    public function middleware(): array
    {
        return [
            //Skip::unless(!$this->podcast->isProcessed()),
            //Skip::when($this->podcast->isProcessed()),
            Skip::when(function () {
                if (true) {
                    return true;
                }

                return $this->podcast->isProcessed();
            })
        ];
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // process
        \Log::info('Process');

        $this->podcast->update([
            'processed_at' => now()
        ]);
    }
}
