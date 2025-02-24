@extends('admin.layout.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Data Penduduk</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="fa fa-home"></i> Beranda</a>
                            </li>
                            <li class="breadcrumb-item active">Data Penduduk</li>
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

                                                <a href="{{ url('lapak-admin/produk/form') }}"
                                                    class="btn btn-social mt-1 mb-1 btn-success btn-sm" title="Tambah Produk">
                                                    <i class="fa fa-plus "></i> <span class="btn-label">&nbsp;Tambah</span>
                                                </a>
                                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#hapus"
                                                    class="btn mt-1 mb-1 btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>&nbsp;Hapus Data Terpilih
                                                </a>
                                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#cetak"
                                                    class="btn mt-1 mb-1 bg-purple btn-sm" title="Cetak">
                                                    <i class="fa fa-print"></i>&nbsp;Cetak
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
                                                <option>Pilih Status Hidup</option>
                                                <option>Tetap</option>
                                                <option>Tidak Tetap</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-3 col-lg-2" style="margin-right: -25px;">
                                            <select class="form-control form-control-sm select2" style="width: 100%;">
                                                <option>Pilih Status Dasar</option>
                                                <option>Hidup</option>
                                                <option>Mati</option>
                                                <option>Pindah</option>
                                                <option>Hilang</option>
                                                <option>Pergi</option>
                                                <option>Tidak Valid</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-3 col-lg-2" style="margin-right: -25px;">
                                            <select class="form-control form-control-sm select2" style="width: 100%;">
                                                <option>Pilih Jenis Kelamin</option>
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-3 col-lg-2" style="margin-right: -25px;">
                                            <select class="form-control form-control-sm select2" style="width: 100%;">
                                                <option>Pilih Dusun</option>
                                                <option>Krajan</option>
                                                <option>Kepudang</option>
                                                <option>Karanganyar</option>
                                                <option>Kemplung</option>
                                                <option>Brembet</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="row">
                                        <div class="col-md-sm-12 col-md-12 col-lg-12">
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-hover bordered">
                                                    <thead class="thead-gray disabled color-palette">
                                                        <tr>
                                                            <th style="width:4%;">
                                                                <input type="checkbox" id="check-all" />
                                                            </th>
                                                            <th nowrap="" rowspan="1" colspan="1">NO</th>
                                                            <th nowrap="" rowspan="1" colspan="1">AKSI</th>
                                                            <th nowrap="" rowspan="1" colspan="1">FOTO</th>
                                                            <th nowrap="" rowspan="1" colspan="1">NIK</th>
                                                            <th nowrap="" rowspan="1" colspan="1">TAG ID CARD</th>
                                                            <th nowrap="" rowspan="1" colspan="1">NAMA</th>
                                                            <th nowrap="" rowspan="1" colspan="1" style="width:10%;">NO.KK</th>
                                                            <th nowrap="" rowspan="1" colspan="1" >NAMA AYAH</th>
                                                            <th nowrap="" rowspan="1" colspan="1" style="width:15%;">NAMA IBU</th>
                                                            <th nowrap="" rowspan="1" colspan="1">NO. RUMAH TANGGA</th>
                                                            <th nowrap="" rowspan="1" colspan="1">ALAMAT</th>
                                                            <th nowrap="" rowspan="1" colspan="1">DUSUN</th>
                                                            <th nowrap="" rowspan="1" colspan="1">RW</th>
                                                            <th nowrap="" rowspan="1" colspan="1">RT</th>
                                                            <th nowrap="" rowspan="1" colspan="1">PENDIDIKAN DALAM KK</th>
                                                            <th nowrap="" rowspan="1" colspan="1">UMUR</th>
                                                            <th nowrap="" rowspan="1" colspan="1">PEKERJAAN</th>
                                                            <th nowrap="" rowspan="1" colspan="1">KAWIN</th>
                                                            <th nowrap="" rowspan="1" colspan="1">TGL PERISTIWA</th>
                                                            <th nowrap="" rowspan="1" colspan="1">TGL TERDAFTAR</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="background-color:#f2dede;">
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="check-item" />
                                                            </td>
                                                            <td>1</td>
                                                            <td class=" aksi"><div class="btn-group open">
                                                                <button type="button" class="btn btn-social btn-info btn-sm" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                                                <div class="dropdown-menu" role="menu">
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i> Hapus</a>
                                                                  </div>
                                                            </div></td>

                                                            <td><img class="penduduk_kecil" src="https://berputar.opendesa.id/assets/images/pengguna/kuser.png" alt="Foto Penduduk"></td>
                                                            <td><a href="#">0531912200900002</a></td>
                                                            <td>-</td>
                                                            <td>JUNAIDI EFENDI</td>
                                                            <td><a href="#">0531912200900001</a></td>
                                                            <td>KROMO SEMITO</td>
                                                            <td>MAYA MARIAMAH</td>
                                                            <td>-</td>
                                                            <td>Jl. Jenderal Sudirman RT - / RW - Dusun -</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>SLTA / SEDERAJAT</td>
                                                            <td>53</td>
                                                            <td>BURUH HARIAN LEPAS</td>
                                                            <td>KAWIN BELUM TERCATAT</td>
                                                            <td>14 Februari 2025</td>
                                                            <td>14 Februari 2025</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" class="check-item" />
                                                            </td>
                                                            <td>4</td>
                                                            <td class=" aksi"><div class="btn-group open">
                                                                <button type="button" class="btn btn-social btn-info btn-sm" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                                                                <div class="dropdown-menu" role="menu">
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i> Hapus</a>
                                                                  </div>
                                                            </div></td>

                                                            <td><img class="penduduk_kecil" src="https://berputar.opendesa.id/assets/images/pengguna/wuser.png" alt="Foto Penduduk"></td>
                                                            <td><a href="#">0531912200900002</a></td>
                                                            <td>-</td>
                                                            <td>JUNAIDI EFENDI</td>
                                                            <td><a href="#">0531912200900001</a></td>
                                                            <td>KROMO SEMITO</td>
                                                            <td>MAYA MARIAMAH</td>
                                                            <td>-</td>
                                                            <td>Jl. Jenderal Sudirman RT - / RW - Dusun -</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>SLTA / SEDERAJAT</td>
                                                            <td>53</td>
                                                            <td>BURUH HARIAN LEPAS</td>
                                                            <td>KAWIN BELUM TERCATAT</td>
                                                            <td>14 Februari 2025</td>
                                                            <td>14 Februari 2025</td>
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







