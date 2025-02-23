<?php
session_start();  // Ensure session is started at the very top
require('includes/db.php');
require('function.inc.php');

$email = get_safe_value($con, $_POST['email']);
$password = md5(get_safe_value($con, $_POST['password'])); // If passwords are stored with MD5


$query = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "ss", $email, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user) {
    // Store session variables
    $_SESSION['USER_LOGIN'] = 'yes';
    $_SESSION['USER_ID'] = $user['u_id'];
    $_SESSION['USER_NAME'] = $user['u_name'];

    echo "valid";
} else {
    echo "wrong";
}
?>

