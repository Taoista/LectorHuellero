<?php

namespace App\Events;

use App\Models\CreateFinger;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FingerPrintEnrollementEvent
{
    use Dispatchable, SerializesModels;

    public $CreateFinger;

    /**
     * Create a new event instance.
     */
    public function __construct(CreateFinger $CreateFinger)
    {
        $this->CreateFinger = $CreateFinger;
    }
}
