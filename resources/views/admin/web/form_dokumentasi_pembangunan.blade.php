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
                        <div class="card-outline card-info">
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
                            <div class="card-header" style="background-color: #ffffff;">
                            <div class="card-body p-0">
                                <div class="form-group row">
                                    <label for="lokasiPembangunan" class="col-sm-2 col-form-label font-12">Persentase
                                        Pembangunan</label>
                                    <div class="col-sm-10 col-lg-10 col-md-10">
                                        <div class="input-group input-group-sm">
                                            <div id="radioBtn" class="btn-group">
                                                <a class="btn btn-info btn-sm active"
                                                    data-toggle="lokasiPembangunan" data-title="Pilih Lokasi"
                                                    id="pilihLokasi">Pilih Persentase</a>
                                                <a class="btn btn-info btn-sm notActive"
                                                    data-toggle="lokasiPembangunan" data-title="Tulis Manual"
                                                    id="tulisManual">Tulis Manual</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-12"></label>
                                    <div class="col-sm-10 col-lg-8 col-md-10" id="tampilPilihLokasi">
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
                                        <input type="text" class="form-control form-control-sm font-12" rows="3" style="display: none;"
                                            id="tampilTulisManual" placeholder="Contoh : 50%"></input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputFile" class="col-sm-2 col-form-label font-12"></label>
                                    <div class="col-sm-10 col-lg-8 col-md-10">
                                        <img class="attachment-img img-responsive" style="border-radius: 10%;" src="https://berputar.opendesa.id/desa/upload/galeri/0qWY517394450121632624563dc2677b837ae5edd00a5__sid__ciPbAUf.jpg" alt="Gambar Dokumentasi" width="200" height="200">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputFile" class="col-sm-2 col-form-label font-12">Unggah Dokumentasi</label>
                                    <div class="col-sm-10 col-lg-8 col-md-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="input-group input-group" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile"></label>
                                            </div>
                                        </div>
                                            <code>(kosongkan jika tidak ingin mengubah gambar)</code>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-sm-2 col-form-label font-12">Keterangan</label>
                                    <div class="col-sm-10 col-lg-8 col-md-8">
                                        <textarea class="form-control font-12" rows="4" id="keterangan"
                                            placeholder="Keterangan"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-header" style="background-color: #ffffff;">
                            <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                            <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </div>
</div>

<!-- ./row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- first Modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal1Label"><i class="fas fa-exclamation-triangle text-red"></i>
                    Konfirmasi
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div style="background-color: #00c0ef;">
                <div class="card-header" style="background-color: #ffffff;">
                    <h6 class="card-title text-white" style="font-size: 12px;">Apakah Anda yakin ingin menghapus
                        data
                        ini?</h6>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-warning btn-sm text-white" data-dismiss="modal"><i
                        class="fa fa-sign-out"></i> Tutup</button>
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
            </div>
            </form>

            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- /.modal -->

@endsection
