<?php
	include ("db_connection.php");
	$logo = "SELECT * FROM `image` WHERE name = 'logo_big';";
	$result = mysqli_query($conn, $logo);
	$row = mysqli_fetch_array($result);
	$slide1 = "SELECT * FROM `image` WHERE name = 'slide01';";
	$result1 = mysqli_query($conn, $slide1);
	$row1 = mysqli_fetch_array($result1);
	$slide2 = "SELECT * FROM `image` WHERE name = 'slide02';";
	$result2 = mysqli_query($conn, $slide2);
	$row2 = mysqli_fetch_array($result2);
	$slide3 = "SELECT * FROM `image` WHERE name = 'slide03';";
	$result3 = mysqli_query($conn, $slide3);
	$row3 = mysqli_fetch_array($result3);
	$slide4 = "SELECT * FROM `image` WHERE name = 'slide04';";
	$result4 = mysqli_query($conn, $slide4);
	$row4 = mysqli_fetch_array($result4);
	

	?>
	<section class="intro_section page_mainslider ds">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?= $row1['url']; ?>" alt="" class="slide-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description">
											<img src="<?= $row['url']; ?>" alt=""> 
											<h2 class="section_header topmargin_30 bottommargin_30" style="color: #992600;">
												Mechanic Services
												<br>
												<strong class="big">Creative &amp; Professional</strong>
											</h2>
										</div>
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li>
						<img src="<?= $row2['url']; ?>" alt="" class="slide-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description">
											<img src="<?= $row['url']; ?>" alt="">
											<h2 class="section_header topmargin_30 bottommargin_30" style="color: #992600;">
												Mechanic Services
												<br>
												<strong class="big">Creative &amp; Professional</strong>
											</h2>
										</div>
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li>
							<img src="<?= $row3['url']; ?>" alt="" class="slide-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description">
											<img src="<?= $row['url']; ?>" alt="">
											<h2 class="section_header topmargin_30 bottommargin_30" style="color: #992600;">
												Mechanic Services
												<br>
												<strong class="big">Creative &amp; Professional</strong>
											</h2>
										</div>
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li>
							<img src="<?= $row4['url']; ?>" alt="" class="slide-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description">
											<img src="<?= $row['url']; ?>" alt="">
											<h2 class="section_header topmargin_30 bottommargin_30" style="color: #992600;">
												Mechanic Services
												<br>
												<strong class="big">Creative &amp; Professional</strong>
											</h2>
										</div>
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>




