<?php

namespace App\Providers;

// use App\Observers\DummyObserver;
// use App\Models\Backend\System\Dummy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider {

  public function register() {
    require_once app_path() . '/Helpers/System/Access.php';

    require_once app_path() . '/Helpers/System/Activity.php';
    require_once app_path() . '/Helpers/System/Chart.php';
    require_once app_path() . '/Helpers/Backend/Main/DISHUB.php';
    require_once app_path() . '/Helpers/Backend/Main/JASAMARGA.php';
    require_once app_path() . '/Helpers/Backend/Main/JMTM.php';
    require_once app_path() . '/Helpers/Backend/Main/SESKO.php';
    require_once app_path() . '/Helpers/Backend/Main/VMS.php';
  }

  public function boot() {

    // Dummy::observe(DummyObserver::class);



    Schema::defaultStringLength(191);
    config(['app.locale' => 'en']);
    Carbon::setLocale('en');
    date_default_timezone_set('Asia/Jakarta');
  }
}
