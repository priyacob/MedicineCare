<?php
  include 'navbar.php';
?>
<title>About Us - MediCare</title>
  
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      color: #1A76D1;
    }
    .about-us {
      padding: 50px 20px;
      background-color: #f8f9fa;
    }
    .cta .btn {
      background-color: #1A76D1;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      margin-right: 10px;
      text-decoration: none;
    }
    .cta .btn:hover {
      background-color: #125a9e;
    }
    footer {
      background-color: #2C2D3F;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
  </style>
</head>
<body>
  <header class="bg-light py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">MediCare</div>
      
    </div>
  </header>

  <section class="about-us text-center">
    <div class="container">
      <h1>About MediCare</h1>
      <p class="tagline">Your Trusted Partner in Health</p>
      <p>Founded in <strong>2025 in Coochbehar, West Bengal</strong>, MediCare started as a small initiative by a group of passionate BCA final-year students.</p>
      <p>Our mission is to provide high-quality medicines and healthcare products at your doorstep within <strong>8 hours</strong> or less.</p>
      <h2>Our Team</h2>
      <p>MediCare was brought to life by a dedicated team of individuals including <strong>Keya</strong> and her co-founders.</p>
      <h2>Why Choose MediCare?</h2>
      <ul class="list-group list-group-flush text-start mx-auto" style="max-width: 600px;">
        <li class="list-group-item"><i class="fas fa-check text-success"></i> Fast Delivery: Under 8 hours.</li>
        <li class="list-group-item"><i class="fas fa-check text-success"></i> 24/7 Availability.</li>
        <li class="list-group-item"><i class="fas fa-check text-success"></i> Wide Range of Products.</li>
        <li class="list-group-item"><i class="fas fa-check text-success"></i> Affordable Prices.</li>
      </ul>
      <div class="cta mt-4">
        <a href="#" class="btn">Join Our Team</a>
        <a href="/index.php" class="btn">Shop Now</a>
      </div>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php
  include 'footer.php';
?>
