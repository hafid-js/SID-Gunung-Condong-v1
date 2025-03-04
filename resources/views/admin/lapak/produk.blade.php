@extends('admin.layout.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">PRODUK</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="fa fa-home"></i> Beranda</a>
                            </li>
                            <li class="breadcrumb-item active">Daftar Data</li>
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
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon" style="background-color: #71717141;"><i class="fa fa-cubes"
                                    style="font-size: 48px;"></i></span>

                            <div class="info-box-content ">
                                <span class="info-box-text">PRODUK</span>
                                <span class="info-box-number">1</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">
                                    Total : 1
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="info-box bg-success">
                            <span class="info-box-icon" style="background-color:  #207f366b;"><i class="fa fa-users"
                                    style="font-size: 48px;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">PELAPAK</span>
                                <span class="info-box-number">41,410</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">
                                    Total : 1
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon" style="background-color:  #98813b54;"><i
                                    class="fa fa-tags text-white"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text text-white">Bookmarks</span>
                                <span class="info-box-number text-white">41,410</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description text-white">
                                    Total : 1
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('lapak-admin/produk/form') }}"
                                                    class="btn btn-social mt-1 mb-1 btn-success btn-sm" title="Tambah Produk">
                                                    <i class="fa fa-plus "></i> Tambah
                                                </a>
                                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#hapus"
                                                    class="btn mt-1 mb-1 btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </a>
                                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#cetak"
                                                    class="btn mt-1 mb-1 bg-purple btn-sm" title="Cetak">
                                                    <i class="fa fa-print"></i> Cetak
                                                </a>
                                                <a href="#" href="#" data-dismiss="modal" data-toggle="modal"
                                                    data-target="#unduh" class="btn mt-1 mb-1 bg-navy btn-sm">
                                                    <i class="fa fa-download"></i> Unduh
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12 col-md-3 col-lg-2" style="margin-right: -25px;">
                                            <select class="form-control form-control-sm select2" style="width: 100%;">
                                                <option>Pilih Status</option>
                                                <option>Aktif</option>
                                                <option>Tidak Aktif</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-3 col-lg-2" style="margin-right: -25px;">
                                            <select class="form-control form-control-sm select2" style="width: 100%;">
                                                <option>Pilih Pelapak</option>
                                                <option>3306132287560002 - Khafid</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-3 col-lg-2" style="margin-right: -25px;">
                                            <select class="form-control form-control-sm select2" style="width: 100%;">
                                                <option>Pilih Kategori</option>
                                                <option>Makanan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="background-color: #ffffff;">
                                    {{-- <div class="form-group row mb-0 justify-content-between">
                                        <div class="col-sm-12 col-md-3 col-lg-2">

                                        </div>

                                        <div class="col-sm-12 col-md-3 col-lg-2">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="kata kunci pencarian">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-info btn-sm"><i
                                                            class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-sm-12 col-md-12 col-lg-12">
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-hover table-bordered">
                                                    <thead class="thead-gray disabled color-palette">
                                                        <tr>
                                                            <th style="width:4%;">
                                                                <input type="checkbox" id="check-all" />
                                                            </th>
                                                            <th style="width:5%;">NO</th>
                                                            <th style="width:5%;" class="text-center">AKSI</th>
                                                            <th class="text-center">PELAPAK</th>
                                                            <th class="text-center">PRODUK</th>
                                                            <th class="text-center">KATEGORI</th>
                                                            <th class="text-center">HARGA</th>
                                                            <th class="text-center">SATUAN</th>
                                                            <th class="text-center">POTONGAN</th>
                                                            <th class="text-center" style="width:30%;">DESKRIPSI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="check-item" />
                                                            </td>
                                                            <td>1</td>
                                                            <td class="aksi">
                                                                <a href="#" data-toggle="modal" data-target="#modal2"
                                                                    class="btn bg-orange btn-sm" title="Ubah">
                                                                    <i class="fa fa-edit text-white"></i>
                                                                </a>
                                                                <a href="#" class="btn bg-navy btn-sm"
                                                                    title="Non Aktifkan Produk">
                                                                    <i class="fa fa-unlock"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-danger btn-sm"
                                                                    title="Hapus Produk">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-primary btn-sm"
                                                                    title="Lihat Produk">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </td>
                                                            <td>Hafid</td>
                                                            <td>Keripik Singkong</td>
                                                            <td>Makanan</td>
                                                            <td>12.000</td>
                                                            <td class="text-center">kg</td>
                                                            <td>0%</td>
                                                            <td>mantap gurih renyah</td>
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
    <div class="modal fade" id="cetak" tabindex="-1" aria-labelledby="cetakLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rem85">
                <div>
                    <div class="modal-header">
                        <h6 class="modal-title" id="cetakLabel">Cetak Data</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="laporan">Laporan Ditandatangani</label>
                                <select name="" class="form-control form-control-sm select2" id="laporan"
                                    style="width: 100%;">
                                    <option value="" selected>Pilih Staf Perangkat Desa</option>
                                    <option value="">Hafid</option>
                                    <option value="">Aulia Rachma L</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="diketahui">Laporan Diketahui</label>
                                <select name="" class="form-control form-control-sm select2" id="diketahui"
                                    style="width: 100%;">
                                    <option value="">Hafid</option>
                                    <option value="" selected>Aulia Rachma L</option>
                                </select>
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

<div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="hapusLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="hapusLabel"><i class="fas fa-exclamation-triangle text-red"></i>
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


<div class="modal fade" id="unduh" tabindex="-1" aria-labelledby="unduhLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rem85">
            <div>
                <div class="modal-header">
                    <h6 class="modal-title" id="unduhLabel">Unduh Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="laporan">Laporan Ditandatangani</label>
                            <select name="" class="form-control form-control-sm select2" id="laporan"
                                style="width: 100%;">
                                <option value="" selected>Pilih Staf Perangkat Desa</option>
                                <option value="">Hafid</option>
                                <option value="">Aulia Rachma L</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="diketahui">Laporan Diketahui</label>
                            <select name="" class="form-control form-control-sm select2" id="diketahui"
                                style="width: 100%;">
                                <option value="">Hafid</option>
                                <option value="" selected>Aulia Rachma L</option>
                            </select>
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



@endsection







