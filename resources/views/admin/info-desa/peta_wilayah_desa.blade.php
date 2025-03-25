@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
            </h1>
            <h1>Peta Wilayah Desa </h1>


            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="#"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="#"> Identitas Desa</a></li>
                <li class="active">Peta Wilayah Desa </li>
            </ol>

        </section>
        <!-- Main content -->
        <section id="maincontent" class="content">

            <div class="box box-info">
                <form action="#" method="POST"
                    enctype="multipart/form-data" class="form-horizontal">
                    <div class="box-body">
                        <div id="map"></div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="lat">Warna Area</label>
                            <div class="col-sm-4">
                                <div class="input-group my-colorpicker2 colorpicker-element">
                                    <input type="text" id="warna" name="warna" class="form-control input-sm warna required"
                                        placeholder="#FFFFFF" value="#FFFFFF">
                                    <div class="input-group-addon input-sm">
                                        <i style="background-color: rgb(255, 255, 255);"></i>
                                    </div>
                                </div>
                            </div>
                            <label class="col-sm-2 control-label" for="lat">Warna Pinggiran</label>
                            <div class="col-sm-4">
                                <div class="input-group my-colorpicker2 colorpicker-element">
                                    <input type="text" id="border" name="border"
                                        class="form-control input-sm warna required" placeholder="#FFFFFF" value="#FFFFFF">
                                    <div class="input-group-addon input-sm">
                                        <i style="background-color: rgb(255, 255, 255);"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/identitas-desa') }}"
                            class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            title="Kembali"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                        <a href="#" data-href="#"
                            class="btn btn-social bg-maroon btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            title="Kosongkan Wilayah" data-toggle="modal" data-target="#confirm-status"
                            data-body="Apakah yakin akan mengosongkan peta wilayah ini?"><i
                                class="fa fa fa-trash-o"></i>Kosongkan</a>
                        <a href="#"
                            class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            download="OpenSID.gpx" id="exportGPX"><i class="fa fa-download"></i> Export ke GPX</a>
                        <button type="reset" class="btn btn-social btn-danger btn-sm" id="reset-peta"><i
                                class="fa fa-times"></i> Reset</button>
                        <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i class="fa fa-check"></i>
                            Simpan</button>
                    </div>
                    <input type="hidden" name="sidcsrf" value="5ced5837ccae5792e72dadd6be0fbf58">
                </form>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <script>


        // Inisialisasi peta
        var map = L.map('map').setView([51.505, -0.09], 13); // Set posisi awal dan zoom level

        // Menambahkan tile layer (peta dasar dari OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Cek apakah geolocation tersedia di browser
        if (navigator.geolocation) {
            // Dapatkan posisi lokasi saat ini
            navigator.geolocation.watchPosition(function (position) {
                var lat = position.coords.latitude;  // Latitude
                var lon = position.coords.longitude; // Longitude

                // Update posisi peta ke koordinat lokasi pengguna
                map.setView(new L.LatLng(lat, lon), 13); // Atur posisi peta

                // Tambahkan marker di lokasi pengguna
                var marker = L.marker([lat, lon]).addTo(map);
                marker.bindPopup("Lokasi Saya: " + lat.toFixed(4) + ", " + lon.toFixed(4));

                // Update nilai input form dengan nilai latitude dan longitude
                document.getElementById("latitude").value = lat.toFixed(4);
                document.getElementById("longitude").value = lon.toFixed(4);
            }, function (error) {
                alert("Gagal mendapatkan lokasi: " + error.message);
            });
        } else {
            alert("Geolocation tidak didukung di browser ini.");
        }
    </script>

@endsection
