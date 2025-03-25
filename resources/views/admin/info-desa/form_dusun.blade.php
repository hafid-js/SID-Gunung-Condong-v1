@extends('admin.layout.layout')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
            <h1>
Wilayah Administratif Dusun
<small>Tambah Data</small>
</h1>

        <ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item">
<a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
</li>
<li><a href="{{ url('dusun') }}"> Wilayah Administratif Dusun</a></li>
<li class="active">Tambah Data</li>
</ol>

    </section>

    <section id="maincontent" class="content">



<div class="box box-info">
<div class="box-header with-border">
    <a onclick="window.history.back()" class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
        <i class="fa fa-arrow-circle-left "></i>Kembali ke Wilayah Administratif Dusun
    </a>
</div>
<form action="#" class="form-horizontal" id="validasi" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <input type="hidden" name="sidcsrf" value="60b6868660221e09061f84b33a24dbd8" />

<div class="box-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="nama">Nama Dusun</label>
        <div class="col-sm-7">
            <input
                id="nama"
                class="form-control input-sm nama_terbatas required"
                maxlength="50"
                type="text"
                placeholder="Nama Dusun"
                name="dusun"
                value=""
            >
        </div>
    </div>
                <div class="form-group">
        <label class="col-sm-3 control-label" for="id_kepala">NIK / Nama Kepala Dusun</label>
        <div class="col-sm-7">
            <select class="form-control select2 select2-infinite" data-url="wilayah/apipendudukwilayah" style="width: 100%;" id="id_kepala" name="id_kepala">
                <option selected="selected">-- Silakan Masukan NIK / Nama--</option>
            </select>
        </div>
    </div>
</div>
<div class="box-footer">
    <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
    <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
</div>
</form>
</div>

    </section>
</div>

@endsection
