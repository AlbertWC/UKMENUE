@extends('layouts.app1')

@section('content')
<body>
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader"></div>
		</div>
	
		<!-- Main section start -->
			<div class="site-content-warp">
				<!-- Left Side section -->
				<div class="main-sidebar">
					<div class="mb-warp">
						<a href="/home" class="site-logo">
							<h2>UKM</h2>
							<p>Event Planner System</p>
						</a>
						<div class="about-info">
							<h2>Group Wael</h2>
							<p>We are a group of student in UKM who are willing to help in improving the booking process.</p></div>
						
						
					</div>
				</div>
				<!-- Left Side section end -->
				<!-- Page start -->
				<div class="page-section">
					<div class="hero-section">
						<div class="hero-scroll">
							<div class="hero-track">
								
								<div class="hs-item set-bg" data-setbg="img/hero/dewan_kuliah_ftsm.jpg">
									
									<div class="hs-info">
										<h5>FTSM</h5>
										<p><a href="/venues/5"><img src="../View Venue.png" alt="" ></a></p>
										
									</div>
								</div>
								<div class="hs-item set-bg" data-setbg="img/hero/DECTAR.jpg">
									<div class="hs-info">
										<h5>Dectar</h5>
										<p><a href="/venues/9"><img src="../View Venue.png" alt="" ></a></p>
										
									</div>
								</div>
								<div class="hs-item set-bg" data-setbg="img/hero/dg.jpg">
									<div class="hs-info">
										<h5>Dewan Gemilang</h5>
										<p><a href="/venues/8"><img src="../View Venue.png" alt="" ></a></p>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Page end -->
			
			
	
		<!-- Main section end -->
		
		<!--====== Javascripts & Jquery ======-->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/circle-progress.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
	
		</body>

@endsection
