<?php
  include 'navbar.php';

  // Start session if needed (for user authentication if required in future)
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacy Policy - MediCare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f8f9fa; }
    .navbar { background: #1A76D1; }
    .navbar-brand, .nav-link { color: #fff !important; }
    .privacy-policy { padding: 40px 20px; }
    .policy-section { margin-bottom: 20px; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
    footer { text-align: center; padding: 20px; background: #2C2D3F; color: white; }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">MediCare</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Health Articles</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="privacy-policy container">
    <h1 class="text-center">Privacy Policy</h1>
    <p class="text-center text-muted">Your privacy is important to us. Learn how we collect, use, and protect your information.</p>
    
    <?php
      $sections = [
        "Introduction" => "At MediCare, we are committed to protecting your privacy...",
        "Information We Collect" => "We collect personal details, payment information, and usage data to improve services.",
        "How We Use Your Information" => "We use your data to process orders, improve service, and comply with regulations.",
        "Data Security" => "We take data security seriously using encryption and protection measures.",
        "Your Rights" => "You can access, correct, or request deletion of your personal data.",
        "Changes to This Policy" => "We may update this policy periodically and notify users of major changes."
      ];
      
      foreach ($sections as $title => $content) {
        echo "<div class='policy-section'>
                <h2>$title</h2>
                <p>$content</p>
              </div>";
      }
    ?>
  </section>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
      });
    });
  </script>
</body>
</html>
<?php
  include 'footer.php';
?>
