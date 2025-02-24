<?php
include('includes/db.php');
include("navbar.php");	
$sql = "SELECT * FROM medicinecare"; // Replace with your actual table name
$result = mysqli_query($con, $sql);
?>





	<!-- Slider Area -->
<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/signup-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Your Trusted <span>Pharmacy</span> for Quality <span>Medicines!</span></h1>
                            <p>We provide authentic medicines, health supplements, and expert guidance for your well-being.</p>
                            <div class="button">
                                <a href="#" class="btn">Shop Now</a>
                                <a href="#" class="btn primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/signup-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Get Your <span>Prescriptions</span> Filled with <span>Ease!</span></h1>
                            <p>Order online or visit our pharmacy for fast and reliable service.</p>
                            <div class="button">
                                <a href="#" class="btn">Order Now</a>
                                <a href="#" class="btn primary">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/pharmacy3.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>Fast & Reliable <span>Medicine</span> Home Delivery!</h1>
                            <p>Get your medications delivered to your doorstep with our hassle-free service.</p>
                            <div class="button">
                                <a href="#" class="btn">Shop Now</a>
                                <a href="#" class="btn primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->

<!-- cards -->



 <!-- card finish -->
		<main class="max-w-7xl mx-auto p-4">
        <h2 class="text-xl font-semibold mb-4 text-blue-800">Categories</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-shadow border border-blue-100">
                <h3 class="font-bold text-blue-600">Anti-Acids</h3>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-shadow border border-blue-100">
                <h3 class="font-bold text-blue-600">Pain Relievers</h3>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-shadow border border-blue-100">
                <h3 class="font-bold text-blue-600">Cough & Cold</h3>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-shadow border border-blue-100">
                <h3 class="font-bold text-blue-600">Vitamins & Supplements</h3>
            </div>
        </div>
    <section class="mt-8">
            <h2 class="text-xl font-semibold mb-4 text-blue-800">Featured Medicines</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-4 text-center border border-blue-100 hover:shadow-lg transition-shadow">
                    <img src="img/pf1.jpg" alt="Product Image" class="w-full h-32 md:h-40 object-cover rounded-t-lg mb-2">
                    <h3 class="font-bold text-blue-600">Antacid Tablet</h3>
                    <p class="text-gray-600">Relieves heartburn and indigestion</p>
                    <p class="font-semibold text-blue-700">RS100.00</p>
                    <button class="mt-2 bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition">Buy Now</button>
                    <button class="mt-2 bg-blue-100 text-blue-600 rounded-lg px-4 py-2 hover:bg-blue-200 transition">Add to Cart</button>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 text-center border border-blue-100 hover:shadow-lg transition-shadow">
                    <img src="img/blog2.jpg" alt="Product Image" class="w-full h-32 md:h-40 object-cover rounded-t-lg mb-2">
                    <h3 class="font-bold text-blue-600">Pain Reliever</h3>
                    <p class="text-gray-600">Effective relief from headaches</p>
                    <p class="font-semibold text-blue-700">RS80.50</p>
                    <button class="mt-2 bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition">Buy Now</button>
                    <button class="mt-2 bg-blue-100 text-blue-600 rounded-lg px-4 py-2 hover:bg-blue-200 transition">Add to Cart</button>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 text-center border border-blue-100 hover:shadow-lg transition-shadow">
                    <img src="img/blog3.jpg" alt="Product Image" class="w-full h-32 md:h-40 object-cover rounded-t-lg mb-2">
                    <h3 class="font-bold text-blue-600">Vitamin C Supplement</h3>
                    <p class="text-gray-600">Boosts immunity and overall health</p>
                    <p class="font-semibold text-blue-700">RS150.00</p>
                    <button class="mt-2 bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition">Buy Now</button>
                    <button class="mt-2 bg-blue-100 text-blue-600 rounded-lg px-4 py-2 hover:bg-blue-200 transition">Add to Cart</button>
                </div>
            </div>
        </section>
    </main>
		
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
							<div class="button">
								<a href="#" class="btn">Contact Now</a>
								<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		
		<!-- Start service -->
<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Pharmacy Services for Your Well-being</h2>
                    <img src="img/section-img.png" alt="#">
                    <p>We provide a wide range of pharmaceutical services to ensure your health and convenience.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-pill"></i>
                    <h4><a href="service-details.html">Prescription Medicines</a></h4>
                    <p>Get your prescribed medications with ease from our certified pharmacy.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-capsule"></i>
                    <h4><a href="service-details.html">Over-the-Counter Drugs</a></h4>
                    <p>We offer a variety of OTC medicines for common ailments.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-heart-beat"></i>
                    <h4><a href="service-details.html">Health & Wellness Products</a></h4>
                    <p>Discover a range of supplements, vitamins, and personal care products.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-ui-calendar"></i>
                    <h4><a href="service-details.html">Medicine Home Delivery</a></h4>
                    <p>Get your medicines delivered to your doorstep for convenience.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-test-tube"></i>
                    <h4><a href="service-details.html">Health Checkups</a></h4>
                    <p>Avail of diagnostic and health screening services at our store.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-medical-sign-alt"></i>
                    <h4><a href="service-details.html">Vaccination Services</a></h4>
                    <p>Get routine vaccinations administered by certified professionals.</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!--/ End service -->

		
		<!-- Pricing Table -->
<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Affordable Medicines at the Best Prices</h2>
                    <img src="img/section-img.png" alt="#">
                    <p>We offer a variety of essential medicines at competitive prices to support your health.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="icofont icofont-prescription"></i>
                        </div>
                        <h4 class="title">Prescription Medicines</h4>
                        <div class="price">
                            <p class="amount">Varies<span>/ Per Prescription</span></p>
                        </div>    
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>Authentic medications</li>
                        <li><i class="icofont icofont-ui-check"></i>Certified pharmacy</li>
                        <li><i class="icofont icofont-ui-check"></i>Doctor consultation available</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="#">Order Now</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="icofont icofont-capsule"></i>
                        </div>
                        <h4 class="title">Vitamins & Supplements</h4>
                        <div class="price">
                            <p class="amount">$25<span>/ Per Bottle</span></p>
                        </div>    
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>Boosts immunity</li>
                        <li><i class="icofont icofont-ui-check"></i>High-quality ingredients</li>
                        <li><i class="icofont icofont-ui-check"></i>Doctor-approved</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="#">Order Now</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <i class="icofont icofont-prescription"></i>
                        </div>
                        <h4 class="title">Prescription Medicines</h4>
                        <div class="price">
                            <p class="amount">Varies<span>/ Per Prescription</span></p>
                        </div>    
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>Authentic medications</li>
                        <li><i class="icofont icofont-ui-check"></i>Certified pharmacy</li>
                        <li><i class="icofont icofont-ui-check"></i>Doctor consultation available</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="#">Order Now</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
        </div>    
    </div>    
</section>    
<!--/ End Pricing Table -->
