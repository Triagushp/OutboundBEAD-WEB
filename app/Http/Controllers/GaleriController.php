<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // Public
    public function list()
    {
        $galeri = Galeri::latest()->get();
        return view('galeri.list', compact('galeri'));
    }

    // Admin
    public function index()
    {
        $galeri = Galeri::latest()->paginate(12);
        return view('admin.galeri.index', compact('galeri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $path = $request->file('gambar')->store('galeri', 'public');

        Galeri::create([
            'gambar' => $path,
            'keterangan' => $request->keterangan,
        ]);

        return back()->with('success', 'Gambar berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->gambar) {
            Storage::disk('public')->delete($galeri->gambar);
        }

        $galeri->delete();

        return back()->with('success', 'Gambar berhasil dihapus');
    }
}
