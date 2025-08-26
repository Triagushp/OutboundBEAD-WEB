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
    }

    body, html {
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .signup-container {
      display: flex;
      height: 100vh;
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
      padding: 60px;
      color: white;
    }

    .left-section h1 {
      font-size: 2.8rem;
      font-weight: 700;
    }

    .left-section p {
      font-size: 1.1rem;
      margin-top: 10px;
    }

    .right-section {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
      background: #fff;
    }

    .signup-form {
      width: 100%;
      max-width: 420px;
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .signup-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .signup-header h2 {
      font-weight: 700;
    }

    .form-control {
      border-radius: 10px;
      padding: 12px;
    }

    .btn-signup {
      width: 100%;
      background-color: var(--primary-color);
      color: #fff;
      font-weight: 600;
      border: none;
      border-radius: 10px;
      padding: 14px;
      margin-top: 15px;
    }

    .btn-signup:hover {
      background-color: var(--primary-hover);
    }

    .login-link {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="signup-container">
    <!-- Left Section -->
    <div class="left-section">
      <h1>Adventure Awaits</h1>
      <p>Discover amazing outdoor activities and connect with fellow adventurers in our community</p>
    </div>

    <!-- Right Section -->
    <div class="right-section">
      <div class="signup-form">
        <div class="signup-header">
          <h2>Create Your Account</h2>
          <p>Let's get started with exploring adventures</p>
        </div>

        <!-- Register Form -->
        <form id="signupForm" method="POST" action="{{ route('register.save') }}">
          @csrf

          <div class="form-group mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter your username" value="{{ old('username') }}" required>
            @error('username') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          <div class="form-group mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="nama" placeholder="Enter your full name" value="{{ old('nama') }}" required>
            @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          <div class="form-group mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email address" value="{{ old('email') }}" required>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          <div class="form-group mb-3">
            <label class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="nohp" placeholder="Enter your phone number" value="{{ old('nohp') }}" required>
            @error('nohp') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          <div class="form-group mb-3">
            <label class="form-label">Password</label>
            <div class="position-relative">
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
              <button type="button" class="btn btn-sm position-absolute top-50 end-0 translate-middle-y me-2" onclick="togglePassword('password')">
                <i class="fas fa-eye" id="password-icon"></i>
              </button>
            </div>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          <div class="form-group mb-3">
            <label class="form-label">Confirm Password</label>
            <div class="position-relative">
              <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required>
              <button type="button" class="btn btn-sm position-absolute top-50 end-0 translate-middle-y me-2" onclick="togglePassword('confirmPassword')">
                <i class="fas fa-eye" id="confirmPassword-icon"></i>
              </button>
            </div>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="termsCheck" name="termsCheck" required>
            <label class="form-check-label" for="termsCheck">
              I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>
            </label>
            @error('termsCheck') <small class="text-danger">{{ $message }}</small> @enderror
          </div>

          <button type="submit" class="btn btn-signup">Create Account</button>
        </form>

        <div class="login-link">
          Already have an account? <a href="/login">Login</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    function togglePassword(fieldId) {
      const field = document.getElementById(fieldId);
      const icon = document.getElementById(fieldId + '-icon');
      if (field.type === 'password') {
        field.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
      } else {
        field.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
      }
    }
  </script>
</body>
</html>
