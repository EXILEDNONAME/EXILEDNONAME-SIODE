@extends('layouts.custom.vms.index', ['page' => 'index'])
@push('title', 'VMS Directories')

@push('filter-header')
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Area:</label>
    {!! Form::select(NULL, filter_vms_areas(), NULL, ['data-column' => 1, 'placeholder' => '- Select Area -', 'class' => 'form-control filter-area']) !!}
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
    {!! Form::select(NULL, filter_vms_types(), NULL, ['data-column' => 2, 'placeholder' => '- Select Type -', 'class' => 'form-control filter-type']) !!}
  </div>
</div>
@endpush

@push('filter-function')
d.filter_area = $('.filter_area').val();
d.filter_type = $('.filter_type').val();
@endpush

@push('filter-data')
$('.filter-area').change(function () {
  table.column(1)
  .search( $(this).val() )
  .draw();
});
$('.filter-type').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
@endpush

@push('content-head')
<th width="1"> Area </th>
<th width="1"> Type </th>
<th> Name </th>
<th> Status </th>
@endpush

@push('content-body')
{ data: 'vms_areas.name' },
{ data: 'vms_types.name' },
{ data: 'name' },
{ data: 'status_device', 'width' : '1' },
@endpush
