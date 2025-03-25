@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Wilayah Administratif RT
                <small>Tambah Data</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="{{ url('dusun/rt')}}"> Wilayah Administratif RT</a></li>
                <li class="active">Tambah Data</li>
            </ol>

        </section>

        <section id="maincontent" class="content">



            <div class="box box-info">
                <div class="box-header with-border">
                    <a onclick="window.history.back()"
                        class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                        <i class="fa fa-arrow-circle-left "></i>Kembali ke Wilayah Administratif RT
                    </a>
                </div>
                <form action="#" class="form-horizontal" id="validasi"
                    enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <input type="hidden" name="sidcsrf" value="416a4ae5c007dd4af33a43ff35fd4607">

                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="nama">Nama RT</label>
                            <div class="col-sm-7">
                                <input id="nama" class="form-control input-sm nama_terbatas required" maxlength="50"
                                    type="text" placeholder="Nama RT" name="rt" value="Junaidi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="kepala_lama">Kepala RT Sebelumnya</label>
                            <div class="col-sm-7">
                                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                    <strong>JUNAIDI EFENDI</strong>
                                    <br>NIK - 0531912200900002
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="id_kepala">NIK / Nama Kepala RT</label>
                            <div class="col-sm-7">
                                <select class="form-control select2 select2-infinite select2-hidden-accessible"
                                    data-url="wilayah/apipendudukwilayah" style="width: 100%;" id="id_kepala"
                                    name="id_kepala" data-select2-id="id_kepala" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="2">-- Silakan Masukan NIK / Nama--</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="5" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-id_kepala-container"><span
                                                class="select2-selection__rendered" id="select2-id_kepala-container"
                                                role="textbox" aria-readonly="true"
                                                title="-- Silakan Masukan NIK / Nama--"><span
                                                    class="select2-selection__clear" title="Remove all items"
                                                    data-select2-id="6">×</span>-- Silakan Masukan NIK / Nama--</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
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
