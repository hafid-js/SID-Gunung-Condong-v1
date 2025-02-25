@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Wilayah Administratif Dusun</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item">Wilayah Administratif Dusun</li>
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
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="margin">
                                                <a href="{{ url('dusun') }}" title="Kembali"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"
                                                    data-title="Kembali"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Kembali ke Wilayah Administratif Dusun</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="namaDusun" class="col-sm-2 col-form-label font-12">Nama
                                                    Dusun</label>
                                                <div class="col-sm-10 col-lg-9 col-md-9">
                                                    <input type="text" class="form-control form-control-sm font-12"
                                                        id="namaDusun" placeholder="Nama Dusun">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="ketua" class="col-sm-2 col-form-label font-12">Nama
                                                    Dusun</label>
                                                <div class="col-sm-10 col-lg-9 col-md-9">
                                                    <select name="" id="" class="form-control form-control-sm select2" style="width:100%;">
                                                        <option value="">-- Silakan Masukan NIK / Nama --</option>
                                                        <option value="">NIK : 3306132287560002 - KHAFID RT003, RW001, DUSUN KRAJAN</option>
                                                        <option value="">NIK : 3306132287531990 - AULIA RACHMA RT--, RW--, DUSUN--</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="card-footer border-0">
                                        <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                                        <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
    </div>

    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
