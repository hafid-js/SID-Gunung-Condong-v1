@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
         <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h4 class="m-0" style="font-weight: 400;">Sub Kategori</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active">Sub Kategori</li>
                    </ol>
                </div>
            </div>
            <div class="row" style="display: none;" id="tampilBerhasil">
                <div id="toastsContainerTopRight" class="fixed">
                    <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header"><strong class="mr-auto">
                                Berhasil</strong> <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">Berhasil Ubah Status Komentar</div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-primary card-outline">
                        <!-- /.card-header -->
                        <div class="card-body rem85">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="dt-buttons btn-group flex-wrap">
                                            <div class="margin">
                                                <a href="#" data-dismiss="modal" id="btn-add"
                                                    class="btn btn-social mt-1 mb-1 btn-success btn-xs" data-toggle="modal" data-target="#modal3" title="Tambah Kategori"><i
                                                        class="fa fa-plus "></i> Tambah</a>
                                                <a href="#" class="btn btn-danger mt-1 mb-1 btn-success btn-xs" data-toggle="modal" data-target="#modal1" title="Hapus Sub Kategori"><i class="fa fa-trash"></i>
                                                    Hapus</a>
                                                    <a href="{{ url('kategori') }}" title="Unduh Data" class="btn btn-social bg-info btn-xs visible-xs-block" data-title="Unduh Data"><i class="fa fa-arrow-circle-left"></i> Kembali ke Daftar Kategori</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="box-header with-border">
                                            <strong><a href="#">MENU UTAMA </a> / BERITA DESA</strong>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row justify-content-between">
                                    <div class="col-sm-3 col-md-2 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-control form-control-cs">
                                                <option>Pilih Status</option>
                                                <option>Aktif</option>
                                                <option>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-9 col-lg-9">
                                        <div id="example1_filter" class="dataTables_filter"><label>Cari:<input
                                                    type="search" class="form-control form-control-sm"
                                                    placeholder="Kata Kunci Pencarian" aria-controls="example1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-body table-responsive p-0 ">
                                            <table class="table table-hover table-bordered table-sm text-nowrap ">
                                                <thead>
                                                    <tr>
                                                        <th style="width:5%">
                                                            <input type="checkbox" id="check-all" />
                                                        </th>
                                                        <th style="width:5%">NO</th>
                                                        <th style="width:5%" class="text-center">Aksi</th>
                                                        <th>Nama Sub Kategori</th>
                                                        <th>Aktif</th>
                                                        <th>Link</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>1</td>
                                                        <td class="aksi">
                                                            <a href="#" class="btn bg-orange btn-sm" data-toggle="modal" data-target="#modal2" title="Ubah Sub Kategori">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                                <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Aktifkan" data-toggle="modal" data-target="#confirm-delete">
                                                                    <i class="fa fa-lock"></i></a>
                                                                <a href="#" data-href="#" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" data-target="#modal1">
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Berita Lokal</td>
                                                        <td>Ya</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>2</td>
                                                        <td class="aksi">
                                                            <a href="#" class="btn bg-orange btn-sm" data-toggle="modal" data-target="#modal2" title="Ubah Sub Kategori">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Aktifkan" data-toggle="modal" data-target="#confirm-delete">
                                                                <i class="fa fa-lock"></i></a>
                                                                <a href="#" data-href="#" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" data-target="#modal1">
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Berita Kriminal</td>
                                                        <td>Tidak</td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status"
                                            aria-live="polite">Menampilkan 1 sampai 10 dari 57 entri</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example1_previous">
                                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Sebelumnya</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item next" id="example1_next">
                                                    <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0"
                                                        class="page-link">Selanjutnya</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

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
                        <div class="card-header">
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


    </section>
    <!-- /.content -->
</div>

<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal1Label">Tambah Sub Kategori</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama Sub Kategori</label>
                                <input type="text" class="form-control form-control-sm" name="" id="">
                            </div>
                        </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rem85">
            <div class="modal-header">
                <h6 class="modal-title" id="modal3Label">Tambah Sub Kategori</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" class="form-control form-control-sm" id="nama">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
        </div>
        </form>
    </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rem85">
            <div class="modal-header">
                <h6 class="modal-title" id="modal2Label">Ubah Sub Kategori</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" class="form-control form-control-sm" value="Berita Desa" id="nama">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
        </div>
        </form>
    </div>
</div>

@endsection
