@extends('admin.layout.layout')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
</h1><h1>Lokasi Kantor Desa </h1>


        <ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item">
<a href="#"><i class="fa fa-home"></i>Beranda</a>
</li>
        <li><a href="#"> Identitas Desa</a></li>
</ol>

    </section>

        <!-- Main content -->
        <section id="maincontent" class="content">

            <div class="box box-info">
                <form action="#" method="POST" enctype="multipart/form-data" id="validasi" class="form-horizontal">
                    <div class="box-body">
                        <div id="map" ></div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="lat">Latitude</label>
                            <div class="col-sm-9">
                                <input type="text" class="required form-control input-sm lat" name="lat" id="lat" value="-8.483832804795249">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="lat">Longitude</label>
                            <div class="col-sm-9">
                                <input type="text" class="required form-control input-sm lng" name="lng" id="lng" value="116.08523368835449">
                            </div>
                        </div>
                        <a href="{{ url('/identitas-desa') }}" class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                        <a href="#" class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" download="OpenSID.gpx" id="exportGPX"><i class="fa fa-download"></i> Export ke GPX</a>
                        <button type="reset" class="btn btn-social btn-danger btn-sm" id="reset-peta"><i class="fa fa-times"></i> Reset</button>
                                            <button type="submit" class="btn btn-social btn-info btn-sm pull-right" id="simpan_kantor"><i class="fa fa-check"></i> Simpan</button>
                                    </div>
                <input type="hidden" name="sidcsrf" value="5ced5837ccae5792e72dadd6be0fbf58"></form>
            </div>

                    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

        <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Initialize the map and set its view to a specific latitude and longitude
        var map = L.map('map').setView([51.505, -0.09], 13);  // Example coordinates: London

        // Add a tile layer to the map (using OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker at the center of the map
        L.marker([51.505, -0.09]).addTo(map)
            .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            .openPopup();

    </script>


    @endsection
