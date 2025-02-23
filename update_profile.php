<?php
require('includes/db.php'); // Database connection
require('function.inc.php');

if (!isset($_SESSION['USER_ID'])) {
    echo "Unauthorized access!";
    exit();
}

$user_id = $_SESSION['USER_ID'];

// Get values from POST
$u_name = get_safe_value($con, $_POST['u_name']);
$phone = get_safe_value($con, $_POST['phone']);
$address = get_safe_value($con, $_POST['address']);
$state = get_safe_value($con, $_POST['state']);
$landmark = get_safe_value($con, $_POST['landmark']);
$flat_house_no = get_safe_value($con, $_POST['flat_house_no']);
$pin_no = get_safe_value($con, $_POST['pin_no']);

// Update query
$query = "UPDATE users SET u_name=?, phone=?, address=?, state=?, landmark=?, flat_house_no=?, pin_no=? WHERE u_id=?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "sssssssi", $u_name, $phone, $address, $state, $landmark, $flat_house_no, $pin_no, $user_id);
if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Profile updated successfully!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Error updating profile.'); window.location='profile.php';</script>";
}
?>
