@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Wilayah Administratif RW</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item active">Wilayah Administratif RW</li>
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
                                                <a href="{{ url('dusun/rw/form') }}"
                                                    class="btn btn-social mt-1 mb-1 btn-success btn-sm"
                                                    title="Tambah Kategori"><i class="fa fa-plus "></i> Tambah</a>
                                                <a href="{{ url('dusun/rw/cetak') }}" title="Cetak Data" class="btn mt-1 mb-1 bg-purple btn-sm"><i
                                                        class="fa fa-print"></i>
                                                    Cetak</a>
                                                <a href="#" title="Unduh Data" class="btn mt-1 mb-1 bg-navy btn-sm"><i
                                                        class="fa fa-download"></i>
                                                    Unduh</a>
                                                    <a href="{{ url('dusun') }}" title="Kembali ke Wilayah Administratif Dusun"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"
                                                    data-title="Kembali ke Wilayah Administratif Dusun"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Kembali ke Wilayah Administratif Dusun</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="card-body">
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-12">
                                                    <div class="box-header with-border">
                                                        <strong>Dusun - Krajan</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0 justify-content-between">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-md-sm-12 col-md-12 col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <thead class="thead-gray disabled">
                                                        <tr>
                                                            <th style="width:5%;">NO</th>
                                                            <th style="width:5%;" class="text-center">Aksi</th>
                                                            <th>RW</th>
                                                            <th>Ketua RW</th>
                                                            <th>NIK Ketua RW</th>
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
                                                            <td>1</td>
                                                            <td class="aksi">
                                                                <a href="{{ url('dusun/rt') }}" class="btn bg-purple btn-sm"
                                                                    title="Rincian Sub Wilayah">
                                                                    <i class="fa fa-list"></i></a>
                                                                    <a href="{{ url('dusun/rw/form') }}"
                                                                    class="btn bg-orange btn-sm" title="Ubah">
                                                                    <i class="fa fa-edit text-white"></i>
                                                                </a>
                                                                    <a href="#" data-href="#" data-target="#hapus" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal">
                                                                        <i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                            <td>001</td>
                                                            <td>WIDADI</td>
                                                            <td>3306452265250004</td>
                                                            <td>0</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>3</td>
                                                            <td>1</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td class="aksi">
                                                                <a href="{{ url('dusun/rt') }}" class="btn bg-purple btn-sm"
                                                                    title="Rincian Sub Wilayah">
                                                                    <i class="fa fa-list"></i></a>
                                                            </td>
                                                            <td colspan="2">Pergunakan RW ini apabila RT berada langsung di
                                                                bawah RW, yaitu tidak ada RW</td>
                                                            <td>3306452265250004</td>
                                                            <td>0</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>3</td>
                                                            <td>1</td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="5" class="text-center">Total</th>
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

            <!-- first Modal -->
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
        </section>
        <!-- /.content -->
    </div>


@endsection
