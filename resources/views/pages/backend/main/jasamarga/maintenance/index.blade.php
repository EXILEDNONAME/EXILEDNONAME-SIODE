@extends('layouts.pages.index', ['page' => 'index'])
@push('title', 'JASAMARGA Maintenances')

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
