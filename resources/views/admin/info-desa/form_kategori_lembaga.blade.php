@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Kategori Lembaga</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item">Kategori Lembaga</li>
                            <li class="breadcrumb-item active">Ubah Data</li>
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
                                                <a href="{{ url('lembaga-desa/kategori') }}" title="Kembali"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"
                                                    data-title="Kembali"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Kembali ke Kategori Lembaga</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="namaRW" class="col-sm-2 col-form-label font-12">Klasifikasi/Kategori Lembaga</label>
                                                <div class="col-sm-10 col-lg-9 col-md-9">
                                                    <input type="text" class="form-control form-control-sm font-12"
                                                        id="namaRW" value="Badan Permusyawatan Desa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="ketua" class="col-sm-2 col-form-label font-12">Deskripsi Lembaga</label>
                                                <div class="col-sm-10 col-lg-9 col-md-9">
                                                    <textarea name="" id="" rows="4" class="form-control font-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="card-footer border-0">
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
