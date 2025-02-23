@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Lembaga Desa</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item">Lembaga Desa</li>
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
                    <div class="col-md-4 col-sm-12 col-lg-3">
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="form-group mt-3">
                                    <div class="text-center">
                                        <img class="img-responsive img-circle profile-user-img"
                                            src="https://berputar.opendesa.id/assets/files/logo/opensid_logo.png"
                                            style="width: 200px;height:200px;" alt="Photo">
                                    </div>
                                </div>
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
                            <div class="card card-outline card-info">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('lembaga-desa') }}" title="Unduh Data"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"><span
                                                        class="btn-label"><i class="fa fa-arrow-circle-left"></i></span>
                                                    Kembali
                                                    ke Daftar Lembaga</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="namLem" class="col-sm-2 font-12 col-form-label">Nama Lembaga</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="namLem" placeholder="Nama Lembaga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kodeLem" class="col-sm-2 font-12 col-form-label">Kode Lembaga</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <input type="text" class="form-control form-control-sm font-12" id="kodeLem"
                                                value="54261" placeholder="Kode Lembaga">
                                                <code>*Pastikan kode belum pernah dipakai di data lembaga / di data kelompok.</code>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="noSK" class="col-sm-2 font-12 col-form-label">No. SK Pendirian Lembaga</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <input type="text" class="form-control form-control-sm font-12" id="noSK" placeholder="No. SK Pendirian Lembaga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="katLem" class="col-sm-2 font-12">Kategori Lembaga</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <select name="" id="katLem" class="form-control form-control-sm select2"
                                                style="width:100%;">
                                                <option value="">-- Silahkan Masukkan Kategori Lembaga --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ketLem" class="col-sm-2 font-12">Ketua Lembaga</label>
                                        <div class="col-sm-10 col-lg-9 col-md-9">
                                            <select name="" id="ketLem" class="form-control form-control-sm select2"
                                                style="width:100%;">
                                                <option value="">-- Silahkan Masukkan NIK / Nama --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-2 font-12 col-form-label">Deskripsi Lembaga
                                            Desa</label>
                                        <div class="col-sm-10 col-lg-9 col-md-4">
                                            <textarea class="form-control font-12" rows="3" for="deskripsi"
                                                style="height:100%;">BPD merupakan lembaga baru di desa pada era otonomi daerah di Indonesia. Badan Permusyawaratan Desa atau yang disebut dengan nama lain adalah lembaga yang melaksanakan fungsi pemerintahan yang anggotanya merupakan wakil dari penduduk Desa berdasarkan keterwakilan wilayah dan ditetapkan secara demokratis.</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer border-0">
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
