@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Artikel</h1>
                </div>
                <div class="col-sm-6">
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
        <div class="row">
            <div class="col-md-8">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <div class="col-md-12">
                            <div class="margin">
                                <a href="{{ url('artikel') }}" title="Unduh Data" class="btn btn-social btn-info btn-xs visible-xs-block"
                                    data-title="Unduh Data"><span class="btn-label"><i
                                            class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar Artikel</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judulArtikel">Judul Artikel</label>
                                <input type="judul" class="form-control" id="judulArtikel" placeholder="Judul Artikel">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card-body p-0">
                                {{-- textarea --}}
                                <x-forms.tinymce-editor />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-4">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h4 class="card-title">Unggah Gambar</h4>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse" id="collapseContent"> <!-- Tambahkan kelas collapse -->
                        <div class="form-group">
                            <label style="font-size: 12px;" for="exampleInputFile">Gambar Utama</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 12px;" for="exampleInputFile2">Gambar Tambahan</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile2">
                                    <label class="custom-file-label" for="exampleInputFile2"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 12px;" for="exampleInputFile3">Gambar Tambahan</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile3">
                                    <label class="custom-file-label" for="exampleInputFile3"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 12px;" for="exampleInputFile4">Gambar Tambahan</label>
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
                    <div class="card-header">
                        <h4 class="card-title">Pengaturan Tampilan</h4>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" id="collapseContent"> <!-- Tambahkan kelas collapse -->
                        <div class="form-group">
                            <label style="font-size: 12px;" for="exampleInputFile">Posisi</label>
                            <select class="form-control form-control-sm select2" style="width: 100%;">
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
                    <div class="card-header">
                        <h4 class="card-title">Pengaturan Lainnya</h4>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" id="collapseContent"> <!-- Tambahkan kelas collapse -->
                        <div class="form-group">
                            <button type="button" class="btn bg-black btn-block"><i style="color:#666;"
                                    class="fa fa-paperclip float-left"></i>
                                <h6 style="color: #666;" class="float-left"> &nbsp;Unduh Dokumen</h6>
                            </button>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Dokumen Lampiran</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="input-group input-group-sm" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="namaDokumen">Nama Dokumen</label>
                            <input type="text" class="form-control form-control-sm" id="namaDokumen">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Posting</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <div class="input-group-append" data-target="#reservationdate"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#reservationdate" />

                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card card-outline card-info">
                    <div class="card-body">
                        <div class="form-group">
                            <button type="button" class="btn btn-xs btn-danger">
                                <span class="btn-label"><i class="fa fa-times"></i></span>Batal</button>
                            <button type="submit" class="btn btn-xs btn-info float-right"><span class="btn-label"><i
                                        class="fa fa-check"></i></span> Simpan</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
</div>

<!-- ./row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
