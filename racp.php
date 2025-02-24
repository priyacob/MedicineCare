<?php
  include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Return & Cancellation Policy - MediCare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .navbar {
      background-color: #1A76D1 !important;
    }
    .navbar-brand, .nav-link {
      color: white !important;
    }
    .container {
      max-width: 800px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    footer {
      text-align: center;
      padding: 15px;
      background-color: #2C2D3F;
      color: white;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  
  <?php include 'header.php'; ?>

  <section class="return-cancellation py-5">
    <div class="container">
      <h1 class="text-center text-primary">Return & Cancellation Policy</h1>
      <p class="text-center">Learn about our policies for returns, cancellations, and refunds.</p>

      <div class="policy-section mt-4">
        <h2>Cancellation Policy</h2>
        <ul>
          <li>Orders can be canceled before they are shipped.</li>
          <li>Once an order is shipped, it cannot be canceled.</li>
          <li>To cancel an order, go to your order history and click on "Cancel Order."</li>
        </ul>
      </div>

      <div class="policy-section mt-4">
        <h2>Return Policy</h2>
        <ul>
          <li>Products must be returned within <strong>7 days</strong> of delivery.</li>
          <li>Products must be unopened, unused, and in their original packaging.</li>
          <li>Prescription medicines and personalized products cannot be returned.</li>
        </ul>
      </div>

      <div class="policy-section mt-4">
        <h2>Refund Process</h2>
        <ul>
          <li>Refunds are issued within <strong>5-7 business days</strong> after approval.</li>
          <li>The refund amount will be credited to the original payment method.</li>
          <li>Shipping charges are non-refundable unless the return is due to our error.</li>
        </ul>
      </div>

      <div class="policy-section mt-4">
        <h2>Contact Us</h2>
        <ul>
          <li><strong>Email:</strong> <a href="mailto:sayanbanikcob@gmail.com">sayanbanikcob@gmail.com</a></li>
          <li><strong>Phone:</strong> +91 876 841 2832</li>
          <li><strong>Address:</strong> MediCare, Coochbehar, West Bengal, India</li>
        </ul>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
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

<?php include 'footer.php'; ?>
