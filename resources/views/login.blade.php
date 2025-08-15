<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back - Outbound Activity Marketplace</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #00bcd4;
            --primary-hover: #00acc1;
            --dark-overlay: rgba(0, 0, 0, 0.6);
            --light-gray: #f8f9fa;
            --text-muted: #6c757d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body, html {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
        }
        
        .login-container {
            height: 100vh;
            display: flex;
        }
        
        .left-section {
            flex: 1;
            background: linear-gradient(var(--dark-overlay), var(--dark-overlay)), 
                        url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 60px;
            color: white;
            position: relative;
        }
        
        .left-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 188, 212, 0.1) 0%, rgba(0, 0, 0, 0.7) 100%);
        }
        
        .left-content {
            position: relative;
            z-index: 2;
        }
        
        .left-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .left-section p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
        }
        
        .right-section {
            flex: 1;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }
        
        .login-form-container {
            width: 100%;
            max-width: 400px;
        }
        
        .login-form {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-header h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }
        
        .login-header p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.1);
            background-color: white;
        }
        
        .form-control::placeholder {
            color: #adb5bd;
        }
        
        .forgot-password {
            text-align: right;
            margin-bottom: 25px;
        }
        
        .forgot-password a {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .forgot-password a:hover {
            text-decoration: underline;
        }
        
        .btn-login {
            width: 100%;
            background-color: var(--primary-color);
            border: none;
            border-radius: 10px;
            padding: 14px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }
        
        .btn-login:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 188, 212, 0.3);
        }
        
        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
            color: var(--text-muted);
            font-size: 0.9rem;
        }
        
        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background-color: #e9ecef;
        }
        
        .divider span {
            background: white;
            padding: 0 15px;
        }
        
        .social-login {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .btn-social {
            flex: 1;
            padding: 12px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            background: white;
            color: #333;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-social:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-social i {
            font-size: 1.2rem;
        }
        
        .signup-link {
            text-align: center;
            color: var(--text-muted);
            font-size: 0.95rem;
        }
        
        .signup-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            body, html {
                overflow: auto;
            }
            
            .login-container {
                flex-direction: column;
                height: auto;
                min-height: 100vh;
            }
            
            .left-section {
                min-height: 300px;
                padding: 40px 30px;
                text-align: center;
                align-items: center;
            }
            
            .left-section h1 {
                font-size: 2rem;
            }
            
            .right-section {
                padding: 30px 20px;
            }
            
            .login-form {
                padding: 30px 25px;
                box-shadow: none;
                border-radius: 0;
            }
        }
        
        @media (max-width: 480px) {
            .left-section {
                min-height: 250px;
                padding: 30px 20px;
            }
            
            .left-section h1 {
                font-size: 1.7rem;
            }
            
            .login-form {
                padding: 25px 20px;
            }
            
            .social-login {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Left Section -->
        <div class="left-section">
            <div class="left-content">
                <h1>BeAD Outbound</h1>
                <p>Tantangan seru untuk pengalaman tak terlupakan.</p>
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="right-section">
            <div class="login-form-container">
                <div class="login-form">
                    <!-- Login Header -->
                    <div class="login-header">
                        <h2>Welcome Back</h2>
                        <p>Log in to your account</p>
                    </div>
                    
                    <!-- Login Form -->
                    <form>
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        
                        <div class="forgot-password">
                            <a href="#forgot">Forgot Password?</a>
                        </div>
                        
                        <button type="submit" class="btn btn-login">Login</button>
                    </form>
                    
                    <!-- Divider -->
                    <div class="divider">
                        <span>OR</span>
                    </div>
                    
                    <!-- Social Login -->
                    <div class="social-login">
                        <a href="#" class="btn-social">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="btn-social">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    
                    <!-- Sign Up Link -->
                    <div class="signup-link">
                        Don't have an account? <a href="#signup">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form validation and interactions
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.querySelector('input[type="email"]').value;
            const password = document.querySelector('input[type="password"]').value;
            
            if (email && password) {
                // Simulate login process
                const btn = document.querySelector('.btn-login');
                btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Logging in...';
                btn.disabled = true;
                
                setTimeout(() => {
                    alert('Login successful! (This is a demo)');
                    btn.innerHTML = 'Login';
                    btn.disabled = false;
                }, 2000);
            }
        });
        
        // Social login handlers
        document.querySelectorAll('.btn-social').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const platform = this.querySelector('i').classList.contains('fa-google') ? 'Google' : 'Facebook';
                alert(`${platform} login clicked! (This is a demo)`);
            });
        });
        
        // Input focus effects
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
</body>
</html>