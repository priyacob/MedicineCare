<?php
include "navbar.php";	
require "includes/db.php";

// Get the medicine ID from the URL
if (isset($_GET['id'])) {
    $m_id = $_GET['id'];

    // Fetch medicine details
    $query = "SELECT * FROM medicine WHERE id = '$m_id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $medicine = $result->fetch_assoc();
    } else {
        die("Medicine not found.");
    }
} else {
    die("Invalid request.");
}
?>
    <title><?php echo $medicine['name']; ?> Details</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 900px;
            margin-top: 30px;
        }
        .medicine-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .medicine-details {
            padding: 20px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .related-medicine img {
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
        .related-card {
            transition: transform 0.3s;
        }
        .related-card:hover {
            transform: scale(1.05);
        }
        .footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
    </style>

<!-- Header -->
<header class="bg-primary text-white text-center py-3">
    <h2>Medicine Details</h2>
</header>

<!-- Main Container -->
<div class="container bg-white shadow-lg rounded p-4">

    <div class="row">
        <!-- Medicine Image -->
        <div class="col-md-6">
            <img src="<?php echo $medicine['image']; ?>" alt="Medicine Image" class="medicine-image">
        </div>

        <!-- Medicine Details -->
        <div class="col-md-6 medicine-details">
            <h2 class="text-primary"><?php echo $medicine['name']; ?></h2>
            <p class="text-muted"><?php echo $medicine['description']; ?></p>

            <h4 class="text-danger">Price: ₹<?php echo $medicine['price']; ?></h4>
            <p><strong>Category:</strong> <?php echo $medicine['brand']; ?></p>
            <p><strong>Expiry Date:</strong> <?php echo $medicine['expiry_date']; ?></p>

            <!-- Buttons -->
            <div class="mt-4">
                <form action="order.php" method="POST" class="d-inline">
                    <input type="hidden" name="m_id" value="<?php echo $medicine['id']; ?>">
                    <input type="hidden" name="name" value="<?php echo $medicine['name']; ?>">
                    <input type="hidden" name="price" value="<?php echo $medicine['price']; ?>">
                    <input type="hidden" name="image" value="<?php echo $medicine['image']; ?>">
                    <button type="submit" class="btn btn-success me-2">Buy Now</button>
                </form>

                <button class="btn btn-warning">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Related Medicines -->
    <div class="mt-5">
        <h3 class="text-primary">Related Medicines</h3>
        <div class="row">
            <?php
            // Fetch related medicines from the same category
            $related_query = "SELECT * FROM medicine WHERE brand = '{$medicine['brand']}' AND id != '$m_id' LIMIT 4";
            $related_result = $conn->query($related_query);

            if ($related_result->num_rows > 0) {
                while ($related = $related_result->fetch_assoc()) {
                    echo '
                    <div class="col-md-3 mb-3">
                        <div class="card related-card shadow-sm">
                            <a href="details.php?id=' . $related['id'] . '">
                                <img src="' . $related['image'] . '" class="card-img-top related-medicine">
                                <div class="card-body text-center">
                                    <h6 class="text-primary">' . $related['name'] . '</h6>
                                </div>
                            </a>
                        </div>
                    </div>';
                }
            } else {
                echo "<p class='text-muted'>No related medicines found.</p>";
            }
            ?>
        </div>
    </div>

</div>

<!-- Footer -->


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
