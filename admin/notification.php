<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="d-flex" id="wrapper">
        <nav class="bg-light border-end" id="sidebar">
            <div class="sidebar-header text-center">
                <h4 class="mt-3">Big Bazzar</h4>
            </div>
            <ul class="list-unstyled">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="customer.php">Customers</a></li>
                <li class="active"><a href="notification.php">Notifications</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container-fluid">
                    <h3>Notifications</h3>
                    <button class="btn btn-primary" onclick="markAllRead()">Mark All as Read</button>
                </div>
                <div class="d-flex align-items-center notify">
                    <button class="btn me-3 position-relative">
                        <i class="fa-regular fa-bell color-danger"></i>
                        <span class="badge bg-danger position-absolute top-0 start-100 translate-middle"></span>
                    </button>
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="image/s boss.jpg" alt="Profile" class="rounded-circle" width="30" height="30" object-fit="cover" over-flow="hidden">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="index.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container mt-4">
                <div id="notifications-list">
                    <!-- AJAX Data Will Be Loaded Here -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/scripts.js"></script>
    
</body>
</php>
