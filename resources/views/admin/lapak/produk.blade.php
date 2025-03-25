@extends('admin.layout.layout')

@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                PRODUK
                <small>Daftar Data</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Daftar Data</li>
            </ol>

        </section>

        <section id="maincontent" class="content">

            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-triangle text-red"></i>
                                Konfirmasi</h4>
                        </div>
                        <div class="modal-body btn-info">
                            Apakah Anda yakin ingin menghapus data ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-social btn-warning btn-sm" data-dismiss="modal"><i
                                    class="fa fa-sign-out"></i> Tutup</button>
                            <a class="btn-ok">
                                <div class="btn btn-social btn-danger btn-sm" id="ok-delete"><i class="fa fa-trash-o"></i>
                                    Hapus</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <a href="{{ url('lapak/produk') }}">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="info-box bg-aqua">
                            <span class="info-box-icon"><i class="fa fa-cubes fa-nav"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">PRODUK</span>
                                <span class="info-box-number">1</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">Total : <b>1</b></span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ url('lapak-admin/pelapak') }}">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-users fa-nav"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">PELAPAK</span>
                                <span class="info-box-number">1</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">Total : <b>1</b></span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ url('lapak-admin/kategori') }}">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-tags fa-nav"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">KATEGORI</span>
                                <span class="info-box-number">1</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">Total : <b>1</b></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="{{ url('lapak-admin/produk/form') }}"
                        class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        title="Tambah Data"><i class="fa fa-plus "></i>Tambah</a>
                    <a href="#" title="Hapus Data"
                        onclick="deleteAllBox('mainform','https://berputar.opendesa.id/lapak_admin/produk_delete_all')"
                        class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i
                            class="fa fa-trash-o"></i>
                        Hapus</a>
                    <a href="#"
                        class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Data"><i
                            class="fa fa-print "></i>
                        Cetak</a>
                    <a href="#"
                        class="btn btn-social bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Unduh"><i
                            class="fa fa-download"></i>
                        Unduh</a>
                </div>
                <form id="mainform" name="mainform" method="post">
                    <div class="box-body">
                        <div class="row mepet">
                            <div class="col-sm-2">
                                <select class="form-control input-sm select2 select2-hidden-accessible" id="status"
                                    name="status" data-select2-id="status" tabindex="-1" aria-hidden="true">
                                    <option value="">Pilih Status</option>
                                    <option value="1" selected="" data-select2-id="2">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control input-sm select2 select2-hidden-accessible" id="id_pend"
                                    name="id_pend" data-select2-id="id_pend" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="4">Pilih Pelapak</option>
                                    <option value="1">0720110200700001 - Ari</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control input-sm select2 select2-hidden-accessible"
                                    id="id_produk_kategori" name="id_produk_kategori" data-select2-id="id_produk_kategori"
                                    tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="6">Pilih Kategori</option>
                                    <option value="1">Makanan</option>
                                </select>
                            </div>
                        </div>
                        <hr class="batas">
                        <div class="table-responsive">
                            <div id="tabel-produk_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_length" id="tabel-produk_length"><label>Tampilkan <select
                                                    name="tabel-produk_length" aria-controls="tabel-produk"
                                                    class="form-control input-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="-1">Semua</option>
                                                </select> entri</label></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="tabel-produk_filter" class="dataTables_filter"><label>Cari:<input
                                                    type="search" class="form-control input-sm"
                                                    placeholder="kata kunci pencarian" aria-controls="tabel-produk"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table
                                            class="table table-bordered table-striped dataTable table-hover tabel-daftar no-footer"
                                            id="tabel-produk" role="grid" aria-describedby="tabel-produk_info">
                                            <thead class="bg-gray disabled color-palette">
                                                <tr role="row">
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label=""><input type="checkbox" id="checkall"></th>
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="No">No</th>
                                                    <th class="aksi sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Aksi">Aksi</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tabel-produk"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Pelapak: aktifkan untuk mengurutkan kolom ke atas">
                                                        Pelapak</th>
                                                    <th class="sorting_desc" tabindex="0" aria-controls="tabel-produk"
                                                        rowspan="1" colspan="1" aria-sort="descending"
                                                        aria-label="Produk: aktifkan untuk mengurutkan kolom ke atas">Produk
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="tabel-produk"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Kategori: aktifkan untuk mengurutkan kolom ke atas">
                                                        Kategori</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tabel-produk"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Harga: aktifkan untuk mengurutkan kolom ke atas">Harga
                                                    </th>
                                                    <th class="padat sorting" tabindex="0" aria-controls="tabel-produk"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Satuan: aktifkan untuk mengurutkan kolom ke atas">Satuan
                                                    </th>
                                                    <th class="padat sorting" tabindex="0" aria-controls="tabel-produk"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Potongan: aktifkan untuk mengurutkan kolom ke atas">
                                                        Potongan</th>
                                                    <th class="dt-nowrap sorting" tabindex="0" aria-controls="tabel-produk"
                                                        rowspan="1" colspan="1" style="width: 30%;"
                                                        aria-label="Deskripsi: aktifkan untuk mengurutkan kolom ke atas">
                                                        Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class=" padat"><input type="checkbox" name="id_cb[]" value="1"></td>
                                                    <td class=" padat">1</td>
                                                    <td class=" aksi">
                                                        <a href="{{ url('lapak-admin/produk/form') }}"
                                                            title="Edit Data" class="btn bg-orange btn-sm"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a href="#"
                                                            class="btn bg-navy btn-sm" title="Nonaktifkan Produk"><i
                                                                class="fa fa-unlock"></i></a>
                                                        <a href="#"
                                                            data-href="#"
                                                            class="btn bg-maroon btn-sm" title="Hapus" data-toggle="modal"
                                                            data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                                        <a href="{{ url('lapak/produk/detail') }}"
                                                            class="btn bg-blue btn-sm" title="Tampilkan"
                                                            data-target="#modalBox" data-remote="false" data-toggle="modal"
                                                            data-backdrop="false" data-keyboard="false"
                                                            data-title="Detail Produk"><i class="fa fa-eye"></i></a>
                                                    </td>
                                                    <td>Ari</td>
                                                    <td class="sorting_1">Keripik Singkong</td>
                                                    <td>Makanan</td>
                                                    <td>Rp. 10.000</td>
                                                    <td class=" padat">gram</td>
                                                    <td class=" padat">0%</td>
                                                    <td class=" dt-nowrap">Keripik Singkong Enak</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="tabel-produk_processing" class="dataTables_processing panel panel-default"
                                            style="display: none;">Sedang memproses...</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="tabel-produk_info" role="status"
                                            aria-live="polite">Menampilkan 1 sampai 1 dari 1 entri</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="tabel-produk_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" id="tabel-produk_previous"><a
                                                        href="#" aria-controls="tabel-produk" data-dt-idx="0"
                                                        tabindex="0">Sebelumnya</a></li>
                                                <li class="paginate_button active"><a href="#" aria-controls="tabel-produk"
                                                        data-dt-idx="1" tabindex="0">1</a></li>
                                                <li class="paginate_button next disabled" id="tabel-produk_next"><a href="#"
                                                        aria-controls="tabel-produk" data-dt-idx="2"
                                                        tabindex="0">Selanjutnya</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="sidcsrf" value="dda541af765cd614fe1d1d0c4994cfc8">
                </form>
            </div>

        </section>
    </div>



@endsection
