<?php
require('includes/db.php');
include 'navbar.php';


if (isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN'] == 'yes') {
 ?>
 	<script>
		window.location.href = 'index.php';
 	</script>
<?php
 }

?>

<!-- Start Bradcaump area -->
 <div></div>
<div class="ht__bradcaump__area" style="margin-top:70px;">
	<div class="ht__bradcaump__wrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="bradcaump__inner">
						<div class="bradcaump-inner">
							<a class="breadcrumb-item" href="index.php">Home</a>
							<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
							<span class="breadcrumb-item active" >Login/Register</span>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Contact Area -->
<section class="htc__contact__area ptb--100 bg__white">
	<div class="container">
		<div class="row">
			  <div class="col-md-6">
				<div class="contact-form-wrap mt--60">
					<div class="col-xs-12">
						<div class="contact-title">
							<h2 class="title__line--6">Login</h2>
						</div>
					</div>
					<div class="col-xs-12">
						<form id="login-form" method="post">
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="login_email" id="login_email" placeholder="Your Email*" style="width:100%">
								</div>
								<span class="field_error " id="login_email_error" style="color: black"></span>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
								<input type="password" name="login_password" id="login_password" placeholder="Your Password*" style="width:100%">

								</div>
								<span class="field_error" id="login_password_error" style="color: black"></span>
							</div>

							<div class="contact-btn">
								<button type="button" class="fv-btn" onclick="user_login()">Login</button>
								
								<a href="forgot_password.php" class="forgot_password">Forgot Password</a>
							</div>
						</form>
						<div class="form-output login_msg">
							<p class="form-messege field_error"  style="color: black"></p>
						</div>
					</div>
				</div>
			</div>  


			<div class="col-md-6">
				<div class="contact-form-wrap mt--60">
					<div class="col-xs-12">
						<div class="contact-title">
							<h2 class="title__line--6">Register Form</h2>
						</div>
					</div>
					<div class="col-xs-12">
						<form id="register-form" method="post">
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%">
								</div>
								<span class="field_error" id="name_error"></span>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="email" id="email" placeholder="Your Email*" style="width:45%">


									<button type="button" class="fv-btn email_sent_otp height_60px" onclick="email_sent_otp()">Send OTP</button>

									<input type="text" id="email_otp" placeholder="OTP" style="width:45%" class="email_verify_otp">


									<button type="button" class="fv-btn email_verify_otp height_60px" onclick="email_verify_otp()">Verify OTP</button>

									<span id="email_otp_result"></span>
								</div>
								<span class="field_error" id="email_error"></span>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="mobile" id="mobile" placeholder="Your Mobile*" style="width:45%">

									<button type="button" class="fv-btn mobile_sent_otp height_60px" onclick="mobile_sent_otp()">Send OTP</button>

									<input type="text" id="mobile_otp" placeholder="OTP" style="width:45%" class="mobile_verify_otp">


									<button type="button" class="fv-btn mobile_verify_otp height_60px" onclick="mobile_verify_otp()">Verify OTP</button>

									<span id="mobile_otp_result"></span>


								</div>
								<span class="field_error" id="mobile_error"></span>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
								<input type="password" name="password" id="password" placeholder="Your Password*" style="width:100%">

								</div>
								<span class="field_error" id="password_error"></span>
							</div>
							<div class="contact-btn">
								<button type="button" class="fv-btn" onclick="user_register()">Register</button>
							</div>
						</form>
						<div class="form-output register_msg">
							<p class="form-messege field_error" style="color: green ; font-size : 25px"></p>
						</div>
					</div>
				</div>
			</div>
