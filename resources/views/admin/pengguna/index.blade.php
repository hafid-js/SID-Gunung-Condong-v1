@extends('admin.layout.layout')
@section('content')

<div class="content-wrapper" style="min-height: 912.43px;"><div style="padding: 20px 30px; background: rgb(243, 156, 18); z-index: 999999; font-size: 15px; font-weight: 600;"><a href="https://opendesa.id/" style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Website ini hanya sebagai demo aplikasi dengan fitur yg dibatasi, untuk mendapatkan akses penuh silakan kunjungi www.opendesa.id</a></div>
            <section class="content-header">
                    <h1>
        Manajemen Pengguna
    </h1>

                <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item">
        <a href="https://berputar.opendesa.id/beranda"><i class="fa fa-home"></i>Beranda</a>
    </li>
        <li class="active">Manajemen Pengguna</li>
</ol>

            </section>

            <section id="maincontent" class="content">


                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-triangle text-red"></i> Konfirmasi</h4>
                </div>
                <div class="modal-body btn-info">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-social btn-warning btn-sm" data-dismiss="modal"><i class="fa fa-sign-out"></i> Tutup</button>
                    <a class="btn-ok">
                        <div class="btn btn-social btn-danger btn-sm" id="ok-delete"><i class="fa fa-trash-o"></i> Hapus</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Pengaturan Pengguna</h3>
        <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="{{ url('man_user') }}"><i class="fa fa-user"></i>Pengaturan Pengguna</a></li>
            <li class=""><a href="{{ url('grup') }}"><i class="fa fa-list"></i>Pengaturan Grup</a></li>
        </ul>
    </div>
</div>
        </div>
        <div class="col-md-9">
            <div class="box box-info">
                                <div class="box-header with-border">
                                            <a href="https://berputar.opendesa.id/man_user/form" class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah</a>
                                                                <a href="#" title="Hapus Data" onclick="deleteAllBox('mainform','https://berputar.opendesa.id/man_user/delete_all')" class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i class="fa fa-trash-o"></i> Hapus</a>
                                    </div>
                                <div class="box-body">
                    <div class="row mepet">
                        <div class="col-sm-2">
                            <select id="status" class="form-control input-sm select2 select2-hidden-accessible" name="status" data-select2-id="status" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="2">Semua</option>
                                                                    <option value="1" data-select2-id="5">Aktif</option>
                                                                    <option value="0" data-select2-id="6">Tidak Aktif</option>
                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 142.914px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-status-container"><span class="select2-selection__rendered" id="select2-status-container" role="textbox" aria-readonly="true" title="Aktif">Aktif</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="col-sm-3">
                            <select id="group" class="form-control input-sm select2 select2-hidden-accessible" name="group" data-select2-id="group" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="4">Semua</option>
                                                                    <option value="1">Administrator</option>
                                                                    <option value="2">Operator</option>
                                                                    <option value="3">Redaksi</option>
                                                                    <option value="4">Kontributor</option>
                                                                    <option value="5">Satgas Covid-19</option>
                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 229.375px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-group-container"><span class="select2-selection__rendered" id="select2-group-container" role="textbox" aria-readonly="true" title="Semua">Semua</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>
                    <hr class="batas">
                    <form action="https://berputar.opendesa.id/man_user" id="mainform" name="mainform" method="post" accept-charset="utf-8">
                          <input type="hidden" name="sidcsrf" value="82dc3caefef9cd8181102fc33049c7f0">

                    <div class="table-responsive">
                        <div id="tabeldata_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="tabeldata_length"><label>Tampilkan <select name="tabeldata_length" aria-controls="tabeldata" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">Semua</option></select> entri</label></div></div><div class="col-sm-6"><div id="tabeldata_filter" class="dataTables_filter"><label>Cari:<input type="search" class="form-control input-sm" placeholder="kata kunci pencarian" aria-controls="tabeldata"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-hover tabel-daftar dataTable no-footer" id="tabeldata" role="grid" aria-describedby="tabeldata_info">
                            <thead class="bg-gray">
                                <tr role="row"><th class="padat sorting_disabled" rowspan="1" colspan="1" aria-label=""><input type="checkbox" id="checkall"></th><th class="padat sorting_disabled" rowspan="1" colspan="1" aria-label="No">No</th><th class="padat aksi sorting_disabled" rowspan="1" colspan="1" aria-label="Aksi">Aksi</th><th class="sorting_asc" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: aktifkan untuk mengurutkan kolom menurun">Username</th><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" aria-label="Nama: aktifkan untuk mengurutkan kolom ke atas">Nama</th><th class="padat sorting_disabled" rowspan="1" colspan="1" aria-label="Staf">Staf</th><th class="padat sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" aria-label="Group: aktifkan untuk mengurutkan kolom ke atas">Group</th><th class="padat sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" aria-label="Login Terakhir: aktifkan untuk mengurutkan kolom ke atas">Login Terakhir</th><th class="padat sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" aria-label="Tanggal Verifikasi: aktifkan untuk mengurutkan kolom ke atas">Tanggal Verifikasi</th></tr>
                            </thead>
                        <tbody><tr role="row" class="odd"><td class=" padat"></td><td class=" padat">1</td><td class=" aksi"><a href="https://berputar.opendesa.id/man_user/form/1" class="btn bg-orange btn-sm" title="Ubah"><i class="fa fa-edit"></i></a> </td><td class="sorting_1">admin</td><td>Administrator</td><td class=" padat"><span class="label label-info">Bukan Staf</span></td><td class=" padat">Administrator</td><td class=" padat">26 Maret 2025 12:36:30</td><td class=" padat">-</td></tr><tr role="row" class="even"><td class=" padat"><input type="checkbox" name="id_cb[]" value="2"></td><td class=" padat">2</td><td class=" aksi"><a href="https://berputar.opendesa.id/man_user/form/2" class="btn bg-orange btn-sm" title="Ubah"><i class="fa fa-edit"></i></a> <a href="https://berputar.opendesa.id/man_user/user_lock/2" class="btn bg-navy btn-sm" title="Nonaktifkan"><i class="fa fa-unlock"></i></a>
<a href="#" data-href="https://berputar.opendesa.id/man_user/delete/2" class="btn bg-maroon btn-sm" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a> </td><td class="sorting_1">ariandi</td><td>Ariandi Ryan Kahfi</td><td class=" padat"><span class="label label-info">Bukan Staf</span></td><td class=" padat">Operator</td><td class=" padat">06 Februari 2025 15:22:34</td><td class=" padat">-</td></tr></tbody></table><div id="tabeldata_processing" class="dataTables_processing panel panel-default" style="display: none;">Sedang memproses...</div></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="tabeldata_info" role="status" aria-live="polite">Menampilkan 1 sampai 2 dari 2 entri</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="tabeldata_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="tabeldata_previous"><a href="#" aria-controls="tabeldata" data-dt-idx="0" tabindex="0">Sebelumnya</a></li><li class="paginate_button active"><a href="#" aria-controls="tabeldata" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="tabeldata_next"><a href="#" aria-controls="tabeldata" data-dt-idx="2" tabindex="0">Selanjutnya</a></li></ul></div></div></div></div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

            </section>
        </div>


@endsection
