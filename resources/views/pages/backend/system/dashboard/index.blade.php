@extends('layouts.pages.dashboard', ['page' => 'dashboard'])
@push('title', 'Dashboard')

@push('content-body')
<div class="row">
  <div class="col-xl-3">
    <div class="card card-custom wave wave-success card-stretch gutter-b">
      <div class="card-body">
        <a href="/dashboard/management/users" class="card-title font-weight-bolder font-size-h6 text-hover-state-dark"> Management Users </a><br>
        <span class="font-weight-bolder text-muted"> {{ \DB::table('users')->count() }} Users </span>
      </div>
    </div>
  </div>
  <div class="col-xl-3">
    <div class="card card-custom wave wave-warning card-stretch gutter-b">
      <div class="card-body">
        <a href="/dashboard/management/accesses" class="card-title font-weight-bolder font-size-h6 text-hover-state-dark"> Management Accesses </a><br>
        <span class="font-weight-bolder text-muted"> {{ \DB::table('accesses')->count() }} Accesses </span>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b">
      <div class="card-header" style="">
        <div class="card-title">
          <h5 class="text-dark font-weight-bold"> User Registered </h5>
        </div>
        <div class="card-toolbar">
          <h5 class="text-dark font-weight-bold">
            <!--  -->
          </h5>
        </div>
      </div>

      <div class="card-body">
        <div id="chart_2"></div>
      </div>

    </div>
  </div>
</div>
@endpush

@push('js')
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>
<script>
"use strict";

// Shared Colors Definition
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
    const apexChart = "#chart_2";
    var data =  <?php echo '[' . $data .']'; ?>;
    var options = {
      series: [
        { name: 'Maintenances', data: [31, 11, 24] },
        { name: 'Users', data: data },
        { name: 'Report', data: [21, 81, 53] }
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
@endpush
