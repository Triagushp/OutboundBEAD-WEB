<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pembelian;
use App\Models\Firebase;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Kalau belum login, kembalikan ke halaman login
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Cek role / status user
        if ($user->role === 'admin' || $user->status === 'Admin') {
            // Statistik hanya untuk admin
            $jmlh_akun = User::count();
            $jmlh_pembelian = Pembelian::count();
            $jmlh_firebase = Firebase::count();

            return view('admin.dashboard', compact(
                'jmlh_akun',
                'jmlh_pembelian',
                'jmlh_firebase'
            ));
        }

        // Dashboard untuk user biasa
        return view('dashboard.user', compact('user'));
    }
}
