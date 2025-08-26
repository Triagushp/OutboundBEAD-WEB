<link rel="stylesheet" href="{{ asset('assetsadmin/vendor/libs/sweetalert2/sweetalert2.css') }}" />
<script src="{{ asset('assetsadmin/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assetsadmin/vendor/libs/animate-css/animate.css') }}" />

<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  <!-- Menu Toggle (Mobile) -->
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="ti ti-menu-2 ti-sm"></i>
    </a>
  </div>

  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

    <!-- Tanggal & Waktu -->
    <div class="navbar-nav align-items-center">
      <div class="nav-item navbar-search-wrapper mb-0">
        <h5 class="mt-3"><span id="tanggalwaktu"></span></h5>
        <script>
          const tw = new Date();
          if (tw.getTimezoneOffset() == 0) a = tw.getTime() + (7 * 60 * 60 * 1000);
          else a = tw.getTime();
          tw.setTime(a);

          const hariarray = ["Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,"];
          const bulanarray = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember"];

          document.getElementById("tanggalwaktu").innerHTML =
            hariarray[tw.getDay()] + " " + tw.getDate() + " " + bulanarray[tw.getMonth()] + " " + tw.getFullYear() +
            " : " + (tw.getHours() < 10 ? "0" : "") + tw.getHours() +
            ":" + (tw.getMinutes() < 10 ? "0" : "") + tw.getMinutes() + " WIB";
        </script>
      </div>
    </div>
    <!-- /Tanggal & Waktu -->

    <ul class="navbar-nav flex-row align-items-center ms-auto">

      <!-- Style Switcher -->
      <li class="nav-item me-2 me-xl-0">
        <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
          <i class="ti ti-md"></i>
        </a>
      </li>
      <!-- /Style Switcher -->

      <!-- User Menu -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <img src="{{ session('gambar') }}" alt="User Avatar" class="h-auto rounded-circle" />
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="#">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online">
                    <img src="{{ session('gambar') }}" alt="User Avatar" class="h-auto rounded-circle" />
                  </div>
                </div>
                <div class="flex-grow-1">
                  <span class="fw-semibold d-block">{{ session('nama') }}</span>
                  <small class="text-muted">{{ session('status') }}</small>
                </div>
              </div>
            </a>
          </li>

          <li><div class="dropdown-divider"></div></li>

          <li>
            <a class="dropdown-item" href="/dashboard/admin/detail/{{ session('username') }}">
              <i class="ti ti-user-check me-2 ti-sm"></i>
              <span class="align-middle">My Profile</span>
            </a>
          </li>

          <li>
            <button class="dropdown-item" onclick="showAlerte()">
              <i class="ti ti-settings me-2 ti-sm"></i>
              <span class="align-middle">Settings</span>
            </button>
          </li>

          <li><div class="dropdown-divider"></div></li>

          <li>
            <button class="dropdown-item" onclick="showAlerte()">
              <i class="ti ti-lifebuoy me-2 ti-sm"></i>
              <span class="align-middle">Help</span>
            </button>
          </li>
          <li>
            <button class="dropdown-item" onclick="showAlerte()">
              <i class="ti ti-help me-2 ti-sm"></i>
              <span class="align-middle">FAQ</span>
            </button>
          </li>

          <li><div class="dropdown-divider"></div></li>

          <li>
            <a class="dropdown-item" href="javascript:void(0);" onclick="confirmLogout()">
              <i class="ti ti-logout me-2 ti-sm"></i>
              <span class="align-middle">Log Out</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- /User Menu -->

    </ul>
  </div>

  <!-- Search (Small Screens) -->
  <div class="navbar-search-wrapper search-input-wrapper d-none">
    <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search..." />
    <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
  </div>
</nav>
<!-- /Navbar -->

<!-- Script Logout -->
<script>
  function confirmLogout() {
    Swal.fire({
      title: 'Apakah Anda yakin ingin keluar?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Ya, Logout!',
      cancelButtonText: 'Batal',
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      showClass: { popup: 'animate__animated animate__tada' },
      customClass: {
        confirmButton: 'btn btn-primary me-3',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "/akses/logout";
      }
    });
  }

  function showAlerte() {
    Swal.fire({
      title: 'Fitur Segera Hadir!',
      text: 'Bersabar yah...',
      icon: 'info',
      showConfirmButton: false,
      timer: 2500
    });
  }
</script>

<style>
  .dropdown-item {
    cursor: pointer;
  }
</style>
