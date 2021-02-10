<?php

namespace App\Http\Controllers\Backend\System;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

  public function index() {
    return view($this->path . '.index');
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
