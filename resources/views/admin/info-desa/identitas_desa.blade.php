@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Identitas Desa</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item active">Identitas Desa</li>
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
                                <div class="form-group">
                                    <div class="card-header">
                                        <div class="col-md-12">
                                            <div class="margin">
                                                <a href="{{ url('identitas-desa/form') }}" title="Ubah Data Desa"
                                                    class="btn btn-warning btn-xs visible-xs-block"
                                                    data-title="Ubah Data Desa"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Ubah Data Desa</a>
                                                <a href="{{ url('identitas-desa/lokasi') }}" title="Lokasi Kantor Desa"
                                                    class="btn bg-purple btn-xs visible-xs-block"
                                                    data-title="Lokasi Kantor Desa"><span class="btn-label"><i
                                                            class="fa fa-map-marker"></i></span> Ubah Data Desa</a>
                                                <a href="{{ url('identitas-desa/peta') }}" title="Peta Wilayah Desa"
                                                    class="btn btn-info btn-xs visible-xs-block"
                                                    data-title="Peta Wilayah Desa"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Peta Wilayah
                                                    Desa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <img class="img-fluid pad" src="{{ url('admin/images/photo2.png') }}"
                                        style="width: 600px;height: auto;" alt="Photo">
                                </div>
                                <div class="card-body mt-3">
                                    <h6 style="font-size: 15px;"><strong>Rincian Dokumentasi Pembangunan</strong></h6>
                                    <table class="table table-sm table-striped table-bordered"
                                        style="border: 0px  #f4f4f4;">
                                        <thead>
                                        </thead>
                                        <tbody class="font-12">
                                            <tr>
                                                <th colspan="3" class="subtitle_head p-2">
                                                    <strong>DESA</strong>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Nama Kegiatan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Perbaikan Saluran Irigasi</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Sumber Dana</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Pendapatan Asli Desa (PAD)</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Lokasi Pembangunan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Jl.Kartasura No.7</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Keterangan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Proyek berjalan baik</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Keterangan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Proyek berjalan baik</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Keterangan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Proyek berjalan baik</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Keterangan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Proyek berjalan baik</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Keterangan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Proyek berjalan baik</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Keterangan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Proyek berjalan baik</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Keterangan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Proyek berjalan baik</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>

                <!-- /.col-->
            </div>

            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
