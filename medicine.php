<?php
include "navbar.php";	
<<<<<<< HEAD
?>	
=======
require "includes/db.php";  
if (!isset($_SESSION['USER_LOGIN'])) {
    echo "<script>window.location.href = 'login.php';</script>";
    exit(); // Ensure that no further code executes after the redirect
}


// Fetch all categories
$category_query = "SELECT DISTINCT m_category FROM medicine WHERE status = 1";
$category_result = mysqli_query($con, $category_query);

// Fetch all medicines
$medicine_query = "SELECT * FROM medicine WHERE status = 1 ORDER BY added_on DESC";
$medicine_result = mysqli_query($con, $medicine_query);
?>
>>>>>>> b00537e11ee7c0bfa5b6781661ef4d56e8aad97f

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50">
<<<<<<< HEAD
    <!-- Search Bar -->
    <header class="bg-white shadow-md p-4 border-b-2 border-blue-200">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <h1 class="text-2xl font-bold text-blue-700">Medicine Shop</h1>
            <div class="relative w-1/3">
                <input type="text" placeholder="Search..." class="border border-blue-300 rounded-full p-2 pl-RS10 w-full focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                <svg class="w-5 h-5 text-blue-500 absolute right-3 top-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.415l4.387 4.387a1 1 0 01-1.415 1.415l-4.387-4.387zM14 8a6 6 0 11-12 0 6 6 0 0112 0z" clip-rule="evenodd"></path>
                </svg>
=======

<!-- Search & Category Filter -->
<header class="bg-white shadow-md p-4 border-b-2 border-blue-200">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between">
        <h1 class="text-2xl font-bold text-blue-700">Medicine Shop</h1>
        
        <!-- Search Bar -->
        <div class="relative w-1/3">
            <input type="text" id="searchBox" placeholder="Search by Name..." class="border border-blue-300 rounded-full p-2 pl-4 w-full focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
            <svg class="w-5 h-5 text-blue-500 absolute right-3 top-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.415l4.387 4.387a1 1 0 01-1.415 1.415l-4.387-4.387zM14 8a6 6 0 11-12 0 6 6 0 0112 0z" clip-rule="evenodd"></path>
            </svg>
        </div>

        <!-- Category Filter -->
        <select id="categoryFilter" class="border border-blue-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
            <option value="">All Categories</option>
            <?php while ($category = mysqli_fetch_assoc($category_result)) { ?>
                <option value="<?php echo $category['m_category']; ?>"><?php echo $category['m_category']; ?></option>
            <?php } ?>
        </select>
    </div>
</header>

<!-- Medicines Section -->
<main class="max-w-7xl mx-auto p-4">
    <h2 class="text-xl font-semibold mb-4 text-blue-800">Available Medicines</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6" id="medicineContainer">
        <?php while ($medicine = mysqli_fetch_assoc($medicine_result)) { ?>
            <div class="medicine-item bg-white shadow-md rounded-lg p-4 text-center border border-blue-100 hover:shadow-lg transition-shadow"
                 data-category="<?php echo strtolower($medicine['m_category']); ?>"
                 data-name="<?php echo strtolower($medicine['m_name']); ?>">
                <img src="img/product/<?php echo $medicine['image']; ?>" alt="Product Image" class="w-full h-32 md:h-40 object-cover rounded-t-lg mb-2">
                <h3 class="font-bold text-blue-600"><?php echo $medicine['m_name']; ?></h3>
                <p class="text-gray-600"><?php echo $medicine['sort_description']; ?></p>
                <p class="font-semibold text-blue-700">₹<?php echo $medicine['price']; ?></p>
                <p class="text-sm text-gray-500">Category: <?php echo $medicine['m_category']; ?></p>
                <p class="text-sm text-gray-500">Expiry: <?php echo date("d M Y", strtotime($medicine['expiryDate'])); ?></p>
                <button class="mt-2 bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition">Buy Now</button>
                <button class="mt-2 bg-blue-100 text-blue-600 rounded-lg px-4 py-2 hover:bg-blue-200 transition">Add to Cart</button>
>>>>>>> b00537e11ee7c0bfa5b6781661ef4d56e8aad97f
            </div>
        </div>
    </header>

    <!-- Categories Section -->
    <main class="max-w-7xl mx-auto p-4">
        <h2 class="text-xl font-semibold mb-4 text-blue-800">Categories</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-shadow border border-blue-100">
                <h3 class="font-bold text-blue-600">Anti-Acids</h3>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-shadow border border-blue-100">
                <h3 class="font-bold text-blue-600">Pain Relievers</h3>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-shadow border border-blue-100">
                <h3 class="font-bold text-blue-600">Cough & Cold</h3>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-shadow border border-blue-100">
                <h3 class="font-bold text-blue-600">Vitamins & Supplements</h3>
            </div>
        </div>
    <section class="mt-8">
            <h2 class="text-xl font-semibold mb-4 text-blue-800">Featured Medicines</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-4 text-center border border-blue-100 hover:shadow-lg transition-shadow">
                    <img src="img/pf1.jpg" alt="Product Image" class="w-full h-32 md:h-40 object-cover rounded-t-lg mb-2">
                    <h3 class="font-bold text-blue-600">Antacid Tablet</h3>
                    <p class="text-gray-600">Relieves heartburn and indigestion</p>
                    <p class="font-semibold text-blue-700">RS100.00</p>
                    <button class="mt-2 bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition">Buy Now</button>
                    <button class="mt-2 bg-blue-100 text-blue-600 rounded-lg px-4 py-2 hover:bg-blue-200 transition">Add to Cart</button>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 text-center border border-blue-100 hover:shadow-lg transition-shadow">
                    <img src="img/blog2.jpg" alt="Product Image" class="w-full h-32 md:h-40 object-cover rounded-t-lg mb-2">
                    <h3 class="font-bold text-blue-600">Pain Reliever</h3>
                    <p class="text-gray-600">Effective relief from headaches</p>
                    <p class="font-semibold text-blue-700">RS80.50</p>
                    <button class="mt-2 bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition">Buy Now</button>
                    <button class="mt-2 bg-blue-100 text-blue-600 rounded-lg px-4 py-2 hover:bg-blue-200 transition">Add to Cart</button>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 text-center border border-blue-100 hover:shadow-lg transition-shadow">
                    <img src="img/blog3.jpg" alt="Product Image" class="w-full h-32 md:h-40 object-cover rounded-t-lg mb-2">
                    <h3 class="font-bold text-blue-600">Vitamin C Supplement</h3>
                    <p class="text-gray-600">Boosts immunity and overall health</p>
                    <p class="font-semibold text-blue-700">RS150.00</p>
                    <button class="mt-2 bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition">Buy Now</button>
                    <button class="mt-2 bg-blue-100 text-blue-600 rounded-lg px-4 py-2 hover:bg-blue-200 transition">Add to Cart</button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
