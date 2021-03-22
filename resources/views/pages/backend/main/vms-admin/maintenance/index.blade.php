@extends('layouts.pages.index', ['page' => 'index', 'content' => 'withStatus', 'chart' => 'true'])
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
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Area:</label>
    {!! Form::select(NULL, filter_vms_areas(), NULL, ['data-column' => 4, 'placeholder' => '- Select Area -', 'class' => 'form-control filter-area']) !!}
  </div>
</div>
@endpush

@push('filter-function')
d.date_start = $('#date_start').val();
d.date_end = $('#date_end').val();
d.filter_area = $('.filter_area').val();
@endpush

@push('filter-data')
$('.filter-area').change(function () {
  table.column(4)
  .search( $(this).val() )
  .draw();
});
$('#date_start').change(function () { table.draw(); });
$('#date_end').change(function () { table.draw(); });
@endpush

@push('content-head')
<th> Type </th>
<th> Area </th>
<th> Waktu Kerusakan </th>
<th> Waktu Perbaikan </th>
<th> Selisih Waktu </th>
<th> Lokasi </th>
<th> Permasalahan </th>
<th> Tindakan </th>
<th> Keterangan </th>
@endpush

@push('content-body')
{
  data: 'vms_type', searchable: false, orderable: false, 'className': 'align-middle', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 'Akses') { return '<span class="label label-info label-pill label-inline"> Akses </span>'; }
    else if ( data == 'Gardu' ) { return '<span class="label label-info label-pill label-inline"> Gardu </span>'; }
    else if ( data == 'Jalur' ) { return '<span class="label label-info label-pill label-inline"> Jalur </span>'; }
    else return '';
  },
},
{ data: 'vms_area', searchable: false, orderable: false, 'className': 'align-middle', 'width': '1' },
{ data: 'date_start', searchable: false, width: 1, className: 'text-nowrap' },
{ data: 'date_end', searchable: false, width: 1, className: 'text-nowrap' },
{ data: 'selisih_waktu', searchable: false, width: 1, className: 'text-nowrap' },
{ data: 'vms_directories.name', width: 1, className: 'text-nowrap'  },
{ data: 'title' },
{ data: 'troubleshoot' },
{ data: 'description' },
@endpush
