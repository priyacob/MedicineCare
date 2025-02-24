<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<!-- Title -->
	<title>Mediplus - Free Medical and Doctor Directory HTML Template.</title>

	<!-- Favicon -->
	<link rel="icon" href="img/favicon.png">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"
		integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/nice-select.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- icofont CSS -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="css/slicknav.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="css/datepicker.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Medipro CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">


	<style>
    .user-menu {
        position: relative;
        display: flex;
        align-items: center;
    }
    .user-menu img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
		background-color: transparent;
    }
    .dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        top: 50px;
        background: white;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        min-width: 200px;
        z-index: 1000;
        overflow: hidden;
    }
    .dropdown-menu a {
        display: block;
        padding: 12px;
        text-decoration: none;
        color: black;
        transition: 0.3s;
    }
    .dropdown-menu a:hover {
        background-color: #f4f4f4;
    }
    .dropdown-divider {
        height: 1px;
        background-color: #ddd;
        margin: 5px 0;
    }
    .profile-card {
        display: flex;
        align-items: center;
        padding: 15px;
        border-bottom: 1px solid #ddd;
    }
    .profile-card img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>

</head>

<body>

	<!-- Preloader -->
	<div class="preloader">
		<div class="loader">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>

			<div class="indicator">
				<svg width="16px" height="12px">
					<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				</svg>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Get Pro Button -->
	<ul class="pro-features">

		<li class="big-title">Pro Version Available on Themeforest</li>
		<li class="title">Pro Version Features</li>
		<li>2+ premade home pages</li>
		<li>20+ html pages</li>
		<li>Color Plate With 12+ Colors</li>
		<li>Sticky Header / Sticky Filters</li>
		<li>Working Contact Form With Google Map</li>
		<div class="button">
			<a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879"
				target="_blank" class="btn">Pro Version Demo</a>
			<a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank"
				class="btn">Buy Pro Version</a>
		</div>
	</ul>

	<!-- Header Area -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-12">
					<div class="logo">
						<a href="index.html"><img src="img/logo.png" alt="Logo"></a>
					</div>
				</div>
				<div class="col-lg-7 col-md-9 col-12">
					<nav class="navigation">
						<ul class="nav menu">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="medicine.php">Medicine</a></li>
							<li><a href="#">Blogs</a>
								<ul class="dropdown">
									<li><a href="blog-single.html">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-2 col-12 flex justify-end items-center">
					<?php if (isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']) { ?>
						<div class="user-menu dropdown">
							<button class="btn flex items-center">
								<img src="https://cdn-icons-png.flaticon.com/128/10628/10628940.png" alt="User">
								<span class="ml-2"><?php echo $_SESSION['USER_NAME']; ?> ▼</span>
							</button>
							<div class="dropdown-menu">
								<div class="profile-card">
									<img src="https://cdn-icons-png.flaticon.com/128/10628/10628940.png" alt="User">
									<div>
										<strong><?php echo $_SESSION['USER_NAME']; ?></strong>
										<p class="text-sm text-gray-500">User Profile</p>
									</div>
								</div>
								<a class="dropdown-item" href="profile.php">Profile</a>
								<a class="dropdown-item" href="orders.php">My Orders</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item text-danger" href="logout.php">Logout</a>
							</div>
						</div>
					<?php } else { ?>
						<a href="login.php" class="btn">SignUp/SignIn</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>

	<!-- End Header Area -->





	<script src="js/jquery.min.js"></script>
	<!-- jquery Migrate JS -->
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<!-- jquery Ui JS -->
	<script src="js/jquery-ui.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Datepicker JS -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Jquery Nav JS -->
	<script src="js/jquery.nav.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- Niceselect JS -->
	<script src="js/niceselect.js"></script>
	<!-- Tilt Jquery JS -->
	<script src="js/tilt.jquery.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- counterup JS -->
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Steller JS -->
	<script src="js/steller.js"></script>
	<!-- Wow JS -->
	<script src="js/wow.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Counter Up CDN JS -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
</body>

</html>