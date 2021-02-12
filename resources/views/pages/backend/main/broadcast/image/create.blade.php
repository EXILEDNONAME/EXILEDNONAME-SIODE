@extends('layouts.pages.create', ['page' => 'create'])
@push('title', 'BROADCAST Images')

@push('content-body')
<form method="POST" action="{{ URL::current() }}/../" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}

  <input class="form-control" name="created_by" type="hidden" value="{{ Auth::User()->id }}">
  @include($path . '.form', ['formMode' => 'create'])
</form>
@endpush

@push('js')
<script src="/assets/backend/js/pages/custom/profile/profile.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>
@endpush
