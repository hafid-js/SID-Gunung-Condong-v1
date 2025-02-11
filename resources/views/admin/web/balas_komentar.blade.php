@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header mt-min-20">
         <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <h1>Komentar</h1>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-20 mb-min-20">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Komentar</li>
                        <li class="breadcrumb-item active">Ubah Komentar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card-body p-0">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <div class="col-md-12">
                                <div class="margin">
                                    <a href="{{ url('komentar') }}" title="Unduh Data"
                                        class="btn btn-social btn-info btn-xs visible-xs-block"
                                        data-title="Unduh Data"><span class="btn-label"><i
                                                class="fa fa-arrow-circle-left"></i></span> Kembali ke Daftar Komentar</a>
                                                <a href="{{ url('#') }}" title="Unduh Data"
                                        class="btn btn-social btn-success btn-xs visible-xs-block"
                                        data-title="Unduh Data"><span class="btn-label"><i
                                                class="fa fa-eye"></i></span> Lihat Komentar Artikel</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                         <!-- Conversations are loaded here -->
                <div class="card-body p-3">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="{{ asset('admin/images/user1-128x128.jpg ') }}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Administrator (Administrator)</span>
                        <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="{{ asset('admin/images/user3-128x128.jpg ') }}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text bg-secondary text-white" >
                        You better believe it!
                        <br>
                        <a href="#" class="btn btn-danger mt-1 mb-1 btn-success btn-xs" data-toggle="modal" data-target="#modal1" title="Hapus Data"><i class="fa fa-trash"></i>
                            Hapus</a>
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                    <hr>
                        <form action="#" method="post">
                          <div class="input-group">
                            <input type="text" name="message" placeholder="Isi Komentar..." class="form-control">
                            <span class="input-group-append">
                              <button type="button" class="btn btn-info text-white">Kirim</button>
                            </span>
                          </div>
                        </form>
                      </div>

                  <!--/.direct-chat-messages-->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.col-->
        </div>
</div>

<!-- ./row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

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
            <!-- /.modal -->

@endsection
