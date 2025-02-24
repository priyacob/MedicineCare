<?php

include 'navbar.php';


// Sample PHP code to fetch articles and diseases from a database (assuming a database connection is established)
$articles = [
    ["title" => "10 Tips for a Healthy Heart", "image" => "img/child-holding-red-rubberjpg-heart.jpg", "description" => "Learn how to keep your heart healthy with these simple tips."],
    ["title" => "Understanding Diabetes", "image" => "img/pexels-asphotograpy-1001897.jpg", "description" => "Everything you need to know about diabetes and its management."],
    ["title" => "The Importance of Sleep", "image" => "img/pexels-olly-914910.jpg", "description" => "Discover why sleep is crucial for your overall health."]
];

$diseases = [
    ["title" => "Diabetes", "description" => "Diabetes is a chronic condition that affects how your body processes blood sugar."],
    ["title" => "Hypertension", "description" => "High blood pressure can lead to serious health complications if left untreated."],
    ["title" => "Asthma", "description" => "Asthma is a condition in which your airways narrow and swell, making breathing difficult."]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Articles & Diseases Information - MediCare</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body { font-family: Arial, sans-serif; margin: 0; padding: 0; box-sizing: border-box; }
    header { background: #1A76D1; padding: 15px; text-align: center; color: white; font-size: 22px; }
    nav ul { list-style: none; padding: 0; display: flex; justify-content: center; gap: 15px; }
    nav ul li { display: inline; }
    nav ul li a { color: white; text-decoration: none; }
    .container { width: 90%; max-width: 1200px; margin: auto; text-align: center; }
    .search-bar { margin: 20px auto; display: flex; justify-content: center; }
    .search-bar input { padding: 10px; width: 70%; border: 1px solid #ccc; }
    .search-bar button { padding: 10px; background: #1A76D1; color: white; border: none; cursor: pointer; }
    .article-card, .disease-card { border: 1px solid #ccc; padding: 15px; margin: 10px; display: inline-block; width: 30%; text-align: left; }
    .article-card img { width: 100%; height: auto; }
    .btn { display: block; padding: 10px; background: #1A76D1; color: white; text-align: center; margin-top: 10px; text-decoration: none; }
    @media (max-width: 768px) { .article-card, .disease-card { width: 100%; } }
  </style>
</head>
<body>
  
  <div class="container">
    <h1>Health Articles & Diseases Information</h1>
    <p class="tagline">Stay informed with the latest health tips and disease information.</p>
    <div class="search-bar">
      <input type="text" placeholder="Search for articles or diseases...">
      <button><i class="fas fa-search"></i></button>
    </div>
    <h2>Popular Articles</h2>
    <div class="article-list">
      <?php foreach ($articles as $article) { ?>
        <div class="article-card">
          <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="Article Image">
          <h3><?php echo htmlspecialchars($article['title']); ?></h3>
          <p><?php echo htmlspecialchars($article['description']); ?></p>
          <a href="#" class="btn">Read More</a>
        </div>
      <?php } ?>
    </div>
    <h2>Common Diseases</h2>
    <div class="disease-list">
      <?php foreach ($diseases as $disease) { ?>
        <div class="disease-card">
          <h3><?php echo htmlspecialchars($disease['title']); ?></h3>
          <p><?php echo htmlspecialchars($disease['description']); ?></p>
          <a href="#" class="btn">Learn More</a>
        </div>
      <?php } ?>
    </div>
  </div>
  
</body>
</html>
<?php
  include 'footer.php';
?>
