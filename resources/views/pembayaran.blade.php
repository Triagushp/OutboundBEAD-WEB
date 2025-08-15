<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details - Adventure Booking</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #00bcd4;
            --primary-hover: #00acc1;
            --light-gray: #f8f9fa;
            --border-color: #e9ecef;
            --text-muted: #6c757d;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 20px 0;
        }
        
        .payment-container {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            background: var(--primary-color);
            color: white;
            text-align: center;
            padding: 25px;
        }
        
        .header h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .header p {
            font-size: 0.9rem;
            opacity: 0.9;
            margin: 0;
        }
        
        .form-content {
            padding: 30px;
        }
        
        .form-section {
            margin-bottom: 30px;
        }
        
        .form-section:last-child {
            margin-bottom: 0;
        }
        
        .section-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-gray);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
            font-size: 0.9rem;
        }
        
        .form-control, .form-select {
            border: 2px solid var(--border-color);
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background-color: var(--light-gray);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.1);
            background-color: white;
        }
        
        .form-control::placeholder {
            color: #adb5bd;
            font-style: italic;
        }
        
        .participant-counter {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .counter-btn {
            width: 35px;
            height: 35px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
            color: var(--text-muted);
        }
        
        .counter-btn:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            background: rgba(0, 188, 212, 0.05);
        }
        
        .counter-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        .counter-display {
            font-size: 1.1rem;
            font-weight: 600;
            min-width: 40px;
            text-align: center;
            padding: 8px 16px;
            background: var(--light-gray);
            border-radius: 8px;
            border: 2px solid var(--border-color);
        }
        
        .price-section {
            background: var(--light-gray);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 25px;
        }
        
        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .price-row:last-child {
            margin-bottom: 0;
            padding-top: 10px;
            border-top: 2px solid white;
        }
        
        .price-label {
            font-weight: 600;
            color: #333;
        }
        
        .total-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .price-per-person {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-top: 3px;
        }
        
        .btn-pay {
            width: 100%;
            background: var(--primary-color);
            border: none;
            border-radius: 12px;
            padding: 16px;
            font-size: 1.1rem;
            font-weight: 700;
            color: white;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }
        
        .btn-pay:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0, 188, 212, 0.3);
        }
        
        .security-note {
            text-align: center;
            font-size: 0.8rem;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        
        .security-note i {
            color: #28a745;
        }
        
        .date-input {
            position: relative;
        }
        
        .date-input input[type="date"] {
            cursor: pointer;
        }
        
        /* Custom scrollbar for select */
        select {
            cursor: pointer;
        }
        
        /* Mobile responsiveness */
        @media (max-width: 576px) {
            body {
                padding: 10px 0;
            }
            
            .payment-container {
                margin: 0 15px;
                border-radius: 15px;
            }
            
            .form-content {
                padding: 20px;
            }
            
            .header {
                padding: 20px;
            }
            
            .participant-counter {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="payment-container">
            <!-- Header -->
            <div class="header">
                <h2>Payment Details</h2>
                <p>Complete your booking by filling in the form below</p>
            </div>
            
            <!-- Form Content -->
            <div class="form-content">
                <!-- Buyer Information Section -->
                <div class="form-section">
                    <h3 class="section-title">Buyer Information</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="+62 812-3456-789" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter your email address" required>
                    </div>
                </div>
                
                <!-- Activity Details Section -->
                <div class="form-section">
                    <h3 class="section-title">Activity Details</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Location</label>
                        <select class="form-select" required>
                            <option value="">Select a location</option>
                            <option value="bromo">Mount Bromo</option>
                            <option value="semeru">Mount Semeru</option>
                            <option value="ijen">Mount Ijen</option>
                            <option value="malang">Malang Adventure Park</option>
                            <option value="batu">Batu Secret Zoo</option>
                            <option value="pantai">Pantai Selatan</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Choose Date</label>
                        <div class="date-input">
                            <input type="date" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Number of Participants</label>
                        <div class="participant-counter">
                            <button type="button" class="counter-btn" id="decreaseBtn">
                                <i class="fas fa-minus"></i>
                            </button>
                            <div class="counter-display" id="participantCount">1</div>
                            <button type="button" class="counter-btn" id="increaseBtn">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="price-per-person" id="pricePerPerson">
                            Price per person: Rp 50,000
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Notes (Optional)</label>
                        <textarea class="form-control" rows="3" placeholder="Additional requests or notes..."></textarea>
                    </div>
                </div>
                
                <!-- Price Section -->
                <div class="price-section">
                    <div class="price-row">
                        <span class="price-label">Subtotal</span>
                        <span id="subtotal">Rp 50,000</span>
                    </div>
                    <div class="price-row">
                        <span class="price-label">Admin Fee</span>
                        <span>Rp 5,000</span>
                    </div>
                    <div class="price-row">
                        <span class="price-label">Total Price:</span>
                        <span class="total-price" id="totalPrice">Rp 55,000</span>
                    </div>
                </div>
                
                <!-- Pay Button -->
                <button class="btn btn-pay" type="button" onclick="processPayment()">
                    <i class="fas fa-credit-card me-2"></i>
                    Pay Now
                </button>
                
                <!-- Security Note -->
                <div class="security-note">
                    <i class="fas fa-shield-alt"></i>
                    <span>Your payment information is secure and encrypted</span>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Participant counter functionality
        let participantCount = 1;
        const basePrice = 50000;
        const adminFee = 5000;
        
        const decreaseBtn = document.getElementById('decreaseBtn');
        const increaseBtn = document.getElementById('increaseBtn');
        const countDisplay = document.getElementById('participantCount');
        const subtotalEl = document.getElementById('subtotal');
        const totalPriceEl = document.getElementById('totalPrice');
        
        function updatePrice() {
            const subtotal = basePrice * participantCount;
            const total = subtotal + adminFee;
            
            subtotalEl.textContent = `Rp ${subtotal.toLocaleString('id-ID')}`;
            totalPriceEl.textContent = `Rp ${total.toLocaleString('id-ID')}`;
            
            // Update disable state
            decreaseBtn.disabled = participantCount <= 1;
        }
        
        decreaseBtn.addEventListener('click', function() {
            if (participantCount > 1) {
                participantCount--;
                countDisplay.textContent = participantCount;
                updatePrice();
            }
        });
        
        increaseBtn.addEventListener('click', function() {
            if (participantCount < 20) { // Max 20 participants
                participantCount++;
                countDisplay.textContent = participantCount;
                updatePrice();
            }
        });
        
        // Initialize
        updatePrice();
        
        // Form validation
        function validateForm() {
            const fullName = document.querySelector('input[type="text"]').value;
            const phone = document.querySelector('input[type="tel"]').value;
            const email = document.querySelector('input[type="email"]').value;
            const location = document.querySelector('select').value;
            const date = document.querySelector('input[type="date"]').value;
            
            if (!fullName || !phone || !email || !location || !date) {
                alert('Please fill in all required fields');
                return false;
            }
            
            // Validate email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address');
                return false;
            }
            
            // Validate date (must be today or future)
            const selectedDate = new Date(date);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (selectedDate < today) {
                alert('Please select a date from today onwards');
                return false;
            }
            
            return true;
        }
        
        // Payment processing
        function processPayment() {
            if (!validateForm()) {
                return;
            }
            
            const payBtn = document.querySelector('.btn-pay');
            const originalText = payBtn.innerHTML;
            
            // Show loading state
            payBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Processing Payment...';
            payBtn.disabled = true;
            
            // Simulate payment process
            setTimeout(() => {
                alert(`Payment successful! Total: ${totalPriceEl.textContent}\nBooking confirmation will be sent to your email.`);
                payBtn.innerHTML = originalText;
                payBtn.disabled = false;
                
                // Reset form (optional)
                // document.querySelector('form').reset();
            }, 3000);
        }
        
        // Set minimum date to today
        document.querySelector('input[type="date"]').setAttribute('min', new Date().toISOString().split('T')[0]);
        
        // Phone number formatting
        document.querySelector('input[type="tel"]').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('62')) {
                value = '+' + value;
            } else if (value.startsWith('0')) {
                value = '+62' + value.substring(1);
            }
            e.target.value = value;
        });
        
        // Auto-uppercase first letter of name
        document.querySelector('input[type="text"]').addEventListener('input', function(e) {
            const words = e.target.value.split(' ');
            const capitalizedWords = words.map(word => {
                if (word.length > 0) {
                    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                }
                return word;
            });
            e.target.value = capitalizedWords.join(' ');
        });
    </script>
</body>
</html>