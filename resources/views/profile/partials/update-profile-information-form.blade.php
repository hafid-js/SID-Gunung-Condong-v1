<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="nama" :value="__('Nama')" />
            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama', $user->nama)"
                required autofocus autocomplete="nama" />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>


    {{-- <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
                Pengguna <small>Ubah Data</small>
            </h1>

            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="https://berputar.opendesa.id/beranda"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li class="breadcrumb-item"><a href="https://berputar.opendesa.id/pengguna">Pengguna</a></li>
                <li class="active">Profil</li>
            </ol>

        </section>

        <section id="maincontent" class="content">


            <div class="row">
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="penduduk" id="foto"
                                src="https://berputar.opendesa.id/assets/images/pengguna/kuser.png" alt="Foto Penduduk">
                            <br>
                            <div class="input-group input-group-sm text-center">
                                <span class="input-group-btn">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profil" data-toggle="tab" aria-expanded="true">Profil</a></li>
                            <li class=""><a href="#sandi" data-toggle="tab" aria-expanded="false">Sandi</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profil">
                                <form action="https://berputar.opendesa.id/pengguna/update" id="validasi"
                                    enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <input type="hidden" name="sidcsrf" value="37be861ee9e4800af25fd9b5c5dbf2cb">

                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="tgl_peristiwa">Username</label>
                                            <input class="form-control input-sm" type="text" value="admin"
                                                autocomplete="off" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control input-sm email" name="email" type="email" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input class="form-control input-sm required" type="text" name="nama"
                                                value="Administrator" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">Ganti Foto</label>
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control" id="file_path" name="foto">
                                                <input type="file" class="hidden" id="file" name="foto">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-info btn-flat" id="file_browser"><i
                                                            class="fa fa-search"></i>
                                                        Browse</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="reset" class="btn btn-social btn-danger btn-sm"><i
                                                class="fa fa-times"></i>
                                            Batal</button>
                                        <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i
                                                class="fa fa-check"></i>
                                            Simpan</button>
                                    </div>
                                </form>
                            </div>

 --}}
