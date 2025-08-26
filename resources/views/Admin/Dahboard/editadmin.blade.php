@extends('layout.body')
@section('konten')

<div class="row">
    <div class="col-md-12">
        <!-- Tab Navigasi -->
        <ul class="nav nav-pills flex-column flex-md-row mb-4">
            <li class="nav-item">
                <a class="nav-link active" href="/edit/admin/{{ $mainn->user }}">
                    <i class="ti ti-user-edit me-1"></i> Edit Akun
                </a>
            </li>
            <li class="nav-item">
                <button class="nav-link" onclick="showAlerte()">
                    <i class="ti ti-lock me-1"></i> Edit Password
                </button>
            </li>
        </ul>

        <!-- Form Edit Akun -->
        <div class="card shadow-sm">
            <h3 class="card-header bg-primary text-white">Edit Akun Admin</h3>
            <div class="card-body">
                <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Foto Profil -->
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <img src="{{ $mainn->gambar }}" alt="Avatar"
                             class="rounded-circle" width="100" height="100" id="uploadedAvatar">
                        <div>
                            <label class="btn btn-primary me-2 mb-2">
                                <i class="ti ti-upload"></i> Upload Foto
                                <input type="file" name="upload" id="upload" hidden accept="image/png,image/jpeg">
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-2">
                                <i class="ti ti-refresh"></i> Reset
                            </button>
                            <p class="text-muted small">JPG, PNG max 5MB</p>
                        </div>
                    </div>

                    <!-- Data Form -->
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" value="{{ $mainn->user }}" readonly>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" id="inputHuruf" oninput="validateInput(this)"
                                   name="nama" value="{{ $mainn->nama }}" class="form-control" required>
                            <small id="error-message" class="text-danger"></small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ $mainn->email }}" class="form-control" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label>No HP</label>
                            <div class="input-group">
                                <span class="input-group-text">+62</span>
                                <input type="number" name="nohp" value="{{ $mainn->nohp }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label>Lokasi</label>
                            <input type="text" name="lokasi" value="{{ $mainn->lokasi }}" class="form-control" required>
                        </div>
                    </div>

                    <!-- Tombol -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        <a href="/detail/admin/{{ $mainn->user }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Script SweetAlert & AJAX -->
<script src="{{ asset('assetsadmin/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function showAlerte() {
    Swal.fire({
        title: 'Fitur Segera Hadir!',
        text: 'Bersabar yah...',
        icon: 'info',
        timer: 2000,
        showConfirmButton: false
    });
}

$('#editForm').on('submit', function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Yakin ingin menyimpan perubahan?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('simpan.admin', ['user' => $mainn->user]) }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: res.message,
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = "/detail/admin/{{ $mainn->user }}";
                    });
                },
                error: function(err) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Terjadi kesalahan'
                    });
                }
            });
        }
    });
});

function validateInput(input) {
    const invalidChars = /[@0-9!#^&*]/g;
    if (invalidChars.test(input.value)) {
        $('#error-message').text('Nama tidak boleh mengandung angka/simbol.');
        input.value = input.value.replace(invalidChars, '');
    } else {
        $('#error-message').text('');
    }
}

// Preview foto
$('#upload').on('change', function() {
    if (this.files[0]) {
        $('#uploadedAvatar').attr('src', URL.createObjectURL(this.files[0]));
    }
});
$('.account-image-reset').on('click', function() {
    $('#upload').val('');
    $('#uploadedAvatar').attr('src', '{{ $mainn->gambar }}');
});
</script>
@endsection
