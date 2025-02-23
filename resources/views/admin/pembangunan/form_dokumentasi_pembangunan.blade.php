@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Dokumentasi</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item active">Daftar Dokumentasi</li>
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
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('pembangunan/dokumentasi') }}" title="Unduh Data"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"
                                                    data-title="Unduh Data"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar
                                                    Dokumentasi</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="persentasePembangunan"
                                                class="col-sm-2 col-form-label font-12">Persentase
                                                Pembangunan</label>
                                            <div class="col-sm-10 col-lg-10 col-md-10">
                                                <div class="input-group input-group-sm">
                                                    <div id="radioBtn" class="btn-group">
                                                        <a class="btn btn-info btn-sm active"
                                                            data-toggle="persentasePembangunan"
                                                            data-title="Pilih Persentase" id="pilihPrsn">Pilih
                                                            Persentase</a>
                                                        <a class="btn btn-info btn-sm notActive"
                                                            data-toggle="persentasePembangunan"
                                                            data-title="Tulis Persentase" id="tulisPrsn">Tulis
                                                            Manual</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label font-12"></label>
                                            <div class="col-sm-10 col-lg-8 col-md-10" id="tampilPersentase">
                                                <select name="" class="form-control form-control-sm select2"
                                                    style="width: 100%;">
                                                    <option value="" selected>-- Pilih Persentase Pembangunan --</option>
                                                    <option value="">0%</option>
                                                    <option value="">30%</option>
                                                    <option value="">80%</option>
                                                    <option value="">100%</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-10 col-lg-8 col-md-10">
                                                <input type="text" class="form-control form-control-sm font-12" rows="3"
                                                    style="display: none;" id="tampilKisaranPersentase"
                                                    placeholder="Contoh : 50%"></input>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputFile" class="col-sm-2 col-form-label font-12"></label>
                                            <div class="col-sm-10 col-lg-8 col-md-10">
                                                <img class="attachment-img img-responsive" style="border-radius: 10%;"
                                                    src="https://berputar.opendesa.id/desa/upload/galeri/0qWY517394450121632624563dc2677b837ae5edd00a5__sid__ciPbAUf.jpg"
                                                    alt="Gambar Dokumentasi" width="200" height="200">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputFile" class="col-sm-2 col-form-label font-12">Unggah
                                                Dokumentasi</label>
                                            <div class="col-sm-10 col-lg-8 col-md-10">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="input-group input-group"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile"></label>
                                                    </div>
                                                </div>
                                                <code>(kosongkan jika tidak ingin mengubah gambar)</code>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan"
                                                class="col-sm-2 col-form-label font-12">Keterangan</label>
                                            <div class="col-sm-10 col-lg-8 col-md-8">
                                                <textarea class="form-control font-12" rows="4" id="keterangan"
                                                    placeholder="Keterangan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                                    <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
