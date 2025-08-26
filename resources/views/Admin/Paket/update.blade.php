@extends('layout.body')

@section('konten')
<div class="container-fluid">
    <h1 class="mb-4">Edit Paket</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.paket.update', $paket) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nama Paket</label>
                    <input type="text" name="nama_paket" value="{{ $paket->nama_paket }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required>{{ $paket->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" value="{{ $paket->harga }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Gambar</label><br>
                    @if($paket->gambar)
                        <img src="{{ asset('storage/'.$paket->gambar) }}" width="100" class="mb-2 rounded">
                    @endif
                    <input type="file" name="gambar" class="form-control">
                </div>
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('admin.paket.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection