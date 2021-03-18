@extends('layouts.custom.vms.index', ['page' => 'index', 'content' => 'withStatus', 'chart' => 'true'])
@push('title', 'VMS Maintenances')

@push('filter-header')
<div class="col-md-4 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Filter </label>
    <div class="input-daterange input-group" id="ex_datepicker_start">
      <input type="text" id="date_start" class="form-control" name="date_start">
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="la la-ellipsis-h"></i>
        </span>
      </div>
      <input type="text" id="date_end" class="form-control" name="date_end">
    </div>
  </div>
</div>
@endpush

@push('filter-function')
d.date_start = $('#date_start').val();
d.date_end = $('#date_end').val();
@endpush

@push('filter-data')
$('#date_start').change(function () { table.draw(); });
$('#date_end').change(function () { table.draw(); });
@endpush

@push('content-head')
<th> Area </th>
<th> Type </th>
<th> Waktu Kerusakan </th>
<th> Waktu Perbaikan </th>
<th> Selisih Waktu </th>
<th> Lokasi </th>
<th> Permasalahan </th>
<th> Tindakan </th>
@endpush

@push('content-body')
{
  data: 'vms_type', orderable: true, 'className': 'align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 'Akses') { return '<span class="label label-info label-pill label-inline"> Akses </span>'; }
    if ( data == 'Gardu' ) { return '<span class="label label-info label-pill label-inline"> Gardu </span>'; }
    if ( data == 'Jalur' ) { return '<span class="label label-info label-pill label-inline"> Jalur </span>'; }
  }
},
{ data: 'vms_area', searchable: false, width: 1, className: 'text-nowrap' },
{ data: 'date_start', searchable: false, width: 1, className: 'text-nowrap' },
{ data: 'date_end', searchable: false, width: 1, className: 'text-nowrap' },
{ data: 'selisih_waktu', searchable: false, width: 1, className: 'text-nowrap' },
{ data: 'vms_directories.name', width: 1, className: 'text-nowrap'  },
{ data: 'title' },
{ data: 'troubleshoot' },
@endpush
