<?php
	include ("db_connection.php");
	$logo = "SELECT 'image'  FROM `image` WHERE `name` = 'logo_big';";
	$sql1 = "SELECT 'image'  FROM `image` WHERE `name` = 'slide01';";
	//$sql2 = ;
	//$sql3 = ;
	//$sql4 = ;
	$result0 = mysqli_query($conn, $logo);
	$row = mysqli_fetch_object($result0);
	$result1 = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_object($result1);
	//$result2 = mysqli_query($conn, $sql2);
	//$result3 = mysqli_query($conn, $sql3);
	//$result4 = mysqli_query($conn, $sql4);
	?>
	<section class="intro_section page_mainslider ds">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?php echo $row->image; ?>" alt="" class="slide-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description">
											<img src="<?php echo $row1->image; ?>" >
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
							<img src=".$result2" alt="" class="slide-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description">
											<img src="images/logo_big.png" alt="">
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
							<img src="$.result3" alt="" class="slide-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description">
											<img src="images/logo_big.png" alt="">
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
							<img src="$.result4" alt="" class="slide-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description">
											<img src="images/logo_big.png" alt="">
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




