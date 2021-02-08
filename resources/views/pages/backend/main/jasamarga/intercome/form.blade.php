<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Location </label>
    <div class="col-lg-9">
      {!! Form::select('id_location', jasamarga_locations(), (isset($data->id_location) ? $data->id_location : NULL), ['placeholder' => '- Select Location -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_location') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> No. Intercome </label>
    <div class="col-lg-9">
      {!! Form::number('no_intercome', (isset($data->no_intercome) ? $data->no_intercome : ''), ['class' => $errors->has('no_intercome') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('no_intercome') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
      <input class="btn btn-primary pull-right" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
  </div>

</div>
