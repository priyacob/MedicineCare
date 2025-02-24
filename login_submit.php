<?php
require('includes/db.php');
require('function.inc.php');

$email=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,md5($_POST['password']));

<<<<<<< HEAD
$res=mysqli_query($con,"select * from users where email='$email' and password='$password'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
	$row=mysqli_fetch_assoc($res);
	$_SESSION['USER_LOGIN']='yes';
	$_SESSION['USER_ID']=$row['u_id'];
	$_SESSION['USER_NAME']=$row['u_name'];
	echo "valid";
}else{
	echo "wrong";
}
?>
=======

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

>>>>>>> b00537e11ee7c0bfa5b6781661ef4d56e8aad97f
