@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Pengelolaan Lembaga
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Pengelolaan Lembaga</li>
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
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <a href="{{ url('lembaga-desa/form') }}" title="Tambah"
                                class="btn btn-social bg-olive btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                                    class="fa fa-plus"></i> Tambah</a>
                            <a href="#" title="Hapus"
                                onclick="#"
                                class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i
                                    class="fa fa-trash-o"></i> Hapus
                            </a>
                            <a href="#"
                                class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                                data-remote="false" data-toggle="modal" data-target="#cetak" data-title="Cetak"><i
                                    class="fa fa-print "></i> Cetak</a>
                            <a href="#"
                                class="btn btn-social bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                                data-remote="false" data-toggle="modal" data-target="#unduh" data-title="Unduh"><i
                                    class="fa fa-download"></i> Unduh</a>
                            <a href="{{ url('lembaga-desa/kategori') }}"
                                class="btn btn-social bg-orange btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                                title="Kategori">
                                <i class="fa fa fa-list"></i>Kategori
                            </a>
                            <a href="#"
                                class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                                    class="fa fa-refresh"></i>Bersihkan</a>
                        </div>
                        <div class="box-body">
                            <div class="row mepet">
                                <div class="col-sm-2">
                                    <select id="status_dasar"
                                        class="form-control input-sm select2 select2-hidden-accessible" name="status_dasar"
                                        data-select2-id="status_dasar" tabindex="-1" aria-hidden="true">
                                        <option value="0">Pilih Status</option>
                                        <option value="1" selected="" data-select2-id="2">Aktif</option>
                                        <option value="2">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select id="filter" class="form-control input-sm select2 select2-hidden-accessible"
                                        name="filter" data-select2-id="filter" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="4">Pilih Kategori Lembaga</option>
                                        <option value="3">Badan Desa</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="batas">
                            <form action="#" id="mainform" name="mainform" method="post"
                                accept-charset="utf-8">
                                <input type="hidden" name="sidcsrf" value="b79161e0866ad07c9d5b327b01ec335f">

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
                                                <table
                                                    class="table table-bordered table-hover tabel-daftar dataTable no-footer"
                                                    id="tabeldata" role="grid" aria-describedby="tabeldata_info">
                                                    <thead class="bg-gray">
                                                        <tr role="row">
                                                            <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                                aria-label=""><input type="checkbox" id="checkall"></th>
                                                            <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                                aria-label="No">No</th>
                                                            <th class="aksi sorting_disabled" rowspan="1" colspan="1"
                                                                aria-label="Aksi">Aksi</th>
                                                            <th class="padat sorting_asc" tabindex="0"
                                                                aria-controls="tabeldata" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="Kode Lembaga: aktifkan untuk mengurutkan kolom menurun">
                                                                Kode Lembaga</th>
                                                            <th class="sorting" tabindex="0" aria-controls="tabeldata"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Nama Lembaga: aktifkan untuk mengurutkan kolom ke atas">
                                                                Nama Lembaga</th>
                                                            <th class="padat sorting" tabindex="0" aria-controls="tabeldata"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Ketua Lembaga: aktifkan untuk mengurutkan kolom ke atas">
                                                                Ketua Lembaga</th>
                                                            <th class="padat sorting" tabindex="0" aria-controls="tabeldata"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Kategori Lembaga: aktifkan untuk mengurutkan kolom ke atas">
                                                                Kategori Lembaga</th>
                                                            <th class="padat sorting" tabindex="0" aria-controls="tabeldata"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Jumlah Anggota Lembaga: aktifkan untuk mengurutkan kolom ke atas">
                                                                Jumlah Anggota Lembaga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class=" padat"><input type="checkbox" name="id_cb[]"
                                                                    value="2"></td>
                                                            <td class=" padat">1</td>
                                                            <td class=" aksi"><a
                                                                    href="{{ url('lembaga-desa/detail') }}"
                                                                    class="btn bg-purple btn-sm" title="Rincian"><i
                                                                        class="fa fa-list-ol"></i></a> <a
                                                                    href="{{ url('lembaga-desa/form') }}"
                                                                    class="btn bg-orange btn-sm" title="Ubah Kategori"><i
                                                                        class="fa fa-edit"></i></a> </td>
                                                            <td class="padat sorting_1">BPD</td>
                                                            <td>Badan Permusyawaratan Desa</td>
                                                            <td class=" padat">Ari</td>
                                                            <td class=" padat">Badan Desa</td>
                                                            <td class=" padat">1</td>
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
                                                    aria-live="polite">Menampilkan 1 sampai 1 dari 1 entri</div>
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

        </section>
    </div>

    <div class="modal fade in" id="cetak" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Cetak Data</h4>
                </div>
                <div class="fetched-data"><form id="validasi" action="#" method="post" target="_blank">
