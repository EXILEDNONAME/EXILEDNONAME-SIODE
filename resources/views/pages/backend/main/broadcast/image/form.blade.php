<div class="kt-section__body">

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

  @if ( $formMode === 'create' )
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Image </label>
    <div class="col-lg-9">
      <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(/assets/backend/media/users/blank.png)">
        <div class="image-input-wrapper" style="background-image: url(/assets/backend/media/users/blank.png)"></div>
        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
          <i class="fa fa-pen icon-sm text-muted"></i>
          <input type="file" name="image" accept=".jpg, .jpeg">
          <input type="hidden" name="profile_avatar_remove">
        </label>
        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
          <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
          <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
      </div>
    </div>
  </div>
  @endif

  @if ( $formMode === 'edit' )
  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Image </label>
    <div class="col-lg-9">
      <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(/files/broadcast/images/{{ $data->path }})">
        <div class="image-input-wrapper" style="background-image: url(/files/broadcast/images/{{ $data->path }})"></div>
        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
          <i class="fa fa-pen icon-sm text-muted"></i>
          <input type="file" name="image" accept=".jpg, .jpeg">
          <input type="hidden" name="profile_avatar_remove">
        </label>
        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
          <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
          <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
      </div>
    </div>
  </div>
  @endif

  @include('includes.datatable.page-form.main')

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> </label>
    <div class="col-lg-9">
      <input class="btn btn-primary pull-right" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
  </div>

</div>
