@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Teks Berjalan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active">Teks Berjalan</li>
                        <li class="breadcrumb-item active">Tambah Data</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card-body p-0">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <div class="col-md-12">
                                <div class="margin">
                                    <a href="{{ url('teks-berjalan') }}" title="Unduh Data"
                                        class="btn btn-social btn-info btn-xs visible-xs-block"
                                        data-title="Unduh Data"><span class="btn-label"><i
                                                class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar
                                        Teks Berjalan</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label font-12">Nama</label>
                                    <div class="col-sm-10 col-lg-9 col-md-9">
                                        <input type="text" class="form-control form-control-sm font-12" id="nama"
                                            value="Fulan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputFile" class="col-sm-2 col-form-label font-12">Tipe</label>
                                    <div class="col-sm-10 col-lg-9 col-md-9">
                                        <select class="form-control form-control-sm select2" style="width: 100%;">
                                            <option selected>Internal</option>
                                            <option>Eksternal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tautanArtikel" class="col-sm-2 col-form-label font-12">Tautan ke
                                        Artikel</label>
                                    <div class="col-sm-10 col-lg-9 col-md-9">
                                        <select class="form-control form-control-sm select2" id="tautanArtikel"
                                            style="width: 100%;">
                                            <option selected>-- Cari Judul Artikel --</option>
                                            <option>26 Agustus 2024 | Sejarah Desa</option>
                                            <option>26 Agustus 2024 | Wilayah Desa</option>
                                            <option>26 Agustus 2024 | Data Desa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="judulTautan" class="col-sm-2 col-form-label font-12">Judul
                                        Tautan</label>
                                    <div class="col-sm-10 col-lg-9 col-md-9">
                                        <input type="text" id="judulTautan"
                                            placeholder="Judul tautan ke artikel atau url"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label font-12">Tautan ke
                                        Artikel</label>
                                    <div class="col-sm-10 col-lg-3 col-md-3">
                                        <select class="form-control form-control-sm select2" id="status"
                                            style="width: 100%;">
                                            <option selected>Tidak</option>
                                            <option>Ya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                                <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>

                            </div>
                            <!-- /.card-footer -->
                    </div>
                    <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
        </div>
        <!-- /.col-->
</div>
</div>

<!-- ./row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
