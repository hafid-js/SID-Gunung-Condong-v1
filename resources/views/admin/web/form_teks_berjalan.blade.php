@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
         <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h4 class="m-0" style="font-weight: 400;">Teks Berjalan</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
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
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card-body p-0">
                    <div class="card card-outline card-info">
                        <div class="card-body p-0">
                            <div class="card-header" style="background-color: #ffffff;">
                                <div class="form-group row mb-0">
                                    <div class="col-sm-12">
                                        <div class="margin">
                                            <a href="{{ url('teks-berjalan') }}" title="Unduh Data"
                                                class="btn btn-social btn-info btn-sm visible-xs-block"><span
                                                    class="btn-label"><i class="fa fa-arrow-circle-left"></i></span>
                                                Kembali
                                                ke Teks Berjalan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
