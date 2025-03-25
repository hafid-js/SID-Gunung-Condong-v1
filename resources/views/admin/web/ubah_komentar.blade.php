@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Komentar
                <small>Ubah Komentar</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="{{ url('komentar') }}"> Daftar Komentar</a></li>
                <li class="active">Ubah Komentar</li>
            </ol>

        </section>

        <section id="maincontent" class="content">



            <form id="validasi" action="#" method="POST"
                enctype="multipart/form-data" class="form-horizontal">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <a href="{{ url('komentar') }}"
                                    class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                                    title="Tambah Artikel">
                                    <i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar Komentar
                                </a>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="owner">Pengirim</label>
                                    <div class="col-sm-9">
                                        <input name="owner" class="form-control input-sm required" type="text"
                                            maxlength="50" value="Fulan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="no_hp">No. HP</label>
                                    <div class="col-sm-9">
                                        <input name="no_hp" class="form-control input-sm required bilangan" type="text"
                                            value="082322766544">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email</label>
                                    <div class="col-sm-9">
                                        <input name="email" class="form-control input-sm email" type="text"
                                            value="fulannalu@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="komentar">Komentar</label>
                                    <div class="col-sm-9">
                                        <textarea id="komentar" name="komentar" class="form-control input-sm required"
                                            placeholder="Isi Komentar"
                                            style="height: 200px;">sejarah yang menarik sekali</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-2 col-lg-2 control-label" for="status">Status</label>
                                    <div class="btn-group col-xs-12 col-sm-9" data-toggle="buttons">
                                        <label id="sx3"
                                            class="btn btn-info btn-sm col-xs-6 col-sm-4 col-lg-2 form-check-label active">
                                            <input id="sx1" type="radio" name="status" class="form-check-input" value="1"
                                                selected="" autocomplete="off"> Aktif
                                        </label>
                                        <label id="sx4"
                                            class="btn btn-info btn-sm col-xs-6 col-sm-4 col-lg-2 form-check-label ">
                                            <input id="sx2" type="radio" name="status" class="form-check-input" value="2"
                                                autocomplete="off"> Tidak Aktif
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-social btn-danger btn-sm"><i
                                        class="fa fa-times"></i>Batal</button>
                                <button type="submit" class="btn btn-social btn-info btn-sm pull-right confirm"><i
                                        class="fa fa-check"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="sidcsrf" value="e6a59549099d37a8fc98bfc4554dca9b">
            </form>

        </section>
    </div>

@endsection
