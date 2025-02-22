<?php
require('includes/db.php');
require('function.inc.php');


$type=get_safe_value($con,$_POST['type']);
$otp=get_safe_value($con,$_POST['otp']);

if($type=='email'){
	
	if($_SESSION['EMAIL_OTP']==$otp){
		unset($_SESSION['EMAIL_OTP']);
		echo "done";
		
	}else{
		echo "no";
	}
}


?>