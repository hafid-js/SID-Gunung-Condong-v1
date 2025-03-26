@extends('admin.layout.layout')
@section('content')

<div class="content-wrapper" style="min-height: 912.43px;"><div style="padding: 20px 30px; background: rgb(243, 156, 18); z-index: 999999; font-size: 15px; font-weight: 600;"><a href="https://opendesa.id/" style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Website ini hanya sebagai demo aplikasi dengan fitur yg dibatasi, untuk mendapatkan akses penuh silakan kunjungi www.opendesa.id</a></div>
            <section class="content-header">
                    <h1>
        Pengguna
        <small>Ubah Data</small>
    </h1>

                <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item">
        <a href="https://berputar.opendesa.id/beranda"><i class="fa fa-home"></i>Beranda</a>
    </li>
        <li><a href="https://berputar.opendesa.id/man_user">Pengguna</a></li>
    <li class="active">Ubah Data</li>
</ol>

            </section>

            <section id="maincontent" class="content">


                        <div class="row">
        <form id="validasi" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('patch')
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile preview-img">
                        <img class="penduduk img-responsive" src="https://berputar.opendesa.id/assets/images/pengguna/kuser.png" alt="Foto Pengguna">
                        <br>
                        <p class="text-center text-bold">Foto Pengguna</p>
                        <p class="text-muted text-center text-red">(Kosongkan, jika foto tidak berubah)</p>
                        <br>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control file-path" readonly="" name="foto">
                            <input type="file" class="hidden file-input" name="foto" accept=".gif,.jpg,.jpeg,.png">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat file-browser"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <a href="https://berputar.opendesa.id/man_user" onclick="" id="" class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i> Kembali Ke Manajemen Pengguna</a>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="group">Group</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm required" id="id_grup" name="id_grup">
                                                                            <option value="1">
                                            Administrator</option>
                                                                            <option selected="" value="2">
                                            Operator</option>
                                                                            <option value="3">
                                            Redaksi</option>
                                                                            <option value="4">
                                            Kontributor</option>
                                                                            <option value="5">
                                            Satgas Covid-19</option>
                                                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="nama">Data Staf </label>
                            <div class="col-sm-8">
                                <select class="form-control select2 input-sm select2-hidden-accessible" id="pamong_id" name="pamong_id" data-select2-id="pamong_id" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="2">-- Silakan Masukan Nama Staf --</option>
                                                                            <option value="1" data-nama="Ari">
                                            Pj. Kepala Desa - Ari</option>
                                                                            <option value="2" data-nama="TATI RAMADYANA">
                                            Sekretaris - TATI RAMADYANA</option>
                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 661.664px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-pamong_id-container"><span class="select2-selection__rendered" id="select2-pamong_id-container" role="textbox" aria-readonly="true" title="-- Silakan Masukan Nama Staf --">-- Silakan Masukan Nama Staf --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="username">Username</label>
                            <div class="col-sm-8">
                                <input id="username" name="username" class="form-control input-sm required username" type="text" placeholder="Username" value="{{ $user->username }}" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="password">Kata Sandi</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input id="password" name="password" class="form-control input-sm pwdLengthNist_atau_kosong " type="password" placeholder="Ubah Password" autocomplete="off">
                                    <span class="input-group-addon input-sm reveal"><i class="fa fa-eye-slash"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="aktif" class="col-sm-3 control-label">Status</label>
                            <div class="btn-group col-xs-12 col-sm-8 " data-toggle="buttons">
                                <label class="btn btn-info btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label active">
                                    <input type="radio" name="aktif" class="form-check-input" value="1" checked=""> Aktif
                                </label>
                                <label class="btn btn-info btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label ">
                                    <input type="radio" name="aktif" class="form-check-input" value="0"> Tidak Aktif
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="batasi_wilayah" class="col-sm-3 control-label">Akses Wilayah</label>
                            <div class="btn-group col-xs-12 col-sm-8 " data-toggle="buttons">
                                <label class="btn btn-info btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label ">
                                    <input type="radio" name="batasi_wilayah" class="form-check-input" value="1"> Aktif
                                </label>
                                <label class="btn btn-info btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label active">
                                    <input type="radio" name="batasi_wilayah" class="form-check-input" value="0" checked=""> Tidak Aktif
                                </label>
                            </div>
                        </div>

                        <div class="form-group akses_wilayah" style="display: none;">
                            <div class="col-sm-8 col-sm-offset-3" style="padding: 0px">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th colspan="5">Wilayah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                    <tr>
                                                <td class="padat">1</td>
                                                <td colspan="4">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" data-target="[data-dusun=-]" class="dusun_checkbox"><strong>&nbsp;DUSUN - </strong></label>
                                                    </div>
                                                </td>
                                                <td class="padat">
                                                    <a role="button" onclick="hideShow(this, 'rw')" data-target="[data-dusun=-]" class="fa fa-plus btn"></a>
                                                </td>
                                            </tr>
                                                                                            <tr data-dusun="-" class="hide">
                                                    <td></td>
                                                    <td class="padat">&nbsp;&nbsp;1</td>
                                                    <td colspan="3">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" data-target="[data-rw=-_-]" class="rw_checkbox" value=""><strong>&nbsp; RW -</strong></label>
                                                        </div>
                                                    </td>
                                                    <td class="padat">
                                                        <a role="button" onclick="hideShow(this, 'rt')" data-target="[data-rw=-_-]" class="fa fa-plus btn"></a>
                                                    </td>
                                                </tr>
                                                                                                    <tr data-rw="-_-" class="hide">
                                                        <td></td>
                                                        <td></td>
                                                        <td class="padat">&nbsp;&nbsp;1</td>
                                                        <td colspan="2">
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name="akses_wilayah[]" value="6"><strong>&nbsp;RT - </strong></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                                                                                                                                                <tr>
                                                <td class="padat">2</td>
                                                <td colspan="4">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" data-target="[data-dusun=a]" class="dusun_checkbox"><strong>&nbsp;DUSUN a </strong></label>
                                                    </div>
                                                </td>
                                                <td class="padat">
                                                    <a role="button" onclick="hideShow(this, 'rw')" data-target="[data-dusun=a]" class="fa fa-plus btn"></a>
                                                </td>
                                            </tr>
                                                                                            <tr data-dusun="a" class="hide">
                                                    <td></td>
                                                    <td class="padat">&nbsp;&nbsp;1</td>
                                                    <td colspan="3">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" data-target="[data-rw=a_-]" class="rw_checkbox" value=""><strong>&nbsp; RW -</strong></label>
                                                        </div>
                                                    </td>
                                                    <td class="padat">
                                                        <a role="button" onclick="hideShow(this, 'rt')" data-target="[data-rw=a_-]" class="fa fa-plus btn"></a>
                                                    </td>
                                                </tr>
                                                                                                    <tr data-rw="a_-" class="hide">
                                                        <td></td>
                                                        <td></td>
                                                        <td class="padat">&nbsp;&nbsp;1</td>
                                                        <td colspan="2">
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name="akses_wilayah[]" value="9"><strong>&nbsp;RT - </strong></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                                                                                                                                                <tr>
                                                <td class="padat">3</td>
                                                <td colspan="4">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" data-target="[data-dusun=caramming]" class="dusun_checkbox"><strong>&nbsp;DUSUN caramming </strong></label>
                                                    </div>
                                                </td>
                                                <td class="padat">
                                                    <a role="button" onclick="hideShow(this, 'rw')" data-target="[data-dusun=caramming]" class="fa fa-plus btn"></a>
                                                </td>
                                            </tr>
                                                                                            <tr data-dusun="caramming" class="hide">
                                                    <td></td>
                                                    <td class="padat">&nbsp;&nbsp;1</td>
                                                    <td colspan="3">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" data-target="[data-rw=caramming_-]" class="rw_checkbox" value=""><strong>&nbsp; RW -</strong></label>
                                                        </div>
                                                    </td>
                                                    <td class="padat">
                                                        <a role="button" onclick="hideShow(this, 'rt')" data-target="[data-rw=caramming_-]" class="fa fa-plus btn"></a>
                                                    </td>
                                                </tr>
                                                                                                    <tr data-rw="caramming_-" class="hide">
                                                        <td></td>
                                                        <td></td>
                                                        <td class="padat">&nbsp;&nbsp;1</td>
                                                        <td colspan="2">
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name="akses_wilayah[]" value="12"><strong>&nbsp;RT - </strong></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                                                                                                                                        </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="nama">Nama</label>
                            <div class="col-sm-8">
                                <input id="nama" name="nama" class="form-control input-sm required nama" minlength="3" maxlength="50" type="text" placeholder="Nama" value="Ariandi Ryan Kahfi">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="phone">Nomor HP</label>
                            <div class="col-sm-8">
                                <input id="phone" name="phone" class="form-control input-sm bilangan" minlength="10" maxlength="15" type="text" placeholder="Nomor HP" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="email">Email</label>
                            <div class="col-sm-8">
                                <input id="email" name="email" class="form-control input-sm email" type="email" placeholder="Alamat E-mail" value="">
                            </div>
                        </div>
                                            </div>

                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i>
                            Batal</button>
                        <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                    </div>
                </div>
            </div>
        <input type="hidden" name="sidcsrf" value="82dc3caefef9cd8181102fc33049c7f0"></form>
    </div>

            </section>
        </div>

@endsection
