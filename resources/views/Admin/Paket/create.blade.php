@extends('layout.body')

@section('konten')
<div class="container-fluid">
    <h1 class="mb-4">Tambah Paket</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.paket.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Nama Paket</label>
                    <input type="text" name="nama_paket" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <button class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.paket.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
