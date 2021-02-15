@extends('layouts.pages.edit', ['page' => 'edit'])
@push('title', 'BROADCAST Contents')

@push('content-body')
<form method="POST" action="{{ URL::current() }}/{{ $data->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ method_field('PATCH') }}
  {{ csrf_field() }}

  <input class="form-control" name="id" type="hidden" value="{{ $data->id }}">
  <input class="form-control" name="updated_by" type="hidden" value="{{ Auth::User()->id }}">
  <div class="kt-section__body">

    <div class="form-group row">
      <label class="col-lg-3 col-form-label"> Title </label>
      <div class="col-lg-9">
        {!! Form::text('title', (isset($data->title) ? $data->title : ''), ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
        @error('title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
      </div>
    </div>

    <div class="form-group row">
      <label class="col-lg-3 col-form-label"> Time Slide 1 </label>
      <div class="col-lg-9">
        {!! Form::text('time_slide_1', (isset($data->time_slide_1) ? $data->time_slide_1 : ''), ['class' => $errors->has('time_slide_1') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
        @error('time_slide_1') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
      </div>
    </div>

    <div class="form-group row">
      <label class="col-lg-3 col-form-label"> Time Slide 2 </label>
      <div class="col-lg-9">
        {!! Form::text('time_slide_2', (isset($data->time_slide_2) ? $data->time_slide_2 : ''), ['class' => $errors->has('time_slide_2') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
        @error('time_slide_2') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
      </div>
    </div>

    <div class="form-group row">
      <label class="col-lg-3 col-form-label"> Logo </label>
      <div class="col-lg-9">
        {!! Form::text('logo', (isset($data->logo) ? $data->logo : ''), ['class' => $errors->has('logo') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
        @error('logo') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
      </div>
    </div>

    <div class="form-group row">
      <label class="col-lg-3 col-form-label"> Header </label>
      <div class="col-lg-9">
        {!! Form::text('header', (isset($data->header) ? $data->header : ''), ['class' => $errors->has('header') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
        @error('header') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
      </div>
    </div>

    <div class="form-group row">
      <label class="col-lg-3 col-form-label"> Description </label>
      <div class="col-lg-9">
        {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
        @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
      </div>
    </div>

    @include('includes.datatable.page-form.main')

    <div class="form-group row">
      <label class="col-lg-3 col-form-label"> </label>
      <div class="col-lg-9">
        <input class="btn btn-primary pull-right" type="submit" value="Update">
      </div>
    </div>

  </div>

</form>
@endpush
