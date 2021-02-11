<div class="row">
  <div class="col-xl-8">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b">
      <!--begin::Header-->
      <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
          <span class="font-weight-bolder text-dark">My Activity</span>
          <span class="text-muted mt-3 font-weight-bold font-size-sm">
            @if (!empty($activity))
            {{ $activity->count() }} Activities
            @else
            0 Activities
            @endif
          </span>
        </h3>
        <div class="card-toolbar"> </div>
      </div>


      <div class="card-body">
        <div class="example-preview">
          <div class="timeline timeline-2">
            <div class="timeline-bar"></div>

            @if (!empty($activity) && !empty($activity->count()))
            @foreach($activity as $item)
            <div class="timeline-item">
              @if ($item->description == 'created')
              <span class="timeline-badge bg-success"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, </span><br>
                  ({{ $item->causer->name }}) - Created Item
                </span>
              </div>
              @endif
              @if ($item->description == 'updated')
              <span class="timeline-badge bg-warning"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, </span><br>
                  ({{ $item->causer->name }}) - Updated Item
                </span>
              </div>
              @endif
              @foreach($item['properties'] as $data_object)
              @if ($item->description == 'deleted')
              <span class="timeline-badge bg-danger"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  <span class="text-muted"> {{ $item->created_at->diffForHumans() }}, </span><br>
                  ({{ $item->causer->name }}) - Deleted Item {{ $data_object['name'] }}
                </span>
              </div>
              @endif
              @endforeach
            </div>
            @endforeach
            @else
            <span class="text-muted"> No Recent Activities ... </span>
            @endif

            <!-- <div class="timeline-item">
              <span class="timeline-badge bg-danger"></span>
              <div class="timeline-content justify-content-between">
                <span class="mr-3">
                  Database server overloaded 80% and requires quick reboot
                  New order has been placed and pending for processing.
                </span>
              </div>
            </div> -->

          </div>
        </div>

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
