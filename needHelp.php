<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Need Help - MediCare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="css/needHelp.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">MediCare</div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Health Articles</a></li>
        <li><a href="#">Need Help</a></li>
      </ul>
    </nav>
  </header>

  <section class="need-help">
    <div class="container">
      <h1>Need Help?</h1>
      <p class="tagline">We're here to assist you. Find answers to common questions or contact us directly.</p>

      <!-- FAQ Section -->
      <div class="faq">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-list">
          <div class="faq-item">
            <div class="faq-question">
              <h3>How do I place an order?</h3>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p>To place an order, simply search for your desired product, add it to your cart, and proceed to checkout. You can pay using various payment methods.</p>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-question">
              <h3>What are your delivery timings?</h3>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p>We offer <strong>24-hour delivery</strong> for all orders. For non-emergency orders, delivery is guaranteed within <strong>8 hours</strong>.</p>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-question">
              <h3>Can I cancel my order?</h3>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p>Yes, you can cancel your order before it is shipped. Go to your order history and click on "Cancel Order."</p>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-question">
              <h3>How do I contact customer support?</h3>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              <p>You can contact our customer support team via the <strong>Contact Us</strong> form below or use the live chat option.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Us Form -->
      <div class="contact-us">
        <h2>Contact Us</h2>
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" placeholder="Enter your message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Live Chat Button -->
  <div class="live-chat">
    <button class="chat-btn"><i class="fas fa-comments"></i> Live Chat</button>
  </div>

  <footer>
    <p>&copy; 2025 MediCare. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>