@extends('layouts.pages.show', ['page' => 'show'])
@push('title', 'JASAMARGA Intercomes')

@push('content-body')
<div class="table-responsive">
  <table width="100%" class="table table-stiped table-bordered">
    <tr>
      <td class="align-middle font-weight-bold"> Location </td>
      <td class="align-middle"> {{ $data->jasamarga_locations->name }} - {{ $data->jasamarga_locations->description }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> No. Intercome </td>
      <td class="align-middle"> {{ $data->no_intercome }} </td>
    </tr>
    <tr>
      <td class="align-middle font-weight-bold"> Name </td>
      <td class="align-middle"> {{ $data->name }} </td>
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
