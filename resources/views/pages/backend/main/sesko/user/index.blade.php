@extends('layouts.pages.index', ['header' => 'true', 'filtered' => 'true'])
@push('title', 'SESKO Users')

@push('filter-header')
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">TV:</label>
    <select data-column="-3" class="form-control filter-tv">
      <option value=""> - Select TV - </option>
      <option value="1"> Yes </option>
      <option value="2"> No </option>
    </select>
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Location:</label>
    {!! Form::select(NULL, filter_sesko_locations(), NULL, ['data-column' => 2, 'placeholder' => '- Select Location -', 'class' => 'form-control filter-location']) !!}
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    <label class="mr-3 mb-0 d-none d-md-block">Packet:</label>
    {!! Form::select(NULL, filter_sesko_packets(), NULL, ['data-column' => 2, 'placeholder' => '- Select Packet -', 'class' => 'form-control filter-packet']) !!}
  </div>
</div>
@endpush

@push('filter-function')
d.filter_tv = $('#filter_tv').val();
d.filter_location = $('#filter_location').val();
d.filter_packet = $('#filter_packet').val();
@endpush

@push('filter-data')
$('.filter-tv').change(function () {
  table.column(-3)
  .search( $(this).val() )
  .draw();
});
$('.filter-location').change(function () {
  table.column(2)
  .search( $(this).val() )
  .draw();
});
$('.filter-packet').change(function () {
  table.column(3)
  .search( $(this).val() )
  .draw();
});
@endpush

@push('content-head')
<th> Location </th>
<th> Packet </th>
<th> Name </th>
<th> IP </th>
<th> MAC </th>
<th> TV Username </th>
<th> TV Password </th>
<th class="text-nowrap"> TV </th>
@endpush

@push('content-body')
{ data: 'sesko_locations.name' },
{ data: 'sesko_packets.name' },
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'tv_username' },
{ data: 'tv_password' },
{
  data: 'tv_include', orderable: true, 'className': 'align-middle text-center', 'width': '1',
  render: function ( data, type, row ) {
    if ( data == 1 ) { return '<i class="flaticon2-check-mark"></i>'; }
    else if ( data == 2 ) { return ''; }
    else { return ''; }
  }
},
@endpush

@push('extension')
<div class="row">
  <div class="col-sm-3">
    <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 20% auto; background-image: url(/assets/backend/media/svg/shapes/abstract-1.svg)">
      <div class="card-body">
        <span class="font-weight-bolder font-size-h3 mb-0 mt-6 text-hover-danger"> Data TV </span><br>
        <span class="font-weight-bold font-size-sm">{{ \DB::table('sesko_users')->where('tv_include', '1')->count() }} items </span>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 20% auto; background-image: url(/assets/backend/media/svg/shapes/abstract-1.svg)">
      <div class="card-body">
        <span class="font-weight-bolder font-size-h3 mb-0 mt-6 text-hover-danger"> User Active </span><br>
        <span class="font-weight-bold font-size-sm">{{ \DB::table('sesko_users')->where('active', '1')->count() }} items </span>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 20% auto; background-image: url(/assets/backend/media/svg/shapes/abstract-1.svg)">
      <div class="card-body">
        <span class="font-weight-bolder font-size-h3 mb-0 mt-6 text-hover-danger"> User Non-Active </span><br>
        <span class="font-weight-bold font-size-sm">{{ \DB::table('sesko_users')->where('active', '2')->count() }} items </span>
      </div>
    </div>
  </div>
</div>
@endpush
