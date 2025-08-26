<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeAD-Besar Anugrah Djaya</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4fd1c7;
            --dark-color: #2c3e50;
            --light-gray: #f8f9fa;
            --darker-gray: #e9ecef;
        }
        
        .logo-img {
            max-height: 40px;
            width: auto;
            transition: all 0.3s ease;
        }
        
        .navbar-custom.scrolled .logo-img {
            max-height: 35px;
        }
        
        /* Untuk logo dengan background transparan */
        .logo-img.dark-logo {
            filter: brightness(1);
        }
        
        /* Untuk logo yang perlu disesuaikan di navbar transparan */
        .logo-img.light-logo {
            filter: brightness(0) invert(1);
        }
        
        .bg-darker {
            background-color: var(--darker-gray) !important;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Hero Section with Swiper */
        .hero-section {
            height: 70vh;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-swiper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        .hero-slide {
            position: relative;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .hero-slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6));
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        /* Swiper Navigation Buttons - Removed */
        
        /* Swiper Pagination */
        .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.5);
            width: 12px;
            height: 12px;
            margin: 0 8px;
        }
        
        .swiper-pagination-bullet-active {
            background: var(--primary-color);
            transform: scale(1.2);
        }
        
        .btn-primary-custom {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #333;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            background-color: #45c4ba;
            border-color: #45c4ba;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(79, 209, 199, 0.3);
        }
        
        .category-card {
            background: white;
            border-radius: 15px;
            padding: 30px 25px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .category-icon {
            width: 60px;
            height: 60px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 24px;
        }
        
        .package-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
            height: 100%;
        }
        
        .package-card:hover {
            transform: translateY(-5px);
        }
        
        .package-img {
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        
        .feature-card {
            text-align: center;
            padding: 40px 20px;
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 32px;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            height: 100%;
        }
        
        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 50px 0 30px;
        }
        
        .footer h5 {
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .footer a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer a:hover {
            color: var(--primary-color);
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            color: white;
        }
         .swiper-klien .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }

        .swiper-klien .swiper-slide img {
            max-height: 80px;
            object-fit: contain;
        }
        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .navbar-custom.scrolled {
            background-color: rgba(255, 255, 255, 0.98);
            padding: 8px 0;
        }
        
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: var(--dark-color) !important;
        }
        
        .navbar-nav .nav-link {
            font-weight: 500;
            color: var(--dark-color) !important;
            margin: 0 10px;
            position: relative;
            transition: color 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background-color: var(--primary-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .navbar-nav .nav-link:hover::after {
            width: 80%;
        }
        
        .navbar-toggler {
            border: none;
            padding: 4px 8px;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .btn-navbar {
            background-color: var(--primary-color);
            color: #333;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-navbar:hover {
            background-color: #45c4ba;
            color: #333;
            transform: translateY(-1px);
        }
        
        body {
            padding-top: 80px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
@include('layoutfrontend.navbar')

    <!-- Hero Section with Swiper -->
    <section id="home" class="hero-section">
        <!-- Swiper -->
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');"></div>
                <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1464822759844-d150baef493e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
                <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
                <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1571019613914-85f342c6a11e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Temukan Petualangan Outbound Sempurna Anda</h1>
                    <p class="lead mb-4">Jelajahi petualangan di seluruh dunia, dari puncak gunung hingga kedalaman laut, dan mulailah perjalanan Anda</p>
                    <button class="btn btn-primary-custom btn-lg">Get Started</button>
                </div>
            </div>
        </div>
    </section>

   <!-- Categories Section -->
    <section id="categories" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-3">Kategori Petualangan</h2>
                    <p class="text-muted">Pilih petualangan Anda dari berbagai kategori menarik yang kami sediakan</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Olahraga Air</h5>
                        <p class="text-muted">Petualangan air yang seru termasuk arung jeram dan berbagai olahraga air lainnya</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Pendakian Gunung</h5>
                        <p class="text-muted">Jalur pendakian gunung yang menantang dengan pengalaman hiking yang menakjubkan</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-swimmer"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Renang</h5>
                        <p class="text-muted">Petualangan berenang di kolam alami dan lokasi dengan pemandangan indah</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-bicycle"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Tur Sepeda</h5>
                        <p class="text-muted">Rute bersepeda dengan pemandangan indah melalui lanskap alam yang menawan</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-running"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Olahraga Petualangan</h5>
                        <p class="text-muted">Olahraga petualangan yang memacu adrenalin dan aktivitas ekstrim yang menantang</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-campground"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Team Building</h5>
                        <p class="text-muted">Aktivitas team building perusahaan dan petualangan kelompok yang membangun kerjasama</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Packages -->
    <section id="packages" class="py-5 bg-darker">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-3">Paket Unggulan</h2>
                    <p class="text-muted">Discover our most popular adventure packages</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="package-card">
                        <div class="package-img" style="background-image: url('https://images.unsplash.com/photo-1464822759844-d150ad6bfe89?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');"></div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-3">Paket Anak - Anak</h5>
                            <p class="text-muted mb-3">Experience thrilling white water rafting through scenic mountain rivers with professional guides.</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-muted">Duration: 2 Days</small><br>
                                    <small class="text-muted">Difficulty: Intermediate</small>
                                </div>
                                <div class="text-end">
                                    <h6 class="fw-bold text-primary mb-0">Rp.50.000</h6>
                                    <small class="text-muted">per orang</small>
                                </div>
                            </div>
                            <button class="btn btn-primary-custom w-100" data-bs-toggle="modal" data-bs-target="#kidsPackageModal">View Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="package-card">
                        <div class="package-img" style="background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');"></div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-3">Paket Dewasa</h5>
                            <p class="text-muted mb-3">Explore breathtaking alpine trails with stunning mountain views and pristine wilderness.</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-muted">Duration: 3 Days</small><br>
                                    <small class="text-muted">Difficulty: Advanced</small>
                                </div>
                                <div class="text-end">
                                    <h6 class="fw-bold text-primary mb-0">Rp.75.000</h6>
                                    <small class="text-muted">per orang</small>
                                </div>
                            </div>
                            <button class="btn btn-primary-custom w-100" data-bs-toggle="modal" data-bs-target="#adultPackageModal">View Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Paket Anak - Anak -->
   <!-- Kids Package Modal -->
    <div class="modal fade" id="kidsPackageModal" tabindex="-1" aria-labelledby="kidsPackageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="kidsPackageModalLabel">Paket Anak-Anak - Detail Lengkap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1464822759844-d150ad6bfe89?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="img-fluid rounded mb-3" alt="Paket Anak-Anak">
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold text-primary">Informasi Paket</h6>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-clock text-muted me-2"></i><strong>Durasi:</strong> 2 Hari 1 Malam</li>
                                <li><i class="fas fa-users text-muted me-2"></i><strong>Kapasitas:</strong> 15-30 Anak</li>
                                <li><i class="fas fa-child text-muted me-2"></i><strong>Usia:</strong> 7-12 Tahun</li>
                                <li><i class="fas fa-signal text-muted me-2"></i><strong>Tingkat Kesulitan:</strong> Mudah</li>
                                <li><i class="fas fa-map-marker-alt text-muted me-2"></i><strong>Lokasi:</strong> Sentul, Bogor</li>
                            </ul>
                            
                            <h6 class="fw-bold text-primary mt-4">Harga</h6>
                            <div class="alert alert-info">
                                <h4 class="fw-bold mb-1">Rp 50.000 <small class="text-muted fs-6">per anak</small></h4>
                                <small>Sudah termasuk makan, akomodasi, dan peralatan</small>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    
                    <h6 class="fw-bold text-primary">Aktivitas Yang Disediakan</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Games & Ice Breaking</li>
                                <li>Treasure Hunt</li>
                                <li>Mini Flying Fox</li>
                                <li>Team Building Games</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Art & Craft Workshop</li>
                                <li>Nature Walk</li>
                                <li>Swimming Pool</li>
                                <li>Campfire & Story Telling</li>
                            </ul>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-primary mt-4">Fasilitas Termasuk</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><i class="fas fa-check text-success me-2"></i>Transportasi AC</li>
                                <li><i class="fas fa-check text-success me-2"></i>Makan 3x & Snack 2x</li>
                                <li><i class="fas fa-check text-success me-2"></i>Akomodasi Cottage</li>
                                <li><i class="fas fa-check text-success me-2"></i>Peralatan Outbound</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><i class="fas fa-check text-success me-2"></i>Instruktur Bersertifikat</li>
                                <li><i class="fas fa-check text-success me-2"></i>P3K & Asuransi</li>
                                <li><i class="fas fa-check text-success me-2"></i>Sertifikat Keikutsertaan</li>
                                <li><i class="fas fa-check text-success me-2"></i>Dokumentasi Foto</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="alert alert-warning mt-3">
                        <h6 class="fw-bold mb-2"><i class="fas fa-exclamation-triangle me-2"></i>Yang Perlu Dibawa</h6>
                        <p class="mb-0">Pakaian ganti, perlengkapan mandi, obat-obatan pribadi, kamera, dan semangat petualangan!</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary-custom">
                        <i class="fas fa-whatsapp me-2"></i>Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Adult Package Modal -->
    <div class="modal fade" id="adultPackageModal" tabindex="-1" aria-labelledby="adultPackageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="adultPackageModalLabel">Paket Dewasa - Detail Lengkap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="img-fluid rounded mb-3" alt="Paket Dewasa">
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold text-primary">Informasi Paket</h6>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-clock text-muted me-2"></i><strong>Durasi:</strong> 3 Hari 2 Malam</li>
                                <li><i class="fas fa-users text-muted me-2"></i><strong>Kapasitas:</strong> 10-25 Orang</li>
                                <li><i class="fas fa-user text-muted me-2"></i><strong>Usia:</strong> 17+ Tahun</li>
                                <li><i class="fas fa-signal text-muted me-2"></i><strong>Tingkat Kesulitan:</strong> Menantang</li>
                                <li><i class="fas fa-map-marker-alt text-muted me-2"></i><strong>Lokasi:</strong> Gunung Salak, Bogor</li>
                            </ul>
                            
                            <h6 class="fw-bold text-primary mt-4">Harga</h6>
                            <div class="alert alert-info">
                                <h4 class="fw-bold mb-1">Rp 75.000 <small class="text-muted fs-6">per orang</small></h4>
                                <small>Sudah termasuk makan, akomodasi, dan peralatan</small>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    
                    <h6 class="fw-bold text-primary">Aktivitas Yang Disediakan</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Rock Climbing</li>
                                <li>Flying Fox 200m</li>
                                <li>River Tubing</li>
                                <li>High Rope Challenge</li>
                                <li>Survival Training</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Team Building Ekstrim</li>
                                <li>Night Hiking</li>
                                <li>Paintball Battle</li>
                                <li>Rafting Grade III</li>
                                <li>Leadership Challenge</li>
                            </ul>
                        </div>
                    </div>
                    
                    <h6 class="fw-bold text-primary mt-4">Fasilitas Termasuk</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><i class="fas fa-check text-success me-2"></i>Transportasi Offroad</li>
                                <li><i class="fas fa-check text-success me-2"></i>Makan 6x & Snack 4x</li>
                                <li><i class="fas fa-check text-success me-2"></i>Tenda Outdoor Premium</li>
                                <li><i class="fas fa-check text-success me-2"></i>Peralatan Safety Lengkap</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><i class="fas fa-check text-success me-2"></i>Guide Profesional</li>
                                <li><i class="fas fa-check text-success me-2"></i>Medical Support</li>
                                <li><i class="fas fa-check text-success me-2"></i>Sertifikat Achievement</li>
                                <li><i class="fas fa-check text-success me-2"></i>Video Dokumentasi</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="alert alert-danger mt-3">
                        <h6 class="fw-bold mb-2"><i class="fas fa-exclamation-triangle me-2"></i>Syarat & Ketentuan</h6>
                        <p class="mb-1">• Kondisi fisik sehat dan tidak memiliki penyakit jantung</p>
                        <p class="mb-1">• Wajib membawa surat keterangan sehat dari dokter</p>
                        <p class="mb-0">• Mengikuti briefing keselamatan sebelum aktivitas</p>
                    </div>
                    
                    <div class="alert alert-warning mt-3">
                        <h6 class="fw-bold mb-2"><i class="fas fa-backpack me-2"></i>Yang Perlu Dibawa</h6>
                        <p class="mb-0">Sepatu hiking, pakaian outdoor, jaket tebal, headlamp, sleeping bag pribadi, obat-obatan pribadi, dan mental petualang!</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary-custom">
                        <i class="fas fa-whatsapp me-2"></i>Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!-- Features Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-3">Kenapa Harus Kami</h2>
                    <p class="text-muted">Mengapa memilih kami untuk petualangan Anda</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Keamanan Utama</h5>
                        <p class="text-muted">Peralatan profesional dan pemandu bersertifikat memastikan keamanan Anda sepanjang petualangan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Pemandu Ahli</h5>
                        <p class="text-muted">Pemandu berpengalaman dan bersertifikat kami akan membuat petualangan Anda berkesan dan aman.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Dukungan 24/7</h5>
                        <p class="text-muted">Dukungan pelanggan sepanjang waktu untuk membantu Anda sebelum, selama, dan setelah petualangan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
   <section id="testimonials" class="py-5 bg-darker">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-3">Testimoni Pengguna</h2>
                    <p class="text-muted">Apa kata para petualang tentang layanan kami</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="testimonial-avatar me-3">BA</div>
                            <div>
                                <h6 class="mb-0 fw-bold">Bima Ardhana</h6>
                                <small class="text-muted">Pecinta Petualangan</small>
                            </div>
                        </div>
                        <p class="text-muted">"Pengalaman yang luar biasa! Tur pendakian gunung diorganisir dengan sempurna dan pemandunya sangat profesional. Sangat direkomendasikan untuk pencari petualangan!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="testimonial-avatar me-3">AD</div>
                            <div>
                                <h6 class="mb-0 fw-bold">Andi Dermawan</h6>
                                <small class="text-muted">Travel Blogger</small>
                            </div>
                        </div>
                        <p class="text-muted">"Petualangan arung jeramnya luar biasa! Sistem keamanannya sangat baik dan pemandangannya menakjubkan. Pasti akan booking lagi!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="testimonial-avatar me-3">SR</div>
                            <div>
                                <h6 class="mb-0 fw-bold">Sari Rahayu</h6>
                                <small class="text-muted">Manajer Perusahaan</small>
                            </div>
                        </div>
                        <p class="text-muted">"Sempurna untuk team building! Kelompok perusahaan kami sangat menikmati. Organisasinya bagus dan menciptakan kenangan yang fantastis!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section id="klien" class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
        <h2 style="color: #000000ff;">Klien Kami</h2>
        <p class="text-center text-muted mb-4">
        "Kepercayaan dari berbagai pihak adalah bukti komitmen kami dalam menyukseskan kegiatan outbound mereka."
        </p>

        <!-- Swiper -->
        <div class="swiper swiper-klien">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-flex justify-content-center">
            <div class="logo-card">
                <img src="assets/image/klien1.jpeg" alt="Klien 1" class="img-fluid">
            </div>
            </div>
            <div class="swiper-slide d-flex justify-content-center">
            <div class="logo-card">
                <img src="assets/image/klien2.jpeg" alt="Klien 2" class="img-fluid">
            </div>
            </div>
            <div class="swiper-slide d-flex justify-content-center">
            <div class="logo-card">
                <img src="assets/image/klien3.png" alt="Klien 3" class="img-fluid">
            </div>
            </div>
            <div class="swiper-slide d-flex justify-content-center">
            <div class="logo-card">
                <img src="assets/image/klien4.jpeg" alt="Klien 4" class="img-fluid">
            </div>
            </div>
            <div class="swiper-slide d-flex justify-content-center">
            <div class="logo-card">
                <img src="assets/image/klien5.png" alt="Klien 5" class="img-fluid">
            </div>
            </div>
            <div class="swiper-slide d-flex justify-content-center">
            <div class="logo-card">
                <img src="assets/image/klien6.png" alt="Klien 6" class="img-fluid">
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>


    {{-- footer --}}
    @include('layoutfrontend.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script>
        // Initialize Hero Swiper
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            speed: 1500,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // Resume autoplay after user interaction
            on: {
                slideChange: function () {
                    this.autoplay.start();
                }
            }
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

      <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
            <script>
            const swiper = new Swiper(".swiper-klien", {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                delay: 2000,
                disableOnInteraction: false,
                },
                breakpoints: {
                768: {
                    slidesPerView: 3,
                },
                576: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 1,
                }
                }
            });
            </script>

                    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
            <script>
            AOS.init({
                once: true, // hanya animasi sekali saat scroll
                duration: 1000 // durasi animasi dalam ms
            });
            </script>

            <!-- AOS Animation Library (Optional) -->
            <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
            <script>
            AOS.init();
            </script>
</body>
</html>