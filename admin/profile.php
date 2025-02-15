<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="d-flex" id="wrapper">
        <nav class="bg-light border-end" id="sidebar">
            <div class="sidebar-header text-center">
                <h4 class="mt-3">MedicineCare</h4>
            </div>
            <ul class="list-unstyled">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="customer.php">Customers</a></li>
                <li><a href="notification.php">Notifications</a></li>
                <li class="active"><a href="#">My Profile</a></li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container-fluid">
                    <h4>Profile</h4>
                </div>
            </nav>

            <div class="container mt-4">
                <div class="card profile-card">
                    <div class="card-body text-center position-relative">
                        <!-- Profile Image with Edit Icon -->
                        <div class="profile-image-container">
                            <img id="profile-img" src="assets/images/user.png"height="120" width="120" class="rounded-circle profile-img" alt="Profile Picture">
                        </div>
                
                        <!-- Profile Details -->
                        <h4 id="profile-name" class="mt-3">Loading...</h4>
                        <p id="profile-email">Loading...</p>
                        <p id="profile-role" class="text-muted">Loading...</p>
                        <button class="btn btn-primary mt-3" id="edit-profile"><i class="fas fa-user-edit"></i> Edit Profile</button>
                    </div>
                </div>
                
                <!-- Font Awesome Icons -->
                <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</php>
