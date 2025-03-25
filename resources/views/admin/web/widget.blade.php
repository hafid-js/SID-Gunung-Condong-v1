@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Widget
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/ ') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Widget</li>
            </ol>

        </section>

        <section id="maincontent" class="content">



            <form id="mainform" name="mainform" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <a href="{{ url('widget/form') }}"
                                    class="btn btn-social btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                                    title="Tambah Widget">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                                <a href="#" title="Hapus Data"
                                    onclick="#"
                                    class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i
                                        class="fa fa-trash-o"></i> Hapus</a>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                                            <div class="row mepet">
                                                <div class="col-sm-2">
                                                    <select name="status" id="status"
                                                        class="form-control input-sm select2 select2-hidden-accessible"
                                                        data-select2-id="status" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="2">Semua</option>
                                                        <option value="1" data-select2-id="3">Aktif</option>
                                                        <option value="2">Tidak Aktif</option>
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
                                                                                    rowspan="1" colspan="1" aria-label="#">#
                                                                                </th>
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
                                                                                <th width="20%" class="sorting_disabled"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Judul">Judul</th>
                                                                                <th nowrap="" class="sorting_disabled"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Jenis Widget">Jenis Widget
                                                                                </th>
                                                                                <th class="sorting_disabled" rowspan="1"
                                                                                    colspan="1" aria-label="Isi">Isi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="dragable" class="ui-sortable">
                                                                            <tr style="" data-id="2"
                                                                                class="dragable-handle odd" role="row">
                                                                                <td class=" padat"><i
                                                                                        class="fa fa-sort-alpha-desc"></i>
                                                                                </td>
                                                                                <td class=" padat"><input type="checkbox"
                                                                                        name="id_cb[]" value="2"></td>
                                                                                <td class=" padat">3</td>
                                                                                <td class=" aksi"><a
                                                                                        href="{{ url('artikel') }}"
                                                                                        class="btn btn-info btn-sm"
                                                                                        title="Form Admin"><i
                                                                                            class="fa fa-sliders"></i></a>
                                                                                    <a href="#"
                                                                                        class="btn bg-navy btn-sm"
                                                                                        title="Nonaktifkan"><i
                                                                                            class="fa fa-unlock"></i></a>
                                                                                </td>
                                                                                <td>Agenda</td>
                                                                                <td>Sistem</td>
                                                                                <td>agenda</td>
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
                                                                        sampai 10 dari 12 entri</div>
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
                                                                            <li class="paginate_button "><a href="#"
                                                                                    aria-controls="tabeldata"
                                                                                    data-dt-idx="2" tabindex="0">2</a></li>
                                                                            <li class="paginate_button next"
                                                                                id="tabeldata_next"><a href="#"
                                                                                    aria-controls="tabeldata"
                                                                                    data-dt-idx="3"
                                                                                    tabindex="0">Selanjutnya</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel"><i
                                                class="fa fa-exclamation-triangle text-red"></i> Konfirmasi</h4>
                                    </div>
                                    <div class="modal-body btn-info">
                                        Apakah Anda yakin ingin menghapus data ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-social btn-warning btn-sm"
                                            data-dismiss="modal"><i class="fa fa-sign-out"></i> Tutup</button>
                                        <a class="btn-ok">
                                            <div class="btn btn-social btn-danger btn-sm" id="ok-delete"><i
                                                    class="fa fa-trash-o"></i> Hapus</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><input type="hidden" name="sidcsrf" value="5138bb1923cf32516eb547c907b652ef">
            </form>
        </section>
    </div>

@endsection
