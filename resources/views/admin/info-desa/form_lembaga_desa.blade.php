@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Master Lembaga
                <small>Tambah Data</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="{{ url('lembaga-desa') }}">Daftar Lembaga</a></li>
                <li class="active">Master Lembaga Tambah Data</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <div class="row">
                <form id="validasi" action="#h" method="POST"
                    enctype="multipart/form-data" class="form-horizontal">
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-body box-profile preview-img">
                                <img class="penduduk img-responsive"
                                    src="https://berputar.opendesa.id/assets/files/logo/opensid_logo.png" alt="Logo">
                                <br>
                                <p class="text-muted text-center text-red">(Kosongkan, jika logo tidak berubah)</p>
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control file-path" readonly="" name="logo">
                                    <input type="file" class="hidden file-input" name="logo" accept=".gif,.jpg,.jpeg,.png">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat file-browser"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <a href="{{ url('lembaga-desa') }} "
                                    class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                                        class="fa fa-arrow-circle-left "></i> Kembali Ke Daftar
                                    Lembaga </a>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="nama">Nama Lembaga</label>
                                    <div class="col-sm-7">
                                        <input id="nama" class="form-control input-sm nama_terbatas required" type="text"
                                            placeholder="Nama Lembaga" name="nama" value="" maxlength="50">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-sm-3 control-label" for="kode">Kode Lembaga</label>
                                    <div class="col-sm-7">
                                        <input id="kode" class="form-control input-sm nomor_sk required" type="text"
                                            placeholder="Kode Lembaga" name="kode" value="" maxlength="16">
                                        <p><code>*Pastikan kode belum pernah dipakai di data lembaga / di data kelompok.</code>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-sm-3 control-label" for="kode">No. SK Pendirian Lembaga</label>
                                    <div class="col-sm-7">
                                        <input id="no_sk_pendirian" class="form-control input-sm nomor_sk" type="text"
                                            placeholder="No. SK Pendirian Lembaga" name="no_sk_pendirian" value=""
                                            maxlength="255">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="id_master">Kategori Lembaga</label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm select2 required select2-hidden-accessible"
                                            id="id_master" name="id_master" data-select2-id="id_master" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="" data-select2-id="2">-- Silakan Masukkan Kategori Lembaga--
                                            </option>
                                            <option value="3">Badan Desa</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="1" style="width: 575.203px;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-id_master-container"><span
                                                        class="select2-selection__rendered" id="select2-id_master-container"
                                                        role="textbox" aria-readonly="true"
                                                        title="-- Silakan Masukkan Kategori Lembaga--">-- Silakan Masukkan
                                                        Kategori Lembaga--</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="id_ketua">Ketua Lembaga</label>
                                    <div class="col-sm-7">
                                        <select class="form-control input-sm select2 select2-hidden-accessible"
                                            id="kelompok_penduduk" name="id_ketua" data-select2-id="kelompok_penduduk"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="4">-- Silakan Masukkan NIK / Nama--</option>
                                            <option value="1">NIK :0720110200700001 - Ari - Dusun a RT - / RW -</option>
                                            <option value="2">NIK :0531912200900002 - JUNAIDI EFENDI - Jl. Jenderal Sudirman
                                                RT - / RW -</option>
                                            <option value="3">NIK :0531912200900003 - RAISYA KAYLA AZZAHRA - Jl. Jenderal
                                                Sudirman RT - / RW -</option>
                                            <option value="4">NIK :0531912200900004 - TATI RAMADYANA - Jl. Jenderal Sudirman
                                                RT - / RW -</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="3" style="width: 575.203px;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-kelompok_penduduk-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-kelompok_penduduk-container" role="textbox"
                                                        aria-readonly="true" title="-- Silakan Masukkan NIK / Nama--">--
                                                        Silakan Masukkan NIK / Nama--</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="keterangan">Deskripsi Lembaga</label>
                                    <div class="col-sm-7">
                                        <textarea name="keterangan" class="form-control input-sm"
                                            placeholder="Deskripsi Lembaga" rows="3" maxlength="300"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i>
                                    Batal</button>
                                <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i
                                        class="fa fa-check"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="sidcsrf" value="66fa58f300d5c2bdb1472f2fd97d0ceb">
                </form>
            </div>

        </section>
    </div>

@endsection
