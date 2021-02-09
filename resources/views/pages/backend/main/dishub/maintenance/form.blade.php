<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Date Start </label>
    <div class="col-lg-9">
      {!! Form::text('date_start', (isset($data->date_start) ? $data->date_start : \Carbon\Carbon::now()->add(-30,'minute')->format('Y-m-d H:i')), ['id' => 'ex_datetimepicker_start','class' => $errors->has('date_start') ? 'form-control is-invalid' : 'form-control', 'readonly' => '', 'required' => 'required']) !!}
      @error('date_start') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Date Finish </label>
    <div class="col-lg-9">
      {!! Form::text('date_end', (isset($data->date_end) ? $data->date_end : \Carbon\Carbon::now()->format('Y-m-d H:i')), ['id' => 'ex_datetimepicker_finish','class' => $errors->has('date_end') ? 'form-control is-invalid' : 'form-control', 'readonly' => '', 'required' => 'required']) !!}
      @error('date_end') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Name </label>
    <div class="col-lg-9">
      {!! Form::select('id_user', dishub_users_active(), (isset($data->id_user) ? $data->id_user : NULL), ['placeholder' => '- Select Name -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_user') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Title </label>
    <div class="col-lg-9">
      {!! Form::text('title', (isset($data->title) ? $data->title : ''), ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Troubleshoot </label>
    <div class="col-lg-9">
      {!! Form::textarea('troubleshoot', (isset($data->troubleshoot) ? $data->troubleshoot : ''), ['class' => $errors->has('troubleshoot') ? 'form-control is-invalid' : 'form-control', 'required' => 'required', 'rows'=>'3']) !!}
      @error('troubleshoot') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Description </label>
    <div class="col-lg-9">
      {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Status </label>
    <div class="col-lg-9">
      {{ Form::select('status', ['2' => 'No', '1' => 'Yes'], (isset($data->status) ? $data->status : ''), ['class' => $errors->has('status') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
      @error('status') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  @include('includes.datatable.page-form.main')

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> </label>
    <div class="col-lg-9">
      <input class="btn btn-primary pull-right" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
  </div>

</div>
