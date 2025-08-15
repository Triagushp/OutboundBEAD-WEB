<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTestimoniController extends Controller
{
    // Form kirim review
    public function create()
    {
        return view('testimonials.create');
    }

    // Simpan review
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required_without:user_id|string|max:255',
            'pesan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Testimoni::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama ?? Auth::user()->name,
            'package_id' => $request->package_id ?? null,
            'pesan' => $request->pesan,
            'rating' => $request->rating,
            'status' => 'pending', // butuh moderasi
        ]);

        return redirect()->back()->with('success', 'Review berhasil dikirim, menunggu persetujuan admin.');
    }
}
