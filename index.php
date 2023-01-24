<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/carrepair/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 05:27:27 GMT -->
<head>
	<title>CarRepair</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" id="color-switcher-link">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>


	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="widget widget_search">
			<form method="get" class="searchform form-inline" action="https://html.modernwebtemplates.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit">Search</button>
			</form>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas" class="dark">
		<div id="box_wrapper">

			<?php 
				include ("template.php");
				include ("index_logo.php");
			?>

			<!--<section class="intro_section page_mainslider ds">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src=".$result" alt="" class="slide-bg">
							
						</li>
						<li>
							<img src="images/slide02.jpg" alt="" class="slide-bg">
							
						</li>
						<li>
							<img src="images/slide03.jpg" alt="" class="slide-bg">
							
						</li>
						<li>
							<img src="images/slide04.jpg" alt="" class="slide-bg">
							
						</li>
					</ul>
				</div>
			
			</section>-->

			<?php 
				include("nav.php");
			?>
			<section class="ds section_padding_110">
				<div class="container">
					<div class="row">
						<div class="col-md-7 text-center">
							<div class="block-style1 text-right bottommargin_10">
								<div class="theme_background">
									<h2 class="section_header bottommargin_5">
										<span class="regular">You need</span>
										<span class="medium">Renovation?</span>
									</h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, mi sed fermentum pulvinar, enim tortor dictum.
									</p>
								</div>
							</div>
							<img src="images/car.png" alt="">
						</div>
						<div class="col-md-5">
							<div class="topmargin_40">
								<div class="media teaser inline-block text-left to_animate" data-animation="pullDown">
									<div class="media-left">
										<div class="teaser_icon main_bg_color">
											<i class="fa fa-clock-o"></i>
										</div>
									</div>
									<div class="media-body toppadding_10">
										<h4 class="bottommargin_20 text-uppercase">Easy booking</h4>
									</div>
								</div>
								<div class="media teaser inline-block text-left to_animate" data-animation="pullDown">
									<div class="media-left">
										<div class="teaser_icon main_bg_color">
											<i class="fa fa-line-chart"></i>
										</div>
									</div>
									<div class="media-body toppadding_10">
										<h4 class="bottommargin_20 text-uppercase">Provide Hi-Tech workshop</h4>
									</div>
								</div>
								<div class="media teaser inline-block text-left to_animate" data-animation="pullDown">
									<div class="media-left">
										<div class="teaser_icon main_bg_color">
											<i class="fa fa-cogs"></i>
										</div>
									</div>
									<div class="media-body toppadding_10">
										<h4 class="bottommargin_20 text-uppercase">Use of authentic parts</h4>
									</div>
								</div>
								<div class="media teaser inline-block text-left to_animate" data-animation="pullDown">
									<div class="media-left">
										<div class="teaser_icon main_bg_color">
											<i class="fas fa-male"></i>
										</div>
									</div>
									<div class="media-body toppadding_10">
										<h4 class="bottommargin_20 text-uppercase">Trusted staff</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!--	<section class="ds ms section_padding_top_100 section_padding_bottom_75 page_testimonials parallax">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<img src="images/wings.png" alt="" class="light-logo">
							<img src="images/wings-dark.png" alt="" class="dark-logo">
							<h2 class="section_header topmargin_10">Testimonials</h2>

							<div class="owl-carousel testimonials-carousel topmargin_60 bottommargin_0" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1">
								<blockquote class="blockquote-item margin_0">
									Sed vitae placerat velit, non semper nibh. Maecenas pharetra risus vitae sodales vulputate. Praesent accumsan, mi nec tempor convallis, felis nulla.
									<div class="item-meta">
										<h5>
											Bill Alvarado
										</h5>
										<p class="grey poppins">Manager</p>
									</div>
								</blockquote>

								<blockquote class="blockquote-item margin_0">
									Etiam et pellentesque dui. Ut a sagittis est. Maecenas cursus massa nulla, sed finibus dolor rutrum ut. Nam luctus leo pharetra enim faucibus finibus.
									<div class="item-meta">
										<h5>
											Alberta Wilson
										</h5>
										<p class="grey poppins">Businessman</p>
									</div>
								</blockquote>

								<blockquote class="blockquote-item margin_0">
									Nam fringilla magna at ipsum pharetra, et lobortis ante finibus. Morbi eu quam ante. Mauris mollis venenatis tortor non luctus. Curabitur dignissim.
									<div class="item-meta">
										<h5>
											Zachary Fernandez
										</h5>
										<p class="grey poppins">Teacher</p>
									</div>
								</blockquote>

								<blockquote class="blockquote-item margin_0">
									Sed vitae placerat velit, non semper nibh. Maecenas pharetra risus vitae sodales vulputate. Praesent accumsan, mi nec tempor convallis, felis nulla.
									<div class="item-meta">
										<h5>
											Bill Alvarado
										</h5>
										<p class="grey poppins">Manager</p>
									</div>
								</blockquote>

								<blockquote class="blockquote-item margin_0">
									Etiam et pellentesque dui. Ut a sagittis est. Maecenas cursus massa nulla, sed finibus dolor rutrum ut. Nam luctus leo pharetra enim faucibus finibus.
									<div class="item-meta">
										<h5>
											Alberta Wilson
										</h5>
										<p class="grey poppins">Businessman</p>
									</div>
								</blockquote>

								<blockquote class="blockquote-item margin_0">
									Nam fringilla magna at ipsum pharetra, et lobortis ante finibus. Morbi eu quam ante. Mauris mollis venenatis tortor non luctus. Curabitur dignissim.
									<div class="item-meta">
										<h5>
											Zachary Fernandez
										</h5>
										<p class="grey poppins">Teacher</p>
									</div>
								</blockquote>

							</div>
						</div>
					</div>
				</div>
			</section> -->

			<section class="ds section_padding_110 table_section table_section_md">
				<div class="container">
					<div class="row bottommargin_60">
						<div class="col-sm-12 text-center">
							<img src="images/wings.png" alt="" class="light-logo">
							<img src="images/wings-dark.png" alt="" class="dark-logo">
							<h2 class="section_header topmargin_10">our popular video</h2>
						</div>
					</div>
					<div class="row vertical-tabs video-tabs columns_margin_bottom_30">
						<div class="col-md-3" style="position: relative; bottom: -25px; left: 50px;">
							<ul class="nav" role="tablist">
								<li class="to_animate in active" data-animation="stretchLeft">
									<div class="vertical-item with_background with_padding with_border bottommargin_30">
										<div class="item-content">
											<div class="item-meta greylinks">
												<!--<span class="item-date">2 days ago</span> /
												<a href="blog-single-video-right.html#comments">15 comments</a> /
												<span class="item-likes">27 likes</span>
											</div>-->
											<h4 class="entry-title regular">
												<a href="blog-full.html">Expertise In Innovative Two Wheeler Servicing</a>
											</h4>
										</div>
										<div class="media-links">
											<a href="#video-tab1" role="tab" data-toggle="tab" class="abs-link"></a>
										</div>
									</div>
								</li>
								<li class="to_animate" data-animation="stretchLeft">
									<div class="vertical-item with_background with_padding with_border bottommargin_30">
										<div class="item-content">
											<div class="item-meta greylinks">
												<!--<span class="item-date">3 days ago</span> /
												<a href="blog-single-video-right.html#comments">11 comments</a> /
												<span class="item-likes">20 likes</span>
											</div>-->
											<h4 class="entry-title regular">
												<a href="blog-full.html">Skilled Mechanic Force</a>
											</h4>
										</div>
										<div class="media-links">
											<a href="#video-tab2" role="tab" data-toggle="tab" class="abs-link"></a>
										</div>
									</div>
								</li>
								<li class="to_animate" data-animation="stretchLeft">
									<div class="vertical-item with_background with_padding with_border bottommargin_30">
										<div class="item-content">
											<div class="item-meta greylinks">
												<!--<span class="item-date">4 days ago</span> /
												<a href="blog-single-video-right.html#comments">22 comments</a> /
												<span class="item-likes">31 likes</span>
											</div>-->
											<h4 class="entry-title regular">
												<a href="blog-full.html">Spares And Lubricant</a>
											</h4>
										</div>
										<div class="media-links">
											<a href="#video-tab3" role="tab" data-toggle="tab" class="abs-link"></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="tab-content no-border">
								<div class="tab-pane fade active" id="video-tab1">
									<div class="embed-responsive embed-responsive-3by2">
										<a href="https://www.youtube.com/embed/JaS7n6qKQe4" class="embed-placeholder">
											<img src="images/video1.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="tab-pane fade" id="video-tab2">
									<div class="embed-responsive embed-responsive-3by2">
										<a href="https://www.youtube.com/embed/JaS7n6qKQe4" class="embed-placeholder">
											<img src="images/video2.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="tab-pane fade" id="video-tab3">
									<div class="embed-responsive embed-responsive-3by2">
										<a href="https://www.youtube.com/embed/JaS7n6qKQe4" class="embed-placeholder">
											<img src="images/video3.jpg" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3" style="position:relative; bottom: -25px; right: 50px;">
							<ul class="nav" role="tablist">
								<li class="to_animate in active" data-animation="stretchRight">
									<div class="vertical-item with_background with_padding with_border bottommargin_30">
										<div class="item-content">
											<div class="item-meta greylinks">
												<!--<span class="item-date">2 days ago</span> /
												<a href="blog-single-video-right.html#comments">15 comments</a> /
												<span class="item-likes">27 likes</span>
											</div>-->
											<h4 class="entry-title regular">
												<a href="blog-full.html">Various Sales Channels</a>
											</h4>
										</div>
										<div class="media-links">
											<a href="#video-tab1" role="tab" data-toggle="tab" class="abs-link"></a>
										</div>
									</div>
								</li>
								<li class="to_animate" data-animation="stretchRight">
									<div class="vertical-item with_background with_padding with_border bottommargin_30">
										<div class="item-content">
											<div class="item-meta greylinks">
												
												<!--<span class="item-date">3 days ago</span> /
												<a href="blog-single-video-right.html#comments">11 comments</a> /
												<span class="item-likes">20 likes</span>
											</div>-->
											<h4 class="entry-title regular">
												<a href="blog-full.html">Quality IT Infrastructure</a>
											</h4>
										</div>
										<div class="media-links">
											<a href="#video-tab2" role="tab" data-toggle="tab" class="abs-link"></a>
										</div>
									</div>
								</li>
								<li class="to_animate" data-animation="stretchRight">
									<div class="vertical-item with_background with_padding with_border bottommargin_30">
										<div class="item-content">
											<div class="item-meta greylinks">
												<!--<span class="item-date">4 days ago</span> /
												<a href="blog-single-video-right.html#comments">22 comments</a> /
												<span class="item-likes">31 likes</span>
											</div>-->
											<h4 class="entry-title regular">
												<a href="blog-full.html">We Focus On Vision, Mission, And Values</a>
											</h4>
										</div>
										<div class="media-links">
											<a href="#video-tab3" role="tab" data-toggle="tab" class="abs-link"></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<section class="ds columns_padding_0">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="section_header bottommargin_80">Featured works</h2>
							<div class="filters isotope_filters">
								<a href="#" data-filter="*" class="selected">All work</a>
								<a href="#" data-filter=".repair">Repair</a>
								<a href="#" data-filter=".mopar">Mopar</a>
								<a href="#" data-filter=".import">Import</a>
								<a href="#" data-filter=".ford">Ford</a>
								<a href="#" data-filter=".gm">Gm</a>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid columns_margin_0">
					<div class="row">
						<div class="col-sm-12">
							<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 repair">
									<div class="vertical-item gallery-item content-absolute vertical-center text-center cs">
										<div class="item-media">
											<img src="images/gallery/01.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content display_table">
											<div class="display_table_cell">
												<div class="links-wrap greylinks">
													<a href="#" class="like-link">
														<i class="flaticon-heart"></i>
													</a>
													<a class="p-link" title="" href="gallery-single.html">
														<i class="flaticon-link"></i>
													</a>
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/01.jpg">
														<i class="flaticon-glasses"></i>
													</a>
												</div>
												<h3 class="text-uppercase">
													<a href="gallery-single.html">Nulla finibus sed justo</a>
												</h3>
												<span class="categories-links greylinks">
													<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
												</span>
											</div>
										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 mopar">
									<div class="vertical-item gallery-item content-absolute vertical-center text-center cs">
										<div class="item-media">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content display_table">
											<div class="display_table_cell">
												<div class="links-wrap greylinks">
													<a href="#" class="like-link">
														<i class="flaticon-heart"></i>
													</a>
													<a class="p-link" title="" href="gallery-single.html">
														<i class="flaticon-link"></i>
													</a>
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/02.jpg">
														<i class="flaticon-glasses"></i>
													</a>
												</div>
												<h3 class="text-uppercase">
													<a href="gallery-single.html">Nulla finibus sed justo</a>
												</h3>
												<span class="categories-links greylinks">
													<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
												</span>
											</div>
										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 import">
									<div class="vertical-item gallery-item content-absolute vertical-center text-center cs">
										<div class="item-media">
											<img src="images/gallery/03.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content display_table">
											<div class="display_table_cell">
												<div class="links-wrap greylinks">
													<a href="#" class="like-link">
														<i class="flaticon-heart"></i>
													</a>
													<a class="p-link" title="" href="gallery-single.html">
														<i class="flaticon-link"></i>
													</a>
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg">
														<i class="flaticon-glasses"></i>
													</a>
												</div>
												<h3 class="text-uppercase">
													<a href="gallery-single.html">Nulla finibus sed justo</a>
												</h3>
												<span class="categories-links greylinks">
													<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
												</span>
											</div>
										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 ford">
									<div class="vertical-item gallery-item content-absolute vertical-center text-center cs">
										<div class="item-media">
											<img src="images/gallery/04.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content display_table">
											<div class="display_table_cell">
												<div class="links-wrap greylinks">
													<a href="#" class="like-link">
														<i class="flaticon-heart"></i>
													</a>
													<a class="p-link" title="" href="gallery-single.html">
														<i class="flaticon-link"></i>
													</a>
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/04.jpg">
														<i class="flaticon-glasses"></i>
													</a>
												</div>
												<h3 class="text-uppercase">
													<a href="gallery-single.html">Nulla finibus sed justo</a>
												</h3>
												<span class="categories-links greylinks">
													<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
												</span>
											</div>
										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 gm">
									<div class="vertical-item gallery-item content-absolute vertical-center text-center cs">
										<div class="item-media">
											<img src="images/gallery/05.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content display_table">
											<div class="display_table_cell">
												<div class="links-wrap greylinks">
													<a href="#" class="like-link">
														<i class="flaticon-heart"></i>
													</a>
													<a class="p-link" title="" href="gallery-single.html">
														<i class="flaticon-link"></i>
													</a>
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/05.jpg">
														<i class="flaticon-glasses"></i>
													</a>
												</div>
												<h3 class="text-uppercase">
													<a href="gallery-single.html">Nulla finibus sed justo</a>
												</h3>
												<span class="categories-links greylinks">
													<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
												</span>
											</div>
										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 repair">
									<div class="vertical-item gallery-item content-absolute vertical-center text-center cs">
										<div class="item-media">
											<img src="images/gallery/06.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content display_table">
											<div class="display_table_cell">
												<div class="links-wrap greylinks">
													<a href="#" class="like-link">
														<i class="flaticon-heart"></i>
													</a>
													<a class="p-link" title="" href="gallery-single.html">
														<i class="flaticon-link"></i>
													</a>
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/06.jpg">
														<i class="flaticon-glasses"></i>
													</a>
												</div>
												<h3 class="text-uppercase">
													<a href="gallery-single.html">Nulla finibus sed justo</a>
												</h3>
												<span class="categories-links greylinks">
													<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
												</span>
											</div>
										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 mopar">
									<div class="vertical-item gallery-item content-absolute vertical-center text-center cs">
										<div class="item-media">
											<img src="images/gallery/07.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content display_table">
											<div class="display_table_cell">
												<div class="links-wrap greylinks">
													<a href="#" class="like-link">
														<i class="flaticon-heart"></i>
													</a>
													<a class="p-link" title="" href="gallery-single.html">
														<i class="flaticon-link"></i>
													</a>
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/07.jpg">
														<i class="flaticon-glasses"></i>
													</a>
												</div>
												<h3 class="text-uppercase">
													<a href="gallery-single.html">Nulla finibus sed justo</a>
												</h3>
												<span class="categories-links greylinks">
													<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
												</span>
											</div>
										</div>
									</div>
								</div>

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 import">
									<div class="vertical-item gallery-item content-absolute vertical-center text-center cs">
										<div class="item-media">
											<img src="images/gallery/08.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content display_table">
											<div class="display_table_cell">
												<div class="links-wrap greylinks">
													<a href="#" class="like-link">
														<i class="flaticon-heart"></i>
													</a>
													<a class="p-link" title="" href="gallery-single.html">
														<i class="flaticon-link"></i>
													</a>
													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/08.jpg">
														<i class="flaticon-glasses"></i>
													</a>
												</div>
												<h3 class="text-uppercase">
													<a href="gallery-single.html">Nulla finibus sed justo</a>
												</h3>
												<span class="categories-links greylinks">
													<a rel="category" href="gallery-fullwidth-4-cols.html">Category 1</a>
												</span>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- eof .isotope_container.row -->
						</div>
					</div>
				</div>
			</section>

			<section class="ds section_padding_top_100 section_padding_bottom_90 columns_padding_0">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<img src="images/wings.png" alt="">
							<h2 class="section_header bottommargin_50">Latest news</h2>
						</div>
					</div>
					<div class="row columns_margin_bottom_30">
						<div class="col-md-4">
							<article class="vertical-item content-padding content-overlapping">
								<div class="item-media">
									<img src="images/blog/blog_post1.jpg" alt="">
								</div>
								<div class="item-content with_background with_border">
									<h4 class="entry-title thin bottommargin_20">
										<a href="blog-single-right.html">
											Nunc ac pulvinar ipsum. Nullam tempus lacinia.
										</a>
									</h4>
									<p>
										Pellentesque vel gravida ligula, tristique porta leo. Aenean euismod iaculis nisl, ac pellentesque dolor tempor id. Praesent nisl dui.
									</p>
									<div class="item-meta greylinks margin_0">
										<span class="item-date">4 days ago</span> /
										<a href="blog-single-video-right.html#comments">9 comments</a> /
										<span class="item-likes">17 likes</span>
									</div>
								</div>
							</article>
						</div>
						<div class="col-md-4">
							<article class="vertical-item content-padding content-overlapping">
								<div class="item-media">
									<img src="images/blog/blog_post2.jpg" alt="">
								</div>
								<div class="item-content with_background with_border">
									<h4 class="entry-title thin bottommargin_20">
										<a href="blog-single-right.html">
											In ut justo eget urna sagittis sollicitudin arcu.
										</a>
									</h4>
									<p>
										Praesent dictum accumsan sodales. Pellentesque euismod posuere lorem ac sodales. Maecenas viverra lacus ipsum.
									</p>
									<div class="item-meta greylinks margin_0">
										<span class="item-date">2 days ago</span> /
										<a href="blog-single-video-right.html#comments">3 comments</a> /
										<span class="item-likes">7 likes</span>
									</div>
								</div>
							</article>
						</div>
						<div class="col-md-4">
							<article class="vertical-item content-padding content-overlapping">
								<div class="item-media">
									<img src="images/blog/blog_post3.jpg" alt="">
								</div>
								<div class="item-content with_background with_border">
									<h4 class="entry-title thin bottommargin_20">
										<a href="blog-single-right.html">
											Cum sociis natoque penatib et magnis parturient.
										</a>
									</h4>
									<p>
										Phasellus nec finibus ex, ut congue velit. Proin nec pellentesque sapien. Nunc pulvinar nulla eu sodales dignissim. Proin lacinia dolor eget.
									</p>
									<div class="item-meta greylinks margin_0">
										<span class="item-date">2 days ago</span> /
										<a href="blog-single-video-right.html#comments">1 comment</a> /
										<span class="item-likes">5 likes</span>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>

		<!--	<section class="ds ms columns_margin_0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="owl-carousel partners-carousel margin_0" data-responsive-lg="6" data-responsive-md="5" data-responsive-sm="3" data-responsive-xs="2" data-margin="0">
								<div class="vertical-item">
									<div class="item-media">
										<img src="images/partners/01.png" alt="" class="light-partner">
										<img src="images/partners/01-dark.png" alt="" class="dark-partner">
										<div class="media-links">
											<a href="#" class="abs-link"></a>
										</div>
									</div>
								</div>
								<div class="vertical-item">
									<div class="item-media">
										<img src="images/partners/02.png" alt="" class="light-partner">
										<img src="images/partners/02-dark.png" alt="" class="dark-partner">
										<div class="media-links">
											<a href="#" class="abs-link"></a>
										</div>
									</div>
								</div>
								<div class="vertical-item">
									<div class="item-media">
										<img src="images/partners/03.png" alt="" class="light-partner">
										<img src="images/partners/03-dark.png" alt="" class="dark-partner">
										<div class="media-links">
											<a href="#" class="abs-link"></a>
										</div>
									</div>
								</div>
								<div class="vertical-item">
									<div class="item-media">
										<img src="images/partners/04.png" alt="" class="light-partner">
										<img src="images/partners/04-dark.png" alt="" class="dark-partner">
										<div class="media-links">
											<a href="#" class="abs-link"></a>
										</div>
									</div>
								</div>
								<div class="vertical-item">
									<div class="item-media">
										<img src="images/partners/05.png" alt="" class="light-partner">
										<img src="images/partners/05-dark.png" alt="" class="dark-partner">
										<div class="media-links">
											<a href="#" class="abs-link"></a>
										</div>
									</div>
								</div>
								<div class="vertical-item">
									<div class="item-media">
										<img src="images/partners/06.png" alt="" class="light-partner">
										<img src="images/partners/06-dark.png" alt="" class="dark-partner">
										<div class="media-links">
											<a href="#" class="abs-link"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->

			<section class="ds section_padding_top_110 columns_margin_bottom_30 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3 class="text-uppercase medium">Our mission</h3>
							<hr class="divider_2_50 main_bg_color topmargin_15 bottommargin_30">
							<p>
								To transform traditional and time taking methods of services into modern digital and time efficient method
								 of services. And also, to form unbreakable bond of trust by providing the most reliable and efficient
								  repairing and servicings to the customers.
							</p>
							<!--<p>
								Praesent maximus lorem et nisl pulvinar, vel tempus quam pulvinar. Cras nisl lacus, vulputate eu magna nec, fringilla finibus felis. Nulla sem turpis, elementum sed interdum non, cursus condimentum nisl. Vestibulum vitae tellus velit. Vestibulum ante
								ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Nulla fermentum purus vel enim pharetra, in suscipit ex ullamcorper. Nunc accumsan purus augue sit amet.
							</p>-->
							<a href="about.php" class="theme_button small_button topmargin_20">Read more</a>
						</div>
						<div class="col-md-6">
							<h3 class="text-uppercase medium">Popular questions</h3>
							<hr class="divider_2_50 main_bg_color topmargin_15 bottommargin_30">

							<div class="panel-group" id="accordion1">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
												<i class="fa fa-question-circle-o highlight"></i>
												Why choose us??
											</a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											Apna garage is India's leading digitally enabled two and four wheeler service centre which is
											 dedicated towards high end detailing
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
												<i class="fa fa-question-circle-o highlight"></i>
												Dolor Sit Amet
											</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											Pellentesque augue ipsum, tincidunt vitae tellus volutpat, eleifend pharetra erat. Donec non dignissim quam. Maecenas leo odio, tempor sed ultricies nec, egestas ac nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
											Curae; Donec maximus, elit quis maximus sagittis.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
												<i class="fa fa-question-circle-o highlight"></i>
												Corporis Iste
											</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											Pellentesque augue ipsum, tincidunt vitae tellus volutpat, eleifend pharetra erat. Donec non dignissim quam. Maecenas leo odio, tempor sed ultricies nec, egestas ac nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
											Curae; Donec maximus, elit quis maximus sagittis.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Footer section-->

			<?php 
				include("footer.php");
			?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from html.modernwebtemplates.com/carrepair/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 05:28:16 GMT -->
</html>