@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="small-box" style="background-color: #605ca8; border-radius: 5px;">
                        <div class="inner">
                            <h3 class="text-white">3</h3>
                            <p class="text-white">Wilayah Desa</p>
                        </div>
                        <div class="icon">
                            <i class="faa fa-map-marker"></i>
                        </div>
                        <a href="#" class="small-box-footer text-white"
                            style="border-radius:  0 0 5px 5px">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="small-box" style="background-color: #00c0ef; border-radius: 5px;">
                        <div class="inner">
                            <h3 class="text-white">4</h3>
                            <p class="text-white">Penduduk</p>
                        </div>
                        <div class="icon">
                            <i class="faa fa-user"></i>
                        </div>
                        <a href="#" class="small-box-footer text-white"
                            style="border-radius:  0 0 5px 5px">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="small-box" style="background-color: #00a65a; border-radius: 5px;">
                        <div class="inner">
                            <h3 class="text-white">1</h3>
                            <p class="text-white">Keluarga</p>
                        </div>
                        <div class="icon">
                            <i class="faa fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer text-white"
                            style="border-radius:  0 0 5px 5px">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="small-box" style="background-color: #0073b7; border-radius: 5px;">
                        <div class="inner">
                            <h3 class="text-white">3</h3>
                            <p class="text-white">Surat Tercetak</p>
                        </div>
                        <div class="icon">
                            <i class="faa fa-file-text-o"></i>
                        </div>
                        <a href="#" class="small-box-footer text-white"
                            style="border-radius:  0 0 5px 5px">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="small-box" style="background-color: #dd4b39; border-radius: 5px;">
                        <div class="inner">
                            <h3 class="text-white">0</h3>
                            <p class="text-white">Kelompok</p>
                        </div>
                        <div class="icon">
                            <i class="faa fa-user-plus"></i>
                        </div>
                        <a href="#" class="small-box-footer text-white"
                            style="border-radius:  0 0 5px 5px">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="small-box" style="background-color: #d2d6de; border-radius: 5px;">
                        <div class="inner">
                            <h3 class="text-white">1</h3>
                            <p class="text-white">Rumah Tangga</p>
                        </div>
                        <div class="icon">
                            <i class="faa fa-home"></i>
                        </div>
                        <a href="#" class="small-box-footer text-white"
                            style="border-radius:  0 0 5px 5px">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="small-box" style="background-color: #f39c12; border-radius: 5px;">
                        <div class="inner">
                            <h3 class="text-white">1</h3>
                            <p class="text-white">Bantuan</p>
                        </div>
                        <div class="icon">
                            <i class="faa fa-handshake-o"></i>
                        </div>
                        <a href="#" class="small-box-footer text-white"
                            style="border-radius:  0 0 5px 5px">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="small-box" style="background-color: #39cccc; border-radius: 5px;">
                        <div class="inner">
                            <h3 class="text-white">1</h3>
                            <p class="text-white">Verifikasi Layanan Mandiri</p>
                        </div>
                        <div class="icon">
                            <i class="faa fa-drivers-license"></i>
                        </div>
                        <a href="#" class="small-box-footer text-white"
                            style="border-radius:  0 0 5px 5px">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>

@endsection
