@extends('admin.layout.layout')
@section('content')

    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Komentar
                <small>Detail Komentar</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="{{ url('komentar') }}"> Daftar Komentar</a></li>
                <li class="active">Detail Komentar</li>
            </ol>

        </section>

        <section id="maincontent" class="content">
            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-triangle text-red"></i>
                                Konfirmasi</h4>
                        </div>
                        <div class="modal-body btn-info">
                            Apakah Anda yakin ingin menghapus data ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-social btn-warning btn-sm" data-dismiss="modal"><i
                                    class="fa fa-sign-out"></i> Tutup</button>
                            <a class="btn-ok">
                                <div class="btn btn-social btn-danger btn-sm" id="ok-delete"><i class="fa fa-trash-o"></i>
                                    Hapus</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info direct-chat direct-chat-warning">
                        <div class="box-header with-border">
                            <a href="{{ url('komentar') }}"
                                class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                                title="Tambah Artikel">
                                <i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar Komentar
                            </a>
                            <a href="#" target="_blank"
                                class="btn btn-social btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                                title="Tambah Artikel">
                                <i class="fa fa-eye"></i>Lihat Komentar Artikel
                            </a>
                        </div>

                        <div class="box-body">
                            <div class="direct-chat-messages">
                                <div class="direct-chat-msg left">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-right">Fulan<code>(Pengunjung)</code></span>
                                        <span class="direct-chat-timestamp pull-left">06 Februari 2025 05:50:20</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://berputar.opendesa.id/assets/images/pengguna/wuser.png"
                                        alt="message user image">
                                    <div class="direct-chat-text">
                                        sejarah yang menarik sekali
                                    </div>
                                </div>
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-info clearfix">
                                        <span
                                            class="direct-chat-name pull-right">Administrator<code>(Administrator)</code></span>
                                        <span class="direct-chat-timestamp pull-left">27 Februari 2025 10:01:24</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://berputar.opendesa.id/assets/images/pengguna/kuser.png"
                                        alt="message user image">
                                    <div class="direct-chat-text">
                                        terima kasih
                                        <div class="tools" style="margin-top: 10px;">
                                            <a href="#" data-href="#"
                                                class="btn btn-danger btn-sm" title="Hapus Data" data-toggle="modal"
                                                data-target="#confirm-delete"><i class="fa fa-trash-o"
                                                    style="color: rgb(255, 255, 255);"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <form id="validasi" action="#" method="POST"
                                class="form-horizontal">
                                <div class="input-group">
                                    <input type="text" name="komentar" placeholder="Isi Komentar"
                                        class="form-control required">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-warning btn-flat">Kirim</button>
                                    </span>
                                </div>
                                <input type="hidden" name="sidcsrf" value="e6a59549099d37a8fc98bfc4554dca9b">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <div class="modal fade in" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-triangle text-red"></i> &nbsp;Konfirmasi</h4>
                </div>
                <div class="modal-body btn-info">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-social btn-warning btn-sm" data-dismiss="modal"><i class="fa fa-sign-out"></i> Tutup</button>
                    <a class="btn-ok" href="#">
                        <div class="btn btn-social btn-danger btn-sm" id="ok-delete"><i class="fa fa-trash-o"></i> Hapus</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
