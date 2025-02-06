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
                                                class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar Komentar</a>
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
                                    <div class="col-sm-6">
                                        <img class="img-responsive" src="{{ asset('admin/images/not-available.jpeg') }}"
                                            alt="">
                                        <div class="input-group input-group-sm mt-2">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label font-12" for="exampleInputFile">Tidak
                                                    ada gambar yang dipilih</label>
                                            </div>
                                            {{-- <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div> --}}
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <input type="checkbox" title="Centang Untuk Hapus Gambar">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="judulWidget" class="col-sm-2 col-form-label font-12">Jenis
                                        Widget</label>
                                    <div class="col-sm-10 col-lg-6 col-md-6">
                                        <select class="form-control form-control-sm select2" style="width: 100%;">
                                          <option selected="selected">-- Pilih Jenis Widget --</option>
                                          <option>Statis</option>
                                          <option>Dinamis</option>
                                        </select>
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
