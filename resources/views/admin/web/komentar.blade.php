@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Komentar
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ '/' }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Komentar</li>
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
                <div class="col-md-12">
                    <div class="box box-info" data-select2-id="9">
                        <div class="box-header with-border">
                            <a href="#" title="Hapus Data"
                                onclick="#"
                                class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i
                                    class="fa fa-trash-o"></i> Hapus</a>
                        </div>
                        <div class="box-body" data-select2-id="8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" data-select2-id="7">
                                        <form id="mainform" name="mainform" method="post" data-select2-id="mainform">
                                            <div class="row mepet" data-select2-id="6">
                                                <div class="col-sm-2" data-select2-id="5">
                                                    <select name="status" id="status"
                                                        class="form-control input-sm select2 select2-hidden-accessible"
                                                        data-select2-id="status" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="2">Semua</option>
                                                        <option value="1" data-select2-id="3">Aktif</option>
                                                        <option value="2" data-select2-id="10">Tidak Aktif</option>
                                                        <option value="3" data-select2-id="11">Belum Dibaca</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="batas">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="table-responsive">
                                                        <div id="tabeldata_wrapper"
                                                            class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="dataTables_length" id="tabeldata_length">
                                                                        <label>Tampilkan <select name="tabeldata_length"
                                                                                aria-controls="tabeldata"
                                                                                class="form-control input-sm">
                                                                                <option value="10">10</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                                <option value="-1">Semua</option>
                                                                            </select> entri</label></div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div id="tabeldata_filter" class="dataTables_filter">
                                                                        <label>Cari:<input type="search"
                                                                                class="form-control input-sm"
                                                                                placeholder="kata kunci pencarian"
                                                                                aria-controls="tabeldata"></label></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table
                                                                        class="table table-bordered table-hover dataTable no-footer"
                                                                        id="tabeldata" role="grid"
                                                                        aria-describedby="tabeldata_info">
                                                                        <thead class="bg-gray disabled color-palette">
                                                                            <tr role="row">
                                                                                <th class="padat sorting_disabled"
                                                                                    rowspan="1" colspan="1" aria-label="">
                                                                                    <input type="checkbox" id="checkall">
                                                                                </th>
                                                                                <th class="padat sorting_disabled"
                                                                                    rowspan="1" colspan="1" aria-label="No">
                                                                                    No</th>
                                                                                <th class="aksi sorting_disabled"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Aksi">Aksi</th>
                                                                                <th class="sorting_disabled" rowspan="1"
                                                                                    colspan="1" aria-label="Pengirim">
                                                                                    Pengirim</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="tabeldata" rowspan="1"
                                                                                    colspan="1"
                                                                                    aria-label="Isi Komentar: aktifkan untuk mengurutkan kolom ke atas">
                                                                                    Isi Komentar</th>
                                                                                <th class="sorting_disabled" rowspan="1"
                                                                                    colspan="1"
                                                                                    aria-label="No. HP Pengirim">No. HP
                                                                                    Pengirim</th>
                                                                                <th class="sorting_disabled" rowspan="1"
                                                                                    colspan="1" aria-label="Email Pengirim">
                                                                                    Email Pengirim</th>
                                                                                <th class="sorting_disabled" rowspan="1"
                                                                                    colspan="1" aria-label="Judul Artikel">
                                                                                    Judul Artikel</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="tabeldata" rowspan="1"
                                                                                    colspan="1"
                                                                                    aria-label="Aktif: aktifkan untuk mengurutkan kolom ke atas">
                                                                                    Aktif</th>
                                                                                <th class="sorting_desc" tabindex="0"
                                                                                    aria-controls="tabeldata" rowspan="1"
                                                                                    colspan="1"
                                                                                    aria-label="Dimuat Pada : aktifkan untuk mengurutkan kolom ke atas"
                                                                                    aria-sort="descending">Dimuat Pada </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr role="row" class="odd">
                                                                                <td class=" padat"><input type="checkbox"
                                                                                        name="id_cb[]" value="1"></td>
                                                                                <td class=" padat">1</td>
                                                                                <td class=" aksi"><a
                                                                                        href="{{ url('komentar/form') }}"
                                                                                        class="btn btn-warning btn-sm"
                                                                                        title="Ubah Data"><i
                                                                                            class="fa fa-edit"></i></a> <a
                                                                                        href="{{ url('komentar/balas') }}"
                                                                                        class="btn btn-info btn-sm"
                                                                                        title="Balas Komentar"><i
                                                                                            class="fa fa-mail-forward"></i></a>
                                                                                    <a href="#"
                                                                                        class="btn bg-navy btn-sm"
                                                                                        title="Aktifkan"><i
                                                                                            class="fa fa-lock"></i></a> <a
                                                                                        href="#"
                                                                                        data-href="#"
                                                                                        class="btn bg-maroon btn-sm"
                                                                                        title="Hapus Data"
                                                                                        data-toggle="modal"
                                                                                        data-target="#confirm-delete"><i
                                                                                            class="fa fa-trash"></i></a>
                                                                                </td>
                                                                                <td>Fulan</td>
                                                                                <td>sejarah yang menarik sekali</td>
                                                                                <td>082322766544</td>
                                                                                <td>fulannalu@gmail.com</td>
                                                                                <td><a href="#"
                                                                                        target="_blank">Sejarah Desa</a>
                                                                                </td>
                                                                                <td>Tidak</td>
                                                                                <td class="sorting_1">06 Februari 2025
                                                                                    12:50:20</td>
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
                                                                    <div class="dataTables_info" id="tabeldata_info"
                                                                        role="status" aria-live="polite">Menampilkan 1
                                                                        sampai 1 dari 1 entri</div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                                        id="tabeldata_paginate">
                                                                        <ul class="pagination">
                                                                            <li class="paginate_button previous disabled"
                                                                                id="tabeldata_previous"><a href="#"
                                                                                    aria-controls="tabeldata"
                                                                                    data-dt-idx="0"
                                                                                    tabindex="0">Sebelumnya</a></li>
                                                                            <li class="paginate_button active"><a href="#"
                                                                                    aria-controls="tabeldata"
                                                                                    data-dt-idx="1" tabindex="0">1</a></li>
                                                                            <li class="paginate_button next disabled"
                                                                                id="tabeldata_next"><a href="#"
                                                                                    aria-controls="tabeldata"
                                                                                    data-dt-idx="2"
                                                                                    tabindex="0">Selanjutnya</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div><input type="hidden" name="sidcsrf"
                                                value="bb6965ce226d191424f71adbd9c1a0d5">
                                        </form>
                                    </div>
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
                                    <h4 class="modal-title" id="myModalLabel"><i
                                            class="fa fa-exclamation-triangle text-red"></i> Konfirmasi</h4>
                                </div>
                                <div class="modal-body btn-info">
                                    Apakah Anda yakin ingin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-social btn-warning btn-sm" data-dismiss="modal"><i
                                            class="fa fa-sign-out"></i> Tutup</button>
                                    <a class="btn-ok">
                                        <div class="btn btn-social btn-danger btn-sm" id="ok-delete"><i
                                                class="fa fa-trash-o"></i> Hapus</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal2Label">Tambah</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control form-control-sm" name="" id="">
                            </div>
                            <div class="form-group">
                                <label>Jenis Link</label>
                                <select class="form-control form-control-sm" id="linkMenu">
                                    <option selected>-- Pilih Jenis Link --</option>
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
                            <div class="form-group" style="display: none;" id="tampilLinkMenu">
                                <label>Link</label>
                                <select class="form-control form-control-sm">
                                    <option selected>-- Pilih Artikel Statis --</option>
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
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control form-control-sm" style="width: 100%;" id="status">
                                    <option selected="selected">Aktif</option>
                                    <option>Tidak Aktif</option>
                                </select>
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


@endsection
