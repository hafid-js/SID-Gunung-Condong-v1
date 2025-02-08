@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Komentar</h1>
                </div>
                <div class="col-sm-6">
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
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card-body p-0">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <div class="col-md-12">
                                <div class="margin">
                                    <a href="{{ url('artikel') }}" title="Unduh Data"
                                        class="btn btn-social btn-info btn-xs visible-xs-block"
                                        data-title="Unduh Data"><span class="btn-label"><i
                                                class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar
                                        Komentar</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
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
                                        <!-- Radio Buttons -->
                                        <div class="card">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn bg-olive active">
                                                    <input type="radio" name="aktif" id="option_b1" autocomplete="off"
                                                        checked> Aktif
                                                </label>
                                                <label class="btn bg-olive">
                                                    <input type="radio" name="tidak_aktif" id="option_b2"
                                                        autocomplete="off"> Tidak Aktif
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                        <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>

                    </div>
                    <!-- /.card-footer -->
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
