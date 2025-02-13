@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Pembangunan</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item active">Daftar Pembangunan</li>
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
                    <div class="col-md-9 col-sm-12 col-lg-9">
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <div class="col-md-12">
                                        <div class="form-group row">
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
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="kegiatan" class="col-sm-2 col-form-label font-12">Nama
                                                Kegiatan</label>
                                            <div class="col-sm-10 col-lg-10 col-md-10">
                                                <input type="text" placeholder="Nama Kegiatan Pembangunan"
                                                    class="form-control form-control-sm font-12" id="kegiatan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="volume" class="col-sm-2 col-form-label font-12">Volume</label>
                                            <div class="col-sm-10 col-lg-10 col-md-10">
                                                <input type="text" placeholder="Volume Pembangunan"
                                                    class="form-control form-control-sm font-12" id="volume">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="waktu" class="col-sm-2 col-form-label font-12">Waktu</label>
                                            <div class="col-sm-6 col-lg-6 col-md-6 mb-2">
                                                <input type="text" placeholder="Lamanya Pembangunan"
                                                    class="form-control form-control-sm font-12" id="waktu">
                                            </div>
                                            <div class="col-sm-4 col-lg-4 col-md-4">
                                                <select name="" class="form-control form-control-sm" style="width: 100%;">
                                                    <option value="" selected>Hari</option>
                                                    <option value="">Minggu</option>
                                                    <option value="">Bulan</option>
                                                    <option value="">Tahun</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sumberDana" class="col-sm-2 col-form-label font-12">Sumber
                                                Dana</label>
                                            <div class="col-sm-10 col-lg-10 col-md-10">
                                                <select name="" class="form-control form-control-sm select2" id="sumberDana"
                                                    style="width: 100%;">
                                                    <option value="" selected>Pendapatan Asli Desa (PAD)</option>
                                                    <option value="">Pendapatan Transfer (Dana Desa)</option>
                                                    <option value="">Pendapatan Transfer (Alokasi Dana Desa)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label for="tahun" class="font-12">Tahun Anggaran</label>
                                                    <select name="tahun" id="tahun"
                                                        class="form-control form-control-sm select2" style="width: 100%;">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label for="anggaran" class="font-12">Anggaran</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Anggaran" disabled id="anggaran">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label for="sumberBPM" class="font-12">Sumber Biaya Pemerintah</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Sumber Biaya Pemerintah" id="sumberBP">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label for="sumberBPV" class="font-12">Sumber Biaya Provinsi</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Sumber Biaya Provinsi" id="sumberBPV">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label for="sumberBK" class="font-12">Sumber Biaya Kab / Kota</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Sumber Biaya Pemerintah" id="sumberBK">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label for="sumberBS" class="font-12">Sumber Biaya Swadaya</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Sumber Biaya Provinsi" id="sumberBPS">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label for="sumberBK" class="font-12">Sumber Biaya Kab / Kota</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Sumber Biaya Pemerintah" id="sumberBK">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label for="sumberBS" class="font-12">Sumber Biaya Swadaya</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Sumber Biaya Provinsi" id="sumberBPS">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sifatProyek" class="col-sm-2 col-form-label font-12">Sifat
                                                Proyek</label>
                                            <div class="col-sm-10 col-lg-10 col-md-10">
                                                <select name="" class="form-control form-control-sm select2"
                                                    id="sifatProyek" style="width: 100%;">
                                                    <option value="" selected>-- Pilih Sifat Proyek</option>
                                                    <option value="">BARU</option>
                                                    <option value="">LANJUTAN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lokasiPembangunan" class="col-sm-2 col-form-label font-12">Lokasi
                                                Pembangunan</label>
                                            <div class="col-sm-10 col-lg-10 col-md-10">
                                                <div class="input-group input-group-sm">
                                                    <div id="radioBtn" class="btn-group">
                                                        <a class="btn btn-info btn-sm active"
                                                            data-toggle="lokasiPembangunan" data-title="Pilih Lokasi"
                                                            id="pilihLokasi">Pilih Lokasi</a>
                                                        <a class="btn btn-info btn-sm notActive"
                                                            data-toggle="lokasiPembangunan" data-title="Tulis Manual"
                                                            id="tulisManual">Tulis Manual</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label font-12"></label>
                                            <div class="col-sm-10 col-lg-10 col-md-10" id="tampilPilihLokasi">
                                                <select name="" class="form-control form-control-sm select2"
                                                    style="width: 100%;">
                                                    <option value="" selected>-- Pilih Lokasi Pembangunan --</option>
                                                    <option value="">-- RW / RT --</option>
                                                    <option value="">A - RW / RT --</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-10 col-lg-10 col-md-10">
                                                <textarea class="form-control font-12" rows="3" style="display: none;"
                                                    id="tampilTulisManual" placeholder="Lokasi"></textarea>
                                            </div>
                                        </div>

                                    <div class="form-group row">
                                        <label for="pelaksana" class="col-sm-2 col-form-label font-12">Pelaksana
                                            Kegiatan</label>
                                        <div class="col-sm-10 col-lg-10 col-md-10">
                                            <input type="text" placeholder="Pelaksana Kegiatan Pembangunan"
                                                class="form-control form-control-sm font-12" id="pelaksana">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="manfaat" class="col-sm-2 col-form-label font-12">Manfaat</label>
                                        <div class="col-sm-10 col-lg-10 col-md-10">
                                            <textarea class="form-control font-12" rows="3" id="manfaat"
                                                placeholder="Manfaat"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-2 col-form-label font-12">Keterangan</label>
                                        <div class="col-sm-10 col-lg-10 col-md-10">
                                            <textarea class="form-control font-12" rows="3" id="keterangan"
                                                placeholder="Keterangan"></textarea>
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
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h4 class="card-title">Unggah Gambar</h4>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" id="collapseContent"> <!-- Tambahkan kelas collapse -->
                            <div class="form-group">
                                <img class="img-responsive" id="previewImage"
                                    src="https://berputar.opendesa.id/assets/images/404-image-not-found.jpg?v1b31d555fd0886e1002839f5b442f1f2"
                                    alt="Gambar Utama Pembangunan">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
    </div>
    </div>

    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
