<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Device </label>
    <div class="col-lg-9">
      {!! Form::select('id_device', jasamarga_devices(), (isset($data->id_device) ? $data->id_device : NULL), ['placeholder' => '- Select Device -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_device') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Location </label>
    <div class="col-lg-9">
      {!! Form::select('id_location', jasamarga_locations(), (isset($data->id_location) ? $data->id_location : NULL), ['placeholder' => '- Select Location -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_location') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Name </label>
    <div class="col-lg-9">
      {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> NPP </label>
    <div class="col-lg-9">
      {!! Form::text('npp', (isset($data->npp) ? $data->npp : ''), ['class' => $errors->has('npp') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('npp') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> IP </label>
    <div class="col-lg-9">
      {!! Form::text('ip_address', (isset($data->ip_address) ? $data->ip_address : ''), ['class' => $errors->has('ip_address') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('ip_address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> MAC </label>
    <div class="col-lg-9">
      {!! Form::text('mac_address', (isset($data->mac_address) ? $data->mac_address : ''), ['class' => $errors->has('mac_address') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('mac_address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> PC Name </label>
    <div class="col-lg-9">
      {!! Form::text('pc_name', (isset($data->pc_name) ? $data->pc_name : ''), ['class' => $errors->has('pc_name') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('pc_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> PC Password </label>
    <div class="col-lg-9">
      {!! Form::text('pc_password', (isset($data->pc_password) ? $data->pc_password : ''), ['class' => $errors->has('pc_password') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('pc_password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Printer </label>
    <div class="col-lg-9">
      {{ Form::select('printer', ['0' => 'No', '1' => 'Yes'], (isset($data->printer) ? $data->printer : ''), ['class' => $errors->has('printer') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
      @error('printer') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
