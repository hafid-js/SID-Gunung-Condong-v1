@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Artikel</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item active">Artikel</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content rem85">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div style="display: none;" id="tampilBerhasil">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                Success alert preview. This alert is dismissable.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <a href="#" class="btn btn-primary btn-block mb-3 text-white">Semua Artikel Dinamis</a>

                        <div class="card card-primary card-outline">
                            <div class="card-header" style="background-color: #ffffff;" style="border-bottom: 0px solid #f4f4f4;">
                                <h3 class="card-title">Kategori Artikel</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item active">
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            Berita Desa
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link"> &emsp;Berita Lokal
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link"> &emsp;Berita Kriminal
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            Produk Desa
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            Program Kerja
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            Peraturan Desa
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link"> &emsp;Peraturan Kebersihan Desa
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            Laporan Desa
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            Panduan Layanan Desa
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            [Tidak Berkategori]
                                        </a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header" style="background-color: #ffffff;" style="border-bottom: 0px solid #f4f4f4;">
                                <h3 class="card-title">Artikel Statis</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item active">
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            Halaman Statis
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            Agenda
                                        </a>
                                    </li>
                                    <li class="nav-item" style="border-bottom: 1px solid #f4f4f4;">
                                        <a href="#" class="nav-link">
                                            Keuangan
                                        </a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('artikel/form') }}" id="btn-add"
                                                    class="btn btn-social mt-1 mb-1 btn-success btn-sm"><i
                                                        class="fa fa-plus"></i> Tambah Berita Desa</a>
                                                <a href="#"
                                                    class="btn btn-social mt-1 mb-1 bg-danger btn-sm visible-xs-block"><i
                                                        class="fa fa-trash"></i> Hapus Data Terpilih</a>
                                                <a href="#"
                                                    class="btn btn-social mt-1 mb-1 bg-danger btn-sm visible-xs-block"><i
                                                        class="fa fa-trash"></i> Hapus Artikel Kategori Berita</a>
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

                                        <div class="col-sm-12 col-md-3 col-lg-3">
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
                                                        <th>
                                                            <input type="checkbox" id="check-all" />
                                                        </th>
                                                        <th style="width:5%;">NO</th>
                                                        <th style="width:5%;" class="text-center">Aksi</th>
                                                        <th>JUDUL</th>
                                                        <th style="width:6%;">HIT</th>
                                                        <th style="width:17%;">DIPOSTING PADA</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="font-12">
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>1</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('artikel/form') }}" class="btn bg-orange btn-sm"
                                                                title="Ubah Data">
                                                                <i class="fa fa-edit text-white"></i>
                                                            </a>
                                                            <a href="#" data-dismiss="modal" class="btn bg-danger btn-sm"
                                                                data-toggle="modal" data-target="#modal1" title="Hapus">
                                                                <i class="fa fa-trash text-white"></i>
                                                            </a>
                                                            <a href="#" data-dismiss="modal" class="btn bg-purple btn-sm"
                                                                data-toggle="modal" data-target="#modal2"
                                                                title="Ubah Kategori">
                                                                <i class="fa fa-folder-open text-white"></i>
                                                            </a>
                                                            <a href="#" id="berhasil" class="btn bg-info btn-sm"
                                                                title="Tutup Komentar Artikel">
                                                                <i class="fa fa-comment-o text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-navy btn-sm"
                                                                title="Non Aktifkan Artikel">
                                                                <i class="fa fa-unlock text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-teal btn-sm"
                                                                title="Jadikan Berita Utama">
                                                                <i class="fa fa-star-o text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-gray btn-sm"
                                                                title="Masukkan ke dalam slide">
                                                                <i class="fa fa-play text-white"></i>
                                                            </a>
                                                            <a href="#" class="btn bg-green btn-sm" title="Lihat Artikel">
                                                                <i class="fa fa-eye text-white"></i>
                                                            </a>
                                                        </td>
                                                        <td>Rapat membangun Komitmen antara Karang Taruna Desa Senggigi
                                                            dengan Taruna Hotel</td>
                                                        <td>2 Kali</td>
                                                        <td>24 Agustus 2016 13:55:10</td>
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

    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal2Label">Ubah Kategori</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="card card-outline card-danger">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <select class="form-control form-control-sm">
                                            <option>Berita Desa</option>
                                            <option>&emsp;Berita Lokal</option>
                                            <option>&emsp;Berita Kriminal</option>
                                            <option>Produk Desa</option>
                                            <option>Program Kerja</option>
                                            <option>Peraturan Desa</option>
                                            <option>&emsp;Peraturan Kebersihan Desa</option>
                                            <option>Laporan Desa</option>
                                            <option>Panduan Layanan Desa</option>
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
        </div>
    </div>


@endsection
