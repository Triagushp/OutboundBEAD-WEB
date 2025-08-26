
@include('layoutfrontend.cssnavfoter')

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!-- Ganti URL di bawah ini dengan URL logo Anda -->
            <img src="assets/image/logo.png" alt="OutboundLink Logo" height="40" class="d-inline-block logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
<li class="nav-item">
    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
</li>
                <li class="nav-item">
                    <a class="nav-link" href="#categories">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
<li class="nav-item">
    <a class="nav-link {{ request()->is('galeri') ? 'active' : '' }}" href="/galeri">Galeri</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->is('paket') ? 'active' : '' }}" href="/paket">Paket</a>
</li>
            </ul>
           <div class="d-flex">
            <button class="btn btn-navbar me-2" onclick="window.location.href='login'">Login</button>
            <button class="btn btn-primary-custom" onclick="window.location.href='register'">Sign Up</button>
        </div>
        </div>
    </div>
</nav>