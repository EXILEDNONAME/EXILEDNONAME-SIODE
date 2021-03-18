<?php

namespace App\Http\Controllers\Backend\Main\VMS;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\Http\Requests\Backend\Main\VMS\Maintenance\MaintenanceStoreRequest;
use App\Http\Requests\Backend\Main\VMS\Maintenance\MaintenanceUpdateRequest;

class MaintenanceController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/vms/maintenances';
    $this->path_admin = 'pages.backend.main.vms-admin.maintenance';
    $this->path_user = 'pages.backend.main.vms-user.maintenance';
    $this->model = 'App\Models\Backend\Main\VMS\Maintenance';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index(Request $request) {
    $model = $this->model;
    if (request('date_start') && request('date_end')) { $data = $this->model::with(['vms_directories'])->orderby('date_start', 'desc')->whereBetween('date_start', [request('date_start'), request('date_end')])->select('vms_maintenances.*'); }
    else { $data = $this->model::with(['vms_directories'])->orderby('date_start', 'desc')->select('vms_maintenances.*'); }
    if(request()->ajax()) {
      return DataTables::eloquent($data)
      ->addColumn('action', 'includes.datatable.action')
      ->addColumn('checkbox', 'includes.datatable.checkbox')
      ->editColumn('date_start', function($order) { return \Carbon\Carbon::parse($order->date_start)->format('d F Y, H:i'); })
      ->editColumn('date_end', function($order) { return \Carbon\Carbon::parse($order->date_end)->format('d F Y, H:i'); })
      // ->editColumn('selisih_waktu', function($order) { return strtotime(\Carbon\Carbon::parse($order->date_end)->format('d F Y, H:i')) - strtotime(\Carbon\Carbon::parse($order->date_start)->format('d F Y, H:i')); })
      ->editColumn('selisih_waktu', function($order) {
        $date1 = strtotime(\Carbon\Carbon::parse($order->date_start));
        $date2 = strtotime(\Carbon\Carbon::parse($order->date_end));
        $diff = abs($date2 - $date1);
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
        return floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60)) . ":" . floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60) . ":00";
      })
      ->editColumn('name', function($order) { return $order->vms_directories; })
      ->editColumn('vms_type', function($order) { return $order->vms_directories->vms_types->name; })
      ->editColumn('vms_area', function($order) { return $order->vms_directories->vms_areas->name; })
      ->rawColumns(['action', 'checkbox'])
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
    if (access('Administrator')) {
      return view($this->path_admin . '.create', compact('data'));
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

  public function store(MaintenanceStoreRequest $request) {
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
    $path = $this->path;
    $data = $this->model::findOrFail($id);

    if (access('Administrator')) {
      return view($this->path . '.edit', compact('path', 'data'));
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

  public function update(MaintenanceUpdateRequest $request, $id) {
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
  * @return Status-Done
  * @return Status-Pending
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

  public function status_done($id) {
    if (access('Administrator')) {
      $data = $this->model::where('id', $id)->update([ 'status' => 1 ]);
      return Response::json($data);
    }
    else {
      return redirect($this->url)->with('error', trans('notification.restrict'));
    }
  }

  public function status_pending($id) {
    if (access('Administrator')) {
      $data = $this->model::where('id', $id)->update([ 'status' => 2 ]);
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
