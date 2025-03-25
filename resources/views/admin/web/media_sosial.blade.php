@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Media Sosial
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Media Sosial</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="{{ url('sosmed/form') }}"
                        class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                            class="fa fa-plus"></i> Tambah</a>
                    <a href="#" title="Hapus Data"
                        onclick="#"
                        class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i
                            class="fa fa-trash-o"></i>
                        Hapus</a>
                </div>
                <div class="box-body">
                    <form action="#" id="mainform" name="mainform" method="post"
                        accept-charset="utf-8">
                        <input type="hidden" name="sidcsrf" value="ab91129f429c1690ca839fe3289d9559">

                        <div class="table-responsive">
                            <div id="tabeldata_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
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
                                        <table class="table table-bordered table-hover dataTable no-footer" id="tabeldata"
                                            role="grid" aria-describedby="tabeldata_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label=""><input type="checkbox" id="checkall"></th>
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="NO">NO</th>
                                                    <th class="padat aksi sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="AKSI">AKSI</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="tabeldata"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="NAMA: aktifkan untuk mengurutkan kolom menurun">NAMA
                                                    </th>
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="ICON">ICON</th>
                                                    <th class="padat sorting" tabindex="0" aria-controls="tabeldata"
                                                        rowspan="1" colspan="1"
                                                        aria-label="STATUS: aktifkan untuk mengurutkan kolom ke atas">STATUS
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="dragable">
                                                <tr role="row" class="odd">
                                                    <td class=" padat"><input type="checkbox" name="id_cb[]" value="1"></td>
                                                    <td class=" padat">1</td>
                                                    <td class=" aksi"><a href="{{ url('sosmed/form') }}"
                                                            class="btn btn-warning btn-sm" title="Ubah Data"><i
                                                                class="fa fa-edit"></i></a> <a
                                                            href="#"
                                                            class="btn bg-navy btn-sm" title="Aktifkan"><i
                                                                class="fa fa-lock"></i></a> <a href="#"
                                                            data-href="#"
                                                            class="btn bg-maroon btn-sm" title="Hapus Data"
                                                            data-toggle="modal" data-target="#confirm-delete"><i
                                                                class="fa fa-trash"></i></a> </td>
                                                    <td class="sorting_1">Facebook</td>
                                                    <td><a href="https://web.facebook.com/" target="_blank"><img
                                                                src="https://berputar.opendesa.id/assets/front/fb.png?vfe18a71abeca59e855c1d80376a5702f"
                                                                class="img-thumbnail" width="50" height="50"></a></td>
                                                    <td class=" padat"><span class="label label-danger">Tidak Aktif</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="tabeldata_processing" class="dataTables_processing panel panel-default"
                                            style="display: none;">Sedang memproses...</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="tabeldata_info" role="status" aria-live="polite">
                                            Menampilkan 1 sampai 6 dari 6 entri</div>
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
