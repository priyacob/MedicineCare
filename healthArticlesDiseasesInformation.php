<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Articles & Diseases Information - MediCare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="css/healthArticleDis.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">MediCare</div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Health Articles</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </nav>
  </header>

  <section class="health-articles">
    <div class="container">
      <h1>Health Articles & Diseases Information</h1>
      <p class="tagline">Stay informed with the latest health tips and disease information.</p>

      <!-- Search Bar -->
      <div class="search-bar">
        <input type="text" placeholder="Search for articles or diseases...">
        <button><i class="fas fa-search"></i></button>
      </div>

      <!-- Categories -->
      <div class="categories">
        <h2>Categories</h2>
        <div class="category-list">
          <div class="category-card" data-category="health-tips">
            <i class="fas fa-heartbeat"></i>
            <p>Health Tips</p>
          </div>
          <div class="category-card" data-category="diseases">
            <i class="fas fa-virus"></i>
            <p>Diseases</p>
          </div>
          <div class="category-card" data-category="wellness">
            <i class="fas fa-spa"></i>
            <p>Wellness</p>
          </div>
          <div class="category-card" data-category="nutrition">
            <i class="fas fa-utensils"></i>
            <p>Nutrition</p>
          </div>
        </div>
      </div>

      <!-- Articles Section -->
      <div class="articles">
     -+   <h2>Popular Articles</h2>
        <div class="article-list">
          <div class="article-card">
            <img src="img/child-holding-red-rubber-heart.jpg" alt="Article Image">
            <h3>10 Tips for a Healthy Heart</h3>
            <p>Learn how to keep your heart healthy with these simple tips.</p>
            <a href="#" class="btn">Read More</a>
          </div>
          <div class="article-card">
            <img src="img/pexels-asphotograpy-1001897.jpg" alt="Article Image">
            <h3>Understanding Diabetes</h3>
            <p>Everything you need to know about diabetes and its management.</p>
            <a href="#" class="btn">Read More</a>
          </div>
          <div class="article-card">
            <img src="img/pexels-olly-914910.jpg" alt="Article Image">
            <h3>The Importance of Sleep</h3>
            <p>Discover why sleep is crucial for your overall health.</p>
            <a href="#" class="btn">Read More</a>
          </div>
        </div>
      </div>

      <!-- Disease Information -->
      <div class="diseases">
        <h2>Common Diseases</h2>
        <div class="disease-list">
          <div class="disease-card">
            <h3>Diabetes</h3>
            <p>Diabetes is a chronic condition that affects how your body processes blood sugar.</p>
            <a href="#" class="btn">Learn More</a>
          </div>
          <div class="disease-card">
            <h3>Hypertension</h3>
            <p>High blood pressure can lead to serious health complications if left untreated.</p>
            <a href="#" class="btn">Learn More</a>
          </div>
          <div class="disease-card">
            <h3>Asthma</h3>
            <p>Asthma is a condition in which your airways narrow and swell, making breathing difficult.</p>
            <a href="#" class="btn">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 MediCare. All rights reserved.</p>
  </footer>

  <script>
    // Search Functionality
const searchInput = document.querySelector('.search-bar input');
const articles = document.querySelectorAll('.article-card');
const diseases = document.querySelectorAll('.disease-card');

searchInput.addEventListener('input', (e) => {
  const searchTerm = e.target.value.toLowerCase();

  articles.forEach(article => {
    const title = article.querySelector('h3').textContent.toLowerCase();
    if (title.includes(searchTerm)) {
      article.style.display = 'block';
    } else {
      article.style.display = 'none';
    }
  });

  diseases.forEach(disease => {
    const title = disease.querySelector('h3').textContent.toLowerCase();
    if (title.includes(searchTerm)) {
      disease.style.display = 'block';
    } else {
      disease.style.display = 'none';
    }
  });
});
  </script>
</body>
</html>