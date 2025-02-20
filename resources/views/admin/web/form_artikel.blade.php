@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Form Artikel</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item active">Artikel</li>
                            <li class="breadcrumb-item active">Form Artikel</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-outline card-info">
                            <div class="card-body p-0">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('identitas-desa') }}" title="Unduh Data"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"><span
                                                        class="btn-label"><i class="fa fa-arrow-circle-left"></i></span>
                                                    Kembali
                                                    ke Data Identitas Desa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header" style="background-color: #ffffff;">

                                <div class="form-group row">
                                    <div class="card-body p-0">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="judulArtikel" class="col-form-label">Judul Artikel</label>
                                                <input type="judul" class="form-control font-12" id="judulArtikel"
                                                    placeholder="Judul Artikel">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="col-form-label">Isi Artikel</label>
                                            <div class="card-body p-0">
                                                {{-- textarea --}}
                                                <x-forms.tinymce-editor />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- /.col-->
                    <div class="col-md-4">
                        <div class="card card-outline card-info">
                            <div class="card-header" style="background-color: #ffffff;">
                                <h4 class="card-title">Unggah Gambar</h4>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body collapse" id="collapseContent"> <!-- Tambahkan kelas collapse -->
                                <div class="form-group">
                                    <label class="col-form-label" for="exampleInputFile">Gambar Utama</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="exampleInputFile2">Gambar Tambahan</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile2">
                                            <label class="custom-file-label" for="exampleInputFile2"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="exampleInputFile3">Gambar Tambahan</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile3">
                                            <label class="custom-file-label" for="exampleInputFile3"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="exampleInputFile4">Gambar Tambahan</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile4">
                                            <label class="custom-file-label" for="exampleInputFile4"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="card card-outline card-info">
                            <div class="card-header" style="background-color: #ffffff;">
                                <h4 class="card-title">Pengaturan Tampilan</h4>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body" id="collapseContent"> <!-- Tambahkan kelas collapse -->
                                <div class="form-group">
                                    <label for="exampleInputFile" class="col-form-label">Posisi</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected>Konten + Sidebar Kanan</option>
                                        <option>Konten + Sidebar Kiri</option>
                                        <option>Konten Lebar Penuh</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="card card-outline card-info">
                            <div class="card-header" style="background-color: #ffffff;">
                                <h4 class="card-title">Pengaturan Lainnya</h4>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body" id="collapseContent"> <!-- Tambahkan kelas collapse -->
                                <div class="form-group">
                                    <button type="button" class="btn bg-black btn-block" style="background-color: rgb(8, 8, 8);"><i style="color:#666;"
                                            class="fa fa-paperclip float-left"></i>
                                        <h6 style="color: #666;" class="float-left"> &nbsp;Unduh Dokumen</h6>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile" class="col-form-label">Dokumen Lampiran</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="input-group input-group" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaDokumen" class="col-form-label">Nama Dokumen</label>
                                    <input type="text" class="form-control form-control-sm" id="namaDokumen">
                                </div>
                                <div class="form-group">
                                    <label for="id_start_datetime" class="col-form-label">Tanggal Posting</label>
                                    <div class="input-group date" id="id_1">
                                        <input type="text" class="form-control" required />
                                        <div class="input-group-addon input-group-append">
                                            <div class="input-group-text">
                                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card card-outline card-info">
                            <div class="card-body mb-min-20">
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm btn-danger">
                                        <span class="btn-label"><i class="fa fa-times"></i></span> Batal</button>
                                    <button type="submit" class="btn btn-sm btn-info float-right"><span class="btn-label"><i
                                                class="fa fa-check"></i></span> Simpan</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
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
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

@endsection
