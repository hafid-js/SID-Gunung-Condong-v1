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
                <input type="hidden" name="sidcsrf" value="47b8027000f55a850c693d9e9a802a52">

                <div class="row">
                    <div class="col-md-9">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <a href="{{ url('pembangunan') }}"
                                    class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                                        class="fa fa-arrow-circle-left"></i> Kembali Ke Daftar Pembangunan</a>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="judul">Nama Kegiatan</label>
                                    <div class="col-sm-9">
                                        <input id="judul" name="judul"
                                            class="form-control input-sm strip_tags judul required"
                                            value="Pembangunan Jembatan" type="text" maxlength="50" minlength="5"
                                            placeholder="Nama Kegiatan Pembangunan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="volume">Volume</label>
                                    <div class="col-sm-9">
                                        <input maxlength="50" class="form-control input-sm strip_tags required"
                                            name="volume" id="volume" value="12" type="text"
                                            placeholder="Volume Pembangunan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="waktu">Waktu</label>
                                    <div class="col-sm-6">
                                        <input maxlength="50" class="form-control number input-sm required" name="waktu"
                                            id="waktu" value="5" type="text" placeholder="Lamanya pembangunan">
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            name="satuan_waktu" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="1">Hari</option>
                                            <option value="2">Minggu</option>
                                            <option value="3" selected="" data-select2-id="3">Bulan</option>
                                            <option value="4">Tahun</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="sumber_dana">Sumber Dana</label>
                                    <div class="col-sm-9">
                                        <select class="form-control input-sm select2 select2-hidden-accessible"
                                            id="sumber_dana" name="sumber_dana" style="width:100%;"
                                            data-select2-id="sumber_dana" tabindex="-1" aria-hidden="true">
                                            <option value="Pendapatan Asli Desa (PAD)">Pendapatan Asli Desa (PAD)</option>
                                            <option value="Pendapatan Transfer (Dana Desa)">Pendapatan Transfer (Dana Desa)
                                            </option>
                                            <option selected=""
                                                value="Pendapatan Transfer (Bagian dari Hasil Pajak dan Retribusi Daerah Kabupaten/Kota)"
                                                data-select2-id="5">Pendapatan Transfer (Bagian dari Hasil Pajak dan
                                                Retribusi Daerah Kabupaten/Kota)</option>
                                            <option value="Pendapatan Transfer (Alokasi Dana Desa)">Pendapatan Transfer
                                                (Alokasi Dana Desa)</option>
                                            <option value="Pendapatan Transfer (Bantuan Keuangan dari APBD Provinsi)">
                                                Pendapatan Transfer (Bantuan Keuangan dari APBD Provinsi)</option>
                                            <option value="Pendapatan Transfer (Bantuan Keuangan APBD Kabupaten/Kota)">
                                                Pendapatan Transfer (Bantuan Keuangan APBD Kabupaten/Kota)</option>
                                            <option value="Pendapatan Lain">Pendapatan Lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label">Tahun Anggaran</label>
                                            <div class="col-sm-12">
                                                <select class="form-control input-sm select2 select2-hidden-accessible"
                                                    id="tahun_anggaran" name="tahun_anggaran" style="width:100%;"
                                                    data-select2-id="tahun_anggaran" tabindex="-1" aria-hidden="true">
                                                    <option value="2025">2025</option>
                                                    <option value="2024" selected="" data-select2-id="7">2024</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label">Anggaran</label>
                                            <div class="col-sm-12">
                                                <input class="form-control input-sm required bilangan" name="anggaran"
                                                    id="anggaran" value="20000" type="text" placeholder="Anggaran"
                                                    readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label">Sumber Biaya Pemerintah</label>
                                            <div class="col-sm-12">
                                                <input id="sumber_biaya_pemerintah" name="sumber_biaya_pemerintah"
                                                    onkeyup="cek()" class="form-control input-sm required bilangan"
                                                    maxlength="12" type="text" placeholder="Sumber Biaya Pemerintah"
                                                    value="20000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label">Sumber Biaya Provinsi</label>
                                            <div class="col-sm-12">
                                                <input id="sumber_biaya_provinsi" name="sumber_biaya_provinsi"
                                                    onkeyup="cek()" class="form-control input-sm required bilangan"
                                                    maxlength="12" type="text" placeholder="Sumber Biaya Provinsi"
                                                    value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label">Sumber Biaya Kab / Kota</label>
                                            <div class="col-sm-12">
                                                <input id="sumber_biaya_kab_kota" name="sumber_biaya_kab_kota"
                                                    class="form-control input-sm required bilangan" maxlength="12"
                                                    onkeyup="cek()" type="text" placeholder="Sumber Biaya Kab / Kota"
                                                    value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 control-label">Sumber Biaya Swadaya</label>
                                            <div class="col-sm-12">
                                                <input id="sumber_biaya_swadaya" name="sumber_biaya_swadaya"
                                                    class="form-control input-sm required bilangan" maxlength="12"
                                                    type="text" onkeyup="cek()" placeholder="Sumber Biaya Swadaya"
                                                    value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="sifat_proyek">Sifat Proyek</label>
                                    <div class="col-sm-9">
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            id="sifat_proyek" name="sifat_proyek" data-select2-id="sifat_proyek"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="">-- Pilih Sifat Proyek --</option>
                                            <option value="BARU" selected="" data-select2-id="9">BARU</option>
                                            <option value="LANJUTAN">LANJUTAN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="pelaksana_kegiatan">Pelaksana
                                        Kegiatan</label>
                                    <div class="col-sm-9">
                                        <input maxlength="50" class="form-control input-sm strip_tags required"
                                            name="pelaksana_kegiatan" id="pelaksana_kegiatan" value="Rohman" type="text"
                                            placeholder="Pelaksana Kegiatan Pembangunan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="pelaksana_kegiatan">Lokasi
                                        Pembangunan</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="btn-group col-sm-6" data-toggle="buttons">
                                                <label class="btn btn-info btn-sm form-check-label col-sm-6 ">
                                                    <input type="radio" name="jenis_lokasi" class="form-check-input"
                                                        value="1" autocomplete="off" onchange="pilih_lokasi(this.value);">
                                                    Pilih Lokasi
                                                </label>
                                                <label class="btn btn-info btn-sm form-check-label col-sm-6 active">
                                                    <input type="radio" name="jenis_lokasi" class="form-check-input"
                                                        value="2" autocomplete="off" onchange="pilih_lokasi(this.value);">
                                                    Tulis Manual
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <div id="pilih" style="display: none;">
                                            <select class="form-control input-sm select2 select2-hidden-accessible"
                                                id="id_lokasi" name="id_lokasi" data-select2-id="id_lokasi" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="" data-select2-id="11">-- Pilih Lokasi Pembangunan --
                                                </option>
                                                <option value="6">- - RW - / RT -</option>
                                                <option value="9">A - RW - / RT -</option>
                                                <option value="12">CARAMMING - RW - / RT -</option>
                                            </select>
                                        </div>

                                        <div id="manual">
                                            <textarea id="lokasi" class="form-control input-sm strip_tags required"
                                                type="text" placeholder="Lokasi" name="lokasi" rows="3">Rt 01</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="manfaat">Manfaat</label>
                                    <div class="col-sm-9">
                                        <textarea id="manfaat" name="manfaat"
                                            class="form-control input-sm strip_tags required" placeholder="Manfaat"
                                            rows="3">Cinta</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="manfaat">Keterangan</label>
                                    <div class="col-sm-9">
                                        <textarea id="keterangan" class="form-control input-sm strip_tags required"
                                            name="keterangan" placeholder="Keterangan" rows="3">cinta</textarea>
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
                    <div class="col-md-3">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Gambar Utama</h3>
                                <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <img class="img-responsive" id="previewImage"
                                    src="https://berputar.opendesa.id/assets/images/404-image-not-found.jpg?v1b31d555fd0886e1002839f5b442f1f2"
                                    alt="Gambar Utama Pembangunan">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" id="filePath">
                                    <input type="file" class="hidden" id="file" name="foto" accept=".jpg,.jpeg,.png">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" id="file_browser"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                    <span class="input-group-addon" style="background-color: red; border: 1px solid #ccc;">
                                        <input type="checkbox" title="Centang Untuk Hapus Gambar" name="hapus_foto"
                                            value="hapus">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </section>
    </div>


    <script>
              const button = document.getElementById('file_browser');
       const fileInput = document.getElementById('file');
       const previewImage = document.getElementById('previewImage');
       const filePath = document.getElementById('filePath');

       function showPreview(event) {
           var file = event.target.files[0];
           var preview = document.getElementById('filePreview');

           if (file) {
               var reader = new FileReader();
               reader.onload = function (e) {
                   preview.innerHTML = `<img src="${e.target.result}" alt="File Preview" class="previewImage">`;
               };
               reader.readAsDataURL(file);
           }
       }

       // Ketika tombol diklik, buka file browser
       button.addEventListener('click', function () {
           fileInput.click();  // Memicu input file untuk dibuka
       });

       // Jika file dipilih, ubah gambar menjadi gambar yang dipilih
       fileInput.addEventListener('change', function () {
           const file = fileInput.files[0];  // Ambil file pertama yang dipilih
           if (file) {
               const reader = new FileReader();

               // Ketika file berhasil dibaca, ubah src gambar
               reader.onload = function (e) {
                   previewImage.src = e.target.result;
               };

               reader.readAsDataURL(file);  // Membaca file sebagai DataURL
           }
       });

       // JavaScript untuk menampilkan path file dan preview gambar
    document.getElementById('file').addEventListener('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            // Menampilkan path file
            document.getElementById("filePath").placeholder = 'C:/fakepath/'+file.name;

            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.createElement('img');
                img.src = e.target.result;

                // Menunggu gambar dimuat dan mengubah ukuran gambar
                img.onload = function() {
                    previewImage.src = img.src;
                    previewImage.style.display = 'block';
                };
            };
            reader.readAsDataURL(file);
        }
    });



        function pilih_lokasi(value) {
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
          pilih_lokasi($('input[name="jenis_lokasi"]:checked').val());
        });

      </script>

@endsection
