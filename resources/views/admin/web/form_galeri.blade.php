@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Pengaturan Album</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item active">Daftar Album</li>
                            <li class="breadcrumb-item active">Pengaturan Album</li>
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
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="margin">
                                                <a href="{{ url('galeri') }}" title="Unduh Data"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"
                                                    data-title="Unduh Data"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar
                                                    Album</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="card-header" style="background-color: #ffffff;">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="namaAlbum" class="col-sm-2 col-form-label font-12">Nama
                                                    Album</label>
                                                <div class="col-sm-10 col-lg-9 col-md-9">
                                                    <input type="text" class="form-control form-control-sm font-12"
                                                        id="namaAlbum" value="Fulan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jenis" class="col-sm-2 col-form-label font-12">Jenis</label>
                                                <div class="col-sm-10 col-lg-9 col-md-9">
                                                    <select name="" id="jenis" class="form-control form-control-sm">
                                                        <option value="">File</option>
                                                        <option value="">URL</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputFile" class="col-sm-2 col-form-label font-12">Unggah
                                                    Gambar</label>
                                                <div class="col-sm-10 col-lg-9 col-md-9">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="input-group input-group-sm"
                                                                id="exampleInputFile">
                                                            <label class="custom-file-label-form"
                                                                for="exampleInputFile"></label>
                                                        </div>
                                                    </div>
                                                    <code>Batas maksimal pengunggahan berkas 2 MB.</code>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header" style="background-color: #ffffff;">
                                        <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                                        <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>

                                    </div>
                                </form>
                            </div>

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
