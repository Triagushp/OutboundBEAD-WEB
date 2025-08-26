    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
        
        .navbar-nav .nav-link.active {
    color: var(--primary-color) !important;
}

.navbar-nav .nav-link.active::after {
    width: 80%;
}

</style>