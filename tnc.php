<?php
  include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terms & Conditions - MediCare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { font-family: Arial, sans-serif; }
    .navbar-brand { font-weight: bold; }
    .policy-section { margin-bottom: 30px; }
    footer { background: #f8f9fa; padding: 10px; text-align: center; margin-top: 20px; }
  </style>
</head>
<body>
  
  <?php $site_name = "MediCare"; ?>
  
  
  <div class="container mt-4">
    <h1 class="text-center">Terms & Conditions</h1>
    <p class="text-center text-muted">Please read these terms carefully before using our website.</p>
    
    <div class="policy-section">
      <h2>Introduction</h2>
      <p>Welcome to <?php echo $site_name; ?>! By using this website, you agree to these terms.</p>
    </div>

    <div class="policy-section">
      <h2>Eligibility</h2>
      <ul>
        <li>Be at least 18 years old.</li>
        <li>Have the legal capacity to enter into a contract.</li>
      </ul>
    </div>

    <div class="policy-section">
      <h2>Order Acceptance</h2>
      <ul>
        <li>Orders are subject to acceptance.</li>
        <li>We reserve the right to cancel orders.</li>
      </ul>
    </div>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
  include 'footer.php';
?>
