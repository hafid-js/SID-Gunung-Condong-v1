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
                            <li class="breadcrumb-item">Identitas Desa</li>
                            <li class="breadcrumb-item active">Ubah Data</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-3">
                        <div class="card-body p-0">
                            <div class="card-outline card-info">
                                <div class="form-group mt-3">
                                    <div class="text-center">
                                        <img class="img-responsive img-circle profile-user-img"
                                            src="https://berputar.opendesa.id/assets/files/logo/opensid_logo.png"
                                            style="width: 120px;height:120px;" alt="Photo">
                                    </div>
                                </div>
                                <label class="text-center">Lambang Desa</label>
                                <code class="text-center">(Kosongkan, jika logo tidak berubah)</code>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Dimensi logo (persegi)</label>
                                        <input type="text" class="form-control form-control-sm font-12"
                                            placeholder="Kosongkan jika ingin dimensi bawaan">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="input-group" id="exampleInputFile">
                                            <label class="custom-file-label " for="exampleInputFile"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="card-outline card-info">
                                <div class="form-group mt-3">
                                    <div class="text-center p-3">
                                        <img class="img-fluid pad"
                                            src="https://www.purworejo24.com/wp-content/uploads/2022/07/kirab-budaya-merti-desa-di-Desa-Gunung-Condong-Kecamatan-Bruno-Senin-18-Juli-2022.jpg"
                                            style="width: 600px;height: auto;" alt="Photo">
                                    </div>
                                </div>
                                <label class="text-center">Lambang Desa</label>
                                <code class="text-center">(Kosongkan, jika logo tidak berubah)</code>
                                <div class="card-body">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="input-group" id="exampleInputFile">
                                            <label class="custom-file-label " for="exampleInputFile"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-9">
                        <div class="card-body p-0">
                            <div class="card-outline card-info">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('identitas-desa') }}" title="Unduh Data"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"><span
                                                        class="btn-label"><i class="fa fa-arrow-circle-left"></i></span>
                                                    Kembali
                                                    ke Data Identitas Desa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="namaDesa" class="col-sm-2 font-12">Nama Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <select name="" id="namaDesa" class="form-control form-control-sm select2"
                                                style="width:100%;">
                                                <option value="">Gunung Condong - Bruno - PURWOREJO - JAWA TENGAH</option>
                                                <option value="">Kemranggen - Bruno - PURWOREJO - JAWA TENGAH</option>
                                                <option value="">Karanggedang - Bruno - PURWOREJO - JAWA TENGAH</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kodeDesa" class="col-sm-2 font-12">Kode Desa</label>
                                        <div class="col-sm-10 col-lg-2 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="kodeDesa"
                                                disabled value="11.01.01.2003" placeholder="Kode Desa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kodePosDesa" class="col-sm-2 font-12">Kode Pos
                                            Desa</label>
                                        <div class="col-sm-10 col-lg-2 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="kodePosDesa"
                                                value="54261" placeholder="Kode Pos Desa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kepalaDesa" class="col-sm-2 font-12">Kepala Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="kepalaDesa"
                                                value="Agus Sulistyo" disabled placeholder="Kepala Desa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nipKades" class="col-sm-2 font-12">NIP Kepala
                                            Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="nipKades"
                                                disabled placeholder="NIP Kepala Desa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 font-12">Alamat Kantor
                                            Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <textarea class="form-control font-12" rows="3"
                                                style="height:100%;">Jl.Kemranggen - Gn.Condong Km.8</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 font-12">E-Mail Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="email"
                                                placeholder="Email Desa" value="pemdes@gunungcondong.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon" class="col-sm-2 font-12">Nomor Telepon
                                            Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="telepon"
                                                value="" placeholder="Nomor Telepon Desa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ponsel" class="col-sm-2 font-12">Nomor Ponsel
                                            Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="ponsel"
                                                value="082377463844" placeholder="Nomor Ponsel Desa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website" class="col-sm-2 font-12">Website Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="website"
                                                value="www.gunungcondong.com" placeholder="Website Desa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kecamatan" class="col-sm-2 font-12">Nama
                                            Kecamatan</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="kecamatan"
                                                value="Bruno" disabled placeholder="Nama Kecamatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kode" class="col-sm-2 font-12">Kode Kecamatan</label>
                                        <div class="col-sm-10 col-lg-2 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="kode"
                                                value="54261" disabled placeholder="Kode Kecamatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="camat" class="col-sm-2 font-12">Nama Camat</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="camat"
                                                value="Agus Budianto.SH" placeholder="Nama Camat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nipCamat" class="col-sm-2 font-12">NIP Camat</label>
                                        <div class="col-sm-10 col-lg-4 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="nipCamat"
                                                value="" placeholder="NIP Camat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kab" class="col-sm-2 font-12">Nama Kabupaten</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="kab"
                                                value="Purworejo" disabled placeholder="Nama Kabupaten">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kodeKab" class="col-sm-2 font-12">Kode Kabupaten</label>
                                        <div class="col-sm-10 col-lg-2 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="kodeKab"
                                                value="5319" disabled placeholder="Kode Kabupaten">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prov" class="col-sm-2 font-12">Nama Provinsi</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="prov"
                                                value="Jawa Tengah" disabled placeholder="Nama Provinsi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kodeProv" class="col-sm-2 font-12">Kode Provinsi</label>
                                        <div class="col-sm-10 col-lg-2 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="kodeProv"
                                                value="53" disabled placeholder="Kode Provinsi">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h6><strong>Kontak Pemberitahuan</strong></h6>
                                    </div>
                                    <div class="form-group row">
                                        <label for="perDes" class="col-sm-2 font-12">Nama Perangkat
                                            Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="perDes"
                                                value="Hafid" placeholder="Nama Perangkat Desa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="noHp" class="col-sm-2 font-12">No. HP/WA</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="noHp"
                                                value="082377656433" placeholder="No. HP/WA">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jabatan" class="col-sm-2 font-12">Jabatan</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="jabatan"
                                                value="Sekretaris" placeholder="Jabatan">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-danger">Batal</button>
                                    <button type="submit" class="btn btn-info float-right">Simpan</button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
