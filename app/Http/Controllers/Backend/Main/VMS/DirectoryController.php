<?php

namespace App\Http\Controllers\Backend\Main\VMS;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\Http\Requests\Backend\Main\VMS\Directory\DirectoryStoreRequest;
use App\Http\Requests\Backend\Main\VMS\Directory\DirectoryUpdateRequest;

class DirectoryController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/vms/directories';
    $this->path_admin = 'pages.backend.main.vms-admin.directory';
    $this->path_user = 'pages.backend.main.vms-user.directory';
    $this->model = 'App\Models\Backend\Main\VMS\Directory';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function monitoring(Request $request) {
    $model = $this->model;
    $data = $this->model::with(['vms_areas', 'vms_types'])->where('active', '1')->select('vms_directories.*');
    if(request()->ajax()) {
      return DataTables::eloquent($data)
      ->addColumn('action', 'includes.datatable.action')
      ->addColumn('checkbox', 'includes.datatable.checkbox')
      ->addColumn('status_device', 'includes.datatable.status-device')
      ->rawColumns(['action', 'checkbox', 'status_device'])
      ->addIndexColumn()
      ->make(true);
    }

    return view($this->path_admin . '.index', compact('model'));
  }

  public function index(Request $request) {
    $model = $this->model;
    $data = $this->model::with(['vms_areas', 'vms_types'])->select('vms_directories.*');
    
    if(request()->ajax()) {
      return DataTables::eloquent($data)
      ->addColumn('action', 'includes.datatable.action')
      ->addColumn('checkbox', 'includes.datatable.checkbox')
      ->addColumn('status_device', 'includes.datatable.status-device')
      ->rawColumns(['action', 'checkbox', 'status_device'])
      ->addIndexColumn()
      ->make(true);
    }

    if (access('Administrator')) {
      return view($this->path_admin . '.index', compact('model'));
    }
    else {
      return view($this->path_user . '.index', compact('model'));
    }

  }

  /**
  **************************************************
  * @return Show
  **************************************************
  **/

  public function show($id) {
    $data = $this->model::findOrFail($id);
    if (access('Administrator')) {
      return view($this->path_admin . '.show', compact('data'));
    }
    else {
      return view($this->path_user . '.show', compact('data'));
    }
  }

  /**
  **************************************************
  * @return Create
  **************************************************
  **/

  public function create() {
    $path = $this->path_admin;
    if (access('Administrator')) {
      return view($this->path_admin . '.create', compact('path'));
    }
    else {
      return redirect($this->url)->with('error', trans('notification.restrict'));
    }
  }

  /**
  **************************************************
  * @return Store
  **************************************************
  **/

  public function store(DirectoryStoreRequest $request) {
    $store = $request->all();
    $this->model::create($store);
    return redirect($this->url)->with('success', trans('notification.success.create'));
  }

  /**
  **************************************************
  * @return Edit
  **************************************************
  **/

  public function edit($id) {
    $path = $this->path_admin;
    $data = $this->model::findOrFail($id);
    if (access('Administrator')) {
      return view($this->path_admin . '.edit', compact('path'));
    }
    else {
      return redirect($this->url)->with('error', trans('notification.restrict'));
    }
  }

  /**
  **************************************************
  * @return Update
  **************************************************
  **/

  public function update(DirectoryUpdateRequest $request, $id) {
    $data = $this->model::findOrFail($id);
    $update = $request->all();
    $data->update($update);
    return redirect($this->url)->with('success', trans('notification.success.edit'));
  }

  /**
  **************************************************
  * @return Destroy
  **************************************************
  **/

  public function destroy($id) {
    if (access('Administrator')) {
      $this->model::destroy($id);
      return redirect($this->url)->with('success', trans('notification.success.delete'));
    }
    else {
      return redirect($this->url)->with('error', trans('notification.restrict'));
    }
  }

  /**
  **************************************************
  * @return Enable
  * @return Disable
  **************************************************
  **/

  public function enable($id) {
    if (access('Administrator')) {
      $data = $this->model::where('id', $id)->update([ 'active' => 1 ]);
      return Response::json($data);
    }
    else {
      return redirect($this->url)->with('error', trans('notification.restrict'));
    }
  }

  public function disable($id) {
    if (access('Administrator')) {
      $data = $this->model::where('id', $id)->update([ 'active' => 2 ]);
      return Response::json($data);
    }
    else {
      return redirect($this->url)->with('error', trans('notification.restrict'));
    }
  }

  /**
  **************************************************
  * @return Delete
  **************************************************
  **/

  public function delete($id) {
    if (access('Administrator')) {
      $this->model::destroy($id);
      $data = $this->model::where('id',$id)->delete();
      return Response::json($data);
    }
    else {
      return redirect($this->url)->with('error', trans('notification.restrict'));
    }
  }

  /**
  **************************************************
  * @return Delete-All
  **************************************************
  **/

  public function deleteall(Request $request) {
    if (access('Administrator')) {
      $exilednoname = $request->EXILEDNONAME;
      $this->model::whereIn('id',explode(",",$exilednoname))->delete();
      return Response::json($exilednoname);
    }
    else {
      return redirect($this->url)->with('error', trans('notification.restrict'));
    }
  }

}
