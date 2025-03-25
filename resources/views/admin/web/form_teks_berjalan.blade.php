@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
            </h1>
            <h1>Teks Berjalan
                <small>tambah Data</small>
            </h1>


            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('teks-berjalan') }}">Teks Berjalan</a></li>
                tambah Data
            </ol>

        </section>

        <section id="maincontent" class="content" data-select2-id="maincontent">



            <form action="#" class="form-horizontal" id="validasi" method="post" accept-charset="utf-8"
                data-select2-id="validasi">
                <input type="hidden" name="sidcsrf" value="f01875d4e16f840bffce7597b5e81212">

                <div class="box box-info" data-select2-id="10">
                    <div class="box-header with-border">
                        <a href="{{ url('teks-berjalan') }}"
                            class="btn btn-social  btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                            title="Kembali Ke Teks Berjalan">
                            <i class="fa fa-arrow-circle-left "></i>Kembali Ke Teks Berjalan
                        </a>
                    </div>
                    <div class="box-body" data-select2-id="9">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="isi_teks_berjalan">Isi teks berjalan</label>
                                <textarea id="teks" class="form-control input-sm required" placeholder="Isi teks berjalan"
                                    name="teks" rows="5" style="resize:none;"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group" data-select2-id="8">
                                <label class="control-label">Tipe</label>
                                <select class="form-control select2 select2-hidden-accessible" id="tipe" name="tipe"
                                    data-select2-id="tipe" tabindex="-1" aria-hidden="true">
                                    <option value="1" selected="" data-select2-id="2">Internal</option>
                                    <option value="2" data-select2-id="11">Eksternal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12" id="internal" style="">
                            <div class="form-group">
                                <label class="control-label">Tautan ke artikel</label>
                                <select class="form-control select2 select2-hidden-accessible required" id="tautan_internal"
                                    name="tautan_internal" data-select2-id="tautan_internal" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="" data-select2-id="4">-- Cari Judul Artikel --</option>
                                    <option value="99">
                                        26 Agustus 2016 | Sejarah Desa
                                    </option>
                                    <option value="98">
                                        26 Agustus 2016 | Wilayah Desa
                                    </option>
                                    <option value="97">
                                        24 Agustus 2016 | Data Desa
                                    </option>
                                    <option value="93">
                                        24 Agustus 2016 | Visi dan Misi
                                    </option>
                                    <option value="92">
                                        24 Agustus 2016 | Pemerintah Desa
                                    </option>
                                    <option value="85">
                                        07 November 2014 | Pemerintahan Desa
                                    </option>
                                    <option value="71">
                                        30 April 2014 | Kelompok Ekonomi Lainya
                                    </option>
                                    <option value="70">
                                        30 April 2014 | LinMas
                                    </option>
                                    <option value="69">
                                        30 April 2014 | Kelompok Tani
                                    </option>
                                    <option value="68">
                                        30 April 2014 | Kelompok Ternak
                                    </option>
                                    <option value="67">
                                        30 April 2014 | KPAD
                                    </option>
                                    <option value="66">
                                        30 April 2014 | TKP2KDes
                                    </option>
                                    <option value="65">
                                        30 April 2014 | RT RW
                                    </option>
                                    <option value="64">
                                        30 April 2014 | Karang Taruna
                                    </option>
                                    <option value="63">
                                        30 April 2014 | PKK
                                    </option>
                                    <option value="62">
                                        30 April 2014 | LKMD
                                    </option>
                                    <option value="59">
                                        30 April 2014 | Profil Potensi Desa
                                    </option>
                                    <option value="51">
                                        22 April 2014 | Pengaduan
                                    </option>
                                    <option value="47">
                                        20 April 2014 | Panduan
                                    </option>
                                    <option value="46">
                                        20 April 2014 | Keputusan Kepala Desa
                                    </option>
                                    <option value="45">
                                        20 April 2014 | Peraturan Kepala Desa
                                    </option>
                                    <option value="44">
                                        20 April 2014 | Peraturan Desa
                                    </option>
                                    <option value="43">
                                        20 April 2014 | Peraturan Pemerintah
                                    </option>
                                    <option value="42">
                                        20 April 2014 | Undang Undang
                                    </option>
                                    <option value="38">
                                        29 Juli 2013 | Lembaga Kemasyarakatan
                                    </option>
                                    <option value="37">
                                        29 Juli 2013 | Badan Permusyawaratan Desa
                                    </option>
                                    <option value="36">
                                        29 Juli 2013 | Kontak Kami
                                    </option>
                                    <option value="34">
                                        29 Juli 2013 | Profil Masyarakat Desa
                                    </option>
                                    <option value="32">
                                        29 Juli 2013 | Profil Desa
                                    </option>
                                    <option value="7">
                                        31 Maret 2013 | Awal mula SID
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" id="eksternal" style="display: none;">
                            <div class="form-group">
                                <label class="control-label">Tautan Luar</label>
                                <input class="form-control input-sm url short_url" placeholder="Contoh: https://opendesa.id"
                                    id="tautan_eksternal" name="tautan_eksternal" value="">
                            </div>
                        </div>
                        <div class="col-md-12" id="box_judul_tautan" style="">
                            <div class="form-group">
                                <label class="control-label">Judul tautan</label>
                                <input class="form-control input-sm required" placeholder="Judul tautan ke artikel atau url"
                                    name="judul_tautan" id="input_judul_tautan" value="" maxlength="150">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control select2 select2-hidden-accessible" id="status" name="status"
                                    data-select2-id="status" tabindex="-1" aria-hidden="true">
                                    <option value="1">
                                        Ya
                                    </option>
                                    <option value="0" selected="" data-select2-id="6">
                                        Tidak
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-social  btn-danger btn-sm"><i class="fa fa-times"></i>
                            Batal</button>
                        <button type="submit" class="btn btn-social  btn-info btn-sm pull-right confirm"><i
                                class="fa fa-check"></i> Simpan</button>
                    </div>
                </div>
            </form>

        </section>
    </div>

@endsection
