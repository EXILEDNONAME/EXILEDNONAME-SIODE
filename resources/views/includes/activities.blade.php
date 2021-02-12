<div class="row">
  <div class="{{ isset($chart) ? 'col-xl-4' : 'col-xl-4' }}">
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

          </div>
        </div>

      </div>
    </div>
  </div>

  @if ( !empty($chart) && $chart == 'true')
  <div class="{{ isset($chart) ? 'col-xl-8' : 'col-xl-4' }}">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> Traffics <span class="text-muted"> - ({{ \Carbon\Carbon::now()->format('Y') }}) </span></h5> 
        </div>
        <div class="card-toolbar">
        </div>
      </div>

      <div class="card-body">
        <!-- <div class="align-items-center">
          <div class="col-lg-12">
            <div class="row align-items-center">

              <div class="col-md-2 md-0"></div>
              <div class="col-md-4 my-2 my-md-0">
                <div class="d-flex">
                  <select class="form-control">
                    <option value=""> - Select Month - </option>
                    <option value="01">Jan</option>
                    <option value="02">Feb</option>
                    <option value="03">Mar</option>
                    <option value="04">Apr</option>
                    <option value="05">May</option>
                    <option value="06">Jun</option>
                    <option value="07">Jul</option>
                    <option value="08">Aug</option>
                    <option value="09">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                  </select>
                </div>
              </div>

              <div class="col-md-4 my-2 my-md-0">
                <div class="d-flex">
                  <select class="form-control">
                    <option value=""> - Select Year - </option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2 md-0"></div>

            </div>
          </div>
        </div>
        <hr> -->
        <div id="chart"></div>
      </div>

    </div>
  </div>
  @endif

</div>

@push('js')
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>

@if ( !empty($chart) && $chart == 'true')
<script>
"use strict";

const primary = '#6993FF';
const success = '#1BC5BD';
const info = '#8950FC';
const warning = '#FFA800';
const danger = '#F64E60';

// Class definition
function generateBubbleData(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;;
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;
    series.push([x, y, z]);
    baseval += 86400000;
    i++;
  }
  return series;
}

function generateData(count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = 'w' + (i + 1).toString();
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
    series.push({
      x: x,
      y: y
    });
    i++;
  }
  return series;
}

var KTApexChartsDemo = function () {
  var _demo1 = function () {
    const apexChart = "#chart";
    var data =  <?php echo '[' . $data_chart .']'; ?>;

    var options = {
      series: [
        { name: 'Maintenances', data: data },
      ],
      chart: { height: 350, type: 'area' },
      dataLabels: { enabled: false },
      stroke: { curve: 'smooth' },
      xaxis: { categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], },

      colors: [info, success, danger]
    };

    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
  }

  return {
    // public functions
    init: function () {
      _demo1();
    }
  };
}();

jQuery(document).ready(function () {
  KTApexChartsDemo.init();
});
</script>
@endif
@endpush
