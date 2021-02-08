<?php

namespace App\Http\Controllers;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Main\JASAMARGA\Device\DeviceStoreRequest;
use App\Http\Requests\Backend\Main\JASAMARGA\Device\DeviceUpdateRequest;

class DemoController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->url = '/dashboard/jasamarga/maintenances';
    $this->path = 'pages.backend.main.jasamarga.maintenance';
    $this->model = 'App\Models\Backend\Main\JASAMARGA\Maintenance';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index(Request $request) {
    return view($this->path . '.index');
  }

  public function data() {
    $query = $this->model::with(['jasamarga_users'])->select('jasamarga_maintenances.*');
    return datatables($query)->toJson();
  }

}
