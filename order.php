<?php
include "navbar.php";	
require "includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $m_id = $_POST["m_id"];
    $m_name = $_POST["m_name"];
    $price = $_POST["price"];
    $image = $_POST["image"];
} else {
    die("Invalid access!");
}
?>

    <title>Order Medicine</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 700px;
            margin-top: 30px;
        }
        .medicine-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card {
            border-radius: 12px;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            width: 100%;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>

    <script>
        function updateTotal() {
            let price = parseFloat(document.getElementById('price_val').innerText);
            let quantity = parseInt(document.getElementById('quantity').value);
            let total = price * quantity;
            document.getElementById('total').innerText = "₹" + total.toFixed(2);
            document.getElementById('final_total').value = total;
        }
    </script>
<!-- Header -->
<header class="bg-primary text-white text-center py-3">
    <h2>Confirm Your Order</h2>
</header>

<!-- Main Container -->
<div class="container">
    <div class="card shadow p-4">
        
        <!-- Medicine Details -->
        <div class="text-center">
            <img src="<?php echo $image; ?>" class="medicine-image mb-3">
            <h2 class="text-primary"><?php echo $m_name; ?></h2>
            <h4 class="text-danger">Price: ₹<span id="price_val"><?php echo $price; ?></span></h4>
        </div>

        <!-- Quantity Selection -->
        <div class="mt-3">
            <label class="form-label fw-bold">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="1" min="1" class="form-control w-50" onchange="updateTotal()">
        </div>

        <!-- Total Price -->
        <div class="mt-3 fs-5 fw-bold">
            Total: <span id="total">₹<?php echo $price; ?></span>
        </div>

        <!-- User Shipping Details -->
        <form action="confirm_order.php" method="POST" class="mt-4">
            <input type="hidden" name="m_id" value="<?php echo $m_id; ?>">
            <input type="hidden" name="m_name" value="<?php echo $m_name; ?>">
            <input type="hidden" name="price" value="<?php echo $price; ?>">
            <input type="hidden" name="image" value="<?php echo $image; ?>">
            <input type="hidden" id="final_total" name="total_price" value="<?php echo $price; ?>">

            <div class="mb-3">
                <label class="form-label fw-bold">Full Name:</label>
                <input type="text" name="name" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Phone:</label>
                <input type="text" name="phone" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Email:</label>
                <input type="email" name="o_email" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">City:</label>
                <input type="text" name="city" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">State:</label>
                <input type="text" name="state" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">PIN Code:</label>
                <input type="text" name="pin" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">House No:</label>
                <input type="text" name="house_no" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Landmark:</label>
                <input type="text" name="land_mark" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Full Address:</label>
                <textarea name="full_address" required class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-custom">Place Order</button>
        </form>
    </div>
</div>

<!-- Footer -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
