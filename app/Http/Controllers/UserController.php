<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AkunUser;

class UserController extends Controller
{
    // Dashboard user
    public function dashboard()
    {
        return view('user.dashboard');
    }

    // Profil user
    public function profil()
    {
        /** @var AkunUser $user */
        $user = Auth::user(); 
        return view('user.profil', compact('user'));
    }

    // Update profil
    public function updateProfil(Request $request)
    {
        /** @var AkunUser $user */
        $user = Auth::user();

        if (!$user instanceof AkunUser) {
            abort(403, 'Unauthorized'); 
        }

        $request->validate([
            'nama'   => 'required|string|max:100',
            'email'  => 'required|email|unique:akun_user,email,' . $user->username . ',username',
            'nohp'   => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'password' => 'nullable|min:6|confirmed',
        ]);

        // Update data profil
        $user->nama   = $request->nama;
        $user->email  = $request->email;
        $user->nohp   = $request->nohp;
        $user->alamat = $request->alamat;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save(); 

        return back()->with('success', 'Profil berhasil diperbarui');
    }
}
