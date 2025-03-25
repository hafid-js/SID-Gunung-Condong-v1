@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Artikel
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Artikel</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <div class="row">
                <div class="col-md-3">
                    <div>
                        <div class="box box-info">
                            <div class="box-body no-padding">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active">
                                        <a href="{{ url('artikel') }}">
                                            Semua Artikel Dinamis
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Kategori Artikel</h3>
                                <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                            Berita Desa
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                             Berita Lokal
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                             Berita Kriminal
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                            Produk Desa
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                            Program Kerja
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                            Peraturan Desa
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                             Peraturan Kebersihan Desa
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                            Laporan Desa
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                            Panduan Layanan Desa
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('artikel') }}">
                                            [Tidak Berkategori]
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Artikel Statis</h3>
                                <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class=""><a href="#">Halaman Statis</a></li>
                                    <li class=""><a href="#">Agenda</a></li>
                                    <li class=""><a href="#">Keuangan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <a href="#" title="Hapus Data" onclick="#"
                                class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i
                                    class="fa fa-trash-o"></i> Hapus Data Terpilih</a>
                        </div>
                        <div class="box-body">
                            <div class="row mepet">
                                <div class="col-sm-2">
                                    <select id="status" class="form-control input-sm select2 select2-hidden-accessible"
                                        data-select2-id="status" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="2">Pilih Status</option>
                                        <option value="1" data-select2-id="3">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="batas">
                            <form action="#" id="mainform" name="mainform" method="post" accept-charset="utf-8">
                                <input type="hidden" name="sidcsrf" value="3260a401907ba18f4d1b699dbd33248a">

                                <div class="table-responsive">
                                    <div id="tabeldata_wrapper"
                                        class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="dataTables_length" id="tabeldata_length"><label>Tampilkan
                                                        <select name="tabeldata_length" aria-controls="tabeldata"
                                                            class="form-control input-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                            <option value="-1">Semua</option>
                                                        </select> entri</label></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div id="tabeldata_filter" class="dataTables_filter"><label>Cari:<input
                                                            type="search" class="form-control input-sm"
                                                            placeholder="kata kunci pencarian"
                                                            aria-controls="tabeldata"></label></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered table-hover dataTable no-footer"
                                                    id="tabeldata" role="grid" aria-describedby="tabeldata_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                                aria-label=""><input type="checkbox" id="checkall"></th>
                                                            <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                                aria-label="NO">NO</th>
                                                            <th class="padat aksi sorting_disabled" rowspan="1" colspan="1"
                                                                aria-label="AKSI">AKSI</th>
                                                            <th nowrap="" class="sorting" tabindex="0"
                                                                aria-controls="tabeldata" rowspan="1" colspan="1"
                                                                aria-label="JUDUL: aktifkan untuk mengurutkan kolom ke atas">
                                                                JUDUL</th>
                                                            <th nowrap="" class="padat sorting" tabindex="0"
                                                                aria-controls="tabeldata" rowspan="1" colspan="1"
                                                                aria-label="HIT: aktifkan untuk mengurutkan kolom ke atas">
                                                                HIT</th>
                                                            <th width="15%" nowrap="" class="sorting_desc" tabindex="0"
                                                                aria-controls="tabeldata" rowspan="1" colspan="1"
                                                                aria-sort="descending"
                                                                aria-label="DIPOSTING PADA: aktifkan untuk mengurutkan kolom ke atas">
                                                                DIPOSTING PADA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class=" padat"><input type="checkbox" name="id_cb[]"
                                                                    value="96"></td>
                                                            <td class=" padat">1</td>
                                                            <td class=" aksi"><a href="{{ url('artikel/form') }}"
                                                                    class="btn bg-orange btn-sm" title="Ubah Data"><i
                                                                        class="fa fa-edit"></i></a> <a href="#"
                                                                    data-href="#" class="btn bg-maroon btn-sm" title="Hapus"
                                                                    data-toggle="modal" data-target="#confirm-delete"><i
                                                                        class="fa fa-trash-o"></i></a> <a href="#"
                                                                    class="btn bg-purple btn-sm" data-remote="false"
                                                                    data-toggle="modal" data-target="#ubah"
                                                                    data-title="Ubah Kategori" title="Ubah Kategori"><i
                                                                        class="fa fa-folder-open"></i></a> <a href="#"
                                                                    class="btn bg-info btn-sm"
                                                                    title="Tutup Komentar Artikel"><i
                                                                        class="fa fa-comment-o"></i></a> <a href="#"
                                                                    class="btn bg-navy btn-sm"
                                                                    title="Non Aktifkan Artikel"><i
                                                                        class="fa fa-unlock"></i></a> <a href="#"
                                                                    class="btn bg-teal btn-sm" title="Jadikan Berita Utama">
                                                                    <i class="fa fa-star-o"></i>
                                                                </a> <a href="#" class="btn bg-gray btn-sm"
                                                                    title="Masukkan ke dalam slide">
                                                                    <i class="fa fa-play"></i>
                                                                </a> <a href="#" target="_blank" class="btn bg-green btn-sm"
                                                                    title="Lihat Artikel"><i class="fa fa-eye"></i></a></td>
                                                            <td>Rapat membangun Komitmen antara Karang Taruna Desa Senggigi
                                                                dengan Taruna Hotel</td>
                                                            <td class=" padat">7 Kali</td>
                                                            <td class="sorting_1">24 Agustus 2016 13:55:10</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div id="tabeldata_processing"
                                                    class="dataTables_processing panel panel-default"
                                                    style="display: none;">Sedang memproses...</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="dataTables_info" id="tabeldata_info" role="status"
                                                    aria-live="polite">Menampilkan 1 sampai 4 dari 4 entri</div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="tabeldata_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button previous disabled"
                                                            id="tabeldata_previous"><a href="#" aria-controls="tabeldata"
                                                                data-dt-idx="0" tabindex="0">Sebelumnya</a></li>
                                                        <li class="paginate_button active"><a href="#"
                                                                aria-controls="tabeldata" data-dt-idx="1" tabindex="0">1</a>
                                                        </li>
                                                        <li class="paginate_button next disabled" id="tabeldata_next"><a
                                                                href="#" aria-controls="tabeldata" data-dt-idx="2"
                                                                tabindex="0">Selanjutnya</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade in" id="ubah" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Ubah Kategori</h4>
                        </div>
                        <div class="fetched-data">
                            <form action="https://berputar.opendesa.id/web/update_kategori/96" method="post" id="validasi">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="box box-danger">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Kategori</label>
                                                        <select class="form-control input-sm required" id="kategori"
                                                            name="kategori" style="width:100%;">
                                                            <option option="" value="">-- Pilih Kategori --</option>
                                                            <option value="1">Berita Desa</option>
                                                            <option value="20"> Berita Lokal</option>
                                                            <option value="21"> Berita Kriminal</option>
                                                            <option value="2">Produk Desa</option>
                                                            <option selected="" value="4">Program Kerja</option>
                                                            <option value="5">Peraturan Desa</option>
                                                            <option value="17"> Peraturan Kebersihan Desa</option>
                                                            <option value="6">Laporan Desa</option>
                                                            <option value="8">Panduan Layanan Desa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-social btn-danger btn-sm pull-left"><i
                                                class="fa fa-times"></i> Batal</button>
                                        <button type="submit" class="btn btn-social btn-info btn-sm" id="ok"><i
                                                class="fa fa-check"></i> Simpan</button>
                                    </div>
                                </div>
                                <input type="hidden" name="sidcsrf" value="f1858ecc5ec6cb2da1cd30a5627c4dac">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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

        </section>
    </div>


@endsection
