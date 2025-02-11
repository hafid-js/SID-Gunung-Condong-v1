@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h5 class="m-0" style="font-weight: 400;">Pengaturan Halaman Web</h5>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active">Pengaturan Halaman Web</li>
                    </ol>
                </div>
            </div>
            <div class="row" style="display: none;" id="tampilBerhasil">
                <div id="toastsContainerTopRight" class="fixed">
                    <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header"><strong class="mr-auto">
                                Berhasil</strong> <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">Berhasil Ubah Status Komentar</div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-primary card-outline">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="box-header">
                                        <b>Pengaturan Dasar</b>
                                    </div>
                                </div>
                                <hr>
                                <form class="form-horizontal">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="apbDesFooter"
                                                class="col-sm-12 col-md-2 col-lg-2 form-label font-12">Apbdes
                                                Footer</label>
                                            <div class="col-sm-12 col-lg-5 col-md-5">
                                                <select class="form-control form-control-sm select2" id="apbDesFooter"
                                                    style="width: 100%;">
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-5">
                                                <label for="nama" class="col-form-label font-12"
                                                    for="apbDesFooter">Apakah akan tampilkan grafik APBDes di halaman
                                                    muka</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="apbDesFooterAll"
                                                class="col-sm-12 col-md-2 col-lg-2 form-label font-12">Apbdes Footer
                                                All</label>
                                            <div class="col-sm-12 col-lg-5 col-md-5">
                                                <select class="form-control form-control-sm select2"
                                                    id="apbDesFooterAll" style="width: 100%;">
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-5">
                                                <label for="nama" class="col-form-label font-12"
                                                    for="apbDesFooterAll">Apakah akan tampilkan grafik APBDes di semua
                                                    halaman</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="apbDesMI"
                                                class="col-sm-12 col-md-2 col-lg-2 form-label font-12">Apbdes Manual
                                                Input</label>
                                            <div class="col-sm-12 col-lg-5 col-md-5">
                                                <select class="form-control form-control-sm select2" id="apbDesMI"
                                                    style="width: 100%;">
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-5">
                                                <label for="nama" class="col-form-label font-12" for="apbDesMI">Apakah
                                                    akan tampilkan grafik APBDes yang diinput secara manual</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="artikelStatis"
                                                class="col-sm-12 col-md-2 col-lg-2 form-label font-12">Artikel Statis /
                                                Halaman</label>
                                            <div class="col-sm-12 col-lg-5 col-md-5">
                                                <select class="form-control form-control-sm select2" multiple="multiple"
                                                    data-placeholder="Pilih Artikel / Halaman"
                                                    data-dropdown-css-class="select2-primary" id="artikelStatis"
                                                    style="width: 100%;">
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-5">
                                                <label for="nama" class="col-form-label font-12"
                                                    for="artikelStatis">Artikel Statis / Halaman yang akan ditampilkan
                                                    pada halaman utama.</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="covidDesa"
                                                class="col-sm-12 col-md-2 col-lg-2 form-label font-12">Covid
                                                Desa</label>
                                            <div class="col-sm-12 col-lg-5 col-md-5">
                                                <select class="form-control form-control-sm select2" id="covidDesa"
                                                    style="width: 100%;">
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-5">
                                                <label for="nama" class="col-form-label font-12" for="covidDesa">Apakah
                                                    akan tampilkan status Covid-19 Desa di halaman muka</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="covidRSS"
                                                class="col-sm-12 col-md-2 col-lg-2 form-label font-12">Covid RSS</label>
                                            <div class="col-sm-12 col-lg-5 col-md-5">
                                                <select class="form-control form-control-sm select2" id="covidRSS"
                                                    style="width: 100%;">
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-5">
                                                <label for="nama" class="col-form-label font-12" for="covidRSS">Apakah
                                                    akan tampilkan RSS Covid-19 di halaman muka</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="DPB"
                                                class="col-sm-12 col-md-2 col-lg-2 form-label font-12">Daftar Penerima
                                                Bantuan</label>
                                            <div class="col-sm-12 col-lg-5 col-md-5">
                                                <select class="form-control form-control-sm select2" id="DPB"
                                                    style="width: 100%;">
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-5">
                                                <label for="nama" class="col-form-label font-12" for="DPB">Apakah akan
                                                    tampilkan daftar penerima bantuan di statistik halaman muka</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="linkFeed"
                                                class="col-sm-12 col-md-2 col-lg-2 form-label font-12">Link Feed</label>
                                            <div class="col-sm-12 col-lg-5 col-md-5">
                                                <input type="text" class="form-control form-control-sm font-11"
                                                    id="linkFeed" value="https:\/\/www.covid19.go.id\/feed\/">
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-5">
                                                <label for="nama" class="col-form-label font-12" for="linkFeed">Alamat
                                                    Feed yang digunakan
                                                    <code>(contoh: https:\/\/www.covid19.go.id\/feed\/)</code></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="chart3D"
                                                class="col-sm-12 col-md-2 col-lg-2 form-label font-12 text-red">Link
                                                Feed</label>
                                            <div class="col-sm-12 col-lg-5 col-md-5">
                                                <select class="form-control form-control-sm select2" id="chart3D"
                                                    style="width: 100%;">
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-5">
                                                <label for="nama" class="col-form-label font-12 text-red"
                                                    for="chart3D">Apakah akan tampilkan Statistik Chart 3D</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                                        <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>

                                    </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->



    </section>
    <!-- /.content -->
</div>


@endsection
