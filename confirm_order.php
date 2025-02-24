<?php
include "navbar.php";	
require "includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $m_id = $_POST["m_id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $o_email = $_POST["o_email"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];
    $house_no = $_POST["house_no"];
    $land_mark = $_POST["land_mark"];
    $full_address = $_POST["full_address"];
    $total_price = $_POST["total_price"];
    $u_id = rand(1000, 9999); // Dummy user ID (Replace with actual user ID if logged in)
    $status = "Pending"; // Default status

    $order_query = "INSERT INTO orders (m_id, u_id, name, city, state, pin, total_price, status, land_mark, house_no, phone, o_email, full_address) 
                    VALUES ('$m_id', '$u_id', '$name', '$city', '$state', '$pin', '$total_price', '$status', '$land_mark', '$house_no', '$phone', '$o_email', '$full_address')";

    if ($conn->query($order_query) === TRUE) {
        echo "<script>
                document.getElementById('order-success').style.display = 'block';
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 3000);
              </script>";
    } else {
        echo "<script>
                document.getElementById('order-error').style.display = 'block';
              </script>";
    }

    $conn->close();
} else {
    die("Invalid Request!");
}
?>
  <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
        .alert {
            display: none;
        }
    </style>

<div class="container">
    <h2 class="mb-4">Order Confirmation</h2>
    <p class="lead">Thank you for your order, <b><?php echo htmlspecialchars($name); ?></b>!</p>

    <div id="order-success" class="alert alert-success">
        <strong>Success!</strong> Your order has been placed successfully.
    </div>
    
    <div id="order-error" class="alert alert-danger">
        <strong>Error!</strong> There was an issue placing your order. Please try again.
    </div>

    <p>Total Amount: <strong>₹<?php echo htmlspecialchars($total_price); ?></strong></p>

    <a href="index.php" class="btn btn-custom">Back to Home</a>
</div>
<?php 
include 'footer.php';
?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

