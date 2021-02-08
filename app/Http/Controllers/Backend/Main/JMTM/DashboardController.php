<?php

namespace App\Http\Controllers\Backend\Main\JMTM;

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
    $this->url = '/dashboard/jmtm/devices';
    $this->path = 'pages.backend.main.jmtm.dashboard';
    $this->model = 'App\Models\Backend\Main\JMTM\Device';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $data = $this->model::select('*');
    if(request()->ajax()) {
      return DataTables::of($data)
      ->addColumn('checkbox', 'includes.datatable.checkbox')
      ->addColumn('action', 'includes.datatable.action')
      ->rawColumns(['action', 'checkbox'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . '.index');
  }

}
