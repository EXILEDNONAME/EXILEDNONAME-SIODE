@extends('layouts.pages.index', ['page' => 'index'])
@push('title', 'VMS Directories')

@push('filter-header')
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Area:</label>
    {!! Form::select(NULL, filter_vms_areas(), NULL, ['data-column' => 3, 'placeholder' => '- Select Area -', 'class' => 'form-control filter-area']) !!}
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
    {!! Form::select(NULL, filter_vms_types(), NULL, ['data-column' => 4, 'placeholder' => '- Select Type -', 'class' => 'form-control filter-type']) !!}
  </div>
</div>
@endpush

@push('filter-function')
d.filter_area = $('.filter_area').val();
d.filter_type = $('.filter_type').val();
@endpush

@push('filter-data')
$('.filter-area').change(function () {
  table.column(3)
  .search( $(this).val() )
  .draw();
});
$('.filter-type').change(function () {
  table.column(4)
  .search( $(this).val() )
  .draw();
});
@endpush

@push('content-head')
<th> Status </th>
<th width="1"> Area </th>
<th width="1"> Type </th>
<th> Name </th>
<th width="1"> IP </th>
<th width="1"> MAC </th>
<th width="1"> Port </th>
@endpush

@push('content-body')
{ data: 'status_device', 'width' : '1' },
{ data: 'vms_areas.name' },
{ data: 'vms_types.name' },
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'port' },
@endpush
