<?php

namespace App\Http\Controllers\Backend\System;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class DashboardController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard';
    $this->path = 'pages.backend.system.dashboard';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index(Request $request) {
    $data = User::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', '%2021-02%')->count(); $data .= ', ';
    $data .= User::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', '%2021-02%')->count();
    // if(request()->ajax()) {
    //   $data = User::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', '%2021-02%')->count(); $data .= ', ';
    //   $data .= User::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', '%2021-05%')->count(); $data .= ', ';
    //   $data .= User::select(\DB::raw("COUNT(*) as count"))->where('created_at', 'like', '%2021-02%')->count();
    // }
    return view($this->path . '.index', compact('data'));

  }

  /**
  **************************************************
  * @return File-Manager
  **************************************************
  **/

  public function file_manager() {
    return view($this->path . '.file');
  }

  /**
  **************************************************
  * @return Logout
  **************************************************
  **/

  public function logout() {
    Auth::logout();
    return redirect('login');
  }

}
