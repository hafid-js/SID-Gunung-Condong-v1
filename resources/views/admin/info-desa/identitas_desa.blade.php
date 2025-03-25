@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Identitas Desa
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="active">Identitas Desa</li>
            </ol>

        </section>
        <section id="maincontent" class="content">
            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="{{ url('identitas-desa/form') }}"
                        class="btn btn-social btn-warning btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        title="Ubah Data Desa"><i class="fa fa-edit"></i> Ubah Data
                        Desa</a>
                    <a href="{{ url('identitas-desa/maps/kantor') }}"
                        class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        title="Lokasi Kantor Desa"><i class='fa fa-map-marker'></i>
                        Lokasi
                        Kantor Desa</a>
                    <a href="{{ url('identitas-desa/maps/wilayah') }}"
                        class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        title="Peta Wilayah Desa"><i class='fa fa-map'></i>
                        Peta Wilayah
                        Desa</a>
                </div>
                <div class="box-body">
                    <div class="box-body bg-identitas"
                        style="background-image: url('https://www.purworejo24.com/wp-content/uploads/2022/07/kirab-budaya-merti-desa-di-Desa-Gunung-Condong-Kecamatan-Bruno-Senin-18-Juli-2022.jpg')">
                        <img class="img-identitas img-responsive"
                            src="https://berputar.opendesa.id/assets/files/logo/opensid_logo.png" alt="logo-desa">
                        <h3 class="text-identitas">Desa Gunung Condong</h3>
                        <p class="text-identitas">
                            <b>Kecamatan Bruno, Kabupaten Purworejo, Provinsi Jawa Tengah</b>
                        </p>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover tabel-rincian">
                            <tbody>
                                <tr>
                                    <th colspan="3" class="subtitle_head">
                                        <strong>DESA</strong>
                                    </th>
                                </tr>
                                <tr>
                                    <td width="300">Nama Desa</td>
                                    <td width="1">:</td>
                                    <td>Golo Pari</td>
                                </tr>
                                <tr>
                                    <td>Kode Desa</td>
                                    <td>:</td>
                                    <td>53.19.12.2009</td>
                                </tr>
                                <tr>
                                    <td>Kode Pos Desa</td>
                                    <td>:</td>
                                    <td>83355</td>
                                </tr>
                                <tr>
                                    <td>Nama Kepala Desa</td>
                                    <td>:</td>
                                    <td>Ari</td>
                                </tr>
                                <tr>
                                    <td>NIP Kepala Desa</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Alamat Kantor Desa</td>
                                    <td>:</td>
                                    <td>Jl.Watunggong - Buti</td>
                                </tr>
                                <tr>
                                    <td>E-Mail Desa</td>
                                    <td>:</td>
                                    <td>Golopari2023@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon Desa</td>
                                    <td>:</td>
                                    <td>082210587313</td>
                                </tr>
                                <tr>
                                    <td>Nomor Ponsel Desa</td>
                                    <td>:</td>
                                    <td>082210587313</td>
                                </tr>
                                <tr>
                                    <td>Website Desa</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="3" class="subtitle_head">
                                        <strong>KECAMATAN</strong>
                                    </th>
                                </tr>
                                <tr>
                                    <td>Nama Kecamatan</td>
                                    <td>:</td>
                                    <td>Congkar</td>
                                </tr>
                                <tr>
                                    <td>Kode Kecamatan</td>
                                    <td>:</td>
                                    <td>53.19.12</td>
                                </tr>
                                <tr>
                                    <td>Nama Camat</td>
                                    <td>:</td>
                                    <td>Petrus Sahadun, Sos</td>
                                </tr>
                                <tr>
                                    <td>NIP Camat</td>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th colspan="3" class="subtitle_head">
                                        <strong>KABUPATEN</strong>
                                    </th>
                                </tr>
                                <tr>
                                    <td>Nama Kabupaten</td>
                                    <td>:</td>
                                    <td>Manggarai Timur</td>
                                </tr>
                                <tr>
                                    <td>Kode Kabupaten</td>
                                    <td>:</td>
                                    <td>53.19</td>
                                </tr>
                                <tr>
                                    <th colspan="3" class="subtitle_head"><strong>PROVINSI</strong></th>
                                </tr>
                                <tr>
                                    <td>Nama Provinsi</td>
                                    <td>:</td>
                                    <td>Nusa Tenggara Timur</td>
                                </tr>
                                <tr>
                                    <td>Kode Provinsi</td>
                                    <td>:</td>
                                    <td>53</td>
                                </tr>
                                <tr>
                                    <th colspan="3" class="subtitle_head"><strong>KONTAK PEMBERITAHUAN</strong></th>
                                </tr>
                                <tr>
                                    <td>Nama Perangkat Desa</td>
                                    <td>:</td>
                                    <td>TERSIANUS HARSIN </td>
                                </tr>
                                <tr>
                                    <td>No. HP/WA</td>
                                    <td>:</td>
                                    <td>082210587313</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td>Sekretaris </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
