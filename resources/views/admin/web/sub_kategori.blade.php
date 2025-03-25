@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <div style="padding: 20px 30px; background: rgb(243, 156, 18); z-index: 999999; font-size: 15px; font-weight: 600;">
            <a href="https://opendesa.id/"
                style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Website
                ini hanya sebagai demo aplikasi dengan fitur yg dibatasi, untuk mendapatkan akses penuh silahkan kunjungi
                www.opendesa.id</a></div>
        <section class="content-header">
            <h1>
                Kategori
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="https://berputar.opendesa.id/beranda"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Daftar Kategori</li>
            </ol>

        </section>

        <section id="maincontent" class="content">








            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="#" title="Tambah Sub Kategori"
                        data-remote="false" data-toggle="modal" data-target="#tambahSubKat" data-title="Tambah Sub Kategori"
                        class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                            class="fa fa-plus"></i> Tambah</a>
                    <a href="#" title="Hapus Data"
                        onclick="#"
                        class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i
                            class="fa fa-trash-o"></i>
                        Hapus</a>
                    <a href="{{ url('kategori') }}"
                        class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                        <i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar Kategori
                    </a>
                </div>
                <div class="box-header with-border">
                    <strong><a href="#">MENU UTAMA </a> / BERITA
                        DESA</strong>
                </div>
                <div class="box-body">
                    <div class="row mepet">
                        <div class="col-sm-2">
                            <select id="status" class="form-control input-sm select2 select2-hidden-accessible"
                                name="status" data-select2-id="status" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="2">Pilih Status</option>
                                <option value="1" data-select2-id="3">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                    <hr class="batas">
                    <form action="#" id="mainform" name="mainform" method="post"
                        accept-charset="utf-8">
                        <input type="hidden" name="sidcsrf" value="a2c6a90e4593f796211411f82389903b">

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
                                                        aria-label="#">#</th>
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label=""><input type="checkbox" id="checkall"></th>
                                                    <th class="padat sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="NO">NO</th>
                                                    <th class="padat aksi sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Aksi">Aksi</th>
                                                    <th nowrap="" class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Nama Sub Kategori">Nama Sub Kategori</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Aktif">
                                                        Aktif</th>
                                                    <th nowrap="" class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Link">Link</th>
                                                </tr>
                                            </thead>
                                            <tbody id="dragable" class="ui-sortable">
                                                <tr data-id="22" class="dragable-handle odd" role="row">
                                                    <td class=" padat"><i class="fa fa-sort-alpha-desc"></i></td>
                                                    <td class=" padat"><input type="checkbox" name="id_cb[]" value="22">
                                                    </td>
                                                    <td class=" padat">1</td>
                                                    <td class=" aksi"><a
                                                            href="#"
                                                            class="btn bg-orange btn-sm" data-remote="false"
                                                            data-toggle="modal" data-target="#tambahSubKat"
                                                            data-title="Ubah Subkategori" title="Ubah Subkategori"><i
                                                                class="fa fa-edit"></i></a> <a
                                                            href="#"
                                                            class="btn bg-navy btn-sm" title="Non Aktifkan"><i
                                                                class="fa fa-unlock">&nbsp;</i></a> <a href="#"
                                                            data-href="#"
                                                            class="btn bg-maroon btn-sm" title="Hapus" data-toggle="modal"
                                                            data-target="#confirm-delete"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    <td>Berita Acara</td>
                                                    <td>Ya</td>
                                                    <td>-</td>
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

    <div class="modal fade in" id="tambahSubKat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Sub Kategori</h4>
                </div>
                <div class="fetched-data"><form action="#" method="post" id="validasi">
<div class="modal-body">
    <div class="form-group">
        <label class="control-label" for="nama">Nama Kategori</label>
        <input name="kategori" class="form-control input-sm required nomor_sk" maxlength="50" type="text" value="">
    </div>
</div>
<div class="modal-footer">
    <button type="reset" class="btn btn-social btn-danger btn-sm pull-left"><i class="fa fa-times"></i> Batal</button>
    <button type="submit" class="btn btn-social btn-info btn-sm confirm"><i class="fa fa-check"></i> Simpan</button>
</div>

</div>
            </div>
        </div>
    </div>

@endsection
