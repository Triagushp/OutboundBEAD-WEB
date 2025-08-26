@extends('layout.body')

@section('konten')
<div class="container-fluid">
    <h1 class="mb-4">Manajemen Paket</h1>
    <a href="{{ route('admin.paket.create') }}" class="btn btn-primary mb-3">+ Tambah Paket</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Paket</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pakets as $paket)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $paket->nama_paket }}</td>
                        <td>Rp {{ number_format($paket->harga, 0, ',', '.') }}</td>
                        <td>
                            @if($paket->gambar)
                                <img src="{{ asset('storage/'.$paket->gambar) }}" width="80" class="rounded">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.paket.edit', $paket) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.paket.destroy', $paket) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus paket ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pakets->links() }}
        </div>
    </div>
</div>
@endsection