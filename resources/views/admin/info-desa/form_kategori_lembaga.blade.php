@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>Kategori Lembaga
                <small>Tambah Data</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="{{ url('lembaga-desa') }}">Lembaga</a></li>
                <li><a href="{{ url('lembaga-desa/kategori') }}"> Ketegori Lembaga</a></li>
                <li class="active">Tambah Data</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="{{ url('lembaga-desa/kategori') }}"
                        class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i
                            class="fa fa-arrow-circle-left"></i> Kembali Ke Kategori Lembaga</a>
                </div>
                <form id="validasi" action="#" method="POST"
                    enctype="multipart/form-data" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="nama">Klasifikasi/Kategori Lembaga</label>
                            <div class="col-sm-8">
                                <input id="kelompok" class="form-control input-sm required" type="text"
                                    placeholder="Kategori Lembaga" name="kelompok" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="Deskripsi">Deskripsi Lembaga</label>
                            <div class="col-sm-8">
                                <textarea name="deskripsi" class="form-control input-sm" placeholder="Deskripsi Lembaga"
                                    rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i>
                            Batal</button>
                        <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i class="fa fa-check"></i>
                            Simpan</button>
                    </div>
                    <input type="hidden" name="sidcsrf" value="183735d99a88ea8618fae739ba4a2bf3">
                </form>
            </div>

        </section>
    </div>

@endsection
