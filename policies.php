<?php
  include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policies - MediCare</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .policy-nav a {
            display: block;
            padding: 10px;
            background: #1A76D1;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 10px;
            text-decoration: none;
        }
        .policy-nav a:hover {
            background: #125a9a;
        }
        .policy-section {
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
      
    </style>
</head>
<body>
  
    
    <div class="container mt-4">
        <h1 class="text-center">Policies</h1>
        <p class="text-center text-muted">Learn about our Privacy Policy, Terms & Conditions, and Return & Cancellation Policy.</p>

        <div class="policy-nav text-center">
            <a href="#privacy-policy">Privacy Policy</a>
            <a href="#terms-conditions">Terms & Conditions</a>
            <a href="#return-cancellation">Return & Cancellation Policy</a>
        </div>
        
        <div id="privacy-policy" class="policy-section">
            <h2>Privacy Policy</h2>
            <p>At MediCare, we are committed to protecting your privacy. This policy outlines how we collect, use, and safeguard your personal information.</p>
            <h3>Information We Collect</h3>
            <ul>
                <li>Your name, email address, and contact details.</li>
                <li>Payment information for processing orders.</li>
                <li>Health-related information provided by you.</li>
            </ul>
            <h3>How We Use Your Information</h3>
            <ul>
                <li>To process and deliver your orders.</li>
                <li>To improve our services and website.</li>
                <li>To communicate with you about your orders and promotions.</li>
            </ul>
        </div>

        <div id="terms-conditions" class="policy-section">
            <h2>Terms & Conditions</h2>
            <p>By using MediCare, you agree to the following terms and conditions:</p>
            <h3>Eligibility</h3>
            <p>You must be at least 18 years old to use our services.</p>
            <h3>Order Acceptance</h3>
            <p>We reserve the right to refuse or cancel any order at our discretion.</p>
        </div>

        <div id="return-cancellation" class="policy-section">
            <h2>Return & Cancellation Policy</h2>
            <p>We strive to ensure your satisfaction with every purchase. Here’s our policy on returns and cancellations:</p>
            <h3>Cancellation Policy</h3>
            <ul>
                <li>You can cancel your order before it is shipped.</li>
                <li>Once shipped, cancellations are not possible.</li>
            </ul>
            <h3>Return Policy</h3>
            <ul>
                <li>You may return products within 7 days of delivery if they are unopened and in their original packaging.</li>
                <li>Refunds will be processed within 5-7 business days.</li>
            </ul>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.policy-nav a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
<?php
  include 'footer.php';
?>
