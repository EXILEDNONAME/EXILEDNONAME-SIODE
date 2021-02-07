@extends('layouts.pages.index', ['header' => 'true', 'filtered' => 'true'])
@push('title', 'JASAMARGA Users')

@push('filter-header')
<div class="col-md-4 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block"> Printer:</label>
    <select data-column="-3" class="form-control filter-printer">
      <option value=""> - Filter Printer - </option>
      <option value="1"> Yes </option>
      <option value="2"> No </option>
    </select>
  </div>
</div>
<div class="col-md-4 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block"> Device:</label>
    {!! Form::select(NULL, filter_jasamarga_devices(), NULL, ['data-column' => 2, 'placeholder' => '- Select Device -', 'class' => 'form-control filter-device']) !!}
    <!-- <select data-column="2" class="form-control filter-device">
      <option value=""> - Type Device - </option>
      <option value="Lainnya"> Lainnya </option>
      <option value="PC Lenovo"> Lenovo </option>
      <option value="PC PBL"> PBL </option>
    </select> -->
  </div>
</div>
@endpush

@push('filter-function')
d.filter_printer = $('#filter_printer').val();
d.filter_device = $('#filter_device').val();
@endpush

@push('filter-data')
$('.filter-printer').change(function () {
  table.column(-3)
  .search( $(this).val() )
  .draw();
});
$('.filter-device').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
@endpush

@push('content-head')
<th> Device </th>
<th> Location </th>
<th> Name </th>
<th> NPP </th>
<th> IP </th>
<th> MAC </th>
<th> Printer </th>
@endpush

@push('content-body')
{ data: 'jasamarga_devices.name' },
{ data: 'jasamarga_locations.name' },
{ data: 'name' },
{ data: 'npp' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{
  data: 'printer', orderable: true, 'className': 'align-middle text-center', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 1 ) { return '<i class="flaticon2-check-mark"></i>'; }
    else if ( data == 2 ) { return ''; }
    else { return ''; }
  }
},
@endpush
