<aside class="main-sidebar">
    <div><section class="sidebar" style="overflow: hidden; width: auto; height: 1141px;">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://berputar.opendesa.id/assets/files/logo/opensid_logo.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <strong>Desa Gunung Condong</strong>
                <br>Kec. Bruno<br>
                Kab. Purworejo                
            </div>
        </div>

        <div class="sidebar-form">
            <div class="input-group mb-0">
                <input type="text" id="cari-menu" class="form-control" placeholder="Pencarian...">
                <span class="input-group-btn">
                    <button type="button" name="search" id="search-btn" class="btn btn-sm"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>

        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">MENU UTAMA</li>
                                                <li class="">
                <a href="{{ url('/') }}">
                    <i class="fa fa-home "></i><span>Beranda</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
                                                <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i><span>Info Desa</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu" style="display: none;">

                                        <li class="">
                        <a href="{{ url('identitas-desa') }}">
                            <i class="fa fa-id-card text-red"></i>
                            Identitas Desa                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('dusun') }}">
                            <i class="fa fa-map "></i>
                            Wilayah Administratif                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/pengurus">
                            <i class="fa fa-sitemap "></i>
                            Pemerintah Desa                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/status_desa">
                            <i class="fa fa-dot-circle-o "></i>
                            Status Desa                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('lembaga-desa') }}">
                            <i class="fa fa-list "></i>
                            Lembaga Desa                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-users "></i><span>Kependudukan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/penduduk">
                            <i class="fa fa-user "></i>
                            Penduduk                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/keluarga">
                            <i class="fa fa-users "></i>
                            Keluarga                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/rtm">
                            <i class="fa fa-venus-mars "></i>
                            Rumah Tangga                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/kelompok/clear">
                            <i class="fa fa-sitemap "></i>
                            Kelompok                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/suplemen">
                            <i class="fa fa-slideshare "></i>
                            Data Suplemen                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/dpt">
                            <i class="fa fa-podcast "></i>
                            Calon Pemilih                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/penduduk_log">
                            <i class="fa fa-archive "></i>
                            Catatan Peristiwa                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-line-chart "></i><span>Statistik</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/statistik">
                            <i class="fa fa-bar-chart "></i>
                            Statistik Kependudukan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/laporan/clear">
                            <i class="fa fa-file-text "></i>
                            Laporan Bulanan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/laporan_rentan/clear">
                            <i class="fa fa-wheelchair "></i>
                            Laporan Kelompok Rentan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/laporan_penduduk">
                            <i class="fa fa-file-text-o "></i>
                            Laporan penduduk                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-calendar-check-o "></i><span>Kehadiran</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/kehadiran_jam_kerja">
                            <i class="fa fa-clock-o "></i>
                            Jam Kerja                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/kehadiran_hari_libur">
                            <i class="fa fa-calendar "></i>
                            Hari Libur                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/kehadiran_rekapitulasi">
                            <i class="fa fa-list "></i>
                            Rekapitulasi                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/kehadiran_pengaduan">
                            <i class="fa fa-exclamation "></i>
                            Pengaduan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/kehadiran_keluar">
                            <i class="fa fa-sign-out "></i>
                            Alasan Keluar                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-heartbeat "></i><span>Kesehatan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/covid19">
                            <i class="fa fa-list "></i>
                            Pendataan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/covid19/pantau">
                            <i class="fa fa-check "></i>
                            Pemantauan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/vaksin_covid/clear">
                            <i class="fa fa fa-medkit "></i>
                            Vaksin                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/stunting">
                            <i class="fa fa-stethoscope "></i>
                            Stunting                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-book "></i><span>Layanan Surat</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/surat_master">
                            <i class="fa fa-cog "></i>
                            Pengaturan Surat                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/surat">
                            <i class="fa fa-files-o "></i>
                            Cetak Surat                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/permohonan_surat_admin">
                            <i class="fa fa-files-o "></i>
                            Permohonan Surat                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/keluar">
                            <i class="fa fa-folder-open "></i>
                            Arsip Layanan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/surat_mohon">
                            <i class="fa fa fa-book "></i>
                            Daftar Persyaratan                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-archive "></i><span>Sekretariat</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/dokumen">
                            <i class="fa fa-file-text "></i>
                            Informasi Publik                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/inventaris_tanah">
                            <i class="fa fa-cubes "></i>
                            Inventaris                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/klasifikasi">
                            <i class="fa fa-code "></i>
                            Klasifikasi Surat                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-book "></i><span>Surat Dinas</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/surat_dinas">
                            <i class="fa fa-cog "></i>
                            Pengaturan Surat                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/surat_dinas_cetak">
                            <i class="fa fa-files-o "></i>
                            Cetak Surat                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/surat_dinas_arsip">
                            <i class="fa fa-folder-open "></i>
                            Arsip Layanan                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-paste "></i><span>Buku Administrasi Desa</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/bumindes_umum">
                            <i class="fa fa-bookmark "></i>
                            Administrasi Umum                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/bumindes_penduduk_induk">
                            <i class="fa fa-users "></i>
                            Administrasi Penduduk                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/bumindes_rencana_pembangunan">
                            <i class="fa fa-university "></i>
                            Administrasi Pembangunan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/bumindes_arsip">
                            <i class="fa fa-archive "></i>
                            Arsip Desa                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-balance-scale "></i><span>Keuangan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/keuangan/laporan">
                            <i class="fa fa-bar-chart "></i>
                            Laporan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/keuangan_manual">
                            <i class="fa fa-keyboard-o "></i>
                            Input Data                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/laporan_apbdes">
                            <i class="fa fa-file-text-o "></i>
                            Laporan APBDes                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="">
                <a href="https://berputar.opendesa.id/analisis_master">
                    <i class="fa fa-check-square "></i><span>Analisis</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
                                                <li class="">
                <a href="https://berputar.opendesa.id/program_bantuan/clear">
                    <i class="fa fa-heart "></i><span>Bantuan</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-map-signs "></i><span>Pertanahan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/data_persil">
                            <i class="fa fa-list "></i>
                            Daftar Persil                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/cdesa">
                            <i class="fa fa-files-o "></i>
                            C-Desa                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="">
                <a href="https://berputar.opendesa.id/admin_pembangunan">
                    <i class="fa fa-institution "></i><span>Pembangunan</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
                                                <li class="">
                <a href="https://berputar.opendesa.id/lapak_admin">
                    <i class="fa fa-cart-plus "></i><span>Lapak</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-university "></i><span>OpenDK</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/opendk_pesan/clear">
                            <i class="fa fa-envelope "></i>
                            Pesan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/sinkronisasi">
                            <i class="fa  fa-random "></i>
                            Sinkronisasi                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="">
                <a href="https://berputar.opendesa.id/pengaduan_admin">
                    <i class="fa fa-info "></i><span>Pengaduan</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-globe "></i><span>Pemetaan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/gis/clear">
                            <i class="fa fa-globe "></i>
                            Peta                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/plan">
                            <i class="fa fa-location-arrow "></i>
                            Pengaturan Peta                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-envelope "></i><span>Hubung Warga</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/sms">
                            <i class="fa fa-envelope-open-o "></i>
                            Kirim Pesan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/daftar_kontak">
                            <i class="fa fa-id-card-o "></i>
                            Daftar Kontak                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-users "></i><span>Pengaturan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/modul">
                            <i class="fa fa-tags "></i>
                            Modul                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/setting">
                            <i class="fa fa-codepen "></i>
                            Aplikasi                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/man_user">
                            <i class="fa fa-users "></i>
                            Pengguna                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/database">
                            <i class="fa fa-database "></i>
                            Database                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/info_sistem">
                            <i class="fa fa-server "></i>
                            Info Sistem                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/qrcode">
                            <i class="fa fa-qrcode "></i>
                            QR Code                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/optimasi_gambar">
                            <i class="fa fa-picture-o "></i>
                            Optimasi Gambar                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/shortcut">
                            <i class="fa fa-chain "></i>
                            Shortcut                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="#">
                    <i class="fa fa-desktop "></i><span>Admin Web</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="{{ url('artikel') }}">
                            <i class="fa fa-file-movie-o "></i>
                            Artikel                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('widget') }}">
                            <i class="fa fa-windows "></i>
                            Widget                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('kategori') }}">
                            <i class="fa fa-list-alt "></i>
                            Kategori                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('menu') }}">
                            <i class="fa fa-bars "></i>
                            Menu                        </a>
                    </li>
                                        <li class="">
                        <a href="#">
                            <i class="fa fa-clone "></i>
                            Sinergi Program                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('komentar') }}">
                            <i class="fa fa-comments "></i>
                            Komentar                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('galeri') }}">
                            <i class="fa fa-image "></i>
                            Galeri                        </a>
                    </li>
                                        <li class="">
                        <a href="#">
                            <i class="fa fa-object-group "></i>
                            Tema                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('sosmed') }}">
                            <i class="fa fa-facebook "></i>
                            Media Sosial                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('slider') }}">
                            <i class="fa fa-film "></i>
                            Slider                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('teks-berjalan') }}">
                            <i class="fa fa-ellipsis-h "></i>
                            Teks Berjalan                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('pengunjung') }}">
                            <i class="fa fa-bar-chart "></i>
                            Pengunjung                        </a>
                    </li>
                                        <li class="">
                        <a href="{{ url('setting-web') }}">
                            <i class="fa fa-gear "></i>
                            Pengaturan                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-inbox "></i><span>Layanan Mandiri</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/mailbox/clear">
                            <i class="fa fa-wechat "></i>
                            Kotak Pesan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/mandiri">
                            <i class="fa fa-500px "></i>
                            Pendaftar Layanan Mandiri                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/gawai_layanan">
                            <i class="fa fa-desktop "></i>
                            Gawai Layanan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/pendapat">
                            <i class="fa fa-thumbs-o-up "></i>
                            Pendapat                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/setting_mandiri">
                            <i class="fa fa-gear "></i>
                            Pengaturan                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-desktop "></i><span>Anjungan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/anjungan">
                            <i class="fa fa-list "></i>
                            Daftar Anjungan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/anjungan_menu">
                            <i class="fa fa-bars "></i>
                            Menu                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/anjungan_pengaturan">
                            <i class="fa fa-gear "></i>
                            Pengaturan                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-globe "></i><span>Satu Data</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/dtks">
                            <i class="fa fa-exchange "></i>
                            DTKS                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/">
                    <i class="fa fa-book "></i><span>Buku Tamu</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/buku_tamu">
                            <i class="fa fa-bookmark-o "></i>
                            Data Tamu                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/buku_kepuasan">
                            <i class="fa fa-smile-o "></i>
                            Data Kepuasan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/buku_pertanyaan">
                            <i class="fa fa-question "></i>
                            Data Pertanyaan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/buku_keperluan">
                            <i class="fa fa-send "></i>
                            Data Keperluan                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/ppid">
                    <i class="fa fa-book "></i><span>PPID</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/ppid/daftar-dokumen">
                            <i class="fa fa-files-o "></i>
                            Daftar Dokumen                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/ppid/permohonan-informasi">
                            <i class="fa fa-files-o "></i>
                            Permohonan Informasi                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/ppid/permohonan-keberatan">
                            <i class="fa fa-files-o "></i>
                            Permohonan Keberatan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/ppid/jenis-dokumen">
                            <i class="fa fa-folder-open "></i>
                            Jenis Dokumen                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/ppid/pengaturan">
                            <i class="fa fa-cogs "></i>
                            Pengaturan                        </a>
                    </li>
                    
                </ul>
            </li>
                                                <li class="treeview ">
                <a href="https://berputar.opendesa.id/prodeskel">
                    <i class="fa fa-globe "></i><span>Prodeskel</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu ">

                                        <li class="">
                        <a href="https://berputar.opendesa.id/prodeskel/pengaturan">
                            <i class="fa fa-gear "></i>
                            Pengaturan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/prodeskel/ddk">
                            <i class="fa fa-exchange "></i>
                            DDK                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/prodeskel/potensi">
                            <i class="fa fa-exchange "></i>
                            Potensi                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/prodeskel/perkembangan">
                            <i class="fa fa-line-chart "></i>
                            Perkembangan                        </a>
                    </li>
                                        <li class="">
                        <a href="https://berputar.opendesa.id/prodeskel/rekapitulasi">
                            <i class="fa fa-file-text-o "></i>
                            Laporan Rekapitulasi                        </a>
                    </li>
                    
                </ul>
            </li>
                        
        </ul>

    </section>
    <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.2); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 1042.34px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</aside>