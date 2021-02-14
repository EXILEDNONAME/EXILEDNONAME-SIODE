<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Log;

use App\Models\Backend\Main\DISHUB\Device;

class ItemEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function itemCreated(Device $item)
    {
        Log::info("Item Created Event Fire: ".$item);
    }

    public function itemUpdated(Device $item)
    {
        Log::info("Item Updated Event Fire: ".$item);
    }

    public function itemDeleted(Device $item)
    {
        Log::info("Item Deleted Event Fire: ".$item);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
     public function broadcastOn()
     {
         return ['status-liked'];
     }
}
