<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Contact - Layout 5 | Canvas</title>

<style>
.sticky-side-element {
	position: fixed;
	top: 50%;
	margin-top: -24px;
	left: auto;
	right: -31px;
	height: 48px;
	line-height: 48px;
	padding: 0 15px;
	background-color: #EEE;
	color: #222;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-size: 14px;
	-webkit-transform: rotate(270deg);
	-ms-transform: rotate(270deg);
	-o-transform: rotate(270deg);
	transform: rotate(270deg);
}
</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="charity-home.php" class="standard-logo" data-dark-logo="images/charity-logo.png"><img src="images/charity-logo.png" alt="Charity Logo"></a>
						<a href="charity-home.php" class="retina-logo" data-dark-logo="images/charity-logo.png"><img src="images/charity-logo.png" alt="Charity Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<?php include 'struct/charity-menu.php'; ?>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Contact</h1>
				<span>Get in Touch with Us</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Contact <span>Options</span></div>

					<nav>
						<ul>
							<li class="current"><a href="contact-5.html"><div>Default</div></a></li>
							<li><a href="contact-5-recaptcha.html"><div>With reCaptcha</div></a></li>
							<li><a href="contact-5-file.html"><div>File Upload</div></a></li>
							<li><a href="contact-5-inline.html"><div>Inline Notification</div></a></li>
						</ul>
					</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Google Map
					============================================= -->
					<div class="col-md-6 bottommargin">

						<section id="google-map" class="gmap" style="height: 240px;"></section>

					</div><!-- Google Map End -->

					<div class="col-md-6">

						<!-- Contact Info
						============================================= -->
						<div class="col_two_fifth">

							<address>
								<strong>Headquarters:</strong><br>
								795 Folsom Ave, Suite 600<br>
								San Francisco, CA 94107<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com

						</div><!-- Contact Info End -->

						<!-- Testimonials
						============================================= -->
						<div class="col_three_fifth col_last">

							<div class="widget notoppadding noborder">

								<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
									<i class="i-plain i-small color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
									<div class="flexslider" style="width: auto;">
										<div class="slider-wrap">
											<div class="slide"></div>
										</div>
									</div>
								</div>

							</div>

						</div><!-- Testimonial End -->

						<div class="clear"></div>

						<!-- Modal Contact Form
						============================================= -->
						<a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d nomargin btn-block button-xlarge hidden-xs center">Click here to Send an Email</a>
						<a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d nomargin btn-block visible-xs center">Send an Email</a>

						<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
									</div>
									<div class="modal-body">

										<div class="contact-widget">
											<div class="contact-form-result"></div>
											<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

												<div class="form-process"></div>

												<div class="col_half">
													<label for="template-contactform-name">Name <small>*</small></label>
													<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
												</div>

												<div class="col_half col_last">
													<label for="template-contactform-email">Email <small>*</small></label>
													<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
												</div>

												<div class="clear"></div>

												<div class="col_half">
													<label for="template-contactform-phone">Phone</label>
													<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
												</div>

												<div class="col_half col_last">
													<label for="template-contactform-service">Services</label>
													<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
														<option value="">-- Select One --</option>
														<option value="Wordpress">Wordpress</option>
														<option value="PHP / MySQL">PHP / MySQL</option>
														<option value="HTML5 / CSS3">HTML5 / CSS3</option>
														<option value="Graphic Design">Graphic Design</option>
													</select>
												</div>

												<div class="clear"></div>

												<div class="col_full">
													<label for="template-contactform-subject">Subject <small>*</small></label>
													<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
												</div>

												<div class="col_full">
													<label for="template-contactform-message">Message <small>*</small></label>
													<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
												</div>

												<div class="col_full hidden">
													<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
												</div>

												<div class="col_full">
													<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
												</div>

											</form>

										</div>


									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- Modal Contact Form End -->

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<?php include 'struct/charity-footer.php'; ?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<a href="#" data-toggle="modal" data-target="#contactFormModal" class="sticky-side-element">Contact</a>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script type="text/javascript" src="js/jquery.gmap.js"></script>

	<script type="text/javascript">

		$('#google-map').gMap({
			address: 'Melbourne, Australia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Melbourne, Australia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

	</script>

</body>
</html>