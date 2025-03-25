@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Data Lembaga
                Badan Permusyawaratan Desa
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="{{ url('/lembaga-desa') }}"> Daftar Lembaga</a></li>
                <li class="active">
                    Badan Permusyawaratan Desa
                </li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <div class="btn-group btn-group-vertical">
                                <a class="btn btn-social btn-success btn-sm" data-toggle="dropdown"><i
                                        class="fa fa-plus"></i> Tambah
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('lembaga-desa/anggota/form') }}" class="btn btn-social
                                        btn-block btn-sm" title="Tambah Satu Anggota Lembaga"><i class="fa fa-plus"></i>
                                            Tambah
                                            Satu Anggota Lembaga
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('lembaga-desa/anggota/form') }}" class="btn btn-social
                                        btn-block btn-sm" title="Tambah Beberapa Anggota Lembaga"><i
                                                class="fa fa-plus"></i>
                                            Tambah Beberapa Anggota Lembaga
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" title="Hapus Data" onclick="#"
                                class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih">
                                <i class="fa fa-trash-o"></i> Hapus
                            </a>
                            <a href="#" class="btn btn-social
                            bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block
                            visible-lg-inline-block" data-remote="false" data-toggle="modal" data-target="#cetak"
                                data-title="Cetak Daftar Anggota
                            Badan Permusyawaratan Desa"><i class="fa fa-print"></i> Cetak
                            </a>
                            <a href="#" class="btn btn-social
                            bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block
                            visible-lg-inline-block" data-remote="false" data-toggle="modal" data-target="#unduh"
                                data-title="Unduh Daftar Anggota
                            Badan Permusyawaratan Desa"><i class="fa fa-download"></i> Unduh
                            </a>
                            <a href="{{ url('lembaga-desa') }}" class="btn btn-social btn-info btn-sm visible-xs-block
                            visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                                    class="fa fa-arrow-circle-left "></i> Kembali Ke Daftar
                                Lembaga
                            </a>
                        </div>
                        <div class="box-body">
                            <h5><b>Rincian Lembaga</b></h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover tabel-rincian">
                                    <tbody>
                                        <tr>
                                            <td width="20%">Kode Lembaga</td>
                                            <td width="1">:</td>
                                            <td>
                                                BPD
                                            </td>
                                            <td class="padat" rowspan="5">
                                                <img src="https://berputar.opendesa.id/desa/logo/59nmx_1740567692_26_02_2025.jpg"
                                                    class="img-thumbnail" alt="Logo Lembaga" style="max-width: 150px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lembaga
                                            </td>
                                            <td>:</td>
                                            <td>
                                                BADAN PERMUSYAWARATAN DESA
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ketua Lembaga
                                            </td>
                                            <td>:</td>
                                            <td>
                                                ARI
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kategori Lembaga
                                            </td>
                                            <td>:</td>
                                            <td>
                                                BADAN DESA
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr style="margin-bottom: 5px;">
                        <div class="box-body">
                            <h5><b>Anggota Lembaga</b></h5>
                            <hr>
                            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <form id="mainform" name="mainform" method="post">
                                    <div class="table-responsive dataTables_wrapper">
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
                                                        class="table table-bordered table-striped dataTable table-hover tabel-daftar no-footer"
                                                        id="tabeldata" role="grid" aria-describedby="tabeldata_info">
                                                        <thead class="bg-gray disabled color-palette">
                                                            <tr role="row">
                                                                <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label=""><input type="checkbox" id="checkall"></th>
                                                                <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="No">No</th>
                                                                <th class="aksi sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Aksi">Aksi</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Foto">Foto</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="No. Anggota">No. Anggota</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="NIK">NIK</th>
                                                                <th class="no-wrap sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Nama">Nama</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Tempat / Tanggal Lahir">Tempat / Tanggal
                                                                    Lahir</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Umur (Tahun)">Umur (Tahun)</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Jenis Kelamin">Jenis Kelamin</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Alamat">Alamat</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Jabatan">Jabatan</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Nomor SK Jabatan">Nomor SK Jabatan</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Nomor SK Pengangkatan">Nomor SK Pengangkatan
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Tanggal SK Pengangkatan">Tanggal SK
                                                                    Pengangkatan</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Tanggal SK Pengangkatan">Tanggal SK
                                                                    Pengangkatan</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Nomor SK Pemberhentian">Nomor SK
                                                                    Pemberhentian</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Tanggal SK Pemberhentian">Tanggal SK
                                                                    Pemberhentian</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Masa Jabatan (Usia/Periode)">Masa Jabatan
                                                                    (Usia/Periode)</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Keterangan">Keterangan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row" class="odd">
                                                                <td class=" padat"><input type="checkbox" name="id_cb[]"
                                                                        value="2"></td>
                                                                <td class=" padat">1</td>
                                                                <td class=" aksi"><a
                                                                        href="{{ url('lembaga-desa/anggota/form') }}"
                                                                        class="btn bg-orange btn-sm" title="Ubah Anggota"><i
                                                                            class="fa fa-edit"></i></a> <a href="#"
                                                                        data-href="#" class="btn bg-maroon btn-sm"
                                                                        title="Hapus" data-toggle="modal"
                                                                        data-target="#confirm-delete"><i
                                                                            class="fa fa-trash-o"></i></a> </td>
                                                                <td><img src="https://berputar.opendesa.id/desa/upload/user_pict/c4df0_1738817965803170.jpg"
                                                                        alt="Foto Penduduk" class="img-circle" width="50px">
                                                                </td>
                                                                <td>1</td>
                                                                <td>0720110200700001</td>
                                                                <td class=" no-wrap">Ari</td>
                                                                <td>NGANJUK / 07 FEBRUARI 2024</td>
                                                                <td>1</td>
                                                                <td>Laki-laki</td>
                                                                <td> RT - / RW - Dusun A</td>
                                                                <td>KETUA</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Ketua lembaga</td>
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
                                                                id="tabeldata_previous"><a href="#"
                                                                    aria-controls="tabeldata" data-dt-idx="0"
                                                                    tabindex="0">Sebelumnya</a></li>
                                                            <li class="paginate_button active"><a href="#"
                                                                    aria-controls="tabeldata" data-dt-idx="1"
                                                                    tabindex="0">1</a></li>
                                                            <li class="paginate_button next disabled" id="tabeldata_next"><a
                                                                    href="#" aria-controls="tabeldata" data-dt-idx="2"
                                                                    tabindex="0">Selanjutnya</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="sidcsrf" value="66fa58f300d5c2bdb1472f2fd97d0ceb">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade in" id="cetak" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Cetak Daftar Anggota Badan Permusyawaratan Desa</h4>
                        </div>
                        <div class="fetched-data">
                            <form id="validasi" action="#" method="post" target="_blank">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="pamong_ttd">Laporan Ditandatangani</label>
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            name="pamong_ttd" data-select2-id="37" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="39">Pilih Staf Pemerintah Desa</option>
                                            <option value="1">Ari (Pj. Kepala Desa)</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="38" style="width: 100%;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-pamong_ttd-1s-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-pamong_ttd-1s-container" role="textbox"
                                                        aria-readonly="true" title="Pilih Staf Pemerintah Desa">Pilih Staf
                                                        Pemerintah Desa</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="pamong_ketahui">Laporan Diketahui</label>
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            name="pamong_ketahui" data-select2-id="40" tabindex="-1" aria-hidden="true">
                                            <option value="">Pilih Staf Pemerintah Desa</option>
                                            <option value="1" selected="" data-select2-id="42">Ari (Pj. Kepala Desa)
                                            </option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="41" style="width: 100%;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-pamong_ketahui-c6-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-pamong_ketahui-c6-container" role="textbox"
                                                        aria-readonly="true" title="Ari (Pj. Kepala Desa)">Ari (Pj. Kepala
                                                        Desa)</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-social btn-danger btn-sm pull-left"><i
                                            class="fa fa-times"></i> Batal</button>
                                    <button type="submit" class="btn btn-social btn-info btn-sm"><i class="fa fa-check"></i>
                                        Cetak</button>
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
                            <h4 class="modal-title" id="myModalLabel">Unduh Daftar Anggota Badan Permusyawaratan Desa</h4>
                        </div>
                        <div class="fetched-data">
                            <form id="validasi" action="#" method="post" target="_blank">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="pamong_ttd">Laporan Ditandatangani</label>
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            name="pamong_ttd" data-select2-id="37" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="39">Pilih Staf Pemerintah Desa</option>
                                            <option value="1">Ari (Pj. Kepala Desa)</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="38" style="width: 100%;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-pamong_ttd-1s-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-pamong_ttd-1s-container" role="textbox"
                                                        aria-readonly="true" title="Pilih Staf Pemerintah Desa">Pilih Staf
                                                        Pemerintah Desa</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="pamong_ketahui">Laporan Diketahui</label>
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            name="pamong_ketahui" data-select2-id="40" tabindex="-1" aria-hidden="true">
                                            <option value="">Pilih Staf Pemerintah Desa</option>
                                            <option value="1" selected="" data-select2-id="42">Ari (Pj. Kepala Desa)
                                            </option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="41" style="width: 100%;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-pamong_ketahui-c6-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-pamong_ketahui-c6-container" role="textbox"
                                                        aria-readonly="true" title="Ari (Pj. Kepala Desa)">Ari (Pj. Kepala
                                                        Desa)</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-social btn-danger btn-sm pull-left"><i
                                            class="fa fa-times"></i> Batal</button>
                                    <button type="submit" class="btn btn-social btn-info btn-sm"><i class="fa fa-check"></i>
                                        Cetak</button>
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
