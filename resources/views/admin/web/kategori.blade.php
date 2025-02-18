@extends('admin.layout.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Kategori</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="fa fa-home"></i> Beranda</a>
                            </li>
                            <li class="breadcrumb-item active">Kategori</li>
                        </ol>
                    </div>
                </div>

                <!-- Success Message Toast -->
                <div class="row" style="display: none;" id="tampilBerhasil">
                    <div id="toastsContainerTopRight" class="fixed">
                        <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="mr-auto">Berhasil</strong>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="#" data-dismiss="modal" id="btn-add"
                                                class="btn btn-social mt-1 mb-1 btn-success btn-xs"
                                                data-toggle="modal" data-target="#modal1" title="Tambah Kategori">
                                                <i class="fa fa-plus "></i> Tambah
                                            </a>
                                            <a href="#" class="btn btn-danger mt-1 mb-1 btn-success btn-xs">
                                                <i class="fa fa-trash"></i> Hapus
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group row mb-0 justify-content-between">
                                        <div class="col-sm-12 col-md-3 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control form-control-sm select2" style="width: 100%;">
                                                    <option>Pilih Status</option>
                                                    <option>Aktif</option>
                                                    <option>Tidak Aktif</option>
                                                    <option>Belum Dibaca</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-3 col-lg-2">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="kata kunci pencarian">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-sm-12 col-md-12 col-lg-12">
                                           <div class="table-responsive">
                                            <table class="table table-hover table-bordered">
                                                <thead class="thead-gray disabled color-palette">
                                                    <tr>
                                                        <th style="width:4%;">
                                                            <input type="checkbox" id="check-all" />
                                                        </th>
                                                        <th style="width:5%;">NO</th>
                                                        <th style="width:5%;" class="text-center">Aksi</th>
                                                        <th>Nama Kategori</th>
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
                                                            <a href="{{ url('kategori/sub') }}"
                                                                class="btn bg-purple btn-sm"
                                                                title="Rincian Sub Kategori">
                                                                <i class="fa fa-list"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#modal2"
                                                                class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i>
                                                            </a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm"
                                                                title="Hapus" data-toggle="modal"
                                                                data-target="#confirm-delete">
                                                                <i class="fa fa-unlock"></i>
                                                            </a>
                                                        </td>
                                                        <td>Berita Desa</td>
                                                        <td>Ya</td>
                                                        <td>-</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>2</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('kategori/sub') }}"
                                                                class="btn bg-purple btn-sm"
                                                                title="Rincian Sub Kategori">
                                                                <i class="fa fa-list"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#modal2"
                                                                class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i>
                                                            </a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm"
                                                                title="Hapus" data-toggle="modal"
                                                                data-target="#confirm-delete">
                                                                <i class="fa fa-lock"></i>
                                                            </a>
                                                            <a href="#" data-href="#" class="btn bg-danger btn-sm"
                                                                title="Hapus" data-toggle="modal"
                                                                data-target="#confirm-delete">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                        <td>Program Kerja</td>
                                                        <td>Tidak</td>
                                                        <td>-</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>3</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('kategori/sub') }}"
                                                                class="btn bg-purple btn-sm"
                                                                title="Rincian Sub Kategori">
                                                                <i class="fa fa-list"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#modal2"
                                                                class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i>
                                                            </a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm"
                                                                title="Hapus" data-toggle="modal"
                                                                data-target="#confirm-delete">
                                                                <i class="fa fa-unlock"></i>
                                                            </a>
                                                        </td>
                                                        <td>Produk Desa</td>
                                                        <td>Ya</td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                           </div>
                                        </div>
                                    </div>
                                    <ul class="pagination pagination-sm float-left">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                            Menampilkan 1 sampai 10 dari 57 entri</div>
                                    </ul>
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="paginate_button page-item previous disabled" id="example1_previous">
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
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- End Content Wrapper -->

    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rem85">
                <div>
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal1Label">Tambah Kategori</h6>
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
                    <h6 class="modal-title" id="modal2Label">Ubah Kategori</h6>
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
