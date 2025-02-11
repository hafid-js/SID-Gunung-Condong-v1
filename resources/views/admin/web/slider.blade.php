@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
         <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h5 class="m-0" style="font-weight: 400;">Pengaturan Slider Besar</h5>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active">Pengaturan Slider Besar</li>
                    </ol>
                </div>
            </div>
            <div class="row" style="display: none;" id="tampilBerhasil">
                <div id="toastsContainerTopRight" class="fixed">
                    <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header"><strong class="mr-auto">
                                Berhasil</strong> <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">Berhasil Ubah Status Komentar</div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Pilih sumber gambar untuk ditampilkan di slider besar:</h3>
                          </div>
                          <div class="card-body row">
                            <div class="col-sm-5 col-md-6 col-lg-3">
                              <button type="radio" class="btn btn-info btn-block" name="options" id="option_b1" autocomplete="off"></i> Artikel Terbaru</button>
                              <button type="radio" class="btn btn-info btn-block" name="options" id="option_b1" autocomplete="off"></i> Artikel Terbaru Pilihan</button>
                              <button type="radio" class="btn btn-info btn-block" name="options" id="option_b1" autocomplete="off"></i> Album Galeri</button>
                              <input type="number" name="" id="" value="10" class="form-control form-control-sm mt-2">
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-6">
                                <h6>10 gambar utama artikel terbaru</h6>
                                <h6>10 gambar utama artikel terbaru yang masuk ke slider atas</h6>
                                <h6>Gambar dalam album galeri yang dimasukkan ke slider</h6>
                                <h6><strong>Jumlah gambar slider yang ditampilkan</strong></h6>
                            </div>
                          </div>
                          <div class="card-footer">
                            <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->



    </section>
    <!-- /.content -->
</div>


@endsection
