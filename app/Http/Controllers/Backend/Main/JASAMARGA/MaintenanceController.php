<?php

namespace App\Http\Controllers\Backend\Main\JASAMARGA;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Main\JASAMARGA\Device\DeviceStoreRequest;
use App\Http\Requests\Backend\Main\JASAMARGA\Device\DeviceUpdateRequest;

class MaintenanceController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
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

    // if (request('filter_periode')) {
    //   $filter_periode = now()->subDays(request('filter_periode'))->toDateString();
    //   $query->where('created_at', '>=', $filter_periode);
    //     }

    if (request('date_start') && request('date_end')) {
      $data = $this->model::with(['jasamarga_users'])->whereBetween('date_start', [request('date_start'), request('date_end')])->select('jasamarga_maintenances.*');
    }
    else {
      $data = $this->model::with(['jasamarga_users'])->select('jasamarga_maintenances.*');
    }

    if(request()->ajax()) {
      return DataTables::eloquent($data)
      ->editColumn('name', function($order) { return $order->jasamarga_users; })
      ->editColumn('location', function($order) { return $order->jasamarga_users->jasamarga_locations->name; })
      ->addColumn('checkbox', 'includes.datatable.checkbox')
      ->addColumn('action', 'includes.datatable.action')
      ->rawColumns(['action', 'checkbox'])
      ->addIndexColumn()
      ->make(true);
    }

    return view($this->path . '.index');
  }

  public function data() {
    $query = $this->model::with(['jasamarga_users'])->select('jasamarga_maintenances.*');
    return datatables($query)->toJson();
  }

  /**
  **************************************************
  * @return Show
  **************************************************
  **/

  public function show($id) {
    $data = $this->model::findOrFail($id);
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

  public function store(DeviceStoreRequest $request) {
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

  public function update(DeviceUpdateRequest $request, $id) {
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
