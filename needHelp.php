<?php
  include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Need Help - MediCare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body { font-family: Arial, sans-serif; }
    .faq-question { cursor: pointer; display: flex; justify-content: space-between; align-items: center; }
    .faq-answer { display: none; padding: 10px; border-left: 3px solid #1A76D1; }
    .chat-btn { position: fixed; bottom: 20px; right: 20px; background: #1A76D1; color: white; border: none; padding: 10px 20px; border-radius: 5px; }
    footer { text-align: center; padding: 20px; background: #2C2D3F; color: white; margin-top: 20px; }
  </style>
</head>
<body>

  <section class="container mt-5">
    <h1 class="text-center">Need Help?</h1>
    <p class="text-center text-muted">We're here to assist you. Find answers to common questions or contact us directly.</p>
    
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            How do I place an order?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">To place an order, search for your desired product, add it to your cart, and checkout.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            What are your delivery timings?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">We offer 24-hour delivery and express 8-hour delivery.</div>
        </div>
      </div>
    </div>

    <div class="mt-5">
      <h2>Contact Us</h2>
      <form method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>

  <button class="chat-btn"><i class="fas fa-comments"></i> Live Chat</button>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
  include 'footer.php';
?>
