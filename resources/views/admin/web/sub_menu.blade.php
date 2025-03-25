@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Menu
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Daftar Menu</li>
            </ol>

        </section>

        <section id="maincontent" class="content">
            <div class="box box-info" data-select2-id="10">
                <div class="box-header with-border">
                    <a href="#" data-remote="false" data-toggle="modal"
                        data-target="#tambahSub" data-title="Tambah "
                        class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                            class="fa fa-plus"></i> Tambah</a>
                    <a href="#" title="Hapus Data"
                        onclick="#"
                        class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih disabled"><i
                            class="fa fa-trash-o"></i>
                        Hapus</a>
                    <a href="#"
                        class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                        <i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar Menu
                    </a>
                </div>
                <div class="box-header with-border">
                    <strong><a href="#">MENU UTAMA </a> / TES &amp;
                        MENU</strong>
                </div>
                <div class="box-body" data-select2-id="9">
                    <div class="row mepet" data-select2-id="8">
                        <div class="col-sm-2" data-select2-id="7">
                            <select id="status" class="form-control input-sm select2 select2-hidden-accessible"
                                name="status" data-select2-id="status" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="2">Pilih Status</option>
                                <option value="1" data-select2-id="3">Aktif</option>
                                <option value="0" data-select2-id="4">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                    <hr class="batas">
                    <form action="#" id="mainform" name="mainform" method="post"
                        accept-charset="utf-8">
                        <input type="hidden" name="sidcsrf" value="2b75fd62096f39f21816d0032c5ef22f">

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
                                                        aria-label="AKSI">AKSI</th>
                                                    <th nowrap="" class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="NAMA SUBMENU">NAMA SUBMENU</th>
                                                    <th nowrap="" class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="LINK">LINK</th>
                                                </tr>
                                            </thead>
                                            <tbody id="dragable" class="ui-sortable">
                                                <tr data-id="3" class="dragable-handle odd" role="row">
                                                    <td class=" padat"><i class="fa fa-sort-alpha-desc"></i></td>
                                                    <td class=" padat"><input type="checkbox" name="id_cb[]" value="3"></td>
                                                    <td class=" padat">1</td>
                                                    <td class=" aksi"><a
                                                            href="#"
                                                            class="btn bg-purple btn-sm" title="Submenu"
                                                            style="margin-right: 3px;">
                                                            <i class="fa fa-bars"></i>
                                                        </a>
                                                        <a href="#"
                                                            class="btn bg-orange btn-sm" data-remote="false"
                                                            data-toggle="modal" data-target="#ubahSub"
                                                            data-title="Ubah Submenu" title="Ubah"><i
                                                                class="fa fa-edit"></i></a> <a
                                                            href="#"
                                                            class="btn bg-navy btn-sm" title="Aktifkan"><i
                                                                class="fa fa-lock"></i></a> <a href="#"
                                                            data-href="#"
                                                            class="btn bg-maroon btn-sm" title="Hapus" data-toggle="modal"
                                                            data-target="#confirm-delete"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    <td>Unjuk Rasa</td>
                                                    <td><a href="#"
                                                            target="_blank">https://berputar.opendesa.id/artikel/kategori/berita-kriminal</a>
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


            <div class="modal fade in" id="tambahSub" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Tambah </h4>
                        </div>
                        <div class="fetched-data"><form action="#" method="post" id="validasi">
        <div class="modal-body">
            <input name="parrent" type="hidden" value="0">
                    <div class="form-group">
                <label class="control-label" for="nama">Nama</label>
                <input name="nama" class="form-control input-sm required nomor_sk" maxlength="50" type="text" value="">
            </div>
                    <div class="form-group">
                <label class="control-label" for="link">Jenis Link</label>
                <select class="form-control input-sm required" id="link_tipe" name="link_tipe" onchange="ganti_jenis_link(this);">
                    <option option="" value="">-- Pilih Jenis Link --</option>
                                        <option value="1">Artikel Statis</option>
                                        <option value="8">Kategori Artikel</option>
                                        <option value="2">Statistik Penduduk</option>
                                        <option value="3">Statistik Keluarga</option>
                                        <option value="4">Statistik Program Bantuan</option>
                                        <option value="12">Statistik Kesehatan</option>
                                        <option value="5">Halaman Statis Lain</option>
                                        <option value="6">Artikel Keuangan</option>
                                        <option value="7">Kelompok</option>
                                        <option value="11">Lembaga</option>
                                        <option value="9">Data Suplemen</option>
                                        <option value="10">Status IDM</option>
                                        <option value="88">Embed</option>
                                        <option value="99">Eksternal</option>
                                </select>
            </div>
            <div class="form-group" id="jenis_link" style="display: none;">
                <label class="control-label" for="link">Link</label>
                <select id="artikel_statis" class="form-control input-sm jenis_link select2 select2-hidden-accessible" style=" display:none; " data-select2-id="artikel_statis" tabindex="-1" aria-hidden="true">
                    <option value="" data-select2-id="9">-- Pilih Artikel Statis --</option>
                                        <option value="artikel/7">Awal mula SID</option>
                                        <option value="artikel/32">Profil Desa</option>
                                        <option value="artikel/34">Profil Masyarakat Desa</option>
                                        <option value="artikel/36">Kontak Kami</option>
                                        <option value="artikel/37">Badan Permusyawaratan Desa</option>
                                        <option value="artikel/38">Lembaga Kemasyarakatan</option>
                                        <option value="artikel/42">Undang Undang</option>
                                        <option value="artikel/43">Peraturan Pemerintah</option>
                                        <option value="artikel/44">Peraturan Desa</option>
                                        <option value="artikel/45">Peraturan Kepala Desa</option>
                                        <option value="artikel/46">Keputusan Kepala Desa</option>
                                        <option value="artikel/47">Panduan</option>
                                        <option value="artikel/51">Pengaduan</option>
                                        <option value="artikel/59">Profil Potensi Desa</option>
                                        <option value="artikel/62">LKMD</option>
                                        <option value="artikel/63">PKK</option>
                                        <option value="artikel/64">Karang Taruna</option>
                                        <option value="artikel/65">RT RW</option>
                                        <option value="artikel/66">TKP2KDes</option>
                                        <option value="artikel/67">KPAD</option>
                                        <option value="artikel/68">Kelompok Ternak</option>
                                        <option value="artikel/69">Kelompok Tani</option>
                                        <option value="artikel/70">LinMas</option>
                                        <option value="artikel/71">Kelompok Ekonomi Lainya</option>
                                        <option value="artikel/85">Pemerintahan Desa</option>
                                        <option value="artikel/92">Pemerintah Desa</option>
                                        <option value="artikel/93">Visi dan Misi</option>
                                        <option value="artikel/97">Data Desa</option>
                                        <option value="artikel/98">Wilayah Desa</option>
                                        <option value="artikel/99">Sejarah Desa</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%; display: none;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-artikel_statis-container"><span class="select2-selection__rendered" id="select2-artikel_statis-container" role="textbox" aria-readonly="true" title="-- Pilih Artikel Statis --">-- Pilih Artikel Statis --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                <select id="kategori_artikel" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Kategori Artikel --</option>
                                        <option value="kategori/berita-kriminal">Berita Kriminal</option>
                                        <option value="kategori/berita-lokal">Berita Lokal</option>
                                        <option value="kategori/peraturan-kebersihan-desa">Peraturan Kebersihan Desa</option>
                                        <option value="kategori/berita-desa">Berita Desa</option>
                                        <option value="kategori/berita-acara">Berita Acara</option>
                                        <option value="kategori/program-kerja">Program Kerja</option>
                                        <option value="kategori/produk-desa">Produk Desa</option>
                                        <option value="kategori/panduan-layanan-desa">Panduan Layanan Desa</option>
                                        <option value="kategori/peraturan-desa">Peraturan Desa</option>
                                        <option value="kategori/laporan-desa">Laporan Desa</option>
                                </select>
                <select id="statistik_penduduk" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Statistik Penduduk --</option>
                                        <option value="statistik/13">Rentang Umur</option>
                                        <option value="statistik/15">Kategori Umur</option>
                                        <option value="statistik/0">Pendidikan Dalam KK</option>
                                        <option value="statistik/14">Pendidikan Sedang Ditempuh</option>
                                        <option value="statistik/1">Pekerjaan</option>
                                        <option value="statistik/2">Status Perkawinan</option>
                                        <option value="statistik/3">Agama</option>
                                        <option value="statistik/4">Jenis Kelamin</option>
                                        <option value="statistik/hubungan_kk">Hubungan Dalam KK</option>
                                        <option value="statistik/5">Warga Negara</option>
                                        <option value="statistik/6">Status Penduduk</option>
                                        <option value="statistik/7">Golongan Darah</option>
                                        <option value="statistik/9">Penyandang Cacat</option>
                                        <option value="statistik/10">Penyakit Menahun</option>
                                        <option value="statistik/16">Akseptor KB</option>
                                        <option value="statistik/17">Akta Kelahiran</option>
                                        <option value="statistik/18">Kepemilikan KTP</option>
                                        <option value="statistik/19">Asuransi Kesehatan</option>
                                        <option value="statistik/covid">Status Covid</option>
                                        <option value="statistik/suku">Suku / Etnis</option>
                                        <option value="statistik/bpjs-tenagakerja">BPJS Ketenagakerjaan</option>
                                        <option value="statistik/status-asuransi-kesehatan">Status Kepersertaan Asuransi Kesehatan</option>
                                        <option value="statistik/hamil">Status Kehamilan</option>
                                        <option value="statistik/kia">Kepemilikan KIA</option>
                                        <option value="statistik/akta-kematian">Kepemilikan Akta Kematian</option>
                                </select>
                <select id="statistik_keluarga" class="form-control jenis_link input-sm" style=" display:none; ">
                    <option value="">-- Pilih Statistik Keluarga --</option>
                                        <option value="statistik/kelas_sosial">Kelas Sosial</option>
                                </select>
                <select id="statistik_program_bantuan" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Statistik Program Bantuan --</option>
                                        <option value="statistik/bantuan_penduduk">Bantuan Penduduk</option>
                                        <option value="statistik/bantuan_keluarga">Bantuan Keluarga</option>
                                                </select>
                <select id="statistik_kesehatan" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Statistik Kesehatan --</option>
                    <option value="data-kesehatan/stunting">Stunting</option>
                </select>
                <select id="statis_lainnya" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Halaman Statis Lainnya --</option>
                                        <option value="dpt">Calon Pemilih</option>
                                        <option value="data-wilayah">Wilayah Administratif</option>
                                        <option value="peraturan-desa">Produk Hukum</option>
                                        <option value="informasi_publik">Informasi Publik</option>
                                        <option value="peta">Peta</option>
                                        <option value="data_analisis">Data Analisis</option>
                                        <option value="status-sdgs">SDGs Desa</option>
                                        <option value="lapak">Lapak Desa</option>
                                        <option value="pembangunan">Pembangunan</option>
                                        <option value="galeri">Galeri</option>
                                        <option value="pengaduan">Pengaduan</option>
                                        <option value="data-vaksinasi">Vaksin</option>
                                        <option value="pemerintah">Pemerintah Desa</option>
                                        <option value="layanan-mandiri/beranda">Layanan Mandiri</option>
                                        <option value="inventaris">Inventaris</option>
                                        <option value="struktur-organisasi-dan-tata-kerja">SOTK Desa</option>
                                </select>
                <select id="artikel_keuangan" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Artikel Keuangan --</option>
                                </select>
                <select id="kelompok" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">Pilih Kelompok</option>
                                        <option value="data-kelompok/1">dddd ()</option>
                                </select>
                <select id="lembaga" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">Pilih Lembaga</option>
                                </select>
                <select id="suplemen" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">Pilih Suplemen</option>
                                </select>
                <select id="status_idm" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">Pilih Tahun</option>
                                        <option value="status-idm/2025">2025</option>
                                        <option value="status-idm/2024">2024</option>
                                        <option value="status-idm/2023">2023</option>
                                        <option value="status-idm/2022">2022</option>
                                        <option value="status-idm/2021">2021</option>
                                        <option value="status-idm/2020">2020</option>
                                </select>
                <span id="eksternal" class="jenis_link" style=" display:none; ">
                    <input name="" class="form-control input-sm" type="text" value="">
                    <span class="text-sm text-red">(misalnya: https://opendesa.id)</span>
                </span>
            </div>
            <div class="form-group">
                <label class="control-label" for="enabled">Status</label>
                <select name="enabled" class="form-control input-sm required">
                    <option value="1">Aktif</option>
                    <option value="0" selected="">Tidak Aktif</option>
                </select>
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


            <div class="modal fade in" id="ubahSub" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Tambah </h4>
                        </div>
                        <div class="fetched-data"><form action="#" method="post" id="validasi">
        <div class="modal-body">
            <input name="parrent" type="hidden" value="0">
                    <div class="form-group">
                <label class="control-label" for="nama">Nama</label>
                <input name="nama" class="form-control input-sm required nomor_sk" maxlength="50" type="text" value="">
            </div>
                    <div class="form-group">
                <label class="control-label" for="link">Jenis Link</label>
                <select class="form-control input-sm required" id="link_tipe" name="link_tipe" onchange="ganti_jenis_link(this);">
                    <option option="" value="">-- Pilih Jenis Link --</option>
                                        <option value="1">Artikel Statis</option>
                                        <option value="8">Kategori Artikel</option>
                                        <option value="2">Statistik Penduduk</option>
                                        <option value="3">Statistik Keluarga</option>
                                        <option value="4">Statistik Program Bantuan</option>
                                        <option value="12">Statistik Kesehatan</option>
                                        <option value="5">Halaman Statis Lain</option>
                                        <option value="6">Artikel Keuangan</option>
                                        <option value="7">Kelompok</option>
                                        <option value="11">Lembaga</option>
                                        <option value="9">Data Suplemen</option>
                                        <option value="10">Status IDM</option>
                                        <option value="88">Embed</option>
                                        <option value="99">Eksternal</option>
                                </select>
            </div>
            <div class="form-group" id="jenis_link" style="display: none;">
                <label class="control-label" for="link">Link</label>
                <select id="artikel_statis" class="form-control input-sm jenis_link select2 select2-hidden-accessible" style=" display:none; " data-select2-id="artikel_statis" tabindex="-1" aria-hidden="true">
                    <option value="" data-select2-id="9">-- Pilih Artikel Statis --</option>
                                        <option value="artikel/7">Awal mula SID</option>
                                        <option value="artikel/32">Profil Desa</option>
                                        <option value="artikel/34">Profil Masyarakat Desa</option>
                                        <option value="artikel/36">Kontak Kami</option>
                                        <option value="artikel/37">Badan Permusyawaratan Desa</option>
                                        <option value="artikel/38">Lembaga Kemasyarakatan</option>
                                        <option value="artikel/42">Undang Undang</option>
                                        <option value="artikel/43">Peraturan Pemerintah</option>
                                        <option value="artikel/44">Peraturan Desa</option>
                                        <option value="artikel/45">Peraturan Kepala Desa</option>
                                        <option value="artikel/46">Keputusan Kepala Desa</option>
                                        <option value="artikel/47">Panduan</option>
                                        <option value="artikel/51">Pengaduan</option>
                                        <option value="artikel/59">Profil Potensi Desa</option>
                                        <option value="artikel/62">LKMD</option>
                                        <option value="artikel/63">PKK</option>
                                        <option value="artikel/64">Karang Taruna</option>
                                        <option value="artikel/65">RT RW</option>
                                        <option value="artikel/66">TKP2KDes</option>
                                        <option value="artikel/67">KPAD</option>
                                        <option value="artikel/68">Kelompok Ternak</option>
                                        <option value="artikel/69">Kelompok Tani</option>
                                        <option value="artikel/70">LinMas</option>
                                        <option value="artikel/71">Kelompok Ekonomi Lainya</option>
                                        <option value="artikel/85">Pemerintahan Desa</option>
                                        <option value="artikel/92">Pemerintah Desa</option>
                                        <option value="artikel/93">Visi dan Misi</option>
                                        <option value="artikel/97">Data Desa</option>
                                        <option value="artikel/98">Wilayah Desa</option>
                                        <option value="artikel/99">Sejarah Desa</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%; display: none;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-artikel_statis-container"><span class="select2-selection__rendered" id="select2-artikel_statis-container" role="textbox" aria-readonly="true" title="-- Pilih Artikel Statis --">-- Pilih Artikel Statis --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                <select id="kategori_artikel" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Kategori Artikel --</option>
                                        <option value="kategori/berita-kriminal">Berita Kriminal</option>
                                        <option value="kategori/berita-lokal">Berita Lokal</option>
                                        <option value="kategori/peraturan-kebersihan-desa">Peraturan Kebersihan Desa</option>
                                        <option value="kategori/berita-desa">Berita Desa</option>
                                        <option value="kategori/berita-acara">Berita Acara</option>
                                        <option value="kategori/program-kerja">Program Kerja</option>
                                        <option value="kategori/produk-desa">Produk Desa</option>
                                        <option value="kategori/panduan-layanan-desa">Panduan Layanan Desa</option>
                                        <option value="kategori/peraturan-desa">Peraturan Desa</option>
                                        <option value="kategori/laporan-desa">Laporan Desa</option>
                                </select>
                <select id="statistik_penduduk" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Statistik Penduduk --</option>
                                        <option value="statistik/13">Rentang Umur</option>
                                        <option value="statistik/15">Kategori Umur</option>
                                        <option value="statistik/0">Pendidikan Dalam KK</option>
                                        <option value="statistik/14">Pendidikan Sedang Ditempuh</option>
                                        <option value="statistik/1">Pekerjaan</option>
                                        <option value="statistik/2">Status Perkawinan</option>
                                        <option value="statistik/3">Agama</option>
                                        <option value="statistik/4">Jenis Kelamin</option>
                                        <option value="statistik/hubungan_kk">Hubungan Dalam KK</option>
                                        <option value="statistik/5">Warga Negara</option>
                                        <option value="statistik/6">Status Penduduk</option>
                                        <option value="statistik/7">Golongan Darah</option>
                                        <option value="statistik/9">Penyandang Cacat</option>
                                        <option value="statistik/10">Penyakit Menahun</option>
                                        <option value="statistik/16">Akseptor KB</option>
                                        <option value="statistik/17">Akta Kelahiran</option>
                                        <option value="statistik/18">Kepemilikan KTP</option>
                                        <option value="statistik/19">Asuransi Kesehatan</option>
                                        <option value="statistik/covid">Status Covid</option>
                                        <option value="statistik/suku">Suku / Etnis</option>
                                        <option value="statistik/bpjs-tenagakerja">BPJS Ketenagakerjaan</option>
                                        <option value="statistik/status-asuransi-kesehatan">Status Kepersertaan Asuransi Kesehatan</option>
                                        <option value="statistik/hamil">Status Kehamilan</option>
                                        <option value="statistik/kia">Kepemilikan KIA</option>
                                        <option value="statistik/akta-kematian">Kepemilikan Akta Kematian</option>
                                </select>
                <select id="statistik_keluarga" class="form-control jenis_link input-sm" style=" display:none; ">
                    <option value="">-- Pilih Statistik Keluarga --</option>
                                        <option value="statistik/kelas_sosial">Kelas Sosial</option>
                                </select>
                <select id="statistik_program_bantuan" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Statistik Program Bantuan --</option>
                                        <option value="statistik/bantuan_penduduk">Bantuan Penduduk</option>
                                        <option value="statistik/bantuan_keluarga">Bantuan Keluarga</option>
                                                </select>
                <select id="statistik_kesehatan" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Statistik Kesehatan --</option>
                    <option value="data-kesehatan/stunting">Stunting</option>
                </select>
                <select id="statis_lainnya" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Halaman Statis Lainnya --</option>
                                        <option value="dpt">Calon Pemilih</option>
                                        <option value="data-wilayah">Wilayah Administratif</option>
                                        <option value="peraturan-desa">Produk Hukum</option>
                                        <option value="informasi_publik">Informasi Publik</option>
                                        <option value="peta">Peta</option>
                                        <option value="data_analisis">Data Analisis</option>
                                        <option value="status-sdgs">SDGs Desa</option>
                                        <option value="lapak">Lapak Desa</option>
                                        <option value="pembangunan">Pembangunan</option>
                                        <option value="galeri">Galeri</option>
                                        <option value="pengaduan">Pengaduan</option>
                                        <option value="data-vaksinasi">Vaksin</option>
                                        <option value="pemerintah">Pemerintah Desa</option>
                                        <option value="layanan-mandiri/beranda">Layanan Mandiri</option>
                                        <option value="inventaris">Inventaris</option>
                                        <option value="struktur-organisasi-dan-tata-kerja">SOTK Desa</option>
                                </select>
                <select id="artikel_keuangan" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">-- Pilih Artikel Keuangan --</option>
                                </select>
                <select id="kelompok" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">Pilih Kelompok</option>
                                        <option value="data-kelompok/1">dddd ()</option>
                                </select>
                <select id="lembaga" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">Pilih Lembaga</option>
                                </select>
                <select id="suplemen" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">Pilih Suplemen</option>
                                </select>
                <select id="status_idm" class="form-control input-sm jenis_link" style=" display:none; ">
                    <option value="">Pilih Tahun</option>
                                        <option value="status-idm/2025">2025</option>
                                        <option value="status-idm/2024">2024</option>
                                        <option value="status-idm/2023">2023</option>
                                        <option value="status-idm/2022">2022</option>
                                        <option value="status-idm/2021">2021</option>
                                        <option value="status-idm/2020">2020</option>
                                </select>
                <span id="eksternal" class="jenis_link" style=" display:none; ">
                    <input name="" class="form-control input-sm" type="text" value="">
                    <span class="text-sm text-red">(misalnya: https://opendesa.id)</span>
                </span>
            </div>
            <div class="form-group">
                <label class="control-label" for="enabled">Status</label>
                <select name="enabled" class="form-control input-sm required">
                    <option value="1">Aktif</option>
                    <option value="0" selected="">Tidak Aktif</option>
                </select>
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
