<?php

namespace App\Observers;

use App\Models\Backend\System\Dummy;
use App\Models\Backend\System\Notification;
use Log;

class DummyObserver {

  public function __construct(Dummy $article){
    $this->article = $article;
  }

  public function created(Dummy $article){
    $data = [
      'id_user' => '1',
      'name'    => 'created',
      'message' => $article,
    ];

    Notification::insert($data);

  }

  public function updated(Dummy $article){
    Log::info('Ini Updated');
  }

}
