@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
         <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h4 class="m-0" style="font-weight: 400;">Daftar Album</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Album</li>
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
                    <div class="card-body p-0">
                        <div class="card card-outline card-info">
                            <div class="card-header" style="background-color: #ffffff;">
                                <div class="form-group row mb-0">
                                    <div class="col-sm-12">
                                        <div class="margin">
                                            <a href="{{ url('galeri/form') }}"
                                            class="btn btn-social mt-1 mb-1 btn-success btn-sm" title="Tambah Galeri"><i
                                                class="fa fa-plus "></i> Tambah</a>
                                        <a href="#" class="btn btn-danger mt-1 mb-1 btn-success btn-sm"><i class="fa fa-trash"></i>
                                            Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header" style="background-color: #ffffff;">
                                <div class="form-group row mb-0 justify-content-between">
                                    <div class="col-sm-12 col-md-3 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control form-control-sm select2" style="width: 100%;">
                                                <option>Pilih Status</option>
                                                <option>Aktif</option>
                                                <option>Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-3 col-lg-2">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="kata kunci pencarian">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-sm-12 col-md-12 col-lg-12">
                                       <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead class="thead-gray disabled color-palette">
                                                <tr>
                                                    <th style="width:5%">
                                                        <input type="checkbox" id="check-all" />
                                                    </th>
                                                    <th style="width:5%">NO</th>
                                                    <th style="width:5%" class="text-center">Aksi</th>
                                                    <th>Nama Album</th>
                                                    <th>Aktif</th>
                                                    <th>Dimuat Pada</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="check-item" />
                                                    </td>
                                                    <td>1</td>
                                                    <td class="aksi">
                                                        <a href="{{ url('galeri/sub') }}" class="btn bg-purple btn-sm" title="Rincian Sub Kategori">
                                                            <i class="fa fa-list"></i></a>
                                                        <a href="{{ url('galeri/form') }}" class="btn bg-orange btn-sm" title="Ubah">
                                                            <i class="fa fa-edit text-white"></i></a>
                                                        <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Kunci" data-toggle="modal" >
                                                            <i class="fa fa-lock"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-gray btn-sm" title="Eject">
                                                                <i class="fa fa-eject" style="color: black;"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" >
                                                                <i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                    <td><strong>Karnaval Hari Kemerdekaan</strong></td>
                                                    <td>Ya</td>
                                                    <td>26 Agustus 2016 14:53:51</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="check-item" />
                                                    </td>
                                                    <td>1</td>
                                                    <td class="aksi">
                                                        <a href="{{ url('kategori/sub') }}" class="btn bg-purple btn-sm" title="Rincian Sub Kategori">
                                                            <i class="fa fa-list"></i></a>
                                                        <a href="{{ url('galeri/form') }}" class="btn bg-orange btn-sm" title="Ubah">
                                                            <i class="fa fa-edit text-white"></i></a>
                                                        <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Kunci" data-toggle="modal" >
                                                            <i class="fa fa-lock"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-gray btn-sm" title="Eject">
                                                                <i class="fa fa-eject" style="color: black;"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" >
                                                                <i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                    <td><strong>Panorama Wisata</strong></td>
                                                    <td>Ya</td>
                                                    <td>26 Agustus 2016 14:53:51</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->


    </section>
    <!-- /.content -->
</div>


@endsection
