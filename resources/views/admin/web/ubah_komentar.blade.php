@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Komentar</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item active">Daftar Komentar</li>
                            <li class="breadcrumb-item active">Ubah Komentar</li>
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
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('komentar') }}" title="Unduh Data"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"
                                                    data-title="Unduh Data"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar
                                                    Komentar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="pengirim" class="col-sm-2 col-form-label font-12">Pengirim</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="pengirim"
                                                value="Fulan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="noHP" class="col-sm-2 col-form-label font-12">No. HP</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="noHP"
                                                value="087322657433">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label font-12">Email</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <input type="email" class="form-control form-control-sm font-12" id="email"
                                                value="fulanula@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gambarWidget" class="col-sm-2 col-form-label font-12">Komentar</label>
                                        <div class="col-sm-10 col-md-9 col-lg-9">
                                            <textarea class="form-control" rows="10" style="height:100%;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="judulWidget" class="col-sm-2 col-form-label font-12">Status</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="info" data-size="mini">


                                        </div>
                                    </div>
                                </div>
                            <div class="card-footer border-0">
                                <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                                <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
