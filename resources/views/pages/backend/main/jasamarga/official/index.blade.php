@extends('layouts.pages.index', ['page' => 'index'])
@push('title', 'JASAMARGA Officials')

@push('content-head')
<th> Name </th>
<th> IP </th>
<th> MAC </th>
<th> Port </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'port' },
{ data: 'description' },
@endpush
