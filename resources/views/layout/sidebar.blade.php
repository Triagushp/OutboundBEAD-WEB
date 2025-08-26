@php
    use Illuminate\Support\Facades\Auth;
    $user = Auth::user();
@endphp

<ul class="menu-inner py-1">
  <!-- Dashboard -->
  <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
    <a href="/dashboard" class="menu-link">
      <i class="menu-icon tf-icons ti ti-smart-home"></i>
      <div>Dashboard</div>
    </a>
  </li>

  {{-- Hanya untuk ADMIN --}}
  @if($user && $user->status === 'Admin')
      <!-- Master Data -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Master Data</span>
      </li>

      <!-- Paket Outbound -->
      <li class="mb-2 menu-item {{ Request::is('dashboard/admin/paket*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-rocket"></i>
          <div>Paket Outbound</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ Request::is('dashboard/admin/paket/list*') ? 'active' : '' }}">
            <a href="/dashboard/admin/paket/list" class="menu-link">
              <div>Data Paket</div>
            </a>
          </li>
          <li class="menu-item {{ Request::is('dashboard/admin/paket/kategori*') ? 'active' : '' }}">
            <a href="/dashboard/admin/paket/kategori" class="menu-link">
              <div>Kategori Paket</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Reservasi -->
      <li class="mb-2 menu-item {{ Request::is('dashboard/admin/reservasi*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-calendar-event"></i>
          <div>Reservasi</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ Request::is('dashboard/admin/reservasi/pending*') ? 'active' : '' }}">
            <a href="/dashboard/admin/reservasi/pending" class="menu-link">
              <div>Reservasi Pending</div>
            </a>
          </li>
          <li class="menu-item {{ Request::is('dashboard/admin/reservasi/selesai*') ? 'active' : '' }}">
            <a href="/dashboard/admin/reservasi/selesai" class="menu-link">
              <div>Reservasi Selesai</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Data Pelanggan -->
      <li class="mb-2 menu-item {{ Request::is('dashboard/admin/pelanggan*') ? 'active' : '' }}">
        <a href="/dashboard/admin/pelanggan" class="menu-link">
          <i class="menu-icon tf-icons ti ti-users"></i>
          <div>Data Pelanggan</div>
        </a>
      </li>

      <!-- Pembayaran
      <li class="mb-2 menu-item {{ Request::is('dashboard/admin/pembayaran*') ? 'active' : '' }}">
        <a href="/dashboard/admin/pembayaran" class="menu-link">
          <i class="menu-icon tf-icons ti ti-credit-card"></i>
          <div>Pembayaran</div>
        </a>
      </li> -->

      <!-- Laporan -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Laporan</span>
      </li>
      <li class="menu-item {{ Request::is('dashboard/admin/laporan*') ? 'active' : '' }}">
        <a href="/dashboard/admin/laporan" class="menu-link">
          <i class="menu-icon tf-icons ti ti-file-description"></i>
          <div>Laporan</div>
        </a>
      </li>
  @endif

  {{-- Hanya untuk USER BIASA --}}
  @if($user && $user->status === 'User')
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Menu User</span>
      </li>
      <li class="menu-item {{ Request::is('dashboard/user/reservasi*') ? 'active' : '' }}">
        <a href="/dashboard/user/reservasi" class="menu-link">
          <i class="menu-icon tf-icons ti ti-calendar"></i>
          <div>Reservasi Saya</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('dashboard/user/profile*') ? 'active' : '' }}">
        <a href="/dashboard/user/profile" class="menu-link">
          <i class="menu-icon tf-icons ti ti-user"></i>
          <div>Profil Saya</div>
        </a>
      </li>
  @endif
</ul>
