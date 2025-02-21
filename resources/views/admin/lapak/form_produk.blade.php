@extends('admin.layout.layout')
@section('content')

    <style>
        /* Gaya untuk menyembunyikan form */
        .form-a,
        .form-b {
            display: none;
        }
    </style>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-min-20">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <h4 class="m-0" style="font-weight: 400;">Produk</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item">Produk</li>
                            <li class="breadcrumb-item active">Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="card-body p-0">
                            <div class="card card-outline card-info">
                                <div class="card-header" style="background-color: #ffffff;">
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <div class="margin">
                                                <a href="{{ url('komentar') }}" title="Unduh Data"
                                                    class="btn btn-social btn-info btn-sm visible-xs-block"
                                                    data-title="Unduh Data"><span class="btn-label"><i
                                                            class="fa fa-arrow-circle-left"></i></span> Kembali ke Data
                                                    Produk</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-body pb-0">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="namaPelapak" class="col-form-label">Nama Pelapak</label>
                                                <select name="" id="namaPelapak"
                                                    class="form-control form-control-sm select2" style="width: 100%;">
                                                    <option>Pilih Nama Pelapak</option>
                                                    <option>3306132287560002 - Khafid</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="namaProduk" class="col-form-label">Nama Produk</label>
                                                <input type="text" name="" id="namaProduk"
                                                    class="form-control form-control-sm" placeholder="Nama Produk">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group row">
                                                <label for="kategoriProduk" class="col-form-label">Kategori Produk</label>
                                                <select name="" id="kategoriProduk"
                                                    class="form-control form-control-sm select2" style="width: 100%;">
                                                    <option>Pilih Kategori Produk</option>
                                                    <option>Makanan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label for="kategoriProduk" class="col-form-label">Kategori
                                                        Produk</label>
                                                    <div class="input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp.</span>
                                                        </div>
                                                        <input id="harga" name="harga"
                                                            class="form-control form-control-sm number required"
                                                            type="number" placeholder="Harga Produk"
                                                            style="text-align:right;" min="100" max="2000000000" step="100"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label for="satuanProduk" class="col-form-label">Satuan Produk</label>
                                                    <select name="" id="satuanProduk"
                                                        class="form-control form-control-sm select2" style="width: 100%;">
                                                        <option>Pilih Satuan Produk</option>
                                                        <option>gram</option>
                                                        <option>gross</option>
                                                        <option>kg</option>
                                                        <option>lembar</option>
                                                        <option>lusin</option>
                                                        <option>paket</option>
                                                        <option>pcs</option>
                                                        <option>rim</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label for="pilihPerNom" class="col-form-label">Potongan Harga Produk
                                                        Produk</label>
                                                    <select name="" id="pilihPerNom" class="form-control form-control-sm"
                                                        style="width: 100%;">
                                                        <option value="a">Persen (%)</option>
                                                        <option value="b">Nominal (Rp.)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group form-a" id="form-a">
                                                    <label for="kategoriProduk" class="col-form-label"> &nbsp;</label>
                                                    <div class="input-group input-group-sm">
                                                        <input id="harga" name="harga"
                                                            class="form-control form-control-sm number required"
                                                            type="number" placeholder="Potongan (%)"
                                                            style="text-align:right;" min="100" max="2000000000" step="100"
                                                            value="">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-b" id="form-b">
                                                    <label for="kategoriProduk" class="col-form-label"> &nbsp;</label>
                                                    <div class="input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp.</span>
                                                        </div>
                                                        <input id="harga" name="harga"
                                                            class="form-control form-control-sm number required"
                                                            type="number" placeholder="Harga Produk"
                                                            style="text-align:right;" min="100" max="2000000000" step="100"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <label for="deskripsi" class="col-form-label">Deskripsi Produk</label>
                                                        <textarea class="form-control font-12" rows="5" id="deskripsi"
                                                            placeholder="Keterangan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-footer border-0 ">
                                    <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                                    <button type="submit" class="btn btn-info btn-sm float-right">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
