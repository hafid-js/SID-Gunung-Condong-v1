@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
            </h1>
            <h1>Pengaturan Album</h1>


            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="{{ url('galeri') }}"> Daftar Album</a></li>
                <li class="active"> Pengaturan Album</li>
            </ol>

        </section>

        <section id="maincontent" class="content">



            <form
                action="#"
                class="form-horizontal" id="validasi" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <input type="hidden" name="sidcsrf" value="93a16c3fa662c5646e31e9e66a43ece6">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <a href="{{ url('galeri') }}"
                            class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            title="Tambah">
                            <i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar Album
                        </a>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="nama">Nama Album</label>
                            <div class="col-sm-6">
                                <input name="nama" class="form-control input-sm nomor_sk required" maxlength="50"
                                    type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="nama">Jenis</label>
                            <div class="col-sm-6">
                                <select name="jenis" id="jenis" class="form-control input-sm required">
                                    <option value="1">File</option>
                                    <option value="2">URL</option>
                                </select>
                            </div>
                        </div>
                        <div id="jenis-file">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="upload">Unggah Gambar</label>
                                <div class="col-sm-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control required" id="file_path">
                                        <input id="file" type="file" class="hidden" name="gambar"
                                            accept=".gif,.jpg,.png,.jpeg">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat" id="file_browser"><i
                                                    class="fa fa-search"></i> Browse</button>
                                        </span>
                                    </div>
                                    <p><label class="control-label">Batas maksimal pengunggahan berkas <strong>2
                                                MB.</strong></label></p>
                                </div>
                            </div>
                        </div>
                        <div id="jenis-url" class="form-group" style="display: none;">
                            <label class="control-label col-sm-4" for="url">Link/URL</label>
                            <div class="col-sm-6">
                                <div class="input-group input-group-sm">
                                    <input id="url" name="url" class="form-control input-sm" type="url" value="">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-danger btn-sm" id="kosongkan"><i
                                                class="fa fa-refresh" title="Kosongkan"></i>&nbsp;</button>
                                        <button type="button" class="btn btn-info btn-info btn-sm" id="file_browser2"
                                            data-toggle="modal" data-target="#FileManager"><i
                                                class="fa fa-search"></i>&nbsp;</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-danger btn-sm pull-left"><i class="fa fa-times"></i>
                            Batal</button>
                        <button type="submit" class="btn btn-social btn-info btn-sm pull-right confirm"><i
                                class="fa fa-check"></i> Simpan</button>
                    </div>
                </div>
            </form>

            <!-- File Manager -->
            <div class="modal fade" id="FileManager" role="dialog" aria-labelledby="FileManagerLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="FileManagerLabel">File Manager</h4>
                        </div>
                        <div class="modal-body">
                            <iframe width="100%" height="400px"
                                src="https://berputar.opendesa.id/rfm/dialog.php?type=1&amp;lang=id&amp;field_id=url&amp;fldr=&amp;akey=073bfd1370b6d1c4970e1ad17a08e1dc"
                                frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>


    <script>
        // Ambil elemen-elemen dari HTML
        const jenis = document.getElementById('jenis');
        const jenisFile = document.getElementById('jenis-file');
        const jenisUrl = document.getElementById('jenis-url');

        // Fungsi untuk mengubah tampilan form berdasarkan pilihan
        function toggleForms() {
            const selectedOption = jenis.value;

            // Tampilkan form sesuai pilihan
            if (selectedOption === '1') {
                jenisFile.style.display = 'block';
                jenisUrl.style.display = 'none';
            } else if (selectedOption === '2') {
                jenisFile.style.display = 'none';
                jenisUrl.style.display = 'block';
            }
        }

        // Jalankan fungsi toggleForms ketika pilihan berubah
        jenis.addEventListener('change', toggleForms);

        // Panggil pertama kali untuk menampilkan form yang sesuai dengan pilihan default
        toggleForms();
    </script>

@endsection
