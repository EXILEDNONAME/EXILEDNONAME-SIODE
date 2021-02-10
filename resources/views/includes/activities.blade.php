<div class="row">
  <div class="col-xl-8">
    <div class="card card-custom card-stretch">
      <!--begin::Header-->
      <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
          <span class="font-weight-bolder text-dark">My Activity</span>
          <span class="text-muted mt-3 font-weight-bold font-size-sm"> 21 Activities </span>
        </h3>
        <div class="card-toolbar">
          <div class="dropdown dropdown-inline">
            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ki ki-bold-more-hor"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
              <!--begin::Navigation-->
              <ul class="navi navi-hover">
                <li class="navi-header font-weight-bold py-4">
                  <span class="font-size-lg">Choose Label:</span>
                  <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                </li>
              </ul>
              <!--end::Navigation-->
            </div>
          </div>
        </div>
      </div>
      <!--end::Header-->
      <div class="card-body pt-4">
        <ul class="navi navi-icon-center">

          @php $test = activity_created(); @endphp
          @php $data = json_decode(activity_created(), true); @endphp
          @foreach($test as $data)

          @foreach($data['properties'] as $item)
          {{ $item['name'] }} <br>
          @endforeach
          @endforeach

          @foreach($activity as $item)
          <li class="navi-item">
            <span class="navi-link">
              <span class="navi-bullet">
                <i class="fas fa-angle-double-right mr-5"></i>
              </span>
              <div class="navi-text">
                <span class="d-block font-weight-bold">
                  @if ($item->description == 'created') Item {{ $item->name }} created @endif
                  @if ($item->description == 'updated') Item {{ $item->subject->name }} updated @endif
                  @if ($item->description == 'deleted' && !empty($item->subject->name)) Item {{ $item->subject->name }} deleted @endif
                </span>
                <span class="text-muted"> {{ $item->causer->name }} </span>
              </div>
              <span>
                {{ $item->created_at->diffForHumans() }}
              </span>
            </span>
          </li>
          @endforeach

          <li class="navi-item">
            <span class="navi-link">
              <span class="navi-bullet">
                <i class="fas fa-angle-double-right mr-5"></i>
              </span>
              <div class="navi-text">
                <span class="d-block font-weight-bold">New order has been placed</span>
                <span class="text-muted">
                  {{ Auth::User()->name }}
                </span>
              </div>
              <span>
                @php $user = Auth::User()->created_at; @endphp
                {{ $user->diffForHumans() }}
              </span>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xl-4">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> Graphs </h5>
        </div>
        <div class="card-toolbar">
          <a href="{{ URL::current() }}/../#" class="btn btn-light-primary font-weight-bolder mr-2">
            <i class="ki ki-long-arrow-back icon-xs"></i> Back
          </a>
        </div>
      </div>
      <div class="card-body pt-4">
        <div id="chart_3"></div>
      </div>
    </div>
  </div>
</div>
