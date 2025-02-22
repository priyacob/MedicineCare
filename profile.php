<?php
session_start();
include 'includes/db.php';

$user_id = $_SESSION['user_id']; // Assuming user is logged in

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $pin_no = mysqli_real_escape_string($con, $_POST['pin_no']);
    $landmark = mysqli_real_escape_string($con, $_POST['landmark']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $flat_house_no = mysqli_real_escape_string($con, $_POST['flat_house_no']);

    $update_query = "UPDATE users SET address='$address', pin_no='$pin_no', landmark='$landmark', state='$state', flat_house_no='$flat_house_no' WHERE u_id='$user_id'";
    
    if (mysqli_query($con, $update_query)) {
        echo "<script>alert('Profile updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating profile!');</script>";
    }
}

$query = "SELECT * FROM users WHERE u_id='$user_id'";
$result = mysqli_query($con, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .profile-container {
            width: 50%;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #28a745;
            border: none;
            padding: 10px;
            width: 100%;
            color: white;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2 class="text-center">User Profile</h2>
        <form method="POST">
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $user['address']; ?>" required>
            </div>
            <div class="form-group">
                <label>Pin No</label>
                <input type="text" name="pin_no" class="form-control" value="<?php echo $user['pin_no']; ?>" required>
            </div>
            <div class="form-group">
                <label>Landmark</label>
                <input type="text" name="landmark" class="form-control" value="<?php echo $user['landmark']; ?>">
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" name="state" class="form-control" value="<?php echo $user['state']; ?>" required>
            </div>
            <div class="form-group">
                <label>Flat/House No</label>
                <input type="text" name="flat_house_no" class="form-control" value="<?php echo $user['flat_house_no']; ?>" required>
            </div>
            <button type="submit" class="btn-primary">Update Profile</button>
        </form>
    </div>
</body>
</html>
