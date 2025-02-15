
<?php
require ('connect.php');
if(isset($_GET['type']) && $_GET['type']!='' ){
    $type=$_GET['type'];
     if($type=='delete')
     {
       $id=$_GET['u_id']; 
       $delete_sql=("delete from users where u_id='$id'");
       mysqli_query($con,$delete_sql);
     }
  }
$sql="SELECT * FROM users";
$res=mysqli_query($con,$sql);


?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page</title>
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
                <li><a href="product.php">Products</a></li>
                <li class="active"><a href="customer.php">Customers</a></li>
                <li><a href="notification.php">Notifications</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul> 
        </nav>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container-fluid d-flex justify-content-center mt-3">
                    <div class="input-group w-50">
                        <input type="text" class="form-control" placeholder="Search for Coustomer_Name... & Coustomer_Email" aria-label="Search">
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
                <h3>All Users</h3>

                <!-- Filters -->
                <div class="row mb-5">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                            <select class="form-select" id="category-filter">
                                <option>Coustomer_Name</option>
                            </select>
                        </div>
                    </div>
                        <div class="col">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                                <select class="form-select" id="status-filter">
                                    <option>Coustomer_Email</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                <select class="form-select" id="price-filter">
                                    <option>Price</option>
                                </select>
                            </div>
                        </div> -->
                    
                    <div class="col">
                        <button class="btn btn-success w-100">
                            <i class="fas fa-plus"></i> Add New Coustomer
                        </button>
                    </div>
                </div>
                <hr>

                <!-- Users Table -->
                <div style="max-height: 380px; overflow-y: auto;">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                        

                        <?php 
                        while($row=mysqli_fetch_assoc($res))
                    
                        {?>
                        <tbody id="users-listt">
                           <td><?php echo $row['u_id'] ?></td>
                           <td><?php echo $row['u_name'] ?></td>
                           <td><?php echo $row['email'] ?></td>
                           <td><?php echo $row['phone'] ?></td>
                           <td><?php echo $row['role'] ?></td>
                           <td>
                            <?php 
                            echo "<span class='t-op-nextlvl label-tag' class='badge  badge-delete'><button type='button'class='btn btn-danger' style='color:black;'>
                            <a href='?type=delete&u_id=".$row['u_id'].
                            "'style='color:black'>Delete</a></button></span>";
                                         
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
    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</php>
