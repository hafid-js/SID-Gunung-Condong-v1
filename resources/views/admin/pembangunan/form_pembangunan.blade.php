@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
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
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('pembangunan') }}" title="Kembali ke Daftar Pembangunan"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"
                                                    data-title="Kembali ke Daftar Pembangunan"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar
                                                    Pembangunan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="kegiatan" class="col-sm-3 col-form-label font-12">Nama
                                                    Kegiatan</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9">
                                                    <input type="text" placeholder="Nama Kegiatan Pembangunan"
                                                        class="form-control form-control-sm font-12" id="kegiatan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="volume" class="col-sm-3 col-form-label font-12">Volume</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9">
                                                    <input type="text" placeholder="Volume Pembangunan"
                                                        class="form-control form-control-sm font-12" id="volume">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="waktu" class="col-sm-3 col-form-label font-12">Waktu</label>
                                                <div class="col-sm-6 col-lg-6 col-md-6 mb-2">
                                                    <input type="text" placeholder="Lamanya Pembangunan"
                                                        class="form-control form-control-sm font-12" id="waktu">
                                                </div>
                                                <div class="col-sm-3 col-lg-3 col-md-3">
                                                    <select name="" class="form-control form-control-sm"
                                                        style="width: 100%;">
                                                        <option value="" selected>Hari</option>
                                                        <option value="">Minggu</option>
                                                        <option value="">Bulan</option>
                                                        <option value="">Tahun</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="sumberDana" class="col-sm-3 col-form-label font-12">Sumber
                                                    Dana</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9">
                                                    <select name="" class="form-control form-control-sm select2"
                                                        id="sumberDana" style="width: 100%;">
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
                                                            class="form-control form-control-sm select2"
                                                            style="width: 100%;">
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
                                                        <label for="sumberBPM" class="font-12">Sumber Biaya
                                                            Pemerintah</label>
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
                                                        <label for="sumberBK" class="font-12">Sumber Biaya Kab /
                                                            Kota</label>
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
                                                        <label for="sumberBK" class="font-12">Sumber Biaya Kab /
                                                            Kota</label>
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
                                                <label for="sifatProyek" class="col-sm-3 col-form-label font-12">Sifat
                                                    Proyek</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9">
                                                    <select name="" class="form-control form-control-sm select2"
                                                        id="sifatProyek" style="width: 100%;">
                                                        <option value="" selected>-- Pilih Sifat Proyek</option>
                                                        <option value="">BARU</option>
                                                        <option value="">LANJUTAN</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lokasiPembangunan"
                                                    class="col-sm-3 col-form-label font-12">Lokasi
                                                    Pembangunan</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9">
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
                                                <label class="col-sm-3 col-form-label font-12"></label>
                                                <div class="col-sm-9 col-md-9 col-lg-9" id="tampilPilihLokasi">
                                                    <select name="" class="form-control form-control-sm select2"
                                                        style="width: 100%;">
                                                        <option value="" selected>-- Pilih Lokasi Pembangunan --</option>
                                                        <option value="">-- RW / RT --</option>
                                                        <option value="">A - RW / RT --</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-9 col-md-9 col-lg-9">
                                                    <textarea class="form-control font-12" rows="3" style="display: none;"
                                                        id="tampilTulisManual" placeholder="Lokasi"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="pelaksana" class="col-sm-3 col-form-label font-12">Pelaksana
                                                    Kegiatan</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9">
                                                    <input type="text" placeholder="Pelaksana Kegiatan Pembangunan"
                                                        class="form-control form-control-sm font-12" id="pelaksana">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="manfaat" class="col-sm-3 col-form-label font-12">Manfaat</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9">
                                                    <textarea class="form-control font-12" rows="3" id="manfaat"
                                                        placeholder="Manfaat"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="keterangan"
                                                    class="col-sm-3 col-form-label font-12">Keterangan</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9">
                                                    <textarea class="form-control font-12" rows="3" id="keterangan"
                                                        placeholder="Keterangan"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="card-footer border-0">
                                        <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                                        <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="card card-outline card-info">
                            <div class="card-header" style="background-color: #ffffff;">
                                <h4 class="card-title">Unggah Gambar</h4>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body" id="collapseContent"> <!-- Tambahkan kelas collapse -->
                                <div class="form-group">
                                    <img class="previewImage" id="previewImage"
                                        src="https://berputar.opendesa.id/assets/images/404-image-not-found.jpg?v1b31d555fd0886e1002839f5b442f1f2"
                                        alt="Gambar Utama Pembangunan">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control font-control-sm font-11" id="filePath" disabled
                                               />
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-info btn-sm" id="file_browser"><i class="fas fa-search"></i></button>
                                                <input type="file" id="file_input" onchange="showPreview(event)" style="display: none;" />
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

    <script>
        // Ambil tombol dan input file
        const button = document.getElementById('file_browser');
       const fileInput = document.getElementById('file_input');
       const cameraButton = document.getElementById('camera_browser');
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
    document.getElementById('file_input').addEventListener('change', function(event) {
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

   </script>

@endsection
