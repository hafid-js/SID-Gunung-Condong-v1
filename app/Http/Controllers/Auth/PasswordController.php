<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required',Password::defaults(), 'confirmed']
        ], [
            'current_password.required' => 'Kata Sandi lama harus diisi.',
            'current_password.current_password' => 'Kata Sandi lama yang Anda masukkan salah.',
            'password.required' => 'Kata Sandi baru harus diisi.',
            'password.min' => 'Kata Sandi baru harus terdiri dari minimal 8 karakter.',
            'password_confirmation.required' => 'Konfirmasi kata sandi harus diisi.',
            'password_confirmation.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }
}
