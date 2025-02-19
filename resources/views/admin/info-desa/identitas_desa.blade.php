@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
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
                                    <div class="card-header" style="background-color: #ffffff;">
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-12">
                                                <div class="margin">
                                                    <a href="{{ url('identitas-desa/form') }}" title="Ubah Data Desa"
                                                        class="btn btn-warning btn-sm visible-xs-block"
                                                        data-title="Ubah Data Desa"><span class="btn-label"><i
                                                                class="fa fa-arrow-circle-left"></i></span> Ubah Data
                                                        Desa</a>
                                                    <a href="{{ url('identitas-desa/maps/kantor') }}" title="Lokasi Kantor Desa"
                                                        class="btn bg-purple btn-sm visible-xs-block"
                                                        data-title="Lokasi Kantor Desa"><span class="btn-label"><i
                                                                class="fa fa-map-marker"></i></span> Lokasi Kantor Desa</a>
                                                    <a href="{{ url('identitas-desa/maps/wilayah') }}" title="Peta Wilayah Desa"
                                                        class="btn btn-info btn-sm visible-xs-block"
                                                        data-title="Peta Wilayah Desa"><span class="btn-label"><i
                                                                class="fa fa-arrow-circle-left"></i></span> Peta Wilayah
                                                        Desa</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <img class="img-fluid pad" src="{{ url('admin/images/photo2.png') }}"
                                        style="width: 600px;height: auto;" alt="Photo">
                                </div>
                                <div class="card-body mt-3">
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
                                                    Nama Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Gunung Condong</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Kode Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>53.19.12.2009</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Kode Pos Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>54261</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Nama Kepala Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Agus Sulistyo</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    NIP Kepala Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Alamat Kantor Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Jl.Kemranggen - Gn.Condong Km.17</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    E-mail Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>pemdesa@gunungcondong.com</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Nomor Telepon Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Nomor Ponsel Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>082377657810</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Website Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>www.gunungcondong.com</td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="subtitle_head p-2">
                                                    <strong>KECAMATAN</strong>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Nama Kecamatan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Bruno</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Kode Kecamatan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>54261</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Nama Camat</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Saprudin.SH</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    NIP Camat</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="subtitle_head p-2">
                                                    <strong>KABUPATEN</strong>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Nama Kabupaten</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Purworejo</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Kode Kabupaten</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>53.19</td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="subtitle_head p-2">
                                                    <strong>PROVINSI</strong>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Nama Provinsi</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Jawa Tengah</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Kode Provinsi</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>53</td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="subtitle_head p-2">
                                                    <strong>KONTAK PEMBERITAHUAN</strong>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Nama Perangkat Desa</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Widya Nursita</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    No. HP/WA</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>082210587313</td>
                                            </tr>
                                            <tr>
                                                <td class="p-2" style="width: 20%;">
                                                    Jabatan</td>
                                                <td class="p-2" style="width: 1%;">
                                                    :
                                                </td>
                                                <td>Sekretaris</td>
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