</section>
<input type="hidden" id="is_email_verified" />
<input type="hidden" id="is_mobile_verified" />
<script>
	function email_sent_otp() { 
		jQuery('#email_error').html('');
		var email = jQuery('#email').val();
		if (email == '') {
			jQuery('#email_error').html('Please enter email id');
		} else {
			jQuery('.email_sent_otp').html('Please wait..');
			jQuery('.email_sent_otp').attr('disabled', true);
			jQuery.ajax({
				url: 'send_otp.php',
				type: 'post',
				data: 'email=' + email + '&type=email',
				success: function(result) {
					console.log(result)
					if (result == 'done') {
						jQuery('#email').attr('disabled', true);
						jQuery('.email_verify_otp').show();
						jQuery('.email_sent_otp').hide();

					} else if (result == 'email_present') {
						jQuery('.email_sent_otp').html('Send OTP');
						jQuery('.email_sent_otp').attr('disabled', false);
						jQuery('#email_error').html('Email id already exists');
					} else {
						jQuery('.email_sent_otp').html('Send OTP');
						jQuery('.email_sent_otp').attr('disabled', false);
						jQuery('#email_error').html('Please try after sometime');
					}
				}
			});
		}
	}

	function email_verify_otp() {
		jQuery('#email_error').html('');
		var email_otp = jQuery('#email_otp').val();
	    console.log(email_otp);
		if (email_otp == '') {
			jQuery('#email_error').html('Please enter OTP');
		} else {
			jQuery.ajax({
					url: 'check_otp.php',
					type: 'post',
					data: 'otp=' + email_otp + '&type=email',
					success: function(result) {
						console.log(result)
						if (result == 'done') {
							jQuery('.email_verify_otp').hide();
							jQuery('#email_otp_result').html('Email id verified');
							jQuery('#is_email_verified').val('1');
							if (jQuery('#is_mobile_verified').val() == 1) {
								jQuery('#btn_register').attr('disabled', false);
							}
						} else {
							jQuery('#email_error').html('Please enter valid OTP');
							
						}
					}

				}

			);
		}
	}

	function user_register() {
	jQuery('.field_error').html('');
	var name = jQuery("#name").val();
	var email = jQuery("#email").val();
	var mobile = jQuery("#mobile").val();
	var password = jQuery("#password").val();
	var is_error = '';
	if (name == "") {
		jQuery('#name_error').html('Please enter name');
		is_error = 'yes';
	} if (email == "") {
		jQuery('#email_error').html('Please enter email');
		is_error = 'yes';
	} if (mobile == "") {
		jQuery('#mobile_error').html('Please enter mobile');
		is_error = 'yes';
	} if (password == "") {
		jQuery('#password_error').html('Please enter password');
		is_error = 'yes';
	}
	if (is_error == '') {
		jQuery.ajax({
			url: 'register_submit.php',
			type: 'post',
			data: 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&password=' + password,
			success: function (result) {
				console.log(result)
				if (result == 'email_present') {
					jQuery('#email_error').html('Email id already present');
				}
				if (result == 'insert') {
					jQuery('.register_msg p').html('You are successfully registered');
				}
			}
		});
	}

}

	

function user_login() {
	jQuery('.field_error').html('');
	var email = jQuery("#login_email").val();
	var password = jQuery("#login_password").val();
	var is_error = '';
	if (email == "") {
		jQuery('#login_email_error').html('Please enter email');
		is_error = 'yes';
	} if (password == "") {
		jQuery('#login_password_error').html('Please enter password');
		is_error = 'yes';
	}
	if (is_error == '') {
		jQuery.ajax({
			url: 'login_submit.php',
			type: 'post',
			data: 'email=' + email + '&password=' + password,
			success: function (result) {
				console.log(result)
				result = result.trim();
				if (result == 'wrong') {
					jQuery('.login_msg p').html('Please enter valid login details');
				}
				if (result == 'valid') {
					window.location.href = window.location.href;
				}
			}
		});
	}
}

</script>

<style>
	/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 900px;
    margin: auto;
    background: white;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

/* Breadcrumb Area */
.ht__bradcaump__area {
    background-color: #007bff;
    padding: 15px 0;
    text-align: center;
    color: white;
}
.bradcaump-inner a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

/* Forms */
.contact-form-wrap {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}
.contact-title h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

.single-contact-form {
    margin-bottom: 15px;
}

input[type="text"],
input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Buttons */
.fv-btn {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s;
}
.fv-btn:hover {
    background-color: #0056b3;
}

.forgot_password {
    display: block;
    margin-top: 10px;
    text-decoration: none;
    color: #007bff;
}

.forgot_password:hover {
    text-decoration: underline;
}

/* OTP Section */
.email_sent_otp, .email_verify_otp,
.mobile_sent_otp, .mobile_verify_otp {
    margin-left: 5px;
    font-size: 14px;
    padding: 8px 10px;
}

/* Responsive */
@media (max-width: 768px) {
    .contact-box {
        text-align: center;
    }
    input[type="text"], input[type="password"] {
        width: 100%;
    }
}

</style> 