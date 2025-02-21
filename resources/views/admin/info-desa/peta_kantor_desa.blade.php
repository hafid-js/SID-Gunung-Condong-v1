@extends('admin.layout.layout')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Peta Kantor Desa</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item">Identitas Desa</li>
                            <li class="breadcrumb-item active">Peta Kantor Desa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card card-outline card-info">
                            <div class="card-body p-0">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div id="map"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                  <label for="latitude" class="col-sm-2 col-form-label font-12">Latitude</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="latitude">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="longitude" class="col-sm-2 col-form-label font-12">Longitude</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="longitude">
                                  </div>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                <a href="{{ url('identitas-desa') }}" class="btn bg-purple btn-sm"><i
                                    class="fa fa-arrow-circle-left font-12"></i> Kembali</a>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Export ke GPX</a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Reset</a>
                                <a type="submit" class="btn btn-info btn-sm float-right">Simpan</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
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
                navigator.geolocation.watchPosition(function(position) {
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
                }, function(error) {
                    alert("Gagal mendapatkan lokasi: " + error.message);
                });
            } else {
                alert("Geolocation tidak didukung di browser ini.");
            }
        </script>


    @endsection
