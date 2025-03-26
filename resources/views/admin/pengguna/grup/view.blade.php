@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <div style="padding: 20px 30px; background: rgb(243, 156, 18); z-index: 999999; font-size: 15px; font-weight: 600;">
            <a href="https://opendesa.id/"
                style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Website
                ini hanya sebagai demo aplikasi dengan fitur yg dibatasi, untuk mendapatkan akses penuh silakan kunjungi
                www.opendesa.id</a></div>
        <section class="content-header">
            <h1>
                Grup Pengguna
                <small> Data</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="https://berputar.opendesa.id/beranda"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="https://berputar.opendesa.id/grup">Grup Pengguna</a></li>
                <li class="active"> Data</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <form id="validasi" action="https://berputar.opendesa.id/grup/update/1" method="POST"
                enctype="multipart/form-data">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <a href="https://berputar.opendesa.id/grup" onclick="" id=""
                            class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                                class="fa fa-arrow-circle-left"></i> Kembali Ke Pengaturan Grup Pengguna</a>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="group">Nama Grup</label>
                            <input name="nama" class="form-control input-sm required nama_terbatas" type="text"
                                maxlength="20" placeholder="Nama Grup" value="Administrator" disabled="disabled">
                        </div>

                        <div class="form-group">
                            <label for="modul">Akses Modul</label>
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable table-striped table-hover tabel-daftar">
                                    <thead class="bg-gray color-palette">
                                        <tr>
                                            <th><input type="checkbox" id="checkall" disabled="disabled"></th>
                                            <th colspan="2">No</th>
                                            <th>Nama Modul</th>
                                            <th>Hak Baca</th>
                                            <th>Hak Ubah</th>
                                            <th>Hak Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m1" type="checkbox" name="modul[id][]" value="200"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">1</td>
                                            <td>Info Desa</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m1.1" class="m1" type="checkbox" name="modul[id][]" value="357"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">1.1</td>
                                            <td>Identitas Desa</td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_baca][357]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_ubah][357]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_hapus][357]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m1.2" class="m1" type="checkbox" name="modul[id][]" value="359"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">1.2</td>
                                            <td>Wilayah Administratif</td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_baca][359]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_ubah][359]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_hapus][359]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m1.3" class="m1" type="checkbox" name="modul[id][]" value="358"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">1.3</td>
                                            <td>Pemerintah Desa</td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_baca][358]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_ubah][358]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_hapus][358]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m1.4" class="m1" type="checkbox" name="modul[id][]" value="427"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">1.4</td>
                                            <td>Status Desa</td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_baca][427]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_ubah][427]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_hapus][427]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m1.5" class="m1" type="checkbox" name="modul[id][]" value="462"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">1.5</td>
                                            <td>Lembaga Desa</td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_baca][462]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_ubah][462]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_hapus][462]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m1.6" class="m1" type="checkbox" name="modul[id][]" value="448"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">1.6</td>
                                            <td>Layanan Pelanggan</td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_baca][448]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_ubah][448]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_hapus][448]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m1.7" class="m1" type="checkbox" name="modul[id][]" value="463"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">1.7</td>
                                            <td>Kategori Lembaga</td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_baca][463]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_ubah][463]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_hapus][463]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m1.8" class="m1" type="checkbox" name="modul[id][]" value="466"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">1.8</td>
                                            <td>Pendaftaran Kerjasama</td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_baca][466]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_ubah][466]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m1" type="checkbox" name="modul[akses_hapus][466]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m2" type="checkbox" name="modul[id][]" value="2"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">2</td>
                                            <td>Kependudukan</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m2.1" class="m2" type="checkbox" name="modul[id][]" value="360"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">2.1</td>
                                            <td>Penduduk</td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_baca][360]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_ubah][360]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_hapus][360]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m2.2" class="m2" type="checkbox" name="modul[id][]" value="361"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">2.2</td>
                                            <td>Keluarga</td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_baca][361]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_ubah][361]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_hapus][361]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m2.3" class="m2" type="checkbox" name="modul[id][]" value="362"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">2.3</td>
                                            <td>Rumah Tangga</td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_baca][362]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_ubah][362]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_hapus][362]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m2.4" class="m2" type="checkbox" name="modul[id][]" value="363"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">2.4</td>
                                            <td>Kelompok</td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_baca][363]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_ubah][363]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_hapus][363]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m2.5" class="m2" type="checkbox" name="modul[id][]" value="364"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">2.5</td>
                                            <td>Data Suplemen</td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_baca][364]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_ubah][364]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_hapus][364]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m2.6" class="m2" type="checkbox" name="modul[id][]" value="365"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">2.6</td>
                                            <td>Calon Pemilih</td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_baca][365]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_ubah][365]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_hapus][365]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m2.7" class="m2" type="checkbox" name="modul[id][]" value="422"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">2.7</td>
                                            <td>Kategori Kelompok</td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_baca][422]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_ubah][422]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_hapus][422]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m2.8" class="m2" type="checkbox" name="modul[id][]" value="395"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">2.8</td>
                                            <td>Catatan Peristiwa</td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_baca][395]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_ubah][395]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m2" type="checkbox" name="modul[akses_hapus][395]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m3" type="checkbox" name="modul[id][]" value="3"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">3</td>
                                            <td>Statistik</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m3.1" class="m3" type="checkbox" name="modul[id][]" value="366"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">3.1</td>
                                            <td>Statistik Kependudukan</td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_baca][366]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_ubah][366]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_hapus][366]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m3.2" class="m3" type="checkbox" name="modul[id][]" value="367"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">3.2</td>
                                            <td>Laporan Bulanan</td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_baca][367]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_ubah][367]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_hapus][367]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m3.3" class="m3" type="checkbox" name="modul[id][]" value="368"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">3.3</td>
                                            <td>Laporan Kelompok Rentan</td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_baca][368]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_ubah][368]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_hapus][368]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m3.4" class="m3" type="checkbox" name="modul[id][]" value="465"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">3.4</td>
                                            <td>Laporan penduduk</td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_baca][465]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_ubah][465]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m3" type="checkbox" name="modul[akses_hapus][465]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m4" type="checkbox" name="modul[id][]" value="337"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">4</td>
                                            <td>Kehadiran</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m4.1" class="m4" type="checkbox" name="modul[id][]" value="472"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">4.1</td>
                                            <td>Jam Kerja</td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_baca][472]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_ubah][472]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_hapus][472]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m4.2" class="m4" type="checkbox" name="modul[id][]" value="473"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">4.2</td>
                                            <td>Hari Libur</td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_baca][473]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_ubah][473]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_hapus][473]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m4.3" class="m4" type="checkbox" name="modul[id][]" value="474"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">4.3</td>
                                            <td>Rekapitulasi</td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_baca][474]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_ubah][474]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_hapus][474]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m4.4" class="m4" type="checkbox" name="modul[id][]" value="475"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">4.4</td>
                                            <td>Pengaduan</td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_baca][475]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_ubah][475]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_hapus][475]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m4.5" class="m4" type="checkbox" name="modul[id][]" value="482"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">4.5</td>
                                            <td>Alasan Keluar</td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_baca][482]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_ubah][482]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m4" type="checkbox" name="modul[akses_hapus][482]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m5" type="checkbox" name="modul[id][]" value="206"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">5</td>
                                            <td>Kesehatan</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m5.1" class="m5" type="checkbox" name="modul[id][]" value="434"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">5.1</td>
                                            <td>Pendataan</td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_baca][434]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_ubah][434]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_hapus][434]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m5.2" class="m5" type="checkbox" name="modul[id][]" value="435"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">5.2</td>
                                            <td>Pemantauan</td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_baca][435]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_ubah][435]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_hapus][435]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m5.3" class="m5" type="checkbox" name="modul[id][]" value="470"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">5.3</td>
                                            <td>Vaksin</td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_baca][470]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_ubah][470]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_hapus][470]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m5.4" class="m5" type="checkbox" name="modul[id][]" value="478"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">5.4</td>
                                            <td>Stunting</td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_baca][478]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_ubah][478]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m5" type="checkbox" name="modul[akses_hapus][478]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m6" type="checkbox" name="modul[id][]" value="4"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">6</td>
                                            <td>Layanan Surat</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m6.1" class="m6" type="checkbox" name="modul[id][]" value="369"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">6.1</td>
                                            <td>Pengaturan Surat</td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_baca][369]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_ubah][369]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_hapus][369]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m6.2" class="m6" type="checkbox" name="modul[id][]" value="370"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">6.2</td>
                                            <td>Cetak Surat</td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_baca][370]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_ubah][370]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_hapus][370]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m6.3" class="m6" type="checkbox" name="modul[id][]" value="426"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">6.3</td>
                                            <td>Permohonan Surat</td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_baca][426]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_ubah][426]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_hapus][426]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m6.4" class="m6" type="checkbox" name="modul[id][]" value="371"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">6.4</td>
                                            <td>Arsip Layanan</td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_baca][371]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_ubah][371]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_hapus][371]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m6.5" class="m6" type="checkbox" name="modul[id][]" value="425"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">6.5</td>
                                            <td>Daftar Persyaratan</td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_baca][425]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_ubah][425]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m6" type="checkbox" name="modul[akses_hapus][425]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m7" type="checkbox" name="modul[id][]" value="15"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">7</td>
                                            <td>Sekretariat</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.1" class="m7" type="checkbox" name="modul[id][]" value="388"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.1</td>
                                            <td>Surat Masuk</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][388]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][388]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][388]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.2" class="m7" type="checkbox" name="modul[id][]" value="389"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.2</td>
                                            <td>Surat Keluar</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][389]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][389]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][389]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.3" class="m7" type="checkbox" name="modul[id][]" value="423"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.3</td>
                                            <td>Produk Hukum</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][423]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][423]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][423]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.4" class="m7" type="checkbox" name="modul[id][]" value="52"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.4</td>
                                            <td>Informasi Publik</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][52]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][52]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][52]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.5" class="m7" type="checkbox" name="modul[id][]" value="390"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.5</td>
                                            <td>Inventaris</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][390]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][390]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][390]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.6" class="m7" type="checkbox" name="modul[id][]" value="392"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.6</td>
                                            <td>Klasifikasi Surat</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][392]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][392]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][392]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.7" class="m7" type="checkbox" name="modul[id][]" value="410"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.7</td>
                                            <td>Inventaris Asset</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][410]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][410]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][410]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.8" class="m7" type="checkbox" name="modul[id][]" value="411"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.8</td>
                                            <td>Inventaris Gedung</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][411]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][411]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][411]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.9" class="m7" type="checkbox" name="modul[id][]" value="412"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.9</td>
                                            <td>Inventaris Jalan</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][412]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][412]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][412]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.10" class="m7" type="checkbox" name="modul[id][]" value="413"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.10</td>
                                            <td>Inventaris Kontruksi</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][413]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][413]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][413]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.11" class="m7" type="checkbox" name="modul[id][]" value="414"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.11</td>
                                            <td>Inventaris Peralatan</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][414]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][414]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][414]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.12" class="m7" type="checkbox" name="modul[id][]" value="415"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.12</td>
                                            <td>Laporan Inventaris</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][415]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][415]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][415]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m7.13" class="m7" type="checkbox" name="modul[id][]" value="635"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">7.13</td>
                                            <td>Inventaris Tanah</td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_baca][635]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_ubah][635]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m7" type="checkbox" name="modul[akses_hapus][635]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m8" type="checkbox" name="modul[id][]" value="493"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">8</td>
                                            <td>Surat Dinas</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m8.1" class="m8" type="checkbox" name="modul[id][]" value="494"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">8.1</td>
                                            <td>Pengaturan Surat</td>
                                            <td class="padat">
                                                <input class="m8" type="checkbox" name="modul[akses_baca][494]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m8" type="checkbox" name="modul[akses_ubah][494]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m8" type="checkbox" name="modul[akses_hapus][494]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m8.2" class="m8" type="checkbox" name="modul[id][]" value="495"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">8.2</td>
                                            <td>Cetak Surat</td>
                                            <td class="padat">
                                                <input class="m8" type="checkbox" name="modul[akses_baca][495]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m8" type="checkbox" name="modul[akses_ubah][495]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m8" type="checkbox" name="modul[akses_hapus][495]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m8.3" class="m8" type="checkbox" name="modul[id][]" value="496"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">8.3</td>
                                            <td>Arsip Layanan</td>
                                            <td class="padat">
                                                <input class="m8" type="checkbox" name="modul[akses_baca][496]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m8" type="checkbox" name="modul[akses_ubah][496]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m8" type="checkbox" name="modul[akses_hapus][496]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m9" type="checkbox" name="modul[id][]" value="301"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">9</td>
                                            <td>Buku Administrasi Desa</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.1" class="m9" type="checkbox" name="modul[id][]" value="464"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.1</td>
                                            <td>Bumindes Kegiatan Pembangunan</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][464]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][464]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][464]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.2" class="m9" type="checkbox" name="modul[id][]" value="467"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.2</td>
                                            <td>Kader Pemberdayaan Masyarakat</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][467]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][467]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][467]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.3" class="m9" type="checkbox" name="modul[id][]" value="468"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.3</td>
                                            <td>Buku Inventaris Hasil - Hasil Pembangunan</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][468]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][468]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][468]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.4" class="m9" type="checkbox" name="modul[id][]" value="443"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.4</td>
                                            <td>Administrasi Umum</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][443]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][443]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][443]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.5" class="m9" type="checkbox" name="modul[id][]" value="444"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.5</td>
                                            <td>Administrasi Penduduk</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][444]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][444]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][444]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.6" class="m9" type="checkbox" name="modul[id][]" value="445"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.6</td>
                                            <td>Administrasi Pembangunan</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][445]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][445]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][445]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.7" class="m9" type="checkbox" name="modul[id][]" value="471"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.7</td>
                                            <td>Arsip Desa</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][471]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][471]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][471]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.8" class="m9" type="checkbox" name="modul[id][]" value="446"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.8</td>
                                            <td>Buku Eskpedisi</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][446]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][446]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][446]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.9" class="m9" type="checkbox" name="modul[id][]" value="447"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.9</td>
                                            <td>Buku Lembaran Dan Berita Desa</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][447]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][447]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][447]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.10" class="m9" type="checkbox" name="modul[id][]" value="454"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.10</td>
                                            <td>Buku Tanah Kas Desa</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][454]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][454]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][454]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.11" class="m9" type="checkbox" name="modul[id][]" value="455"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.11</td>
                                            <td>Buku Tanah di Desa</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][455]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][455]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][455]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.12" class="m9" type="checkbox" name="modul[id][]" value="457"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.12</td>
                                            <td>Buku Inventaris Dan Kekayaan Desa</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][457]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][457]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][457]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.13" class="m9" type="checkbox" name="modul[id][]" value="450"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.13</td>
                                            <td>Buku Mutasi Penduduk</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][450]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][450]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][450]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.14" class="m9" type="checkbox" name="modul[id][]" value="451"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.14</td>
                                            <td>Buku Rekapitulasi Jumlah Penduduk</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][451]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][451]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][451]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.15" class="m9" type="checkbox" name="modul[id][]" value="452"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.15</td>
                                            <td>Buku Penduduk Sementara</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][452]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][452]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][452]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.16" class="m9" type="checkbox" name="modul[id][]" value="453"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.16</td>
                                            <td>Buku KTP dan KK</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][453]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][453]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][453]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m9.17" class="m9" type="checkbox" name="modul[id][]" value="458"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">9.17</td>
                                            <td>Buku Rencana Kerja Pembangunan</td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_baca][458]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_ubah][458]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m9" type="checkbox" name="modul[akses_hapus][458]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m10" type="checkbox" name="modul[id][]" value="201"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">10</td>
                                            <td>Keuangan</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m10.1" class="m10" type="checkbox" name="modul[id][]" value="432"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">10.1</td>
                                            <td>Laporan</td>
                                            <td class="padat">
                                                <input class="m10" type="checkbox" name="modul[akses_baca][432]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m10" type="checkbox" name="modul[akses_ubah][432]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m10" type="checkbox" name="modul[akses_hapus][432]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m10.2" class="m10" type="checkbox" name="modul[id][]" value="436"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">10.2</td>
                                            <td>Input Data</td>
                                            <td class="padat">
                                                <input class="m10" type="checkbox" name="modul[akses_baca][436]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m10" type="checkbox" name="modul[akses_ubah][436]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m10" type="checkbox" name="modul[akses_hapus][436]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m10.3" class="m10" type="checkbox" name="modul[id][]" value="460"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">10.3</td>
                                            <td>Laporan APBDes</td>
                                            <td class="padat">
                                                <input class="m10" type="checkbox" name="modul[akses_baca][460]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m10" type="checkbox" name="modul[akses_ubah][460]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m10" type="checkbox" name="modul[akses_hapus][460]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m11" type="checkbox" name="modul[id][]" value="5"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">11</td>
                                            <td>Analisis</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m11.1" class="m11" type="checkbox" name="modul[id][]" value="396"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">11.1</td>
                                            <td>Kategori / Variabel</td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_baca][396]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_ubah][396]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_hapus][396]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m11.2" class="m11" type="checkbox" name="modul[id][]" value="397"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">11.2</td>
                                            <td>Indikator &amp; Pertanyaan</td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_baca][397]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_ubah][397]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_hapus][397]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m11.3" class="m11" type="checkbox" name="modul[id][]" value="398"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">11.3</td>
                                            <td>Klasifikasi Analisis</td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_baca][398]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_ubah][398]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_hapus][398]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m11.4" class="m11" type="checkbox" name="modul[id][]" value="399"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">11.4</td>
                                            <td>Periode Sensus / Survei</td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_baca][399]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_ubah][399]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_hapus][399]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m11.5" class="m11" type="checkbox" name="modul[id][]" value="400"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">11.5</td>
                                            <td>Input Data Sensus / Survei</td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_baca][400]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_ubah][400]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_hapus][400]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m11.6" class="m11" type="checkbox" name="modul[id][]" value="401"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">11.6</td>
                                            <td>Laporan Hasil Klasifikasi</td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_baca][401]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_ubah][401]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_hapus][401]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m11.7" class="m11" type="checkbox" name="modul[id][]" value="402"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">11.7</td>
                                            <td>Laporan Per Indikator</td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_baca][402]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_ubah][402]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m11" type="checkbox" name="modul[akses_hapus][402]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m12" type="checkbox" name="modul[id][]" value="6"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">12</td>
                                            <td>Bantuan</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m12.1" class="m12" type="checkbox" name="modul[id][]" value="490"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">12.1</td>
                                            <td>Program Bantuan</td>
                                            <td class="padat">
                                                <input class="m12" type="checkbox" name="modul[akses_baca][490]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m12" type="checkbox" name="modul[akses_ubah][490]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m12" type="checkbox" name="modul[akses_hapus][490]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m12.2" class="m12" type="checkbox" name="modul[id][]" value="491"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">12.2</td>
                                            <td>Peserta Bantuan</td>
                                            <td class="padat">
                                                <input class="m12" type="checkbox" name="modul[akses_baca][491]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m12" type="checkbox" name="modul[akses_ubah][491]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m12" type="checkbox" name="modul[akses_hapus][491]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m13" type="checkbox" name="modul[id][]" value="7"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">13</td>
                                            <td>Pertanahan</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m13.1" class="m13" type="checkbox" name="modul[id][]" value="440"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">13.1</td>
                                            <td>Daftar Persil</td>
                                            <td class="padat">
                                                <input class="m13" type="checkbox" name="modul[akses_baca][440]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m13" type="checkbox" name="modul[akses_ubah][440]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m13" type="checkbox" name="modul[akses_hapus][440]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m13.2" class="m13" type="checkbox" name="modul[id][]" value="441"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">13.2</td>
                                            <td>C-Desa</td>
                                            <td class="padat">
                                                <input class="m13" type="checkbox" name="modul[akses_baca][441]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m13" type="checkbox" name="modul[akses_ubah][441]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m13" type="checkbox" name="modul[akses_hapus][441]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m14" type="checkbox" name="modul[id][]" value="442"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">14</td>
                                            <td>Pembangunan</td>
                                            <td class="padat">
                                                <input class="m14" type="checkbox" name="modul[akses_baca][442]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m14" type="checkbox" name="modul[akses_ubah][442]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m14" type="checkbox" name="modul[akses_hapus][442]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m15" type="checkbox" name="modul[id][]" value="459"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">15</td>
                                            <td>Lapak</td>
                                            <td class="padat">
                                                <input class="m15" type="checkbox" name="modul[akses_baca][459]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m15" type="checkbox" name="modul[akses_ubah][459]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m15" type="checkbox" name="modul[akses_hapus][459]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m16" type="checkbox" name="modul[id][]" value="343"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">16</td>
                                            <td>OpenDK</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m16.1" class="m16" type="checkbox" name="modul[id][]" value="476"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">16.1</td>
                                            <td>Pesan</td>
                                            <td class="padat">
                                                <input class="m16" type="checkbox" name="modul[akses_baca][476]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m16" type="checkbox" name="modul[akses_ubah][476]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m16" type="checkbox" name="modul[akses_hapus][476]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m16.2" class="m16" type="checkbox" name="modul[id][]" value="461"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">16.2</td>
                                            <td>Sinkronisasi</td>
                                            <td class="padat">
                                                <input class="m16" type="checkbox" name="modul[akses_baca][461]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m16" type="checkbox" name="modul[akses_ubah][461]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m16" type="checkbox" name="modul[akses_hapus][461]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m17" type="checkbox" name="modul[id][]" value="469"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">17</td>
                                            <td>Pengaduan</td>
                                            <td class="padat">
                                                <input class="m17" type="checkbox" name="modul[akses_baca][469]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m17" type="checkbox" name="modul[akses_ubah][469]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m17" type="checkbox" name="modul[akses_hapus][469]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m18" type="checkbox" name="modul[id][]" value="9"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">18</td>
                                            <td>Pemetaan</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m18.1" class="m18" type="checkbox" name="modul[id][]" value="391"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">18.1</td>
                                            <td>Peta</td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_baca][391]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_ubah][391]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_hapus][391]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m18.2" class="m18" type="checkbox" name="modul[id][]" value="356"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">18.2</td>
                                            <td>Pengaturan Peta</td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_baca][356]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_ubah][356]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_hapus][356]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m18.3" class="m18" type="checkbox" name="modul[id][]" value="416"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">18.3</td>
                                            <td>plan</td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_baca][416]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_ubah][416]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_hapus][416]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m18.4" class="m18" type="checkbox" name="modul[id][]" value="417"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">18.4</td>
                                            <td>point</td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_baca][417]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_ubah][417]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_hapus][417]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m18.5" class="m18" type="checkbox" name="modul[id][]" value="418"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">18.5</td>
                                            <td>garis</td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_baca][418]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_ubah][418]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_hapus][418]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m18.6" class="m18" type="checkbox" name="modul[id][]" value="419"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">18.6</td>
                                            <td>line</td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_baca][419]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_ubah][419]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_hapus][419]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m18.7" class="m18" type="checkbox" name="modul[id][]" value="420"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">18.7</td>
                                            <td>area</td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_baca][420]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_ubah][420]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_hapus][420]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m18.8" class="m18" type="checkbox" name="modul[id][]" value="421"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">18.8</td>
                                            <td>polygon</td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_baca][421]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_ubah][421]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m18" type="checkbox" name="modul[akses_hapus][421]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m19" type="checkbox" name="modul[id][]" value="10"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">19</td>
                                            <td>Hubung Warga</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m19.1" class="m19" type="checkbox" name="modul[id][]" value="372"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">19.1</td>
                                            <td>Kirim Pesan</td>
                                            <td class="padat">
                                                <input class="m19" type="checkbox" name="modul[akses_baca][372]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m19" type="checkbox" name="modul[akses_ubah][372]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m19" type="checkbox" name="modul[akses_hapus][372]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m19.2" class="m19" type="checkbox" name="modul[id][]" value="373"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">19.2</td>
                                            <td>Daftar Kontak</td>
                                            <td class="padat">
                                                <input class="m19" type="checkbox" name="modul[akses_baca][373]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m19" type="checkbox" name="modul[akses_ubah][373]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m19" type="checkbox" name="modul[akses_hapus][373]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m19.3" class="m19" type="checkbox" name="modul[id][]" value="477"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">19.3</td>
                                            <td>Grup Kontak</td>
                                            <td class="padat">
                                                <input class="m19" type="checkbox" name="modul[akses_baca][477]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m19" type="checkbox" name="modul[akses_ubah][477]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m19" type="checkbox" name="modul[akses_hapus][477]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m20" type="checkbox" name="modul[id][]" value="11"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">20</td>
                                            <td>Pengaturan</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m20.1" class="m20" type="checkbox" name="modul[id][]" value="374"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">20.1</td>
                                            <td>Modul</td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_baca][374]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_ubah][374]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_hapus][374]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m20.2" class="m20" type="checkbox" name="modul[id][]" value="375"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">20.2</td>
                                            <td>Aplikasi</td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_baca][375]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_ubah][375]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_hapus][375]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m20.3" class="m20" type="checkbox" name="modul[id][]" value="376"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">20.3</td>
                                            <td>Pengguna</td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_baca][376]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_ubah][376]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_hapus][376]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m20.4" class="m20" type="checkbox" name="modul[id][]" value="377"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">20.4</td>
                                            <td>Database</td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_baca][377]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_ubah][377]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_hapus][377]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m20.5" class="m20" type="checkbox" name="modul[id][]" value="378"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">20.5</td>
                                            <td>Info Sistem</td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_baca][378]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_ubah][378]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_hapus][378]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m20.6" class="m20" type="checkbox" name="modul[id][]" value="439"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">20.6</td>
                                            <td>QR Code</td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_baca][439]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_ubah][439]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_hapus][439]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m20.7" class="m20" type="checkbox" name="modul[id][]" value="428"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">20.7</td>
                                            <td>Pengaturan Grup</td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_baca][428]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_ubah][428]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_hapus][428]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m20.8" class="m20" type="checkbox" name="modul[id][]" value="489"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">20.8</td>
                                            <td>Optimasi Gambar</td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_baca][489]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_ubah][489]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_hapus][489]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m20.9" class="m20" type="checkbox" name="modul[id][]" value="497"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">20.9</td>
                                            <td>Shortcut</td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_baca][497]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_ubah][497]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m20" type="checkbox" name="modul[akses_hapus][497]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m21" type="checkbox" name="modul[id][]" value="13"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">21</td>
                                            <td>Admin Web</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.1" class="m21" type="checkbox" name="modul[id][]" value="379"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.1</td>
                                            <td>Artikel</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][379]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][379]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][379]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.2" class="m21" type="checkbox" name="modul[id][]" value="380"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.2</td>
                                            <td>Widget</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][380]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][380]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][380]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.3" class="m21" type="checkbox" name="modul[id][]" value="394"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.3</td>
                                            <td>Kategori</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][394]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][394]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][394]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.4" class="m21" type="checkbox" name="modul[id][]" value="381"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.4</td>
                                            <td>Menu</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][381]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][381]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][381]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.5" class="m21" type="checkbox" name="modul[id][]" value="499"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.5</td>
                                            <td>Sinergi Program</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][499]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][499]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][499]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.6" class="m21" type="checkbox" name="modul[id][]" value="382"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.6</td>
                                            <td>Komentar</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][382]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][382]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][382]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.7" class="m21" type="checkbox" name="modul[id][]" value="383"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.7</td>
                                            <td>Galeri</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][383]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][383]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][383]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.8" class="m21" type="checkbox" name="modul[id][]" value="498"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.8</td>
                                            <td>Tema</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][498]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][498]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][498]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.9" class="m21" type="checkbox" name="modul[id][]" value="384"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.9</td>
                                            <td>Media Sosial</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][384]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][384]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][384]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.10" class="m21" type="checkbox" name="modul[id][]"
                                                    value="385" checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.10</td>
                                            <td>Slider</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][385]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][385]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][385]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.11" class="m21" type="checkbox" name="modul[id][]"
                                                    value="393" checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.11</td>
                                            <td>Teks Berjalan</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][393]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][393]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][393]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.12" class="m21" type="checkbox" name="modul[id][]"
                                                    value="433" checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.12</td>
                                            <td>Pengunjung</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][433]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][433]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][433]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m21.13" class="m21" type="checkbox" name="modul[id][]"
                                                    value="438" checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">21.13</td>
                                            <td>Pengaturan</td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_baca][438]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_ubah][438]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m21" type="checkbox" name="modul[akses_hapus][438]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m22" type="checkbox" name="modul[id][]" value="14"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">22</td>
                                            <td>Layanan Mandiri</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m22.1" class="m22" type="checkbox" name="modul[id][]" value="386"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">22.1</td>
                                            <td>Kotak Pesan</td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_baca][386]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_ubah][386]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_hapus][386]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m22.2" class="m22" type="checkbox" name="modul[id][]" value="387"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">22.2</td>
                                            <td>Pendaftar Layanan Mandiri</td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_baca][387]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_ubah][387]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_hapus][387]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m22.3" class="m22" type="checkbox" name="modul[id][]" value="483"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">22.3</td>
                                            <td>Gawai Layanan</td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_baca][483]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_ubah][483]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_hapus][483]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m22.4" class="m22" type="checkbox" name="modul[id][]" value="456"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">22.4</td>
                                            <td>Pendapat</td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_baca][456]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_ubah][456]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_hapus][456]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m22.5" class="m22" type="checkbox" name="modul[id][]" value="449"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">22.5</td>
                                            <td>Pengaturan</td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_baca][449]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_ubah][449]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m22" type="checkbox" name="modul[akses_hapus][449]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m23" type="checkbox" name="modul[id][]" value="312"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">23</td>
                                            <td>Anjungan</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m23.1" class="m23" type="checkbox" name="modul[id][]" value="479"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">23.1</td>
                                            <td>Daftar Anjungan</td>
                                            <td class="padat">
                                                <input class="m23" type="checkbox" name="modul[akses_baca][479]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m23" type="checkbox" name="modul[akses_ubah][479]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m23" type="checkbox" name="modul[akses_hapus][479]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m23.2" class="m23" type="checkbox" name="modul[id][]" value="480"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">23.2</td>
                                            <td>Menu</td>
                                            <td class="padat">
                                                <input class="m23" type="checkbox" name="modul[akses_baca][480]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m23" type="checkbox" name="modul[akses_ubah][480]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m23" type="checkbox" name="modul[akses_hapus][480]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m23.3" class="m23" type="checkbox" name="modul[id][]" value="481"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">23.3</td>
                                            <td>Pengaturan</td>
                                            <td class="padat">
                                                <input class="m23" type="checkbox" name="modul[akses_baca][481]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m23" type="checkbox" name="modul[akses_ubah][481]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m23" type="checkbox" name="modul[akses_hapus][481]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m24" type="checkbox" name="modul[id][]" value="352"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">24</td>
                                            <td>Satu Data</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m24.1" class="m24" type="checkbox" name="modul[id][]" value="484"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">24.1</td>
                                            <td>DTKS</td>
                                            <td class="padat">
                                                <input class="m24" type="checkbox" name="modul[akses_baca][484]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m24" type="checkbox" name="modul[akses_ubah][484]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m24" type="checkbox" name="modul[akses_hapus][484]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m25" type="checkbox" name="modul[id][]" value="354"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">25</td>
                                            <td>Buku Tamu</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m25.1" class="m25" type="checkbox" name="modul[id][]" value="485"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">25.1</td>
                                            <td>Data Tamu</td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_baca][485]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_ubah][485]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_hapus][485]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m25.2" class="m25" type="checkbox" name="modul[id][]" value="486"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">25.2</td>
                                            <td>Data Kepuasan</td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_baca][486]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_ubah][486]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_hapus][486]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m25.3" class="m25" type="checkbox" name="modul[id][]" value="487"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">25.3</td>
                                            <td>Data Pertanyaan</td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_baca][487]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_ubah][487]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_hapus][487]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m25.4" class="m25" type="checkbox" name="modul[id][]" value="488"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">25.4</td>
                                            <td>Data Keperluan</td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_baca][488]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_ubah][488]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m25" type="checkbox" name="modul[akses_hapus][488]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m26" type="checkbox" name="modul[id][]" value="514"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">26</td>
                                            <td>PPID</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m26.1" class="m26" type="checkbox" name="modul[id][]" value="515"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">26.1</td>
                                            <td>Daftar Dokumen</td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_baca][515]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_ubah][515]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_hapus][515]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m26.2" class="m26" type="checkbox" name="modul[id][]" value="516"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">26.2</td>
                                            <td>Permohonan Informasi</td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_baca][516]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_ubah][516]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_hapus][516]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m26.3" class="m26" type="checkbox" name="modul[id][]" value="517"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">26.3</td>
                                            <td>Permohonan Keberatan</td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_baca][517]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_ubah][517]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_hapus][517]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m26.4" class="m26" type="checkbox" name="modul[id][]" value="518"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">26.4</td>
                                            <td>Jenis Dokumen</td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_baca][518]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_ubah][518]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_hapus][518]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m26.5" class="m26" type="checkbox" name="modul[id][]" value="519"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">26.5</td>
                                            <td>Pengaturan</td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_baca][519]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_ubah][519]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m26" type="checkbox" name="modul[akses_hapus][519]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr class="bg-aqua">
                                            <td class="padat"><input id="m27" type="checkbox" name="modul[id][]" value="520"
                                                    checked="" disabled="disabled"></td>
                                            <td class="padat" colspan="2">27</td>
                                            <td>Prodeskel</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m27.1" class="m27" type="checkbox" name="modul[id][]" value="525"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">27.1</td>
                                            <td>Pengaturan</td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_baca][525]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_ubah][525]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_hapus][525]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m27.2" class="m27" type="checkbox" name="modul[id][]" value="521"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">27.2</td>
                                            <td>DDK</td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_baca][521]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_ubah][521]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_hapus][521]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m27.3" class="m27" type="checkbox" name="modul[id][]" value="522"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">27.3</td>
                                            <td>Potensi</td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_baca][522]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_ubah][522]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_hapus][522]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m27.4" class="m27" type="checkbox" name="modul[id][]" value="523"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">27.4</td>
                                            <td>Perkembangan</td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_baca][523]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_ubah][523]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_hapus][523]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="padat">
                                                <input id="m27.5" class="m27" type="checkbox" name="modul[id][]" value="524"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td></td>
                                            <td class="padat">27.5</td>
                                            <td>Laporan Rekapitulasi</td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_baca][524]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_ubah][524]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                            <td class="padat">
                                                <input class="m27" type="checkbox" name="modul[akses_hapus][524]" value="1"
                                                    checked="" disabled="disabled">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <br>
                            <div class="btn-group col-xs-12 col-sm-8" style="padding: 0" data-toggle="buttons">
                                <label class="btn btn-info btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label active">
                                    <input type="radio" name="status" class="form-check-input" value="1" checked=""
                                        disabled="disabled"> Aktif
                                </label>
                                <label class="btn btn-info btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label ">
                                    <input type="radio" name="status" class="form-check-input" value="0"
                                        disabled="disabled"> Tidak Aktif
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="sidcsrf" value="a75da94fd159e7168608da84e2b7c8bf">
            </form>

        </section>
    </div>

@endsection
