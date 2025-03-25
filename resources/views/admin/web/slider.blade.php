@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>Pengaturan Slider Besar</h1>


            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Pengaturan Slider Besar</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <form id="mainform" action="#" method="POST" class="form-horizontal">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                Pilih sumber gambar untuk ditampilkan di slider besar:
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div data-toggle="buttons">
                                        <div class="col-sm-12">
                                            <div class="radio">
                                                <label data-toggle="tooltip" title="" data-placement="bottom"
                                                    class="btn btn-info btn-sm col-xs-12 col-md-4 col-lg-3"
                                                    data-original-title="10 gambar utama artikel terbaru">
                                                    <input id="sumber1" type="radio" name="pilihan_sumber" class="hidden"
                                                        value="1" autocomplete="off"> Artikel Terbaru
                                                </label>
                                                <label class="control-label row"> 10 gambar utama artikel terbaru
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="radio">
                                                <label data-toggle="tooltip" title="" data-placement="bottom"
                                                    class="btn btn-info btn-sm col-xs-12 col-md-4 col-lg-3"
                                                    data-original-title="10 gambar utama artikel terbaru yang masuk ke slider atas">
                                                    <input id="sumber2" type="radio" name="pilihan_sumber" class="hidden"
                                                        value="2" checked="" autocomplete="off"> Artikel Terbaru Pilihan
                                                </label>
                                                <label class="control-label row"> 10 gambar utama artikel terbaru yang masuk
                                                    ke
                                                    slider atas
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="radio">
                                                <label data-toggle="tooltip" title="" data-placement="bottom"
                                                    class="btn btn-info btn-sm col-xs-12 col-md-4 col-lg-3 active"
                                                    data-original-title="Gambar dalam album galeri yang dimasukkan ke slider">
                                                    <input id="sumber3" type="radio" name="pilihan_sumber" class="hidden"
                                                        value="3" autocomplete="off"> Album Galeri
                                                </label>
                                                <label class="control-label row"> Gambar dalam album galeri yang dimasukkan
                                                    ke
                                                    slider
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-4 col-lg-3">
                                        <input style="margin-left: 5px; margin-top: 5px;" type="number"
                                            class="form-control input-sm text-right" name="jumlah_gambar_slider"
                                            id="jumlah_gambar_slider" value="10" min="1" max="20">
                                    </div>
                                    <label class="control-label col-md-6">Jumlah gambar slider yang ditampilkan</label>
                                </div>
                                <div class="box-footer">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-social btn-info btn-sm pull-right confirm"><i
                                                class="fa fa-check"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><input type="hidden" name="sidcsrf" value="ab91129f429c1690ca839fe3289d9559">
            </form>
        </section>
    </div>

@endsection
