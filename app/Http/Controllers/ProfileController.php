<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $validatedData = $request->validated();

        // Cek apakah ada perubahan sebelum menyimpan
        if ($user->isDirty()) {
            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }
            $user->fill($validatedData)->save();

            return Redirect::route('profile.edit')->with('status', 'Profile berhasil diperbarui.');
        }

        return Redirect::route('profile.edit')->with('status', 'Tidak ada perubahan pada profil.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required'],
        ]);

        $user = $request->user();

        // Verifikasi password sebelum menghapus akun
        if (!Hash::check($request->password, $user->password)) {
            return Redirect::route('profile.edit')->withErrors(['password' => 'Password salah']);
        }

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with('status', 'Akun berhasil dihapus.');
    }
}
