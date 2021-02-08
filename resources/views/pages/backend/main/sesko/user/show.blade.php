@extends('layouts.pages.show', ['header' => 'true'])
@push('title', 'SESKO Users')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> Packet </td>
      <td class="align-middle"> {{ $data->sesko_packets->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Location </td>
      <td class="align-middle"> {{ $data->sesko_locations->name }} - {{ $data->sesko_locations->description }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> ID Customer </td>
      <td class="align-middle"> {{ $data->npp }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> IP Address </td>
      <td class="align-middle"> {{ $data->ip_address }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> MAC Address </td>
      <td class="align-middle"> {{ $data->mac_address }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> TV Username </td>
      <td class="align-middle"> {{ $data->tv_username }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> TV Password </td>
      <td class="align-middle"> {{ $data->tv_password }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> TV Include </td>
      <td class="align-middle">
        @if ( $data->tv_include == 1 ) Yes
        @else No
        @endif
      </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Description </td>
      <td class="align-middle"> {{ $data->description }} </td>
    </tr>
    @include('includes.datatable.page-show.main')
  </table>
</div>
<hr>
@endpush
