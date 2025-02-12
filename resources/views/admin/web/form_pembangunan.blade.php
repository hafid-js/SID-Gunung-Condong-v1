@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
         <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h5 class="m-0" style="font-weight: 400;">Pembangunan</h5>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active">Pembangunan</li>
                        <li class="breadcrumb-item active">Tambah Data</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="card-body p-0">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <div class="col-md-12">
                                    <div class="margin">
                                        <a href="{{ url('sosmed') }}" title="Unduh Data"
                                            class="btn btn-social btn-info btn-xs visible-xs-block"
                                            data-title="Unduh Data"><span class="btn-label"><i
                                                    class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar
                                            Media Sosial</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="kegiatan" class="col-sm-2 col-form-label font-12">Nama Kegiatan</label>
                                        <div class="col-sm-10 col-lg-10 col-md-10">
                                            <input type="text" placeholder="Nama Kegiatan Pembangunan" class="form-control form-control-sm font-12" id="kegiatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="volume" class="col-sm-2 col-form-label font-12">Volume</label>
                                        <div class="col-sm-10 col-lg-10 col-md-10">
                                            <input type="text" placeholder="Volume Pembangunan" class="form-control form-control-sm font-12" id="volume">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="waktu" class="col-sm-2 col-form-label font-12">Waktu</label>
                                        <div class="col-sm-6 col-lg-6 col-md-6 mb-2">
                                            <input type="text" placeholder="Lamanya Pembangunan" class="form-control form-control-sm font-12" id="waktu">
                                        </div>
                                        <div class="col-sm-4 col-lg-4 col-md-4">
                                            <select name="" class="form-control form-control-sm">
                                             <option value="" selected>Hari</option>
                                             <option value="">Minggu</option>
                                             <option value="">Bulan</option>
                                             <option value="">Tahun</option>
                                            </select>
                                         </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sumberDana" class="col-sm-2 col-form-label font-12">Sumber Dana</label>
                                        <div class="col-sm-10 col-lg-10 col-md-10">
                                            <select name="" class="form-control form-control-sm select2" id="sumberDana">
                                                <option value="" selected>Pendapatan Asli Desa (PAD)</option>
                                                <option value="">Pendapatan Transfer (Dana Desa)</option>
                                                <option value="">Pendapatan Transfer (Alokasi Dana Desa)</option>
                                               </select>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                                    <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>

                                </div>
                                <!-- /.card-footer -->
                        </div>
                        <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
    </div>
</div>

<!-- ./row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
