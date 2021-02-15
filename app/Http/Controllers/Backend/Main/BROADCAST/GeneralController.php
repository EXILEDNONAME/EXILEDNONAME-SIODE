<?php

namespace App\Http\Controllers\Backend\Main\BROADCAST;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\Http\Requests\Backend\Main\BROADCAST\General\ContentStoreRequest;
use App\Http\Requests\Backend\Main\BROADCAST\General\ContentUpdateRequest;

class GeneralController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/broadcast/generals';
    $this->path = 'pages.backend.main.broadcast.general';
    $this->model = 'App\Models\Backend\Main\BROADCAST\General';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index(Request $request) {
    $data = $this->model::latest()->first();
    return view($this->path . '.index', compact('data'));
    return view($this->path . '.index', compact('data'));
  }

  public function update(Request $request, $id) {
    $data = $this->model::findOrFail($id);
    $update = $request->all();
    $data->update($update);
    return redirect($this->url)->with('success', trans('notification.success.edit'));
  }

}
