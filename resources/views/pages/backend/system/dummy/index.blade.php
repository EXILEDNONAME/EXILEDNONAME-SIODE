@extends('layouts.pages.index', ['page' => 'index', 'content' => 'withStatus', 'chart' => 'true'])
@push('title', 'Dummies')

@push('content-head')
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
@endpush
