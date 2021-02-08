@extends('layouts.pages.index', ['page' => 'index'])
@push('title', 'JASAMARGA Intercomes')

@push('content-head')
<th width="1" class="text-nowrap"> No. Intercome </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'no_intercome', width: '1' },
{ data: 'name' },
{ data: 'description' },
@endpush
