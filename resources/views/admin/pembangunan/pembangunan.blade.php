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
                            <li class="breadcrumb-item">
                                <a href="#"><i class="fa fa-home"></i> Beranda</a>
                            </li>
                            <li class="breadcrumb-item active">Pembangunan</li>
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
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('pembangunan/form') }}"
                                                class="btn btn-social mt-1 mb-1 btn-success btn-sm"
                                                title="Tambah Data">
                                                <i class="fa fa-plus "></i> Tambah
                                            </a>
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
                                                <thead class="thead-gray disabled color-palette">
                                                    <tr>
                                                        <th>NO</th>
                                                        <th class="text-center">AKSI</th>
                                                        <th>NAMA KEGIATAN</th>
                                                        <th>SUMBER DANA</th>
                                                        <th>ANGGARAN</th>
                                                        <th>PERSENTASE</th>
                                                        <th>VOLUME</th>
                                                        <th>TAHUN</th>
                                                        <th>PELAKSANA</th>
                                                        <th>LOKASI</th>
                                                        <th>GAMBAR</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('pembangunan/form') }}"
                                                                class="btn bg-orange btn-sm" title="Ubah Data">
                                                                <i class="fa fa-edit text-white"></i>
                                                            </a>
                                                            <a href="{{ url('maps') }}" class="btn bg-green btn-sm"
                                                                title="Lokasi Pembangunan">
                                                                <i class="fa fa-map text-white"></i>
                                                            </a>
                                                            <a href="{{ url('pembangunan/dokumentasi') }}"
                                                                class="btn bg-purple btn-sm"
                                                                title="Rincian Dokumentasi Kegiatan">
                                                                <i class="fa fa-list-ol text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-navy btn-sm" title="Nonaktifkan">
                                                                <i class="fa fa-unlock text-white"></i>
                                                            </a>
                                                            <a href="#" data-target="#hapus" class="btn bg-danger btn-sm"
                                                                title="Hapus Data" data-toggle="modal"
                                                                 title="Hapus Data">
                                                                <i class="fa fa-trash text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-info btn-sm" title="Lihat Summary">
                                                                <i class="fa fa-eye text-white"></i>
                                                            </a>
                                                        </td>
                                                        <td>Perbaikan Saluran Irigasi</td>
                                                        <td>Pendapatan Asli Desa (PAD)</td>
                                                        <td>Rp 772.000</td>
                                                        <td>0%</td>
                                                        <td>120 x 50 x 30</td>
                                                        <td>2025</td>
                                                        <td>Hadi Sulistyo.SH</td>
                                                        <td>Jl.Kartasura No.7</td>
                                                        <td>
                                                            <div class="product-img">
                                                                <img src="https://depobeta.com/pub/media/Artikel/Sistem_Irigasi/Irigas_2.png"
                                                                    class="penduduk_kecil" alt="Gambar Dokumentasi" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('pembangunan/form') }}"
                                                                class="btn bg-orange btn-sm" title="Ubah Data">
                                                                <i class="fa fa-edit text-white"></i>
                                                            </a>
                                                            <a href="{{ url('maps') }}" class="btn bg-green btn-sm"
                                                                title="Lokasi Pembangunan">
                                                                <i class="fa fa-map text-white"></i>
                                                            </a>
                                                            <a href="{{ url('pembangunan/dokumentasi') }}"
                                                                class="btn bg-purple btn-sm"
                                                                title="Rincian Dokumentasi Kegiatan">
                                                                <i class="fa fa-list-ol text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-navy btn-sm" title="Nonaktifkan">
                                                                <i class="fa fa-unlock text-white"></i>
                                                            </a>
                                                            <a href="#" data-target="#hapus" class="btn bg-danger btn-sm"
                                                                title="Hapus Data" data-toggle="modal"
                                                                 title="Hapus Data">
                                                                <i class="fa fa-trash text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-info btn-sm" title="Lihat Summary">
                                                                <i class="fa fa-eye text-white"></i>
                                                            </a>
                                                        </td>
                                                        <td>Perbaikan Saluran Irigasi</td>
                                                        <td>Pendapatan Asli Desa (PAD)</td>
                                                        <td>Rp 772.000</td>
                                                        <td>0%</td>
                                                        <td>120 x 50 x 30</td>
                                                        <td>2025</td>
                                                        <td>Hadi Sulistyo.SH</td>
                                                        <td>Jl.Kartasura No.7</td>
                                                        <td>
                                                            <div class="product-img">
                                                                <img src="https://depobeta.com/pub/media/Artikel/Sistem_Irigasi/Irigas_2.png"
                                                                    class="penduduk_kecil" alt="Gambar Dokumentasi" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('pembangunan/form') }}"
                                                                class="btn bg-orange btn-sm" title="Ubah Data">
                                                                <i class="fa fa-edit text-white"></i>
                                                            </a>
                                                            <a href="{{ url('maps') }}" class="btn bg-green btn-sm"
                                                                title="Lokasi Pembangunan">
                                                                <i class="fa fa-map text-white"></i>
                                                            </a>
                                                            <a href="{{ url('pembangunan/dokumentasi') }}"
                                                                class="btn bg-purple btn-sm"
                                                                title="Rincian Dokumentasi Kegiatan">
                                                                <i class="fa fa-list-ol text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-navy btn-sm" title="Nonaktifkan">
                                                                <i class="fa fa-unlock text-white"></i>
                                                            </a>
                                                            <a href="#" data-target="#hapus" class="btn bg-danger btn-sm"
                                                                title="Hapus Data" data-toggle="modal"
                                                                 title="Hapus Data">
                                                                <i class="fa fa-trash text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-info btn-sm" title="Lihat Summary">
                                                                <i class="fa fa-eye text-white"></i>
                                                            </a>
                                                        </td>
                                                        <td>Perbaikan Saluran Irigasi</td>
                                                        <td>Pendapatan Asli Desa (PAD)</td>
                                                        <td>Rp 772.000</td>
                                                        <td>0%</td>
                                                        <td>120 x 50 x 30</td>
                                                        <td>2025</td>
                                                        <td>Hadi Sulistyo.SH</td>
                                                        <td>Jl.Kartasura No.7</td>
                                                        <td>
                                                            <div class="product-img">
                                                                <img src="https://depobeta.com/pub/media/Artikel/Sistem_Irigasi/Irigas_2.png"
                                                                    class="penduduk_kecil" alt="Gambar Dokumentasi" />
                                                            </div>
                                                        </td>
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
                            <div class="card-header" style="background-color: #ffffff;">
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
    <!-- End Content Wrapper -->

@endsection
