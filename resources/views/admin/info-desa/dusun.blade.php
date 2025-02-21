@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
         <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h4 class="m-0" style="font-weight: 400;">Wilayah Administratif Dusun</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active">Wilayah Administratif Dusun</li>
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
                    <div class="card-body p-0">
                        <div class="card card-outline card-info">
                            <div class="card-header" style="background-color: #ffffff;">
                                <div class="form-group row mb-0">
                                    <div class="col-sm-12">
                                        <div class="margin">
                                            <a href="{{ url('dusun/form') }}"
                                                    class="btn btn-social mt-1 mb-1 btn-success btn-sm"
                                                    title="Tambah Kategori"><i class="fa fa-plus "></i> Tambah</a>
                                                <a href="#" data-target="#cetak" title="Cetak Data" data-toggle="modal"
                                                    data-target="#cetak" class="btn mt-1 mb-1 bg-purple btn-sm"><i
                                                        class="fa fa-print"></i>
                                                    Cetak</a>
                                                <a href="#" data-target="#unduh" title="Unduh Data" data-toggle="modal"
                                                    data-target="#unduh" class="btn mt-1 mb-1 bg-navy btn-sm"><i
                                                        class="fa fa-download"></i>
                                                    Unduh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header" style="background-color: #ffffff;">
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
                                            <thead class="thead-gray disabled">
                                                <tr>
                                                    <th style="width:4%;">
                                                        <input type="checkbox" id="check-all" />
                                                    </th>
                                                    <th style="width:5%;">NO</th>
                                                    <th style="width:5%;" class="text-center">Aksi</th>
                                                    <th>Dusun</th>
                                                    <th>Ketua</th>
                                                    <th>NIK</th>
                                                    <th>RW</th>
                                                    <th>RT</th>
                                                    <th>KK</th>
                                                    <th>L+P</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>1</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('dusun/rw') }}" class="btn bg-purple btn-sm" title="Rincian Sub Wilayah">
                                                                <i class="fa fa-list"></i></a>
                                                            <a href="#" data-toggle="modal" data-target="#modal2" class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                                <a href="#" data-href="#" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" data-target="#confirm-delete">
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Krajan</td>
                                                        <td>Widadi</td>
                                                        <td>3306452265250004</td>
                                                        <td>0</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>3</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>1</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('dusun/rw') }}" class="btn bg-purple btn-sm" title="Rincian Sub Wilayah">
                                                                <i class="fa fa-list"></i></a>
                                                            <a href="#" data-toggle="modal" data-target="#modal2" class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                                <a href="#" data-href="#" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" data-target="#confirm-delete">
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Krajan</td>
                                                        <td>Widadi</td>
                                                        <td>3306452265250004</td>
                                                        <td>0</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>3</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="6" class="text-center">Total</th>
                                                        <th>0</th>
                                                        <th>1</th>
                                                        <th>1</th>
                                                        <th>4</th>
                                                        <th>2</th>
                                                        <th>2</th>
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
                                    <label for="laporanD">Laporan Ditandatangani</label>
                                    <select name="" class="form-control form-control-sm select2" id="laporanD"
                                        style="width: 100%;">
                                        <option value="" selected>Pilih Staf Perangkat Desa</option>
                                        <option value="">Hafid</option>
                                        <option value="">Aulia Rachma L</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Ldiketahui">Laporan Diketahui</label>
                                    <select name="" class="form-control form-control-sm select2" id="Ldiketahui"
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
    </section>
    <!-- /.content -->
</div>


@endsection
