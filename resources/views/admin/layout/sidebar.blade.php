
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light"><strong>Sistem Informasi Desa</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://berputar.opendesa.id/assets/files/logo/opensid_logo.png" class="img-circle" alt="User Image">
        </div>
          <a href="#" class="d-block">
            <div class="info">
            <strong>Desa Gunung Condong</strong>
            <br>
            Kecamatan Bruno
            <br>
            Kabupaten Purworejo
        </div>
        </a>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sm form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar btn-sm">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-header" style="font-size: 12px;">MENU UTAMA</li>
          <li class="nav-item">
            <a href="#" class="nav-link active" >
              <i class="nav-icon nav-icon-beranda fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Info Desa
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('/wilayah') }}" class="nav-link">
                      <i class="nav-icon fa fa-map text-red"></i>
                      <p>
                        Wilayah Administratif
                      </p>
                  </a>
                </li>
              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                    <i class="nav-icon fa fa-id-card"></i>
                    <p>
                      Identitas Desa
                    </p>
                </a>
              </li>
            </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-sitemap"></i>
                      <p>
                        Pemerintah Desa
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-list"></i>
                      <p>
                        Lembaga Desa
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-dot-circle-o"></i>
                      <p>
                        Status Desa
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kependudukan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-user text-red"></i>
                      <p>
                        Penduduk
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-users"></i>
                      <p>
                        Keluarga
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-venus-mars"></i>
                      <p>
                        Rumah Tangga
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-sitemap"></i>
                      <p>
                        Kelompok
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-slideshare"></i>
                      <p>
                        Data Suplemen
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-podcast"></i>
                      <p>
                        Calon Pemilih
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-archive"></i>
                      <p>
                        Catatan Peristiwa
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-line-chart"></i>
              <p>
                Statistik
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-bar-chart text-red"></i>
                      <p>
                        Statistik Kependudukan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-file-text"></i>
                      <p>
                        Laporan Bulanan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-wheelchair"></i>
                      <p>
                        Laporan Kelompok Rentan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-file-text-o"></i>
                      <p>
                        Laporan Penduduk
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-line-chart"></i>
              <p>
                Kehadiran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-exclamation text-red"></i>
                      <p>
                        Pengaduan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-list"></i>
                      <p>
                        Rekapitulasi
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-calendar"></i>
                      <p>
                        Hari Libur
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-clock-o"></i>
                      <p>
                        Jam Kerja
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-sign-out"></i>
                      <p>
                        Alasan Keluar
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-heartbeat"></i>
              <p>
                Kesehatan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-list text-red"></i>
                      <p>
                        Pendataan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-medkit"></i>
                      <p>
                        Vaksin
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-check"></i>
                      <p>
                        Pemantauan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-stethoscope"></i>
                      <p>
                        Stunting
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Layanan Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-cog text-red"></i>
                      <p>
                        Pengaturan Surat
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-files-o"></i>
                      <p>
                        Cetak Surat
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-files-o"></i>
                      <p>
                        Permohonan Surat
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>
                        Arsip Layanan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-book"></i>
                      <p>
                        Daftar Persyaratan
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Sekretariat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-file-text text-red"></i>
                      <p>
                        Informasi Publik
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-cubes"></i>
                      <p>
                        Inventaris
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-code"></i>
                      <p>
                        Klasifikasi Surat
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Surat Dinas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-cog text-red"></i>
                      <p>
                        Pengaturan Surat
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-files-o"></i>
                      <p>
                        Cetak Surat
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-folder-open"></i>
                      <p>
                        Arsip Surat Dinas
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-paste"></i>
              <p>
                Buku Administarasi Desa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-bookmark text-red"></i>
                      <p>
                        Administrasi Umum
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-users"></i>
                      <p>
                        Administrasi Penduduk
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-university"></i>
                      <p>
                        Administrasi Pembangunan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-archive"></i>
                      <p>
                        Arsip Desa
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-balance-scale"></i>
              <p>
                Keuangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-bar-chart text-red"></i>
                      <p>
                        Laporan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-keyboard-o"></i>
                      <p>
                        Input Data
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-file-text-o"></i>
                      <p>
                        Laporan APBDes
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-check-square"></i>
              <p>
                Analisis
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Bantuan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-map-signs"></i>
              <p>
                Pertanahan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-files-o text-red"></i>
                      <p>
                        C-Desa
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-list"></i>
                      <p>
                        Daftar Persil
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Pembangunan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Lapak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                OpenDK
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-envelope text-red"></i>
                      <p>
                        Pesan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-random"></i>
                      <p>
                        Sinkronasi
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Pengaduan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-globe"></i>
              <p>
                Pemetaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-globe text-red"></i>
                      <p>
                        Peta
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-location-arrow"></i>
                      <p>
                        Pengaturan Peta
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Hubung Warga
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-envelope-open-o text-red"></i>
                      <p>
                        Kirim Pesan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-random"></i>
                      <p>
                        Daftar Masuk
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Pengaturan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-tags text-red"></i>
                      <p>
                        Modul
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-codepen"></i>
                      <p>
                        Aplikasi
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-users"></i>
                      <p>
                        Pengguna
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-database"></i>
                      <p>
                        Database
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-server"></i>
                      <p>
                        Info Sistem
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-qrcode"></i>
                      <p>
                        QR Code
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-picture-o"></i>
                      <p>
                        Optimasi Gambar
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-chain"></i>
                      <p>
                        Shortcut
                      </p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-desktop"></i>
              <p>
                Admin Web
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('artikel') }}" class="nav-link">
                      <i class="nav-icon fa fa-file-movie-o text-red"></i>
                      <p>
                        Artikel
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('kategori') }}" class="nav-link">
                      <i class="nav-icon fa fa-list-alt"></i>
                      <p>
                        Ketegori
                      </p>
                  </a>
                </li>
              </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('widget') }}" class="nav-link">
                        <i class="nav-icon fa fa-windows"></i>
                        <p>
                          Widget
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                        <i class="nav-icon fa fa-clone"></i>
                        <p>
                          Sinergi Program
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('menu') }}" class="nav-link">
                        <i class="nav-icon fa fa-bars"></i>
                        <p>
                          Menu
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('komentar') }}" class="nav-link">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>
                          Komentar
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                        <i class="nav-icon fa fa-object-group"></i>
                        <p>
                          Tema
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('galeri') }}" class="nav-link">
                        <i class="nav-icon fa fa-image"></i>
                        <p>
                         Galeri
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('sosmed') }}" class="nav-link">
                        <i class="nav-icon fa fa-facebook"></i>
                        <p>
                          Media Sosial
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('slider') }}" class="nav-link">
                        <i class="nav-icon fa fa-film"></i>
                        <p>
                          Slider
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('teks-berjalan') }}" class="nav-link">
                        <i class="nav-icon fa fa-ellipsis-h"></i>
                        <p>
                          Teks Berjalan
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                        <i class="nav-icon fa fa-bar-chart"></i>
                        <p>
                          Pengunjung
                        </p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('setting-web') }}" class="nav-link">
                        <i class="nav-icon fa fa-gear"></i>
                        <p>
                          Pengaturan
                        </p>
                    </a>
                  </li>
                </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-inbox"></i>
              <p>
                Layanan Mandiri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-wechat text-red"></i>
                      <p>
                        Kotak Pesan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-500px"></i>
                      <p>
                        Pendaftaran Layanan Mandiri
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-desktop"></i>
                      <p>
                        Gawai Layanan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-thumbs-o-up"></i>
                      <p>
                        Pendapat
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-gear"></i>
                      <p>
                        Pengaturan
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-globe"></i>
              <p>
                Satu Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-exchange text-red"></i>
                      <p>
                        DTKS
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Buku Tamu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-bookmark-o text-red"></i>
                      <p>
                        Data Tamu
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-smile-o"></i>
                      <p>
                        Data Kepuasan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-question"></i>
                      <p>
                        Data Pertanyaan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-send"></i>
                      <p>
                        Data Keperluan
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-desktop"></i>
              <p>
                Anjungan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-list text-red"></i>
                      <p>
                        Daftar Anjungan
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-bars"></i>
                      <p>
                        Menu
                      </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="nav-icon fa fa-gear"></i>
                      <p>
                        Pengaturan
                      </p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-globe"></i>
              <p>
                Prodeskel
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
