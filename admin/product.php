
<?php
include("../includes/db.php");

$sql="SELECT * FROM medicine";
$result = mysqli_query($con, $sql);

?>


<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
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
            <ul class="list-unstyled nav-menu">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="order.php">Orders</a></li>
                <li class="active"><a href="product.php">Products</a></li>
                <li><a href="customer.php">Customers</a></li>
                <li><a href="notification.php">Notifications</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul> 
        </nav>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container-fluid d-flex justify-content-center mt-3">
                    <div class="input-group w-50">
                        <input type="text" class="form-control" placeholder="Search for medicines..." aria-label="Search">
                        <button class="btn btn-primary">
                            <i class="fas fa-search"></i> <!-- FontAwesome Search Icon -->
                        </button>
                    </div>
                </div>
                
                <!-- FontAwesome for Icons -->
                <div class="d-flex align-items-center notify">
                    <button class="btn me-3 position-relative">
                        <i class="fa-regular fa-bell"  id="openNotification"></i>
                        <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">3</span>
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
                <h3>All Products</h3>

                <!-- Filters -->
                <!-- Filters -->
                <div class="row mb-5">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-tags"></i></span>
                            <select class="form-select" id="category-filter">
                                <option>Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                            <select class="form-select" id="status-filter">
                                <option>Stock_Status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            <select class="form-select" id="price-filter">
                                <option>Price</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col">
                        <button class="btn btn-success w-100">
                            <i class="fas fa-plus"></i> Add Products
                        </button>
                    </div>
                </div>
                <hr>

                <!-- Products Table -->
                <div style="max-height: 380px; overflow-y: auto;">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#Product ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quentity</th> 
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php while($row=mysqli_fetch_assoc($result)) {?>
                    <tbody id="products-lists">
                      <td><?php echo $row['m_id'] ?></td>
                      <td><img src="../img/product/<?php echo htmlspecialchars($row['image']); ?>" alt="Product Image"  style="height:60px;"/></td>
                      <td><?php echo $row['m_name'] ?></td>
                      <td><?php echo $row['m_category'] ?></td>
                      <td><?php echo $row['price'] ?></td>
                      <td><?php echo $row['qty'] ?></td>
                      
                      <td>
                        

                      <?php                                             
                                          if($row['status']==0){                          
                                             echo                                            
                                                 "<span type='button' class='btn btn-primary'class='badge badge-complete '><a href='?type=status&operation=deactive&m_id=".$row['m_id'].
                                             "' style='color:black;'>Active</a></span>&nbsp;";
                                          } else {
                                             echo "<span class='badge badge-pending' type='button' ><a href='?type=status&operation=active&m_id=".$row['m_id'].
                                             "'>Deactive</a></span>&nbsp;";
                                          }
                                          echo "<span  class='btn btn-warning' class='badge badge-edit text-dark ' class='btn btn-primary'>
                                          <a href='manage_product.php?type=delete&m_id=".$row['m_id']."'style='color:black;'>Edit</a></span>&nbsp;";

                                          echo "<span  class='btn btn-danger' class='badge badge-delete' ><a href='?type=delete&m_id=".$row['m_id'].
                                          "'style='color:black;'>Delete</a></span>";
                                         
                                          ?>
                      </td>
                    </tbody>

                    <?php } ?>
                </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/ajax.js"></script>
</body>
</php>
