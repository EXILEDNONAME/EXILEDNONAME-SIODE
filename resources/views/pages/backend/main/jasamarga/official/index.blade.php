@extends('layouts.pages.index', ['page' => 'index'])
@push('title', 'JASAMARGA Officials')

@push('content-head')
<th> Name </th>
<th> Description </th>
<th> IP </th>
<th> MAC </th>
<th> Port </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'port' },
@endpush
