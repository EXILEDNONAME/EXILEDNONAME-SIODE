@extends('layouts.pages.index', ['page' => 'index', 'content' => 'withStatus', 'chart' => 'true'])
@push('title', 'JASAMARGA Maintenances')

@push('filter-header')
<div class="col-md-4 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Filter Date Maintenance </label>
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
<div class="col-md-3 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
    <select data-column="2" class="form-control filter-status">
      <option value=""> - Filter Status - </option>
      <option value="1"> Done </option>
      <option value="2"> Pending </option>
    </select>
  </div>
</div>
@endpush

@push('filter-function')
d.date_start = $('#date_start').val();
d.date_end = $('#date_end').val();
d.filter_status = $('.filter-status').val();
@endpush

@push('filter-data')
$('#date_start').change(function () { table.draw(); });
$('#date_end').change(function () { table.draw(); });
$('.filter-status').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
@endpush

@push('column-defs')
columnDefs : [
{ "visible": false, "targets" : 6 },
{
  render : function (data,type,row) {
    return row['location'] + ' - ' +data;
  }, "targets" : 5
}],
@endpush

@push('content-head')
<th> Date Start </th>
<th> Date End </th>
<th> Name </th>
<th> Division </th>
<th> Title </th>
<th> Troubleshoot </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'date_start', searchable: false, width: 1, className: 'text-nowrap' },
{ data: 'date_end', searchable: false, width: 1, className: 'text-nowrap' },
{ data: 'jasamarga_users.name' },
{ data: 'location', searchable: false },
{ data: 'title' },
{ data: 'troubleshoot' },
{ data: 'description' },
@endpush
