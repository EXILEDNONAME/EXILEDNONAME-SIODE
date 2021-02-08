@extends('layouts.pages.index', ['page' => 'index'])
@push('title', 'JASAMARGA Maintenances')

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

<div class="col-md-4 my-2 my-md-0">
  <div class="d-flex align-items-center">
<button type="reset" name="reset" id="reset" class="btn btn-sm btn-outline-info mr-2"> Reset </button>
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
$('#reset').click(function(){
  $('#date_start').val('');
  $('#date_end').val('');
  table.ajax.reload();
});
@endpush

@push('column-defs')
columnDefs : [
{ "visible": false, "targets" : 5 },
{
  render : function (data,type,row) {
    return row['location'] + ' - ' +data;
  }, "targets" : 4
}],
@endpush

@push('content-head')
<th> Date Start </th>
<th> Date End </th>
<th> Name </th>
<th> Title </th>
<th> Troubleshoot </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'date_start' },
{ data: 'date_end' },
{ data: 'jasamarga_users.name' },
{ data: 'location', searchable: false },
{ data: 'troubleshoot' },
{ data: 'description' },
@endpush
