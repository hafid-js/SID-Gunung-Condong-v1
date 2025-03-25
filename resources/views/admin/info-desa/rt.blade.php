@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Wilayah Administratif RT
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Wilayah Administratif RT</li>
            </ol>

        </section>

        <section id="maincontent" class="content">
            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="{{ url('dusun/rt/form') }}" id="btn-add"
                        class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                            class="fa fa-plus"></i> Tambah</a>
                    <a href="{{ url('dusun/rt/cetak') }}"
                        class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        title="Cetak Data" target="_blank"><i class="fa fa-print "></i> Cetak</a>
                    <a href="{{ url('dusun/rt/cetak') }}" title="Unduh Data"
                        class="btn btn-social bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        target="_blank"><i class="fa fa-download"></i> Unduh</a>

                    <a href="{{ url('dusun/rw') }}"
                        class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                        <i class="fa fa-arrow-circle-left "></i>Kembali ke Wilayah Administratif
                        RW
                    </a>
                </div>
                <div class="box-header">
                    <strong>RW - / Dusun -</strong>
                </div>
                <div class="box-body">
                    <form action="#" id="mainform" name="mainform" method="post"
                        accept-charset="utf-8">
                        <input type="hidden" name="sidcsrf" value="416a4ae5c007dd4af33a43ff35fd4607">

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
                                        <div id="tabeldata_filter" class="dataTables_filter"><label>Cari:<input
                                                    type="search" class="form-control input-sm"
                                                    placeholder="kata kunci pencarian" aria-controls="tabeldata"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered table-hover dataTable" id="tabeldata" role="grid"
                                            aria-describedby="tabeldata_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="#">#</th>
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="No">No</th>
                                                    <th class="padat aksi sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Aksi">Aksi</th>
                                                    <th rowspan="1" colspan="1" class="sorting_disabled" aria-label="RT">RT
                                                    </th>
                                                    <th rowspan="1" colspan="1" class="sorting_disabled"
                                                        aria-label="Ketua RT">Ketua RT</th>
                                                    <th rowspan="1" colspan="1" class="sorting_disabled"
                                                        aria-label="NIK Ketua RT">NIK Ketua RT</th>
                                                    <th style="width:5%" rowspan="1" colspan="1" class="sorting_disabled"
                                                        aria-label="KK">KK</th>
                                                    <th style="width:5%" rowspan="1" colspan="1" class="sorting_disabled"
                                                        aria-label="L+P">L+P</th>
                                                    <th style="width:5%" rowspan="1" colspan="1" class="sorting_disabled"
                                                        aria-label="L">L</th>
                                                    <th style="width:5%" rowspan="1" colspan="1" class="sorting_disabled"
                                                        aria-label="P">P</th>
                                                </tr>
                                            </thead>
                                            <tbody id="dragable" class="ui-sortable">
                                                <tr data-id="13" class="dragable-handle odd" role="row">
                                                    <td class=" padat"><i class="fa fa-sort-alpha-desc"></i></td>
                                                    <td class=" padat">1</td>
                                                    <td class=" aksi"><a
                                                            href="{{ url('dusun/rt/form') }}"
                                                            class="btn bg-orange btn-sm" title="Ubah"><i
                                                                class="fa fa-edit"></i></a> <a href="#"
                                                            data-href="#"
                                                            class="btn bg-maroon btn-sm" title="Hapus" data-toggle="modal"
                                                            data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                    <td>Junaidi</td>
                                                    <td><strong>JUNAIDI EFENDI</strong></td>
                                                    <td>0531912200900002</td>
                                                    <td><span>0</span></td>
                                                    <td><span>0</span></td>
                                                    <td><span>0</span></td>
                                                    <td><span>0</span></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="5" rowspan="1" class="padat aksi">Total</th>
                                                    <th rowspan="1" colspan="1"></th>
                                                    <th rowspan="1" colspan="1">0</th>
                                                    <th rowspan="1" colspan="1">0</th>
                                                    <th rowspan="1" colspan="1">0</th>
                                                    <th rowspan="1" colspan="1">0</th>
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
                                            Menampilkan 1 sampai 1 dari 1 entri</div>
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
                                                        aria-controls="tabeldata" data-dt-idx="2"
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
