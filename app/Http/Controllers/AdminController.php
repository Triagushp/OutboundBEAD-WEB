<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunUser;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Halaman dashboard admin
    public function index()
    {
        $totalUser = AkunUser::where('status', 'User')->count();
        $totalAdmin = AkunUser::where('status', 'Admin')->count();
        $pendingUser = AkunUser::where('status_akun', 'pending')->count();

        return view('Admin.dashboard', compact('totalUser', 'totalAdmin', 'pendingUser'));
    }

    // Daftar semua user
    public function users()
    {
        $users = AkunUser::all();
        return view('Admin.users.index', compact('users'));
    }

    // Detail user tertentu
    public function showUser($id)
    {
        $user = AkunUser::findOrFail($id);
        return view('Admin.users.show', compact('user'));
    }

    // Setujui user baru
    public function approveUser($id)
    {
        $user = AkunUser::findOrFail($id);
        $user->status_akun = 'aktif';
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User berhasil disetujui.');
    }

    // Nonaktifkan user
    public function deactivateUser($id)
    {
        $user = AkunUser::findOrFail($id);
        $user->status_akun = 'nonaktif';
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User berhasil dinonaktifkan.');
    }

    // Hapus user
    public function destroyUser($id)
    {
        $user = AkunUser::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User berhasil dihapus.');
    }
}
