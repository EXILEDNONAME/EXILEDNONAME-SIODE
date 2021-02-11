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
        <div class="card-scroll" style="height: 99%;">
        <ul class="navi navi-icon-center">

          @if (!empty($activity) && !empty($activity->count()))
          @foreach($activity as $item)
          <li class="navi-item">
            @foreach($item['properties'] as $data_object)
            @if ($item->description == 'created')
            <span class="d-block font-weight-bold" data-toggle="popover" title="Info Details" data-placement="top" data-html="true" data-content="Date : <span class='text-muted'> {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y - H:i') }}</span> <br> By : <span class='text-muted'>{{ $item->causer->name }}</span>">
            <span class="navi-bullet">
              <i class="fas fa-angle-right mr-3 mb-2"> </i>
            </span>
            Created Item {{ $data_object['name'] }},
            <span class="text-muted"> {{ $item->created_at->diffForHumans() }} </span>
            @endif
            @if ($item->description == 'deleted')
            <span class="d-block font-weight-bold" data-toggle="popover" title="Info Details" data-placement="top" data-html="true" data-content="Date : <span class='text-muted'> {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y - H:i') }}</span> <br> By : <span class='text-muted'>{{ $item->causer->name }}</span>">
            <span class="navi-bullet">
              <i class="fas fa-angle-right mr-3 mb-2"> </i>
            </span>
            Deleted Item {{ $data_object['name'] }},
            <span class="text-muted"> {{ $item->created_at->diffForHumans() }} </span>
            @endif
            @endforeach
            @if ($item->description == 'updated')
            <span class="d-block font-weight-bold" data-toggle="popover" title="Info Details" data-placement="top" data-html="true" data-content="Date : <span class='text-muted'> {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y - H:i') }}</span> <br> By : <span class='text-muted'>{{ $item->causer->name }}</span>">
            <span class="navi-bullet">
              <i class="fas fa-angle-right mr-3 mb-2"> </i>
            </span>
            Updated Item {{ $item['properties']['old']['name'] }} to {{ $data_object['name'] }},
            <span class="text-muted"> {{ $item->created_at->diffForHumans() }} </span>
            @endif
          </li>
          @endforeach
          @else
          <span class="text-muted"> No Recent Activities ... </span>
          @endif

        </ul>
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
