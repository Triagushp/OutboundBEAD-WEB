@extends('layout.body')
@section('konten')

<link rel="stylesheet" href="{{ asset('assetsadmin/vendor/css/pages/page-profile.css') }}" />

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm mb-4">
            <!-- Banner -->
            <div class="user-profile-header-banner">
                <img src="{{ $main->gambar }}" alt="Banner image" class="rounded-top" style="object-fit: cover; height: 200px; width: 100%;" />
            </div>

            <!-- Profil -->
            <div class="user-profile-header d-flex flex-column flex-sm-row align-items-center p-4">
                <div class="flex-shrink-0">
                    <img src="{{ $main->gambar }}" alt="User image" class="rounded-circle border border-3" style="width: 120px; height: 120px; object-fit: cover;" />
                </div>
                <div class="flex-grow-1 ms-sm-4 text-center text-sm-start mt-3 mt-sm-0">
                    <h4 class="fw-bold mb-1">{{ $main->nama }}</h4>
                    <ul class="list-inline mb-2 text-muted small">
                        <li class="list-inline-item"><i class="ti ti-color-swatch"></i> Level: {{ $main->status }}</li>
                        <li class="list-inline-item"><i class="ti ti-map-pin"></i> {{ $main->alamat }}</li>
                        <li class="list-inline-item"><i class="ti ti-calendar"></i> Joined {{ $main->tanggal_create }}</li>
                    </ul>
                    <a href="javascript:void(0);" onclick="showErrorAlert()" class="btn btn-primary btn-sm">
                        <i class="ti ti-user-check me-1"></i> Setting Akun
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Akun -->
<div class="card shadow-sm">
    <h5 class="card-header bg-light fw-bold">Detail Admin</h5>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Username</label>
                <input type="text" value="{{ $main->username }}" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">E-mail</label>
                <input type="email" value="{{ $main->email }}" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">No HP</label>
                <div class="input-group">
                    <span class="input-group-text">+62</span>
                    <input type="number" value="{{ $main->nohp }}" class="form-control" readonly>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 -->
<script src="{{ asset('assetsadmin/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<script>
function showErrorAlert() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Maaf, fitur ini sedang dalam perbaikan!',
        confirmButtonText: 'OK',
        customClass: { confirmButton: 'btn btn-primary' }
    });
}
</script>

@endsection
