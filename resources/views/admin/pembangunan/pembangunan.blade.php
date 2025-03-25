@extends('admin.layout.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Pembangunan
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('pembangunan') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Pembangunan</li>
            </ol>

        </section>

        <section id="maincontent" class="content">



            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="{{ url('pembangunan/form') }}"
                        class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                            class="fa fa-plus"></i> Tambah</a>
                </div>
                <div class="box-body">
                    <div class="row mepet">
                        <div class="col-sm-2">
                            <select id="tahun" class="form-control input-sm select2 select2-hidden-accessible"
                                data-select2-id="tahun" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="2">Pilih Tahun</option>
                                <option>2024</option>
                            </select>
                        </div>
                    </div>
                    <hr class="batas">
                    <form action="#" id="mainform" name="mainform"
                        method="post" accept-charset="utf-8">
                        <input type="hidden" name="sidcsrf" value="47b8027000f55a850c693d9e9a802a52">

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
                                                        aria-label="NO">NO</th>
                                                    <th class="padat aksi sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="AKSI">AKSI</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1"
                                                        colspan="1"
                                                        aria-label="NAMA KEGIATAN: aktifkan untuk mengurutkan kolom ke atas">
                                                        NAMA KEGIATAN</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1"
                                                        colspan="1"
                                                        aria-label="SUMBER DANA: aktifkan untuk mengurutkan kolom ke atas">
                                                        SUMBER DANA</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1"
                                                        colspan="1"
                                                        aria-label="ANGGARAN: aktifkan untuk mengurutkan kolom ke atas">
                                                        ANGGARAN</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="PERSENTASE">PERSENTASE</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1"
                                                        colspan="1"
                                                        aria-label="VOLUME: aktifkan untuk mengurutkan kolom ke atas">VOLUME
                                                    </th>
                                                    <th class="sorting_desc" tabindex="0" aria-controls="tabeldata"
                                                        rowspan="1" colspan="1" aria-sort="descending"
                                                        aria-label="TAHUN: aktifkan untuk mengurutkan kolom ke atas">TAHUN
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1"
                                                        colspan="1"
                                                        aria-label="PELAKSANA: aktifkan untuk mengurutkan kolom ke atas">
                                                        PELAKSANA</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1"
                                                        colspan="1"
                                                        aria-label="LOKASI: aktifkan untuk mengurutkan kolom ke atas">LOKASI
                                                    </th>
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="GAMBAR">GAMBAR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class=" padat">1</td>
                                                    <td class=" aksi"><a
                                                            href="{{ url('pembangunan/form') }}"
                                                            class="btn btn-warning btn-sm" title="Ubah Data"><i
                                                                class="fa fa-edit"></i></a> <a
                                                            href="{{ url('pembangunan/maps') }}"
                                                            class="btn bg-olive btn-sm" title="Lokasi Pembangunan"><i
                                                                class="fa fa-map"></i></a> <a
                                                            href="{{ url('pembangunan/dokumentasi') }}"
                                                            class="btn bg-purple btn-sm"
                                                            title="Rincian Dokumentasi Kegiatan"><i
                                                                class="fa fa-list-ol"></i></a> <a
                                                            href="#"
                                                            class="btn bg-navy btn-sm" title="Nonaktifkan"><i
                                                                class="fa fa-unlock"></i></a> <a href="#"
                                                            data-href="#"
                                                            class="btn bg-maroon btn-sm" title="Hapus Data"
                                                            data-toggle="modal" data-target="#confirm-delete"><i
                                                                class="fa fa-trash"></i></a> <a
                                                            href="#"
                                                            target="_blank" class="btn bg-blue btn-sm"
                                                            title="Lihat Summary"><i class="fa fa-eye"></i></a> </td>
                                                    <td>Pembangunan Jembatan</td>
                                                    <td>Pendapatan Transfer (Bagian dari Hasil Pajak dan Retribusi Daerah
                                                        Kabupaten/Kota)</td>
                                                    <td>Rp 20.000</td>
                                                    <td>belum ada progres</td>
                                                    <td>12</td>
                                                    <td class="sorting_1">2024</td>
                                                    <td>Rohman</td>
                                                    <td>Rt 01</td>
                                                    <td></td>
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
