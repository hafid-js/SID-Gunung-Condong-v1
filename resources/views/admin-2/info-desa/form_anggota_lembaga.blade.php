@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Data Anggota Lembaga</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item">Daftar Lembaga</li>
                            <li class="breadcrumb-item active">Data Anggota Lembaga</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-3">
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="form-group mt-3" style="margin-bottom: -0px;">
                                    <div class="text-center">
                                        <img class="penduduk" id="profile_image"
                                            src="https://berputar.opendesa.id/assets/images/pengguna/kuser.png"
                                            alt="Foto Penduduk">
                                        <canvas id="camera_canvas" style="display: none;"></canvas>
                                        <video id="camera_preview"
                                            style="width: auto;max-height: 250px;max-width: 200px;border-radius: 15px;display: block;margin: 0 auto;padding: 2px;border: 2px solid #d2d6de; display: none;"
                                            autoplay></video>
                                        <code id="keterangan"
                                            class="text-center font-11">(Kosongkan, jika logo tidak berubah)</code>
                                        <code id="capture" style="display: none;"
                                            class="text-center">(klik video untuk capture foto)</code>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-info btn-block" id="file_browser"><i
                                                class="fa fa-upload"></i> Unggah</button>
                                        <button type="button" class="btn btn-info btn-block" id="camera_browser"><i
                                                class="fa fa-camera"></i>
                                            Kamera</button>
                                    </div>
                                </div>


                                <!-- Input file yang tersembunyi -->
                                <input type="file" id="file_input" onchange="showPreview(event)" style="display: none;" />
                                <input type="file" id="camera_input" style="display: none;" accept="image/*"
                                    capture="camera" />


                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-9">
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('lembaga-desa') }}" title="Unduh Data"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"><span
                                                        class="btn-label"><i class="fa fa-arrow-circle-left"></i></span>
                                                    Kembali
                                                    ke Anggota Lembaga</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="namLem" class="col-3 font-12 col-form-label">Nama Anggota</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <select name="" id="namLem" class="form-control form-control-sm select2"
                                                disabled style="width:100%;">
                                                <option value="">NIK : 33061233765980002 - HAFID - Jl.Kliwonan RT003/RW001
                                                    Dusun Krajan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ttl" class="col-3 font-12 col-form-label">Tempat Tanggal Lahir /
                                            Umur</label>
                                        <div class="col-sm-10 col-lg-5 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="ttl"
                                                value="PURWOREJO" placeholder="Tempat Lahir" disabled>
                                        </div>

                                        <div class="col-sm-10 col-lg-2 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="ttl"
                                                value="29 MARET 1998" placeholder="Tanggal Lahir" disabled>
                                        </div>
                                        <div class="col-sm-10 col-lg-2 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="ttl"
                                                value="27 TAHUN" placeholder="Umur" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-3 font-12 col-form-label">Alamat</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="alamat"
                                                value="JL.KLIWONAN RT003/RW001 DUSUN KRAJAN" placeholder="Alamat" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pwa" class="col-3 font-12 col-form-label">Pendidikan / Warga Negara /
                                            Agama</label>
                                        <div class="col-sm-10 col-lg-5 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="pwa"
                                                value="SARJANA S1" placeholder="Pendidikan" disabled>
                                        </div>

                                        <div class="col-sm-10 col-lg-2 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="pwa"
                                                value="WNI" placeholder="Warga Negara" disabled>
                                        </div>
                                        <div class="col-sm-10 col-lg-2 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="pwa"
                                                value="ISLAM" placeholder="Agama" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="noAnggota" class="col-3 font-12 col-form-label">Nomor Anggota</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="noAnggota"
                                                placeholder="Nomor Anggota" value="1">
                                            <code class="font-11">*Pastikan nomor anggota belum pernah dipakai.</code>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jabatan" class="col-3 font-12">Jabatan</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <select name="" id="jabatan" class="form-control form-control-sm select2"
                                                style="width:100%;">
                                                <option value="">-- Silahkan Pilih Jabatan --</option>
                                                <option value="">KETUA</option>
                                                <option value="">WAKIL KETUA</option>
                                                <option value="">SEKRETARIS</option>
                                                <option value="">BENDAHARA</option>
                                                <option value="">ANGGOTA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="noSKJbt" class="col-3 font-12 col-form-label">Nomor SK Jabatan</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="noSKJbt"
                                                placeholder="Nomor SK Jabatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="noSKPkt" class="col-3 font-12 col-form-label">Nomor SK
                                            Pengangkatan</label>
                                        <div class="col-sm-10 col-lg-5 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="noSKPkt"
                                                placeholder="Nomor SK Pengangkatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_mulai" class="col-3 font-12">Tanggal SK Pengangkatan</label>
                                        <div class="col-sm-10 col-lg-5 col-md-9">
                                            <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                                </div>

                                                <input type="text" class="form-control form-control-sm" id="tgl_mulai"
                                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"
                                                    data-mask>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="noSKPmbrnt" class="col-3 font-12 col-form-label">Nomor SK
                                            Pemberhentian</label>
                                        <div class="col-sm-10 col-lg-5 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="noSKPmbrnt"
                                                placeholder="Nomor SK Pemberhentian">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_berhenti" class="col-3 font-12">Tanggal SK Pemberhentian</label>
                                        <div class="col-sm-10 col-lg-5 col-md-9">
                                            <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                                </div>

                                                <input type="text" class="form-control form-control-sm" id="tgl_berhenti"
                                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy"
                                                    data-mask>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="masa_jbt" class="col-3 font-12 col-form-label">Masa Jabatan
                                            (Usia/Periode)</label>
                                        <div class="col-sm-10 col-lg-5 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="masa_jbt"
                                                placeholder="Contoh: 6 Tahun Periode Pertama (2015/2021)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-3 font-12 col-form-label">Keterangan</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <textarea name="" id="keterangan" class="form-control form-control-sm"
                                                rows="4">Ketua Lembaga</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer border-0">
                                    <button class="btn btn-danger">Batal</button>
                                    <button type="submit" class="btn btn-info float-right">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <script>

        //Date picker
        $('#tgl_mulai').datepicker({
            autoclose: true
        })
        $('#tgl_berhenti').datepicker({
            autoclose: true
        })


        // Ambil tombol dan input file
        const button = document.getElementById('file_browser');
        const fileInput = document.getElementById('file_input');
        const cameraButton = document.getElementById('camera_browser');
        const profileImage = document.getElementById('profile_image');
        const cameraInput = document.getElementById('camera_input');
        const cameraCanvas = document.getElementById('camera_canvas');
        const cameraPreview = document.getElementById('camera_preview');
        const keterangan = document.getElementById('keterangan');
        const capture = document.getElementById('capture');

        function showPreview(event) {
            var file = event.target.files[0];
            var preview = document.getElementById('filePreview');

            if (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    preview.innerHTML = `<img src="${e.target.result}" alt="File Preview" class="penduduk">`;
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
                    profileImage.src = e.target.result;
                };

                reader.readAsDataURL(file);  // Membaca file sebagai DataURL
            }
        });
        // Jika foto diambil menggunakan kamera, ubah gambar menjadi foto yang diambil
        cameraInput.addEventListener('change', function () {
            const file = cameraInput.files[0];  // Ambil file foto yang diambil
            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    profileImage.src = e.target.result;
                };

                reader.readAsDataURL(file);  // Membaca file foto sebagai DataURL
            }
        });

        // Ketika tombol Unggah Foto dari Kamera diklik, buka kamera
        cameraButton.addEventListener('click', function () {
            startCamera();
            profileImage.style.display = 'none';
            keterangan.style.display = 'none';
            capture.style.display = 'block';

            // Memulai kamera untuk mengambil foto
        });


        // Fungsi untuk memulai kamera
        function startCamera() {
            if (navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        // Tampilkan preview kamera
                        cameraPreview.srcObject = stream;
                        cameraPreview.style.display = 'block';

                        // Ambil foto saat tombol di klik
                        cameraPreview.addEventListener('click', function () {
                            capturePhoto();
                            stopCamera(stream);
                            profileImage.style.display = 'block';
                        });
                    })
                    .catch(function (err) {
                        console.log("Terjadi kesalahan: " + err);
                    });
            } else {
                alert("Kamera tidak didukung di browser ini.");
            }
        }

        // Fungsi untuk menghentikan aliran video dari kamera setelah foto diambil
        function stopCamera(stream) {
            const tracks = stream.getTracks();
            tracks.forEach(track => track.stop());
            cameraPreview.style.display = 'none';  // Menyembunyikan preview kamera
        }

        // Fungsi untuk mengambil foto dan menampilkan di gambar profil
        function capturePhoto() {
            cameraCanvas.width = cameraPreview.videoWidth;
            cameraCanvas.height = cameraPreview.videoHeight;

            const ctx = cameraCanvas.getContext('2d');
            ctx.drawImage(cameraPreview, 0, 0, cameraCanvas.width, cameraCanvas.height);

            const dataUrl = cameraCanvas.toDataURL();  // Mengambil gambar sebagai DataURL
            profileImage.src = dataUrl;  // Menampilkan gambar yang diambil di elemen <img>
        }


    </script>

@endsection
