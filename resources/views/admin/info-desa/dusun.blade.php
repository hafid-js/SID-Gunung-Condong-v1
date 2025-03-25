@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Wilayah Administratif Dusun
        </h1>

        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
            </li>
            <li class="active">Wilayah Administratif Dusun</li>
        </ol>

    </section>

    <!-- Main content -->
    <section id="maincontent" class="content">


        <div class="box box-info">
            <div class="box-header with-border">
                <a href="{{ url('dusun/form') }}" id="btn-add"
                    class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                        class="fa fa-plus"></i> Tambah</a>
                <a href="#" class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-target="#cetak" title="Cetak Data" data-toggle="modal"
                data-target="#cetak" data-remote="false" data-toggle="modal" data-target="#cetak"
                    data-title="Cetak Data"><i class="fa fa-print "></i> Cetak</a>
                <a href="#" title="Unduh Data"
                    class="btn btn-social bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                    data-remote="false" data-toggle="modal" data-target="#unduh" data-title="Unduh Data"><i
                        class="fa fa-download"></i> Unduh</a>

            </div>
            <div class="box-body">
                <form action="#" id="mainform" name="mainform" method="post"
                    accept-charset="utf-8">
                    <input type="hidden" name="sidcsrf" value="2f075abbc9d53814470020e92b8cec85">

                    <div class="table-responsive">
                        <div id="tabeldata_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="tabeldata_length"><label>Tampilkan <select
                                                name="tabeldata_length" aria-controls="tabeldata"
                                                class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="-1">Semua</option>
                                            </select> entri</label></div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="tabeldata_filter" class="dataTables_filter"><label>Cari:<input type="search"
                                                class="form-control input-sm" placeholder="kata kunci pencarian"
                                                aria-controls="tabeldata"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered table-hover dataTable" id="tabeldata" role="grid"
                                        aria-describedby="tabeldata_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="padat sorting_disabled" rowspan="1" colspan="1" aria-label="#">#
                                                </th>
                                                <th class="padat sorting_disabled" rowspan="1" colspan="1" aria-label="No">
                                                    No</th>
                                                <th class="padat aksi sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="Aksi">Aksi</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Dusun">
                                                    Dusun</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="NIK ">NIK
                                                </th>
                                                <th style="width:5%" class="sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="RW">RW</th>
                                                <th style="width:5%" class="sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="RT">RT</th>
                                                <th style="width:5%" class="sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="KK">KK</th>
                                                <th style="width:5%" class="sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="L+P">L+P</th>
                                                <th style="width:5%" class="sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="L">L</th>
                                                <th style="width:5%" class="sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="P">P</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dragable" class="ui-sortable">
                                            <tr data-id="4" class="dragable-handle odd" role="row">
                                                <td class=" padat"><i class="fa fa-sort-alpha-desc"></i></td>
                                                <td class=" padat">1</td>
                                                <td class=" aksi"><a
                                                        href="{{ url('dusun/rw') }}"
                                                        class="btn bg-purple btn-sm" title="Rincian Sub Wilayah"><i
                                                            class="fa fa-list"></i></a> <a
                                                        href="{{ url('dusun/form') }}"
                                                        class="btn bg-orange btn-sm" title="Ubah"><i
                                                            class="fa fa-edit"></i></a> <a href="#"
                                                        data-href="#"
                                                        class="btn bg-maroon btn-sm" title="Hapus" data-toggle="modal"
                                                        data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                <td>-</td>
                                                <td><strong></strong></td>
                                                <td></td>
                                                <td><a href="{{ url('lembaga-desa/rw') }}"
                                                        title="Rincian Sub Wilayah">0</a></td>
                                                <td><span>0</span></td>
                                                <td><a href="#">1</a></td>
                                                <td><a href="#">3</a></td>
                                                <td><a href="#">1</a></td>
                                                <td><a href="#">2</a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5" class="padat aksi" rowspan="1">Total</th>
                                                <th rowspan="1" colspan="1"></th>
                                                <th rowspan="1" colspan="1">0</th>
                                                <th rowspan="1" colspan="1">0</th>
                                                <th rowspan="1" colspan="1">1</th>
                                                <th rowspan="1" colspan="1">4</th>
                                                <th rowspan="1" colspan="1">2</th>
                                                <th rowspan="1" colspan="1">2</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="tabeldata_processing" class="dataTables_processing panel panel-default"
                                        style="display: none;">Sedang memproses...</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" id="tabeldata_info" role="status" aria-live="polite">
                                        Menampilkan 1 sampai 3 dari 3 entri</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="tabeldata_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled" id="tabeldata_previous"><a
                                                    href="#" aria-controls="tabeldata" data-dt-idx="0"
                                                    tabindex="0">Sebelumnya</a></li>
                                            <li class="paginate_button active"><a href="#" aria-controls="tabeldata"
                                                    data-dt-idx="1" tabindex="0">1</a></li>
                                            <li class="paginate_button next disabled" id="tabeldata_next"><a href="#"
                                                    aria-controls="tabeldata" data-dt-idx="2" tabindex="0">Selanjutnya</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
                            <div class="btn btn-social btn-danger btn-sm" id="ok-delete"><i class="fa fa-trash-o"></i> Hapus
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
    </div>



@endsection
