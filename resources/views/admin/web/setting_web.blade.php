@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 914.281px;">
        <section class="content-header">
            <h1>
                Pengaturan Halaman Web
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Pengaturan Halaman Web</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <div class="row">

                <form action="#" id="validasi" class="form-horizontal" enctype="multipart/form-data" method="post"
                    accept-charset="utf-8">
                    <input type="hidden" name="sidcsrf" value="f8b9998f7f0b61b36057a045a5237787">

                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <b>Pengaturan Dasar</b>
                            </div>
                            <div class="box-body">
                                <div class="form-group" id="form_apbdes_footer">
                                    <label class="col-sm-12 col-md-3" for="nama">Apbdes Footer</label>
                                    <div class="col-sm-12 col-md-4">
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            id="apbdes_footer" name="apbdes_footer" data-select2-id="apbdes_footer"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="1" selected="" data-select2-id="2">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-12 col-md-5 pull-left" for="nama">Apakah akan tampilkan grafik
                                        APBDes di halaman muka</label>
                                </div>
                                <div class="form-group" id="form_apbdes_footer_all">
                                    <label class="col-sm-12 col-md-3" for="nama">Apbdes Footer All</label>
                                    <div class="col-sm-12 col-md-4">
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            id="apbdes_footer_all" name="apbdes_footer_all"
                                            data-select2-id="apbdes_footer_all" tabindex="-1" aria-hidden="true">
                                            <option value="1" selected="" data-select2-id="4">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-12 col-md-5 pull-left" for="nama">Apakah akan tampilkan grafik
                                        APBDes di semua halaman</label>
                                </div>
                                <div class="form-group" id="form_apbdes_tahun">
                                    <label class="col-sm-12 col-md-3" for="nama">Tahun APBDes</label>
                                    <div class="col-sm-12 col-md-4">
                                        <select class="form-control input-sm select2 select2-hidden-accessible"
                                            id="apbdes_tahun" name="apbdes_tahun" data-select2-id="apbdes_tahun"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="">Pilih Tahun</option>
                                            <option value="2025" selected="" data-select2-id="6">2025</option>
                                            <option value="2024">2024</option>
                                            <option value="2021">2021</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-12 col-md-5 pull-left" for="nama">Tahun APBDes yang akan
                                        ditampilkan dihalaman depan</label>
                                </div>
                                <div class="form-group" id="form_artikel_statis">
                                    <label class="col-sm-12 col-md-3" for="nama">Artikel Statis / Halaman</label>
                                    <div class="col-sm-12 col-md-4">
                                        <select class="form-control input-sm select2 select2-hidden-accessible"
                                            name="artikel_statis[]" multiple="" data-select2-id="7" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="statis" selected="" data-select2-id="9">Halaman Statis</option>
                                            <option value="agenda" selected="" data-select2-id="10">Agenda</option>
                                            <option value="keuangan" data-select2-id="11">Keuangan</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-12 col-md-5 pull-left" for="nama">Artikel Statis / Halaman yang
                                        akan ditampilkan pada halaman utama.</label>
                                </div>
                                <div class="form-group" id="form_covid_desa">
                                    <label class="col-sm-12 col-md-3" for="nama">Covid Desa</label>
                                    <div class="col-sm-12 col-md-4">
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            id="covid_desa" name="covid_desa" data-select2-id="covid_desa" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="1" selected="" data-select2-id="16">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-12 col-md-5 pull-left" for="nama">Apakah akan tampilkan status
                                        Covid-19 Desa di halaman muka</label>
                                </div>
                                <div class="form-group" id="form_covid_rss">
                                    <label class="col-sm-12 col-md-3" for="nama">Covid RSS</label>
                                    <div class="col-sm-12 col-md-4">
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            id="covid_rss" name="covid_rss" data-select2-id="covid_rss" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="1" selected="" data-select2-id="18">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-12 col-md-5 pull-left" for="nama">Apakah akan tampilkan RSS
                                        Covid-19 di halaman muka</label>
                                </div>
                                <div class="form-group" id="form_daftar_penerima_bantuan">
                                    <label class="col-sm-12 col-md-3" for="nama">Daftar Penerima Bantuan</label>
                                    <div class="col-sm-12 col-md-4">
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            id="daftar_penerima_bantuan" name="daftar_penerima_bantuan"
                                            data-select2-id="daftar_penerima_bantuan" tabindex="-1" aria-hidden="true">
                                            <option value="1" selected="" data-select2-id="20">Ya</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-12 col-md-5 pull-left" for="nama">Apakah akan tampilkan daftar
                                        penerima bantuan di statistik halaman muka</label>
                                </div>
                                <div class="form-group" id="form_link_feed">
                                    <label class="col-sm-12 col-md-3" for="nama">Link Feed</label>
                                    <div class="col-sm-12 col-md-4">
                                        <input class="form-control input-sm" id="link_feed" name="link_feed" type="text"
                                            value="https:\/\/www.covid19.go.id\/feed\/">
                                    </div>
                                    <label class="col-sm-12 col-md-5 pull-left" for="nama">Alamat Feed yang digunakan
                                        <code>(contoh: https:\/\/www.covid19.go.id\/feed\/)&lt;\/code&gt;</code></label><code>
                                </code>
                                </div><code>
                                                                                                                                                                                                                    <div class="form-group" id="form_statistik_chart_3d">
                                <label class="col-sm-12 col-md-3" for="nama">Statistik Chart 3D</label>
                                                <div class="col-sm-12 col-md-4">
                                        <select class="form-control input-sm select2 required select2-hidden-accessible" id="statistik_chart_3d" name="statistik_chart_3d" data-select2-id="statistik_chart_3d" tabindex="-1" aria-hidden="true">
                                                                        <option value="1" selected="" data-select2-id="22">Ya</option>
                                                                        <option value="0">Tidak</option>
                                                                </select></span>
                                    </div>
                                            <label class="col-sm-12 col-md-5 pull-left" for="nama">Apakah akan tampilkan Statistik Chart 3D</label>
                                </div>
                                                                                                                                                                                                                                </code>
                            </div><code>
                                <div class="box-footer">
                                    <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i>
                                        Batal</button>
                                                        <button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                                                </div>
                                </code>
                        </div><code>
                                </code>
                    </div><code>

                                </code>
                </form>
            </div><code>
                                </code>
        </section><code>
                                </code>
    </div>

@endsection
