@extends('layouts.pages.index', ['page' => 'index'])
@push('title', 'JASAMARGA Maintenances')

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
{ data: 'name' },
{ data: 'title' },
{ data: 'troubleshoot' },
{ data: 'description' },
@endpush
