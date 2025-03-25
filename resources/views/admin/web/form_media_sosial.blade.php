@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Media Sosial
                <small>Ubah Data</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('sosmed') }}">Media Sosial</a></li>
                <li class="active">Ubah Data</li>
            </ol>

        </section>

        <section id="maincontent" class="content">



            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="{{ url('sosmed') }}"
                        class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                            class="fa fa-arrow-circle-left"></i> Kembali Ke Daftar Media Sosial</a>
                </div>
                <form action="#" id="validasi" enctype="multipart/form-data"
                    method="post" accept-charset="utf-8">
                    <input type="hidden" name="sidcsrf" value="ab91129f429c1690ca839fe3289d9559">

                    <div class="box-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" class="form-control input-sm required judul" maxlength="50" type="text"
                                value="Facebook">
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input name="link" class="form-control input-sm required" maxlength="200" type="url"
                                value="https://web.facebook.com/">
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control " id="file_path" name="gambar">
                                        <input type="file" class="hidden" id="file" name="gambar"
                                            accept=".gif,.jpg,.jpeg,.png">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info" id="file_browser"><i
                                                    class="fa fa-search"></i>&nbsp;Browse</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tampil</label>
                                    <select class="form-control select2 select2-hidden-accessible" name="enabled"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="1">Ya
                                        </option>
                                        <option value="0" selected="" data-select2-id="3">Tidak
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i>
                            Batal</button>
                        <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i class="fa fa-check"></i>
                            Simpan</button>
                    </div>
                </form>
            </div>

        </section>
    </div>

@endsection
