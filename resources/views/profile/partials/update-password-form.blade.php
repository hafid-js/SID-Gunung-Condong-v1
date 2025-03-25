<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Kata Sandi')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('Kata Sandi Baru')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Konfirmasi Kata Sandi')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = true, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Kata Sandi Berhasil di Ubah!') }}</p>
            @endif
        </div>
    </form>
</section>


{{-- <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('put')

    <div>
        <x-input-label for="update_password_current_password" :value="__('Current Password')" />
        <x-text-input id="update_password_current_password" name="current_password" type="password"
            class="mt-1 block w-full" autocomplete="current-password" />
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="update_password_password" :value="__('New Password')" />
        <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full"
            autocomplete="new-password" />
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
            class="mt-1 block w-full" autocomplete="new-password" />
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Save') }}</x-primary-button>

        @if (session('status') === 'password-updated')
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
            class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
        @endif
    </div>
</form> --}}


{{--
<div class="tab-pane" id="sandi">
    <form method="post" action="{{ route('password.update') }}" accept-charset="utf-8">
        @csrf
        @method('put')

        <div class="box-body">
            <div class="form-group">
                <label for="pass_lama">Kata Sandi Lama</label>
                <div class="input-group">
                    <input id="update_password_current_password" name="current_password" type="password"
                    class="form-control input-sm required pwdLengthNist" autocomplete="current-password">
                    <span class="input-group-addon input-sm reveal-lama" id="reveal-lama"><i
                            class="fa fa-eye-slash"></i></span>
                </div>
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red" />
            </div>
            <div class="form-group">
                <label for="pass_baru">Kata Sandi Baru</label>
                <div class="input-group">
                    <input id="update_password_password" name="password" type="password" class="form-control input-sm required pwdLengthNist"
                         autocomplete="off">
                    <span class="input-group-addon input-sm reveal-baru"><i class="fa fa-eye-slash"></i></span>
                </div>
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
            <div class="form-group">
                <label for="pass_baru1">Kata Sandi Baru (Ulangi)</label>
                <div class="input-group">
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control input-sm required pwdLengthNist"
                       autocomplete="off">
                    <span class="input-group-addon input-sm reveal-baru1"><i class="fa fa-eye-slash"></i></span>
                </div>
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>
        <div class="box-footer">
            <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i>
                Batal</button>
            <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i class="fa fa-check"></i>
                Simpan</button>
        </div>
    </form>
</div>

</div>
</div>
</div>
</div>

</section>
</div> --}}



{{-- <script>
    $(document).ready(function() {
  // Cek apakah ada error di form tab sandi
  @if ($errors->has('current_password') || $errors->has('password') || $errors->has('password_confirmation'))
    // Jika ada error di tab sandi, pindah ke tab sandi
    $('#sandi').tab('show');
  @endif
});
</script> --}}
