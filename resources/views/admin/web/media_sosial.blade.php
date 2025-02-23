@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
         <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h4 class="m-0" style="font-weight: 400;">Media Sosial</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item">Media Sosial</li>
                        <li class="breadcrumb-item active">Tambah Data</li>
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
                                            <a href="{{ url('sosmed/form') }}"
                                                    class="btn btn-social mt-1 mb-1 btn-success btn-sm" title="Tambah Kategori"><i
                                                        class="fa fa-plus "></i> Tambah</a>
                                                <a href="#"  data-href="#" data-target="#modal1" title="Hapus" data-toggle="modal"  class="btn btn-danger mt-1 mb-1 btn-sm"><i class="fa fa-trash"></i>
                                                    Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header" style="background-color: #ffffff;">
                                <div class="form-group row mb-0 justify-content-between">
                                    <div class="col-sm-12 col-md-3 col-lg-2">
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
                                                        <th class="text-center" style="width:5%">AKSI</th>
                                                        <th style="width:70%">NAMA</th>
                                                        <th>ICON</th>
                                                        <th>STATUS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>1</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('sosmed/form') }}" class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Hapus" data-toggle="modal" >
                                                                <i class="fa fa-lock"></i></a>
                                                                <a href="#" data-href="#" data-target="#modal1" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" >
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Facebook</td>
                                                        <td><div class="product-img">
                                                            <img src="https://berputar.opendesa.id/assets/front/fb.png?vfe18a71abeca59e855c1d80376a5702f" alt="Product Image" class="img-size-32">
                                                          </div></td>
                                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>2</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('sosmed/form') }}" class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Hapus" data-toggle="modal" >
                                                                <i class="fa fa-lock"></i></a>
                                                                <a href="#" data-href="#" data-target="#modal1" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" >
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Instagram</td>
                                                        <td><div class="product-img">
                                                            <img src="https://berputar.opendesa.id/assets/front/ins.png?v175d706c78c25b49f024262372718330" alt="Product Image" class="img-size-32">
                                                          </div></td>
                                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>3</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('sosmed/form') }}" class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Hapus" data-toggle="modal" >
                                                                <i class="fa fa-lock"></i></a>
                                                                <a href="#" data-href="#" data-target="#modal1" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" >
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Telegram</td>
                                                        <td><div class="product-img">
                                                            <img src="https://berputar.opendesa.id/assets/front/tg.png?v4a8344ad11d66ad09e803c61f0ffa15f" alt="Product Image" class="img-size-32">
                                                          </div></td>
                                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>4</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('sosmed/form') }}" class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Hapus" data-toggle="modal" >
                                                                <i class="fa fa-lock"></i></a>
                                                                <a href="#" data-href="#" data-target="#modal1" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" >
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Twitter</td>
                                                        <td><div class="product-img">
                                                            <img src="https://berputar.opendesa.id/assets/front/twt.png?vd4312ea099aed63c7c449014dd965288" alt="Product Image" class="img-size-32">
                                                          </div></td>
                                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>5</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('sosmed/form') }}" class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Hapus" data-toggle="modal" >
                                                                <i class="fa fa-lock"></i></a>
                                                                <a href="#" data-href="#" data-target="#modal1" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" >
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Whatsapp</td>
                                                        <td><div class="product-img">
                                                            <img src="https://berputar.opendesa.id/assets/front/wa.png?ve6817a367a89f4df51006cdf05c04527" alt="Product Image" class="img-size-32">
                                                          </div></td>
                                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" class="check-item" />
                                                        </td>
                                                        <td>6</td>
                                                        <td class="aksi">
                                                            <a href="{{ url('sosmed/form') }}" class="btn bg-orange btn-sm" title="Ubah">
                                                                <i class="fa fa-edit text-white"></i></a>
                                                            <a href="#" data-href="#" class="btn bg-dark btn-sm" title="Hapus" data-toggle="modal" >
                                                                <i class="fa fa-lock"></i></a>
                                                                <a href="#" data-href="#" data-target="#modal1" class="btn bg-danger btn-sm" title="Hapus" data-toggle="modal" >
                                                                    <i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td>Youtube</td>
                                                        <td><div class="product-img">
                                                            <img src="https://berputar.opendesa.id/assets/front/yb.png?v25fe95c5c1f5aed51017d41d7bd1cbb6" alt="Product Image" class="img-size-32">
                                                          </div></td>
                                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
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

        <!-- first Modal -->

        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal1Label"><i class="fas fa-exclamation-triangle text-red"></i>
                            Konfirmasi
                        </h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div style="background-color: #00c0ef;">
                        <div class="card-header">
                            <h6 class="card-title text-white" style="font-size: 12px;">Apakah Anda yakin ingin menghapus
                                data
                                ini?</h6>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="button" class="btn btn-warning btn-sm text-white" data-dismiss="modal"><i
                                class="fa fa-sign-out"></i> Tutup</button>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                    </div>
                    </form>

                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>


@endsection
