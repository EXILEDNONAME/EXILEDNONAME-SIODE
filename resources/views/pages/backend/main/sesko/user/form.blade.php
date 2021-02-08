<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Packet </label>
    <div class="col-lg-9">
      {!! Form::select('id_packet', sesko_packets(), (isset($data->id_packet) ? $data->id_packet : NULL), ['placeholder' => '- Select Packet -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_packet') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Location </label>
    <div class="col-lg-9">
      {!! Form::select('id_location', sesko_locations(), (isset($data->id_location) ? $data->id_location : NULL), ['placeholder' => '- Select Location -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_location') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> ID Customer </label>
    <div class="col-lg-9">
      {!! Form::text('id_customer', (isset($data->id_customer) ? $data->id_customer : ''), ['class' => $errors->has('id_customer') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('id_customer') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
    <label class="col-lg-3 col-form-label"> TV Username </label>
    <div class="col-lg-9">
      {!! Form::text('tv_username', (isset($data->tv_username) ? $data->tv_username : ''), ['class' => $errors->has('tv_username') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('tv_username') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> TV Password </label>
    <div class="col-lg-9">
      {!! Form::text('tv_password', (isset($data->tv_password) ? $data->tv_password : ''), ['class' => $errors->has('tv_password') ? 'form-control is-invalid' : 'form-control']) !!}
      @error('tv_password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> TV Include </label>
    <div class="col-lg-9">
      {{ Form::select('tv_include', ['2' => 'No', '1' => 'Yes'], (isset($data->tv_include) ? $data->tv_include : ''), ['class' => $errors->has('tv_include') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
      @error('tv_include') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
