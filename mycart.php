<?php
session_start();
include 'includes/db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Add_To_Cart'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $medicine_id = $_POST['m_id'];
    
    // Fetch medicine details from the database
    $query = "SELECT * FROM medicine WHERE m_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $medicine_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $medicine = $result->fetch_assoc();
    
    if ($medicine) {
        $cart_item = [
            'id' => $medicine['id'],
            'name' => $medicine['m_name'],
            'price' => $medicine['price'],
            'quantity' => 1
        ];

        // Check if item already in cart
        $found = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] === $medicine['id']) {
                $item['quantity']++;
                $found = true;
                break;
            }
        }
        
        if (!$found) {
            $_SESSION['cart'][] = $cart_item;
        }
    }
    
    header("Location: cart.php");
    exit();
}
?>
