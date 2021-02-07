@extends('layouts.app2')

@section('content')
<div class="card-body">
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap" id="table-product">
      <thead>
        <tr>
          <th> Devicey </th>
          <th> Nama Produk </th>
          <th> Satuan </th>
          <th> Harga Beli </th>
          <th> Harga Jual </th>
          <th> Create At </th>
          <th> Active </th>

        </tr>
      </thead>
      <div class="panel-body">

        <label for="filter-satuan"> Filter Berdasarkan Satuan : </label>

        <select data-column="1" class="form-control col-sm-4 filter-satuan" placeholder="Filter Berdasarkan Satuan Product">
          <option value=""> Pilih Satuan Product </option>
          <option value="kg"> KG </option>
          <option value="ton"> TON </option>
        </select>

        <select data-column="-1" class="form-control col-sm-4 filter-active" placeholder="Filter Berdasarkan Satuan Product">
          <option value=""> Pilih Active Product </option>
          <option value="1"> 1 </option>
          <option value="2"> 2 </option>
        </select>
        <br /> <br />
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('javascripts')
<script src="/assets/backend/plugins/custom/datatables/datatables.bundle.js?v=7.0.5"></script>
<script>
$(document).ready(function(){
  var table = $('#table-product').DataTable({
    pageLength: 10,
    processing: true,
    serverSide: true,
    dom: '<"html5buttons">Blfrtip',
    language: {
      buttons: {
        colvis : 'show / hide', // label button show / hide
        colvisRestore: "Reset Kolom" //lael untuk reset kolom ke default
      }
    },
    ajax: {
      "url"  : "{{ route ('api.product') }}",
      "data" : function (d) {
        d.filter_periode = $('#filter_periode').val();
        d.filter_active = $('#filter_active').val();
      }
    },
    columns: [
      {"data":"id_device"},
      {"data":"name"},
      {"data":"satuan"},
      {"data":"buy_price"},
      {"data":"sell_price"},
      {"data":"created_at"},
      {"data":"active"},
    ],

  });

  //filter Berdasarkan satuan product
  $('.filter-satuan').change(function () {
    table.column( $(this).data('column'))
    .search( $(this).val() )
    .draw();
  });

  $('.filter-active').change(function () {
    table.column( $(this).data('column'))
    .search( $(this).val() )
    .draw();
  });

});
</script>

@endsection
