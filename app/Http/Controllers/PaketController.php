<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mockery\Generator\StringManipulation\Pass\Pass;

class PaketController extends Controller
{
    public function index()
    {
        $packages = Paket::latest()->get();
        return view('admin.paket.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.paket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'durasi' => 'required|integer',
            'kategori' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('paket', 'public');
        }

        Paket::create($data);

        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function show($id)
    {
        $package = Paket::findOrFail($id);
        return view('admin.paket.show', compact('package'));
    }

    public function edit($id)
    {
        $package = Paket::findOrFail($id);
        return view('admin.paket.edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $package = Paket::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'durasi' => 'required|integer',
            'kategori' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'nullable|string'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($package->gambar) {
                Storage::disk('public')->delete($package->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('paket', 'public');
        }

        $package->update($data);

        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $package = Paket::findOrFail($id);

        if ($package->gambar) {
            Storage::disk('public')->delete($package->gambar);
        }

        $package->delete();

        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil dihapus.');
    }
}
