@extends('admin.layout.layout')
@section('content')


    <!-- Link CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


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
                        <div class="card-outline card-info">
                            <div class="card-body p-0">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div id="map"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label font-12">Email</label>
                                  <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-sm" id="inputEmail3" placeholder="Email">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label font-12">Password</label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control form-control-sm" id="inputPassword3" placeholder="Password">
                                  </div>
                                </div>
                                <div class="float-right">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Simpan</a>
                                </div>
                                <a href="{{ url('identitas-desa') }}" class="btn bg-purple btn-sm"><i
                                        class="fa fa-arrow-circle-left font-12"></i> Kembali</a>
                                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Export ke GPX</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Reset</a>
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

    <script>
        // Membuat peta
        var map = L.map('map').setView([-7.579834, 109.879237], 15); // Koordinat [lat, long] dan zoom level

        // Menambahkan layer tile OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Menambahkan marker di peta
        L.marker([-7.579834, 109.879237]).addTo(map)
            .bindPopup("<b>Akun : Hafid</b><br />Lokasi saat pembuatan akun.")
            .openPopup();

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    </script>

    <script>
        $(function () {
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function (event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })
        })
    </script>


@endsection
