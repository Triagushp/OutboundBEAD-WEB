<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Tampilkan daftar booking
    public function index()
    {
        $bookings = Booking::orderBy('tanggal', 'asc')->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    // Simpan tanggal baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kapasitas' => 'required|integer|min:1'
        ]);

        Booking::updateOrCreate(
            ['tanggal' => $request->tanggal],
            [
                'kapasitas' => $request->kapasitas,
                'status' => 'available',
                'jumlah_peserta' => 0
            ]
        );

        return redirect()->back()->with('success', 'Tanggal berhasil ditambahkan');
    }

    // Tandai tanggal penuh
    public function markFull($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'full';
        $booking->save();

        return redirect()->back()->with('success', 'Tanggal ditandai penuh');
    }

    // Hapus tanggal
    public function destroy($id)
    {
        Booking::destroy($id);
        return redirect()->back()->with('success', 'Tanggal dihapus');
    }
}