<div class="modal-body">
            <div class="form-group">
        <label for="pamong_ttd">Laporan Ditandatangani</label>
        <select class="form-control input-sm select2 required select2-hidden-accessible" name="pamong_ttd" data-select2-id="37" tabindex="-1" aria-hidden="true">
            <option value="" data-select2-id="39">Pilih Staf Pemerintah Desa</option>
                                <option value="1">Ari (Pj. Kepala Desa)</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="38" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-pamong_ttd-1s-container"><span class="select2-selection__rendered" id="select2-pamong_ttd-1s-container" role="textbox" aria-readonly="true" title="Pilih Staf Pemerintah Desa">Pilih Staf Pemerintah Desa</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </div>
    <div class="form-group">
        <label for="pamong_ketahui">Laporan Diketahui</label>
        <select class="form-control input-sm select2 required select2-hidden-accessible" name="pamong_ketahui" data-select2-id="40" tabindex="-1" aria-hidden="true">
            <option value="">Pilih Staf Pemerintah Desa</option>
                                <option value="1" selected="" data-select2-id="42">Ari (Pj. Kepala Desa)</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="41" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-pamong_ketahui-c6-container"><span class="select2-selection__rendered" id="select2-pamong_ketahui-c6-container" role="textbox" aria-readonly="true" title="Ari (Pj. Kepala Desa)">Ari (Pj. Kepala Desa)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </div>
</div>
<div class="modal-footer">
    <button type="reset" class="btn btn-social btn-danger btn-sm pull-left"><i class="fa fa-times"></i> Batal</button>
    <button type="submit" class="btn btn-social btn-info btn-sm"><i class="fa fa-check"></i> Cetak</button>
</div>

</div>
            </div>
        </div>
    </div>


    <div class="modal fade in" id="unduh" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Unduh Data</h4>
                </div>
                <div class="fetched-data"><form id="validasi" action="#" method="post" target="_blank">
<div class="modal-body">
            <div class="form-group">
        <label for="pamong_ttd">Laporan Ditandatangani</label>
        <select class="form-control input-sm select2 required select2-hidden-accessible" name="pamong_ttd" data-select2-id="37" tabindex="-1" aria-hidden="true">
            <option value="" data-select2-id="39">Pilih Staf Pemerintah Desa</option>
                                <option value="1">Ari (Pj. Kepala Desa)</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="38" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-pamong_ttd-1s-container"><span class="select2-selection__rendered" id="select2-pamong_ttd-1s-container" role="textbox" aria-readonly="true" title="Pilih Staf Pemerintah Desa">Pilih Staf Pemerintah Desa</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </div>
    <div class="form-group">
        <label for="pamong_ketahui">Laporan Diketahui</label>
        <select class="form-control input-sm select2 required select2-hidden-accessible" name="pamong_ketahui" data-select2-id="40" tabindex="-1" aria-hidden="true">
            <option value="">Pilih Staf Pemerintah Desa</option>
                                <option value="1" selected="" data-select2-id="42">Ari (Pj. Kepala Desa)</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="41" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-pamong_ketahui-c6-container"><span class="select2-selection__rendered" id="select2-pamong_ketahui-c6-container" role="textbox" aria-readonly="true" title="Ari (Pj. Kepala Desa)">Ari (Pj. Kepala Desa)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </div>
</div>
<div class="modal-footer">
    <button type="reset" class="btn btn-social btn-danger btn-sm pull-left"><i class="fa fa-times"></i> Batal</button>
    <button type="submit" class="btn btn-social btn-info btn-sm"><i class="fa fa-check"></i> Cetak</button>
</div>
</div>
            </div>
        </div>
    </div>


@endsection
