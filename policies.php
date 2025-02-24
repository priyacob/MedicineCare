<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Policies - MediCare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="css/policies.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">MediCare</div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Health Articles</a></li>
        <li><a href="#">Policies</a></li>
      </ul>
    </nav>
  </header>

  <section class="policies">
    <div class="container">
      <h1>Policies</h1>
      <p class="tagline">Learn about our Privacy Policy, Terms & Conditions, and Return & Cancellation Policy.</p>

      <!-- Navigation Links -->
      <div class="policy-nav">
        <a href="/policies_MedicineCare/privacy_Policy/privacyPolicy.html">Privacy Policy</a>
        <a href="/policies_MedicineCare/terms_and_Conditions/termsAndConditions.html">Terms & Conditions</a>
        <a href="/policies_MedicineCare/return_and_Cancellation_Policy/returnAndCancellationPolicy.html">Return & Cancellation Policy</a>
      </div>

      <!-- Privacy Policy -->
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
        <h3>Data Security</h3>
        <p>We use advanced encryption and security measures to protect your data.</p>
      </div>

      <!-- Terms & Conditions -->
      <div id="terms-conditions" class="policy-section">
        <h2>Terms & Conditions</h2>
        <p>By using MediCare, you agree to the following terms and conditions:</p>
        <h3>Eligibility</h3>
        <p>You must be at least 18 years old to use our services.</p>
        <h3>Order Acceptance</h3>
        <p>We reserve the right to refuse or cancel any order at our discretion.</p>
        <h3>Intellectual Property</h3>
        <p>All content on this website, including text, images, and logos, is the property of MediCare.</p>
      </div>

      <!-- Return & Cancellation Policy -->
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
        <h3>Contact Us</h3>
        <p>For any queries regarding returns or cancellations, please contact our customer support team.</p>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 MediCare. All rights reserved.</p>
  </footer>

  <script>

    // Smooth Scroll for Policy Navigation
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