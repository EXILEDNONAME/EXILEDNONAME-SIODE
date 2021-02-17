<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MyEvent implements ShouldBroadcast {

  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $item;
  public function __construct($item) {
    $this->item = $item;
  }

  public function broadcastOn() {
    return ['status-liked'];
  }

  public function toDatabase($notifiable)
  {
    return [
      'following_id' => $this->following->id,
      'following_name' => $this->following->name,
      'post_id' => $this->post->id,
    ];
  }

}
