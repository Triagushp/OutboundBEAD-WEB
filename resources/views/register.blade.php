<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Account - Adventure Awaits</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #00bcd4;
            --primary-hover: #00acc1;
            --dark-overlay: rgba(0, 0, 0, 0.6);
            --light-gray: #f8f9fa;
            --text-muted: #6c757d;
            --google-color: #db4437;
            --facebook-color: #4267B2;
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
        
        .signup-container {
            height: 100vh;
            display: flex;
        }
        
        .left-section {
            flex: 1;
            background: linear-gradient(var(--dark-overlay), var(--dark-overlay)), 
                        url('https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');
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
            background: linear-gradient(135deg, rgba(0, 188, 212, 0.2) 0%, rgba(0, 0, 0, 0.6) 100%);
        }
        
        .left-content {
            position: relative;
            z-index: 2;
        }
        
        .left-section h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .left-section p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        
        .user-avatars {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .avatar-group {
            display: flex;
            margin-right: 15px;
        }
        
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 3px solid white;
            margin-left: -10px;
            background-size: cover;
            background-position: center;
        }
        
        .avatar:first-child {
            margin-left: 0;
        }
        
        .avatar-1 { background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face'); }
        .avatar-2 { background-image: url('https://images.unsplash.com/photo-1494790108755-2616b52c6d15?w=100&h=100&fit=crop&crop=face'); }
        .avatar-3 { background-image: url('https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face'); }
        
        .join-text {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        .right-section {
            flex: 1;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            overflow-y: auto;
        }
        
        .signup-form-container {
            width: 100%;
            max-width: 420px;
        }
        
        .signup-form {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }
        
        .signup-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .signup-header h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }
        
        .signup-header p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }
        
        .social-signup {
            margin-bottom: 25px;
        }
        
        .btn-social-signup {
            width: 100%;
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
            margin-bottom: 10px;
        }
        
        .btn-social-signup.google:hover {
            border-color: var(--google-color);
            color: var(--google-color);
        }
        
        .btn-social-signup.facebook:hover {
            border-color: var(--facebook-color);
            color: var(--facebook-color);
        }
        
        .btn-social-signup:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }
        
        .btn-social-signup i {
            margin-right: 10px;
            font-size: 1.1rem;
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
        
        .password-field {
            position: relative;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
        }
        
        .terms-checkbox {
            margin-bottom: 25px;
        }
        
        .form-check-input {
            border-radius: 4px;
            border: 2px solid #e9ecef;
        }
        
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .form-check-label {
            font-size: 0.9rem;
            color: var(--text-muted);
        }
        
        .form-check-label a {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .form-check-label a:hover {
            text-decoration: underline;
        }
        
        .btn-signup {
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
        
        .btn-signup:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 188, 212, 0.3);
        }
        
        .login-link {
            text-align: center;
            color: var(--text-muted);
            font-size: 0.95rem;
        }
        
        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            body, html {
                overflow: auto;
            }
            
            .signup-container {
                flex-direction: column;
                height: auto;
                min-height: 100vh;
            }
            
            .left-section {
                min-height: 350px;
                padding: 40px 30px;
                text-align: center;
                align-items: center;
            }
            
            .left-section h1 {
                font-size: 2.2rem;
            }
            
            .right-section {
                padding: 30px 20px;
            }
            
            .signup-form {
                padding: 30px 25px;
                box-shadow: none;
                border-radius: 0;
            }
        }
        
        @media (max-width: 480px) {
            .left-section {
                min-height: 300px;
                padding: 30px 20px;
            }
            
            .left-section h1 {
                font-size: 1.8rem;
            }
            
            .signup-form {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <!-- Left Section -->
        <div class="left-section">
            <div class="left-content">
                <h1>Adventure Awaits</h1>
                <p>Discover amazing outdoor activities and connect with fellow adventurers in our growing community</p>
                <div class="user-avatars">
                    
                    
                </div>
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="right-section">
            <div class="signup-form-container">
                <div class="signup-form">
                    <!-- Signup Header -->
                    <div class="signup-header">
                        <h2>Create Your Account</h2>
                        <p>Let's get started with exploring adventures</p>
                    </div>
                    
                    <!-- Social Signup -->
                    <div class="social-signup">
                        <a href="#" class="btn-social-signup google">
                            <i class="fab fa-google"></i>
                            Continue with Google
                        </a>
                        <a href="#" class="btn-social-signup facebook">
                            <i class="fab fa-facebook-f"></i>
                            Continue with Facebook
                        </a>
                    </div>
                    
                    <!-- Divider -->
                    <div class="divider">
                        <span>OR</span>
                    </div>
                    
                    <!-- Signup Form -->
                    <form id="signupForm">
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <div class="password-field">
                                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                                <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                    <i class="fas fa-eye" id="password-icon"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Confirm Password</label>
                            <div class="password-field">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                                <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">
                                    <i class="fas fa-eye" id="confirmPassword-icon"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="terms-checkbox">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="termsCheck" required>
                                <label class="form-check-label" for="termsCheck">
                                    I agree to the <a href="#terms">Terms & Conditions</a> and <a href="#privacy">Privacy Policy</a>
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-signup">Create Account</button>
                    </form>
                    
                    <!-- Login Link -->
                    <div class="login-link">
                        Already have an account? <a href="#login">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Password toggle function
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = document.getElementById(fieldId + '-icon');
            
            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
        
        // Form validation and submission
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fullName = document.querySelector('input[type="text"]').value;
            const email = document.querySelector('input[type="email"]').value;
            const phone = document.querySelector('input[type="tel"]').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const termsAccepted = document.getElementById('termsCheck').checked;
            
            // Basic validation
            if (!fullName || !email || !phone || !password || !confirmPassword) {
                alert('Please fill in all fields');
                return;
            }
            
            if (password !== confirmPassword) {
                alert('Passwords do not match');
                return;
            }
            
            if (password.length < 6) {
                alert('Password must be at least 6 characters long');
                return;
            }
            
            if (!termsAccepted) {
                alert('Please accept the Terms & Conditions');
                return;
            }
            
            // Simulate signup process
            const btn = document.querySelector('.btn-signup');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Creating Account...';
            btn.disabled = true;
            
            setTimeout(() => {
                alert('Account created successfully! (This is a demo)');
                btn.innerHTML = 'Create Account';
                btn.disabled = false;
                // Reset form
                document.getElementById('signupForm').reset();
            }, 2000);
        });
        
        // Social signup handlers
        document.querySelectorAll('.btn-social-signup').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const platform = this.classList.contains('google') ? 'Google' : 'Facebook';
                alert(`${platform} signup clicked! (This is a demo)`);
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
        
        // Real-time password validation
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password.length < 6) {
                this.style.borderColor = '#dc3545';
            } else {
                this.style.borderColor = '#28a745';
            }
            
            // Check confirm password match
            if (confirmPassword && password !== confirmPassword) {
                document.getElementById('confirmPassword').style.borderColor = '#dc3545';
            } else if (confirmPassword && password === confirmPassword) {
                document.getElementById('confirmPassword').style.borderColor = '#28a745';
            }
        });
        
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            
            if (password !== confirmPassword) {
                this.style.borderColor = '#dc3545';
            } else {
                this.style.borderColor = '#28a745';
            }
        });
    </script>
</body>
</html>