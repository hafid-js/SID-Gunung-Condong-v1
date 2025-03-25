@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Pembangunan
                <small>Ubah Data</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('pembangunan') }}">Daftar Pembangunan</a>
                </li>
                <li class="active">Ubah Data</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <form action="#" class="form-horizontal"
                enctype="multipart/form-data" id="validasi" method="post" accept-charset="utf-8">
                <input type="hidden" name="sidcsrf" value="d4b4c3525275edf7d218dfbb9ae79d2b">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <a href="{{ url('pembangunan/dokumentasi') }}"
                                    class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                                        class="fa fa-arrow-circle-left"></i> Kembali Ke Dokumentasi
                                    Pembangunan</a>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id_pembangunan" value="1">
                                        <div class="form-group">
                                            <label for="jenis_persentase" class="col-sm-3 control-label">Persentase
                                                Pembangunan</label>
                                            <div class="btn-group col-sm-8 kiri" data-toggle="buttons">
                                                <label id="label_pilih"
                                                    class="btn btn-info btn-sm col-sm-3 form-check-label">
                                                    <input type="radio" name="jenis_persentase" class="form-check-input"
                                                        value="1" autocomplete="off"
                                                        onchange="pilih_persentase(this.value);"> Pilih Persentase
                                                </label>
                                                <label id="label_manual"
                                                    class="btn btn-info btn-sm col-sm-3 form-check-label active">
                                                    <input type="radio" name="jenis_persentase" class="form-check-input"
                                                        value="2" autocomplete="off"
                                                        onchange="pilih_persentase(this.value);"> Tulis Manual
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"></label>
                                            <div id="pilih" style="display: none;">
                                                <div class="col-sm-7">
                                                    <select class="form-control input-sm select2 select2-hidden-accessible"
                                                        id="id_persentase" name="id_persentase"
                                                        onchange="show_hide_anggaran(this.value)"
                                                        data-select2-id="id_persentase" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="2">-- Pilih Persentase Pembangunan
                                                            --</option>
                                                        <option value="0%">0%</option>
                                                        <option value="30%">30%</option>
                                                        <option value="80%">80%</option>
                                                        <option value="100%">100%</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="manual" style="">
                                                <div class="col-sm-7">
                                                    <input maxlength="50" class="form-control input-sm required"
                                                        name="persentase" id="persentase" type="text"
                                                        onkeyup="show_hide_anggaran(this.value)" placeholder="Contoh: 50%"
                                                        value="23%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="nama"></label>
                                            <div class="col-sm-6">
                                                <input type="hidden" name="old_foto"
                                                    value="w63WP17409860591635507816WhatsAppImage2021-10-29at100644__sid__mbi6O4s.jpeg">
                                                <img class="attachment-img img-responsive img-circle"
                                                    src="https://berputar.opendesa.id/desa/upload/galeri/w63WP17409860591635507816WhatsAppImage2021-10-29at100644__sid__mbi6O4s.jpeg"
                                                    alt="Gambar Dokumentasi" width="200" height="200">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="upload">Unggah Dokumentasi</label>
                                            <div class="col-sm-7">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control " id="file_path" name="gambar">
                                                    <input id="file" type="file" class="hidden" name="gambar"
                                                        accept=".jpg,.jpeg,.png">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-info btn-flat"
                                                            id="file_browser"><i class="fa fa-search"></i> Browse</button>
                                                    </span>
                                                </div>
                                                <span
                                                    class="help-block"><code>(Kosongkan jika tidak ingin mengubah gambar)</code></span>
                                            </div>
                                        </div>
                                        <div class="form-group" id="anggaran" style="display: none;">
                                            <label class="control-label col-sm-3" for="upload">Perubahan Anggaran</label>
                                            <div class="col-sm-7">
                                                <input class="form-control input-sm" name="perubahan_anggaran"
                                                    id="ubahanggaran" type="number" min="0" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" style="text-align:left;"
                                                for="keterangan">Keterangan</label>
                                            <div class="col-sm-7">
                                                <textarea rows="5" class="form-control input-sm required" name="keterangan"
                                                    id="keterangan"
                                                    placeholder="Keterangan">Pembanguna Jembatan Penghubung RW003 dan RW001</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-social btn-danger btn-sm"
                                    onclick="reset_form($(this).val());"><i class="fa fa-times"></i> Batal</button>
                                <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i
                                        class="fa fa-check"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </section>
    </div>

    <script>
           function pilih_persentase(value) {
          // Menyembunyikan form berdasarkan pilihan radio button
          if (value == '1') {
            // Tampilkan dropdown dan sembunyikan textarea
            $('#pilih').show();
            $('#manual').hide();
          } else {
            // Tampilkan textarea dan sembunyikan dropdown
            $('#pilih').hide();
            $('#manual').show();
          }
        }

        // Pastikan untuk memanggil fungsi ketika halaman pertama kali dimuat
        $(document).ready(function() {
          pilih_persentase($('input[name="jenis_persentase"]:checked').val());
        });
    </script>


@endsection
