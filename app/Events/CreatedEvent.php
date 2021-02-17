<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Backend\System\Notification;

class CreatedEvent {

  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $user;

  public function __construct($user) {
    $this->user = $user;
  }

  public function created() {
    $data = [
      'id_user' => '1',
      'name'    => 'created',
      'message' => $user,
    ];

    Notification::insert($data);
  }

  public function broadcastOn()
  {
    return [];
  }

}
