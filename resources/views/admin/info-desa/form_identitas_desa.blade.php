@extends('admin.layout.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
            <section class="content-header">
                    <h1>
        Identitas Desa
        <small>Ubah Data</small>
    </h1>

                <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
    </li>
        <li class="breadcrumb-item"><a href="{{ url('/identitas-desa') }}">Identitas Desa</a></li>
    <li class="active">Ubah Data</li>
</ol>

            </section>

            <section id="maincontent" class="content">



    <form action="{{ url('/identitas-desa') }}/update" class="form-horizontal" id="validasi" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<input type="hidden" name="sidcsrf" value="de0cefb44a04c3686cbd335977c81734" />

    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile preview-img">
                    <img class="profile-user-img img-responsive img-circle" src="https://berputar.opendesa.id/assets/files/logo/opensid_logo.png" alt="Logo">
                    <br />
                    <p class="text-center text-bold">Lambang Desa</p>
                    <p class="text-muted text-center text-red">(Kosongkan, jika logo tidak berubah)</p>
                    <br />
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="ukuran">Dimensi logo (persegi)</label>
                        <div class="col-sm-12">
                            <input
                                id="ukuran"
                                name="ukuran"
                                class="form-control input-sm number"
                                min="100"
                                max="400"
                                type="text"
                                placeholder="Kosongkan jika ingin dimensi bawaan"
                            />
                        </div>
                    </div>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control file-path" readonly>
                        <input type="file" class="hidden file-input" name="logo" accept=".gif,.jpg,.jpeg,.png">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-flat file-browser"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
            </div>

            <div class="box box-primary">
                <div class="box-body box-profile preview-img">
                    <img class="img-responsive" src="https://berputar.opendesa.id/assets/files/logo/opensid_kantor.jpg" alt="Kantor Desa">
                    <br />
                    <p class="text-center text-bold">Kantor Desa</p>
                    <p class="text-muted text-center text-red">(Kosongkan, jika kantor Desa tidak
                        berubah)</p>
                    <br />
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control file-path" readonly>
                        <input type="file" class="hidden file-input" name="kantor_desa" accept=".gif,.jpg,.jpeg,.png">
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
                    <a href="{{ url('identitas-desa') }}" class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data Desa"><i class="fa fa-arrow-circle-o-left"></i> Kembali
                        Ke
                        Data Identitas
                        Desa</a>
                </div>
                <div class="box-body">
                                        <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama">Nama
                            Desa</label>
                        <div class="col-sm-8">
                                                            <select
                                    id="pilih_desa"
                                    name="pilih_desa"
                                    class="form-control input-sm select-nama-desa"
                                    data-placeholder="Golo Pari - Congkar - Manggarai Timur - Nusa Tenggara Timur"
                                    data-token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw"
                                    data-tracker='https://pantau.opensid.my.id'
                                    style="display: none;"
                                ></select>
                                                        <input
                                type="hidden"
                                id="nama_desa"
                                class="form-control input-sm nama_desa required"
                                minlength="3"
                                maxlength="50"
                                name="nama_desa"
                                value="Golo Pari"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_desa">Kode
                            Desa</label>
                        <div class="col-sm-2">
                            <input
                                readonly
                                id="kode_desa"
                                name="kode_desa"
                                class="form-control input-sm  required"

                                type="text"
                                onkeyup="tampil_kode_desa()"
                                placeholder="Kode Desa"
                                value="5319122009"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_pos">Kode Pos
                            Desa</label>
                        <div class="col-sm-2">
                            <input
                                id="kode_pos"
                                name="kode_pos"
                                class="form-control input-sm number"
                                minlength="5"
                                maxlength="5"
                                type="text"
                                placeholder="Kode Pos Desa"
                                value="83355"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="pamong_id">
                            Kepala Desa</label>
                        <div class="col-sm-8">
                            <input class="form-control input-sm" type="text" placeholder="Nama Kepala Desa" value="Ari" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">NIP Kepala Desa</label>
                        <div class="col-sm-8">
                            <input class="form-control input-sm" type="text" placeholder="NIP Kepala Desa" value="" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="alamat_kantor">Alamat Kantor
                            Desa</label>
                        <div class="col-sm-8">
                            <textarea
                                id="alamat_kantor"
                                name="alamat_kantor"
                                class="form-control input-sm alamat required"
                                maxlength="100"
                                placeholder="Alamat Kantor Desa"
                                rows="3"
                                style="resize:none;"
                            >Jl.Watunggong - Buti</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="email_desa">E-Mail
                            Desa</label>
                        <div class="col-sm-8">
                            <input
                                id="email_desa"
                                name="email_desa"
                                class="form-control input-sm email"
                                maxlength="50"
                                type="text"
                                placeholder="E-Mail Desa"
                                value="Golopari2023@gmail.com"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="telepon">Nomor Telepon
                            Desa</label>
                        <div class="col-sm-8">
                            <input
                                id="telepon"
                                name="telepon"
                                class="form-control input-sm bilangan"
                                type="text"
                                maxlength="15"
                                placeholder="Telpon Desa"
                                value="082210587313"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="telepon">Nomor Ponsel
                            Desa</label>
                        <div class="col-sm-8">
                            <input
                                id="telepon-operator"
                                name="nomor_operator"
                                class="form-control input-sm bilangan"
                                type="text"
                                maxlength="15"
                                placeholder="Nomor Ponsel"
                                value="082210587313"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="website">Website
                            Desa</label>
                        <div class="col-sm-8">
                            <input
                                id="website"
                                name="website"
                                class="form-control input-sm url"
                                maxlength="50"
                                type="text"
                                placeholder="Website Desa"
                                value=""
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_kecamatan">Nama
                            Kecamatan</label>
                        <div class="col-sm-8">
                            <input
                                readonly
                                id="nama_kecamatan"
                                name="nama_kecamatan"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Nama Kecamatan"
                                value="Congkar"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_kecamatan">Kode
                            Kecamatan</label>
                        <div class="col-sm-2">
                            <input
                                readonly
                                id="kode_kecamatan"
                                name="kode_kecamatan"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Kode Kecamatan"
                                value="531912"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_kecamatan">Nama
                            Camat</label>
                        <div class="col-sm-8">
                            <input
                                id="nama_kepala_camat"
                                name="nama_kepala_camat"
                                class="form-control input-sm nama required"
                                maxlength="50"
                                type="text"
                                placeholder="Nama Camat"
                                value="Petrus Sahadun, Sos"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nip_kepala_camat">NIP
                            Camat</label>
                        <div class="col-sm-4">
                            <input
                                id="nip_kepala_camat"
                                name="nip_kepala_camat"
                                class="form-control input-sm nomor_sk"
                                maxlength="50"
                                type="text"
                                placeholder="NIP Camat"
                                value="-"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_kabupaten">Nama
                            Kabupaten</label>
                        <div class="col-sm-8">
                            <input
                                readonly
                                id="nama_kabupaten"
                                name="nama_kabupaten"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Nama Kabupaten"
                                value="Manggarai Timur"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_kabupaten">Kode
                            Kabupaten</label>
                        <div class="col-sm-2">
                            <input
                                readonly
                                id="kode_kabupaten"
                                name="kode_kabupaten"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Kode Kabupaten"
                                value="5319"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_propinsi">Nama Provinsi</label>
                        <div class="col-sm-8">
                            <input
                                readonly
                                id="nama_propinsi"
                                name="nama_propinsi"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Nama Propinsi"
                                value="Nusa Tenggara Timur"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_propinsi">Kode Provinsi</label>
                        <div class="col-sm-2">
                            <input
                                readonly
                                id="kode_propinsi"
                                name="kode_propinsi"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Kode Provinsi"
                                value="53"
                            />
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            <h4 class="text-bold">Kontak Pemberitahuan</h4>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_kontak">Nama Perangkat Desa</label>
                        <div class="col-sm-8">
                            <input id="nama_kontak" name="nama_kontak" class="form-control input-sm nama required" type="text" placeholder="Nama Perangkat Desa" value="TERSIANUS HARSIN " />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="hp_kontak">No. HP/WA</label>
                        <div class="col-sm-8">
                            <input id="hp_kontak" name="hp_kontak" class="form-control input-sm telepon required" type="text" placeholder="No. HP Perangkat Desa" value="082210587313" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="jabatan_kontak">Jabatan</label>
                        <div class="col-sm-8">
                            <input id="jabatan_kontak" name="jabatan_kontak" class="form-control input-sm nama required" type="text" placeholder="Jabatan" value="Sekretaris " />
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i>
                        Batal</button>
                    <button type="submit" class="btn btn-social btn-info btn-sm pull-right simpan"><i class="fa fa-check"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </div>
    </form>

            </section>
        </div>
    <!-- /.content-wrapper -->

@endsection
