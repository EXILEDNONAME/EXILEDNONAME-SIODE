@extends('layouts.pages.dashboard', ['page' => 'dashboard'])

@push('head')
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush

@push('title', 'Files')

@push('content-body')
<div style="height: 750px">
  <div id="fm"></div>
</div>
@endpush

@push('js')
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endpush
