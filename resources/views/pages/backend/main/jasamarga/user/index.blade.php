@extends('layouts.pages.index', ['header' => 'true', 'filtered' => 'true'])
@push('title', 'JASAMARGA Users')

@push('content-head')
<th> Device </th>
<th> Location </th>
<th> Name </th>
<th> NPP </th>
<th> IP </th>
<th> MAC </th>
@endpush

@push('content-body')
{ data: 'jasamarga_devices.name' },
{ data: 'jasamarga_locations.name' },
{ data: 'name' },
{ data: 'npp' },
{ data: 'ip_address' },
{ data: 'mac_address' },
@endpush
