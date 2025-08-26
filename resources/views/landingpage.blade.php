<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Perfect Outbound Adventure</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4fd1c7;
            --dark-color: #2c3e50;
            --light-gray: #f8f9fa;
            --darker-gray: #e9ecef;
        }
        
        .logo-img { max-height: 40px; width: auto; transition: all 0.3s ease; }
        .navbar-custom.scrolled .logo-img { max-height: 35px; }
        .logo-img.dark-logo { filter: brightness(1); }
        .logo-img.light-logo { filter: brightness(0) invert(1); }
        .bg-darker { background-color: var(--darker-gray) !important; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding-top: 80px; }

        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover; background-position: center; height: 70vh;
            display: flex; align-items: center; color: white; text-align: center;
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #333; font-weight: 600;
            padding: 12px 30px; border-radius: 25px;
            transition: all 0.3s ease;
        }
        .btn-primary-custom:hover {
            background-color: #45c4ba; border-color: #45c4ba;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(79, 209, 199, 0.3);
        }

        .category-card {
            background: white; border-radius: 15px;
            padding: 30px 25px; text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        .category-card:hover { transform: translateY(-10px); box-shadow: 0 15px 40px rgba(0,0,0,0.15); }
        .category-icon {
            width: 60px; height: 60px; background-color: var(--primary-color);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            margin: 0 auto 20px; color: white; font-size: 24px;
        }

        .package-card {
            background: white; border-radius: 15px; overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease; height: 100%;
        }
        .package-card:hover { transform: translateY(-5px); }
        .package-img { height: 200px; background-size: cover; background-position: center; }

        .feature-card { text-align: center; padding: 40px 20px; }
        .feature-icon {
            width: 80px; height: 80px; background-color: var(--primary-color);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            margin: 0 auto 20px; color: white; font-size: 32px;
        }

        .testimonial-card {
            background: white; border-radius: 15px; padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08); height: 100%;
        }
        .testimonial-avatar {
            width: 50px; height: 50px; border-radius: 50%;
            background: var(--primary-color); display: flex;
            align-items: center; justify-content: center;
            color: white; font-weight: bold;
        }

        .footer { background-color: var(--dark-color); color: white; padding: 50px 0 30px; }
        .footer h5 { color: var(--primary-color); margin-bottom: 20px; }
        .footer a { color: #bbb; text-decoration: none; transition: color 0.3s ease; }
        .footer a:hover { color: var(--primary-color); }
        .social-links a {
            display: inline-block; width: 40px; height: 40px;
            background-color: var(--primary-color);
            border-radius: 50%; text-align: center; line-height: 40px;
            margin-right: 10px; color: white;
        }

        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .navbar-custom.scrolled { background-color: rgba(255, 255, 255, 0.98); padding: 8px 0; }
        .navbar-brand { font-weight: bold; font-size: 1.5rem; color: var(--dark-color) !important; }
        .navbar-nav .nav-link {
            font-weight: 500; color: var(--dark-color) !important; margin: 0 10px;
            position: relative; transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover { color: var(--primary-color) !important; }
        .navbar-nav .nav-link::after {
            content: ''; position: absolute; width: 0; height: 2px; bottom: -5px;
            left: 50%; background-color: var(--primary-color);
            transition: all 0.3s ease; transform: translateX(-50%);
        }
        .navbar-nav .nav-link:hover::after { width: 80%; }

        .navbar-toggler { border: none; padding: 4px 8px; }
        .navbar-toggler:focus { box-shadow: none; }

        .btn-navbar {
            background-color: var(--primary-color);
            color: #333; border: none; padding: 8px 20px;
            border-radius: 20px; font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-navbar:hover { background-color: #45c4ba; color: #333; transform: translateY(-1px); }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="path/to/your/logo.png" alt="OutboundLink Logo" height="40" class="d-inline-block logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#categories">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="#packages">Packages</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <a href="/dashboard" class="btn btn-success me-2">Dashboard</a>
                    <button class="btn btn-navbar me-2">Login</button>
                    <button class="btn btn-primary-custom">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
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
                    <p class="text-muted">Choose your adventure from our exciting categories</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Water Sports</h5>
                        <p class="text-muted">Exciting water adventures including rafting and water sports</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Mountain Hiking</h5>
                        <p class="text-muted">Challenging mountain trails and scenic hiking experiences</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-swimmer"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Swimming</h5>
                        <p class="text-muted">Swimming adventures in natural pools and scenic locations</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-bicycle"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Cycling Tours</h5>
                        <p class="text-muted">Scenic cycling routes through beautiful landscapes</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-running"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Adventure Sports</h5>
                        <p class="text-muted">Adrenaline-pumping adventure sports and extreme activities</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-campground"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Team Building</h5>
                        <p class="text-muted">Corporate team building activities and group adventures</p>
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
                            <h5 class="fw-bold mb-3">Mountain River Rafting</h5>
                            <p class="text-muted mb-3">Experience thrilling white water rafting through scenic mountain rivers with professional guides.</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-muted">Duration: 2 Days</small><br>
                                    <small class="text-muted">Difficulty: Intermediate</small>
                                </div>
                                <div class="text-end">
                                    <h6 class="fw-bold text-primary mb-0">$299</h6>
                                    <small class="text-muted">per person</small>
                                </div>
                            </div>
                            <button class="btn btn-primary-custom w-100">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="package-card">
                        <div class="package-img" style="background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');"></div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-3">Alpine HIKING</h5>
                            <p class="text-muted mb-3">Explore breathtaking alpine trails with stunning mountain views and pristine wilderness.</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-muted">Duration: 3 Days</small><br>
                                    <small class="text-muted">Difficulty: Advanced</small>
                                </div>
                                <div class="text-end">
                                    <h6 class="fw-bold text-primary mb-0">$449</h6>
                                    <small class="text-muted">per person</small>
                                </div>
                            </div>
                            <button class="btn btn-primary-custom w-100">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-3">Kenapa Harus Kami</h2>
                    <p class="text-muted">Why choose us for your adventure</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Safety First</h5>
                        <p class="text-muted">Professional equipment and certified guides ensure your safety throughout the adventure.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Expert Guides</h5>
                        <p class="text-muted">Our experienced and certified guides will make your adventure memorable and safe.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5 class="fw-bold mb-3">24/7 Support</h5>
                        <p class="text-muted">Round-the-clock customer support to assist you before, during, and after your adventure.</p>
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
                    <p class="text-muted">What our adventurers say about us</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="testimonial-avatar me-3">BA</div>
                            <div>
                                <h6 class="mb-0 fw-bold">Bima Ardhana</h6>
                                <small class="text-muted">Adventure Enthusiast</small>
                            </div>
                        </div>
                        <p class="text-muted">"Amazing experience! The mountain hiking tour was perfectly organized with professional guides. Highly recommend for adventure seekers!"</p>
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
                            <div class="testimonial-avatar me-3">JD</div>
                            <div>
                                <h6 class="mb-0 fw-bold">John Doe</h6>
                                <small class="text-muted">Travel Blogger</small>
                            </div>
                        </div>
                        <p class="text-muted">"The river rafting adventure was incredible! Safety measures were top-notch and the scenery was breathtaking. Will definitely book again!"</p>
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
                                <h6 class="mb-0 fw-bold">Sarah Rita</h6>
                                <small class="text-muted">Corporate Manager</small>
                            </div>
                        </div>
                        <p class="text-muted">"Perfect for team building! Our corporate group had an amazing time. Great organization and fantastic memories created!"</p>
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

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>OutboundLink</h5>
                    <p class="text-muted">Professional outbound and adventure services with certified guides and top-notch safety standards.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">About Us</a></li>
                        <li class="mb-2"><a href="#">Our Services</a></li>
                        <li class="mb-2"><a href="#">Packages</a></li>
                        <li class="mb-2"><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Categories</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Mountain Hiking</a></li>
                        <li class="mb-2"><a href="#">Water Sports</a></li>
                        <li class="mb-2"><a href="#">Team Building</a></li>
                        <li class="mb-2"><a href="#">Adventure Sports</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact Info</h5>
                    <p class="text-muted mb-2"><i class="fas fa-map-marker-alt me-2"></i>123 Adventure Street, Jakarta, Indonesia</p>
                    <p class="text-muted mb-2"><i class="fas fa-phone me-2"></i>+62 123 456 7890</p>
                    <p class="text-muted mb-2"><i class="fas fa-envelope me-2"></i>info@outboundlink.com</p>
                </div>
            </div>
            <hr class="my-4" style="border-color: #495057;">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-muted mb-0">&copy; 2025 OutboundLink. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
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
</body>
</html>