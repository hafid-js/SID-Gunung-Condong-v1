@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
         <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h4 class="m-0" style="font-weight: 400;">Media Sosial</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active">Media Sosial</li>
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
                            <div class="card-header">
                                <div class="form-group row mb-0">
                                    <div class="col-sm-12">
                                        <div class="margin">
                                            <a href="{{ url('sosmed') }}" title="Unduh Data"
                                        class="btn btn-social btn-info btn-xs visible-xs-block"
                                        data-title="Unduh Data"><span class="btn-label"><i
                                                class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar
                                        Media Sosial</a>
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
                                    <label for="link" class="col-sm-2 col-form-label font-12">Link</label>
                                    <div class="col-sm-10 col-lg-9 col-md-9">
                                        <input type="text" class="form-control form-control-sm font-12" id="link"
                                            value="Fulan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputFile" class="col-sm-2 col-form-label font-12">Icon</label>
                                    <div class="col-sm-10 col-lg-9 col-md-9">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="input-group input-group-sm" id="exampleInputFile">
                                            <label class="custom-file-label-form" for="exampleInputFile"></label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tampil" class="col-sm-2 col-form-label font-12">Tampil</label>
                                    <div class="col-sm-10 col-lg-3 col-md-3">
                                       <select name="" id="jenis" class="form-control form-control-sm">
                                        <option value="">Tidak</option>
                                        <option value="">Ya</option>
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
