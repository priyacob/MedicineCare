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

<!-- Start Form Section -->
<section class="form-area ptb--100 bg__white" style="background: url('img/about-img.jpg') center/cover no-repeat;">
    <div class="container">
        <div class="row">
            <!-- Login Form -->
            <div class="col-md-6">
                <div class="form-wrap">
                    <h2 class="form-title">Login</h2>
                    <form id="login-form" method="post">
                        <input type="email" name="login_email" id="login_email" placeholder="Your Email*" required>
                        <span class="field_error" id="login_email_error"></span>
                        <input type="password" name="login_password" id="login_password" placeholder="Your Password*" required>
                        <span class="field_error" id="login_password_error"></span>
                        <button type="button" class="btn" onclick="user_login()">Login</button>
                        <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
                    </form>
                    <div class="form-output login_msg">
                        <p class="form-messege field_error"></p>
                    </div>
                </div>
            </div>

            <!-- Register Form -->
            <div class="col-md-6">
                <div class="form-wrap">
                    <h2 class="form-title">Register</h2>
                    <form id="register-form" method="post">
                        <input type="text" name="name" id="name" placeholder="Your Name*" required>
                        <span class="field_error" id="name_error"></span>
                        <input type="email" name="email" id="email" placeholder="Your Email*" required>
                        <span class="field_error" id="email_error"></span>
                        <button type="button" class="btn otp-btn" onclick="email_sent_otp()">Send OTP</button>
                        <input type="text" id="email_otp" placeholder="Enter OTP" required>
                        <button type="button" class="btn otp-btn" onclick="email_verify_otp()">Verify OTP</button>
                        <span id="email_otp_result"></span>
                        <input type="password" name="password" id="password" placeholder="Your Password*" required>
                        <span class="field_error" id="password_error"></span>
                        <button type="button" class="btn" onclick="user_register()">Register</button>
                    </form>
                    <div class="form-output register_msg">
                        <p class="form-messege field_error"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<input type="hidden" id="is_email_verified" />

<!-- JavaScript -->
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
                        jQuery('#email_error').html('otp sent sucessfully');
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
	} 
    if (password == "") {
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
					window.location.href = 'index.php'; // Redirect to index.php after successful login
				}
			}
		});
	}
}


</script>
<!-- Styling -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 800px;
        margin: auto;
        background: transparent;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .form-wrap {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    }
    .form-title {
        text-align: center;
        color: #007bff;
        margin-bottom: 20px;
    }
    input[type="text"], input[type="password"], input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .btn {
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        width: 100%;
        margin-top: 10px;
    }
    .btn:hover {
        background-color: #0056b3;
    }
    .forgot-password {
        display: block;
        margin-top: 10px;
        text-align: center;
        color: #007bff;
    }
</style>

