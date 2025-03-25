@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Data Anggota Lembaga
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="{{ url('/lembaga-desa') }}"> Daftar Lembaga</a></li>
                <li class="active">Data Anggota Lembaga</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <form action="#" class="form-horizontal" id="validasi"
                enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <input type="hidden" name="sidcsrf" value="66fa58f300d5c2bdb1472f2fd97d0ceb">

                <div class="row">
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="penduduk" id="foto"
                                    src="https://berputar.opendesa.id/assets/images/pengguna/kuser.png" alt="Foto Penduduk">
                                <br>

                                <div class="input-group input-group-sm text-center">
                                    <input type="file" class="hidden" id="file" name="foto" accept=".jpg,.jpeg,.png">
                                    <input type="text" class="hidden" id="file_path" name="foto">
                                    <input type="hidden" name="old_foto" id="old_foto" value="">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-block btn-mb-5" id="file_browser"><i
                                                class="fa fa-upload"></i> Unggah</button>
                                        <button type="button" class="btn btn-danger btn-block btn-mb-5" onclick="kamera();"
                                            id="ambil_kamera"><i class="fa fa-camera"></i> Kamera</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal-camera">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title text-center">Ambil Gambar</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div id="kamera"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger btn-sm" onclick="ambil();"><i
                                                        class="fa fa-camera"></i>&nbsp; Ambil Gambar</button>
                                            </div>
                                            <select class="input-sm" id="mode">
                                                <option value="user" selected="">Kamera Depan</option>
                                                <option value="environment">Kamera Belakang</option>
                                                <option value="computer">Webcam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal" id="modal-crop">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title text-center">Ubah Gambar</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div id="cropimage"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger btn-sm" title="Ambil Gambar"
                                                    onclick="kamera();"><i class="fa fa-camera"></i>&nbsp;</button>
                                                <button type="button" class="btn btn-primary btn-sm" id="rotateL"
                                                    title="Putar ke kiri"><i class="fa fa-undo"></i>&nbsp;</button>
                                                <button type="button" class="btn btn-primary btn-sm" id="rotateR"
                                                    title="Putar ke kanan"><i class="fa fa-repeat"></i>&nbsp;</button>
                                                <button type="button" class="btn btn-primary btn-sm" id="scaleX"
                                                    title="Balik Horizontal"><i class="fa fa-arrows-h"></i>&nbsp;</button>
                                                <button type="button" class="btn btn-primary btn-sm" id="scaleY"
                                                    title="Balik Vertikal"><i class="fa fa-arrows-v"></i>&nbsp;</button>
                                                <button type="button" class="btn btn-primary btn-sm" id="reset-ini"
                                                    title="Default"><i class="fa fa-refresh"></i>&nbsp;</button>
                                                <button type="button" class="btn btn-success btn-sm" id="simpan-gambar"
                                                    title="Simpan"><i class="fa fa-save"></i>&nbsp;</button>
                                            </div>
                                            <div class="btn-group">
                                                <select class="input-sm" id="ratio">
                                                    <option value="NaN">Pilih Ratio (NaN)</option>
                                                    <option value="1.777">16 : 9</option>
                                                    <option value="1.500">3 : 2</option>
                                                    <option value="1.333" selected="">4 : 3</option>
                                                    <option value="1.000">1 : 1</option>
                                                    <option value="0.666">2 : 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel"><i
                                                class="fa fa-exclamation-triangle text-red"></i> Konfirmasi</h4>
                                    </div>
                                    <div class="modal-body btn-info">
                                        Apakah Anda yakin ingin menghapus data ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-social btn-warning btn-sm"
                                            data-dismiss="modal"><i class="fa fa-sign-out"></i> Tutup</button>
                                        <a class="btn-ok">
                                            <div class="btn btn-social btn-danger btn-sm" id="ok-delete"><i
                                                    class="fa fa-trash-o"></i> Hapus</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <a href="{{ url('lembaga-desa/detail') }}" class="btn btn-social btn-info btn-sm
            visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                                        class="fa fa-arrow-circle-left "></i> Kembali Ke Anggota
                                    Lembaga</a>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="id_penduduk">Nama Anggota</label>
                                    <div class="col-sm-8">
                                        <select class="form-control input-sm required select2-hidden-accessible"
                                            id="kelompok_penduduk" name="id_penduduk" data-kelompok="2" data-tipe="lembaga"
                                            onchange="loadDataPenduduk(this)" data-select2-id="kelompok_penduduk"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="3">-- Silakan Masukan NIK / Nama --</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="4" style="width: 661.664px;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-kelompok_penduduk-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-kelompok_penduduk-container" role="textbox"
                                                        aria-readonly="true" title="-- Silakan Masukan NIK / Nama --"><span
                                                            class="select2-selection__clear" title="Remove all items"
                                                            data-select2-id="5">×</span>-- Silakan Masukan NIK / Nama
                                                        --</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="data_penduduk_desa"></div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="no_anggota">Nomor Anggota</label>
                                    <div class="col-sm-8">
                                        <input id="no_anggota" class="form-control input-sm number required" type="text"
                                            placeholder="Nomor Anggota" name="no_anggota" value="">
                                        <p><code>*Pastikan nomor anggota belum pernah dipakai.</code></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="jabatan">Jabatan</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control input-sm select2-tags required select2-hidden-accessible"
                                            id="jabatan" name="jabatan" data-select2-id="jabatan" tabindex="-1"
                                            aria-hidden="true">
                                            <option option="" value="" data-select2-id="2">-- Silakan Pilih Jabatan --
                                            </option>
                                            <option value="1">
                                                KETUA
                                            </option>
                                            <option value="2">
                                                WAKIL KETUA
                                            </option>
                                            <option value="3">
                                                SEKRETARIS
                                            </option>
                                            <option value="4">
                                                BENDAHARA
                                            </option>
                                            <option value="90">
                                                ANGGOTA
                                            </option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="1" style="width: 661.664px;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-jabatan-container"><span
                                                        class="select2-selection__rendered" id="select2-jabatan-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="-- Silakan Pilih Jabatan --">-- Silakan Pilih Jabatan
                                                        --</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="no_sk_jabatan">Nomor SK Jabatan</label>
                                    <div class="col-sm-8">
                                        <input id="no_sk_jabatan" class="form-control input-sm nomor_sk" type="text"
                                            placeholder="Nomor SK Jabatan" name="no_sk_jabatan" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nomor SK Pengangkatan</label>
                                    <div class="col-sm-5">
                                        <input name="nmr_sk_pengangkatan" class="form-control input-sm" type="text"
                                            maxlength="30" placeholder="Nomor SK Pengangkatan" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Tanggal SK Pengangkatan</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-sm date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input class="form-control input-sm pull-right tgl_1" name="tgl_sk_pengangkatan"
                                                type="text" value="-">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nomor SK Pemberhentian</label>
                                    <div class="col-sm-5">
                                        <input name="nmr_sk_pemberhentian" class="form-control input-sm" type="text"
                                            placeholder="Nomor SK Pemberhentian" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Tanggal SK Pemberhentian</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-sm date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input class="form-control input-sm pull-right tgl_1" id="tgl_1"
                                                name="tgl_sk_pemberhentian" type="text" value="-">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Masa Jabatan (Usia/Periode)</label>
                                    <div class="col-sm-5">
                                        <input name="periode" class="form-control input-sm" type="text"
                                            placeholder="Contoh: 6 Tahun Periode Pertama (2015 s/d 2021)" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="keterangan">Keterangan</label>
                                    <div class="col-sm-8">
                                        <textarea name="keterangan" class="form-control input-sm" maxlength="300"
                                            placeholder="Keterangan" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i>
                                    Batal</button>
                                <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i
                                        class="fa fa-check"></i>
                                    Simpan</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </section>
    </div>

    <script>
        $('#tgl_1').datepicker({
           autoclose: true
       })
   </script>
@endsection
