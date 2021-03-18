@extends('layouts.app', ['header' => 'true'])

@push('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-sticky" id="kt_page_sticky_card">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> {{ trans('default.title.page-show') }} </h5>
        </div>

        <div class="card-toolbar">
          <a href="{{ URL::current() }}/../#" class="btn btn-light-primary font-weight-bolder mr-2">
            <i class="ki ki-long-arrow-back icon-xs"></i> {{ trans('default.button.back') }}
          </a>
        </div>
      </div>

      <div class="card-body">
        @stack('content-body')
      </div>

      <div class="modal fade" id="qrcode_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"> QR Code </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              </button>
            </div>
            <div class="modal-body" id="el">
              <p class="text-center"> {!! QrCode::size(300)->generate(URL::current()); !!} </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="printContent('el')"> Print </button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endpush

@push('js')
<script>

function printContent(el){
  var myWindow=window.open('','','');
  myWindow.document.write(document.getElementById(el).innerHTML);

  myWindow.document.close();
  myWindow.focus();
  myWindow.print();
  myWindow.close();
}

$('.delete').click(function(e){
  e.preventDefault() // Don't post the form, unless confirmed
  if (confirm('Are you sure?')) {
    // Post the form
    $(e.target).closest('form').submit() // Post the surrounding form
  }
});

</script>
@endpush
