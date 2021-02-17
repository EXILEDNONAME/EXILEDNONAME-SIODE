<?php

namespace App\Providers;

use App\Observers\DummyObserver;
use App\Models\Backend\System\Dummy;
use Illuminate\Support\ServiceProvider;

class ObserversServiceProvider extends ServiceProvider
{

  public function boot() {
    Dummy::observe($this->app->make(DummyObserver::class));
  }

  public function register() {
    $this->app->singleton(DummyObserver::class, function() { return new DummyObserver(new Dummy()); });
  }

}
