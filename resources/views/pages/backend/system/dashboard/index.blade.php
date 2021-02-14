@extends('layouts.pages.dashboard', ['page' => 'dashboard'])
@push('title', 'Dashboard')

@push('content-body')
<div id="output"></div>
<br>

<div class="row">
  <div class="col-lg-6 col-xxl-4">
    <!--begin::Mixed Widget 1-->
    <div class="card card-custom card-stretch gutter-b">
      <!--begin::Header-->
      <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
          <span class="font-weight-bolder text-dark">My Activity</span>
          <span class="text-muted mt-3 font-weight-bold font-size-sm">666,344 Sales</span>
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
                <li class="navi-separator mb-3 opacity-70"></li>
                <li class="navi-item">
                  <a href="#" class="navi-link">
                    <span class="navi-text">
                      <span class="label label-xl label-inline label-light-success">Customer</span>
                    </span>
                  </a>
                </li>
                <li class="navi-item">
                  <a href="#" class="navi-link">
                    <span class="navi-text">
                      <span class="label label-xl label-inline label-light-danger">Partner</span>
                    </span>
                  </a>
                </li>
                <li class="navi-item">
                  <a href="#" class="navi-link">
                    <span class="navi-text">
                      <span class="label label-xl label-inline label-light-warning">Suplier</span>
                    </span>
                  </a>
                </li>
                <li class="navi-item">
                  <a href="#" class="navi-link">
                    <span class="navi-text">
                      <span class="label label-xl label-inline label-light-primary">Member</span>
                    </span>
                  </a>
                </li>
                <li class="navi-item">
                  <a href="#" class="navi-link">
                    <span class="navi-text">
                      <span class="label label-xl label-inline label-light-dark">Staff</span>
                    </span>
                  </a>
                </li>
                <li class="navi-separator mt-3 opacity-70"></li>
                <li class="navi-footer py-4">
                  <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-4">

          <!--end: Items-->
        </div>
        <!--end: Card Body-->
      </div>
      <!--end::Mixed Widget 1-->
    </div>
    <div class="col-lg-6 col-xxl-4">
      <!--begin::List Widget 9-->
      <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        <div class="card-header align-items-center border-0 mt-4">
          <h3 class="card-title align-items-start flex-column">
            <span class="font-weight-bolder text-dark">My Activity</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
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
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                      <i class="ki ki-plus icon-sm"></i>Add new</a>
                    </li>
                  </ul>
                  <!--end::Navigation-->
                </div>
              </div>
            </div>
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          <div class="card-body pt-4">

            <!--end: Items-->
          </div>
          <!--end: Card Body-->
        </div>
        <!--end: Card-->
        <!--end: List Widget 9-->
      </div>
      <div class="col-lg-6 col-xxl-4">
        <!--begin::Stats Widget 11-->
        <div class="card card-custom card-stretch card-stretch-half gutter-b">
          <div class="card-body" style="position: relative;">



          </div>

        </div>
        <!--end::Stats Widget 11-->
        <!--begin::Stats Widget 12-->
        <div class="card card-custom card-stretch card-stretch-half gutter-b">
          <!--begin::Body-->
          <div class="card-body p-0" style="position: relative;">


          </div>
          <!--end::Body-->
        </div>
        <!--end::Stats Widget 12-->
      </div>

    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="accordion accordion-solid accordion-panel accordion-svg-toggle" id="accordionExample8">
          <div class="card">
            <div class="card-header" id="headingOne8">
              <div class="card-title collapsed" data-toggle="collapse" data-target="#toggle-monitoring_officials" aria-expanded="true">
                <div class="card-label"> Monitoring Rumah Dinas </div>
                <span class="svg-icon">
                  <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon points="0 0 24 0 24 24 0 24"></polygon>
                      <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </div>
            </div>
            <div id="toggle-monitoring_officials" class="collapse show" data-parent="#accordionExample8" style="">
              <div class="card-body">
                <div class="table-responsive">
                  <table width="100%" class="table table-striped-table-bordered table-hover table-checkable" id="monitoring_officials">
                    <thead>
                      <tr>
                        <th> No. </th>
                        <th> Name </th>
                        <th width="1"> Status </th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-xl-12">
        <div class="accordion accordion-solid accordion-panel accordion-svg-toggle" id="accordionExample8">
          <div class="card">
            <div class="card-header" id="headingOne8">
              <div class="card-title collapsed" data-toggle="collapse" data-target="#toggle-monitoring_vms" aria-expanded="true">
                <div class="card-label"> Monitoring VMS </div>
                <span class="svg-icon">
                  <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon points="0 0 24 0 24 24 0 24"></polygon>
                      <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>
              </div>
            </div>
            <div id="toggle-monitoring_vms" class="collapse show" data-parent="#accordionExample8" style="">
              <div class="card-body">
                <div class="table-responsive">
                  <table width="100%" class="table table-striped-table-bordered table-hover table-checkable" id="monitoring_vms">
                    <thead>
                      <tr>
                        <th> No. </th>
                        <th width="1"> Status </th>
                        <th> Name </th>
                        <th width="1"> Type </th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-lg-12">
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
            <div id="chart"></div>
          </div>

        </div>
      </div>
    </div>
    @endpush

    @push('js')
    <script src="/assets/backend/plugins/custom/datatables/datatables.bundle.js?v=7.0.5"></script>
    <script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>
    <script>
    "use strict";
    var KTDatatablesExtensionsKeytable = function() {

      var MonitoringOfficial = function() {
        var table = $('#monitoring_officials').DataTable({
          processing: true,
          serverSide: true,
          searching: false,
          "lengthChange": false,
          "paging": false,
          "info": false,
          ajax: { url: "{{ URL::current() }}/jasamarga/officials", },
          columns: [
            {
              data: 'autonumber', orderable: false, orderable: false, searchable: false, 'width': '1',
              render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
              }
            },
            { data: 'name' },
            { data: 'status_device' },
          ],
          order: [[1, 'asc']]
        });

        $("#file-refresh").on("click", function() { table.ajax.reload(); });
        $('#export_print').on('click', function(e) { e.preventDefault(); table.button(0).trigger(); });
        $('#export_copy').on('click', function(e) { e.preventDefault(); table.button(1).trigger(); });
        $('#export_excel').on('click', function(e) { e.preventDefault(); table.button(2).trigger(); });
        $('#export_csv').on('click', function(e) { e.preventDefault(); table.button(3).trigger(); });
        $('#export_pdf').on('click', function(e) { e.preventDefault(); table.button(4).trigger(); });

      };

      var MonitoringVMS = function() {
        var table = $('#monitoring_vms').DataTable({
          processing: true,
          serverSide: true,
          searching: false,
          "lengthChange": false,
          "paging": false,
          "info": false,
          ajax: { url: "{{ URL::current() }}/vms/directories", },
          columns: [
            {
              data: 'autonumber', orderable: false, orderable: false, searchable: false, 'width': '1',
              render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
              }
            },
            { data: 'status_device' },
            { data: 'name' },
            {
              data: 'vms_types.name', 'className' : 'text-nowrap',
              render: function (data, type, row, meta) {
                return '<span class="label label-success label-inline">' + data +  '</span>';
              }
            },
          ],
          order: [[1, 'asc']]
        });

        $("#file-refresh").on("click", function() { table.ajax.reload(); });
        $('#export_print').on('click', function(e) { e.preventDefault(); table.button(0).trigger(); });
        $('#export_copy').on('click', function(e) { e.preventDefault(); table.button(1).trigger(); });
        $('#export_excel').on('click', function(e) { e.preventDefault(); table.button(2).trigger(); });
        $('#export_csv').on('click', function(e) { e.preventDefault(); table.button(3).trigger(); });
        $('#export_pdf').on('click', function(e) { e.preventDefault(); table.button(4).trigger(); });

      };

      return {
        init: function() {
          MonitoringOfficial();
          MonitoringVMS();
        },
      };

    }();

    jQuery(document).ready(function() {
      KTDatatablesExtensionsKeytable.init();
    });
    </script>
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
        const apexChart = "#chart";
        var data =  <?php echo '[' . $data_chart .']'; ?>;
        var options = {
          series: [
            { name: 'Users', data: data },
          ],
          chart: { height: 350, type: 'line' },
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
