@extends('layouts.pages.index', ['page' => 'index'])
@push('title', 'JASAMARGA Intercomes')

@push('content-head')
<th> Name </th>
<th> Description </th>
<th width="1" class="text-nowrap"> Intercome </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
{ data: 'no_intercome', width: '1' },
@endpush
