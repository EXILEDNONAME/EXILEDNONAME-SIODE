<?php

namespace App\Http\Controllers\Backend\Main\DISHUB;

use Auth;
use DB;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Main\DISHUB\Maintenance\MaintenanceStoreRequest;
use App\Http\Requests\Backend\Main\DISHUB\Maintenance\MaintenanceUpdateRequest;

class MaintenanceController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/dishub/maintenances';
    $this->path = 'pages.backend.main.dishub.maintenance';
    $this->model = 'App\Models\Backend\Main\DISHUB\Maintenance';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index(Request $request) {
    if (request('date_start') && request('date_end')) { $data = $this->model::with(['dishub_users'])->whereBetween('date_start', [request('date_start'), request('date_end')])->select('dishub_maintenances.*'); }
    else { $data = $this->model::with(['dishub_users'])->select('dishub_maintenances.*'); }

    if(request()->ajax()) {
      return DataTables::eloquent($data)
      ->addColumn('action', 'includes.datatable.action')
      ->addColumn('checkbox', 'includes.datatable.checkbox')
      ->editColumn('date_start', function($order) { return \Carbon\Carbon::parse($order->date_start)->format('d F Y, H:i'); })
      ->editColumn('date_end', function($order) { return \Carbon\Carbon::parse($order->date_end)->format('d F Y, H:i'); })
      ->editColumn('name', function($order) { return $order->dishub_users; })
      ->editColumn('location', function($order) { return $order->dishub_users->dishub_locations->name; })
      ->rawColumns(['action', 'checkbox'])
      ->addIndexColumn()
      ->make(true);
    }

    return view($this->path . '.index');

  }

  /**
  **************************************************
  * @return Show
  **************************************************
  **/

  public function show($id) {
    $data = $this->model::where('id', $id)->first();
    return view($this->path . '.show', compact('data'));
  }

  /**
  **************************************************
  * @return Create
  **************************************************
  **/

  public function create() {
    $path = $this->path;
    return view($this->path . '.create', compact('path'));
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
    return view($this->path . '.edit', compact('path', 'data'));
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
    $this->model::destroy($id);
    return redirect($this->url)->with('success', trans('notification.success.delete'));
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
    $data = $this->model::where('id', $id)->update([ 'active' => 1 ]);
    return Response::json($data);
  }

  public function disable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 2 ]);
    return Response::json($data);
  }

  public function status_done($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 1 ]);
    return Response::json($data);
  }

  public function status_pending($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 2 ]);
    return Response::json($data);
  }

  /**
  **************************************************
  * @return Delete
  **************************************************
  **/

  public function delete($id) {
    $this->model::destroy($id);
    $data = $this->model::where('id',$id)->delete();
    return Response::json($data);
  }

  /**
  **************************************************
  * @return Delete-All
  **************************************************
  **/

  public function deleteall(Request $request)
  {
    $exilednoname = $request->EXILEDNONAME;
    $this->model::whereIn('id',explode(",",$exilednoname))->delete();
    return Response::json($exilednoname);
  }

}
