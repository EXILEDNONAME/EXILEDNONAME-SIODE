@extends('layouts.pages.dashboard', ['page' => 'dashboard'])
@push('title', 'Dashboard')

@push('content-body')
<div class="row">
  <div class="col-xl-3">
    <div class="card card-custom wave wave-success card-stretch gutter-b">
      <div class="card-body">
        <a href="/dashboard/management/users" class="card-title font-weight-bolder font-size-h6 text-hover-state-dark"> Management Users </a><br>
        <span class="font-weight-bolder text-muted"> {{ \DB::table('users')->count() }} Users </span>
      </div>
    </div>
  </div>
  <div class="col-xl-3">
    <div class="card card-custom wave wave-warning card-stretch gutter-b">
      <div class="card-body">
        <a href="/dashboard/management/accesses" class="card-title font-weight-bolder font-size-h6 text-hover-state-dark"> Management Accesses </a><br>
        <span class="font-weight-bolder text-muted"> {{ \DB::table('accesses')->count() }} Accesses </span>
      </div>
    </div>
  </div>
</div>
@endpush

@push('js')
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>
@endpush
