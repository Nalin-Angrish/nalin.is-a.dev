﻿<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Contact</title>
	<meta name="description" content="Chinmay Mulay's Portfolio" />
	<meta name="author" content="Chinmay Mulay">
	<meta name="keywords"
		content="website, design, html5, css3, jquery, creative, clean, animated, portfolio, multi-page" />
	<meta property="og:title" content="Chinmay Mulay's Portfolio" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="Chinmay Mulay's Portfolio" />
	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="https://twitter.com/cmulay17" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="Chinmay Mulay's Portfolio" />
	<meta name="twitter:image" content="" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121" />
	<meta name="msapplication-navbutton-color" content="#212121" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

	<!-- Web Fonts 
	================================================== -->
	<link
		href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/animsition.min.css" />
	<link rel="stylesheet" href="css/swiper.min.css" />
	<link rel="stylesheet" href="css/style.css" />

	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.jpg">
	<link rel="apple-touch-icon" href="apple-touch-icon.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.jpg">


</head>

<body>

	<!-- Page preloader wrap
	================================================== -->

	<div class="animsition">

		<!-- Nav and Logo
		================================================== -->

		<header class="cd-header" oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
			<div class="header-wrapper">
				<div class="logo-wrap">
					<a href="index.html" class="hover-target animsition-link">
						<h6 class="fullscreen-image no-blur" style="font-weight: 1000;">The Guy with Glasses</h6>
					</a>
				</div>
				<div class="nav-but-wrap">
					<div class="menu-icon hover-target">
						<span class="menu-icon__line menu-icon__line-left"></span>
						<span class="menu-icon__line"></span>
						<span class="menu-icon__line menu-icon__line-right"></span>
					</div>
				</div>
			</div>
		</header>

		<div class="nav" oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
			<div class="nav__content">
				<div class="curent-page-name-shadow">Contact</div>
				<ul class="nav__list">
					<li class="nav__list-item"><a href="index.html" class="hover-target animsition-link">About</a></li>
					<li class="nav__list-item"><a href="blog.html" class="hover-target animsition-link">Blog</a></li>
					<li class="nav__list-item "><a href="projects.html"
							class="hover-target animsition-link">Projects</a></li>
					<li class="nav__list-item active-nav"><a href="contact.php"
							class="hover-target animsition-link">Contact</a></li>
				</ul>
			</div>
		</div>


		<!-- Primary Page Layout
		================================================== -->

		<div class="shadow-title parallax-top-shadow" oncontextmenu="return false" onkeydown="return false;"
			onmousedown="return false;">Hola</div>

		<div class="section padding-page-top padding-bottom over-hide z-bigger" oncontextmenu="return false"
			onkeydown="return false;" onmousedown="return false;">
			<div class="container z-bigger">
				<div class="row page-title px-5 px-xl-2">
					<div class="col-12 parallax-fade-top">
						<h1>Say Hello</h1>
					</div>
					<div class="offset-1 col-11 parallax-fade-top mt-2 mt-sm-3">
						<p>get in touch</p>
					</div>
				</div>
			</div>
		</div>

		<div class="section padding-bottom-big over-hide z-bigger">
			<div class="container">
				<div class="row px-5 px-xl-2">
					<form method="post" class="col-lg-12" action="contact_me.php">
						<div class="col-lg-12">
							<div class="row ajax-form">
								<div class="col-md-6">
									<input class="hover-target" name="name" type="text" placeholder="Your Name: *"
										autocomplete="off" />
								</div>
								<div class="col-md-6 mt-4 mt-md-0">
									<input class="hover-target" name="email" type="email" placeholder="E-Mail: *"
										autocomplete="off" />
								</div>
								<div class="col-md-6 mt-4">
									<input class="hover-target" name="phone" type="tel" placeholder="Phone Number:"
										autocomplete="off" />
								</div>
								<div class="col-md-6 mt-4">
									<input class="hover-target" name="location" type="text" placeholder="City, Country:"
										autocomplete="off" />
								</div>
								<div class="col-md-12 mt-4">
									<textarea class="hover-target" name="message" placeholder="Message *"></textarea>
								</div>
								<div class="col-md-12 mt-4">
									<center>
										<button class="hover-target" id="send" data-lang="en"
											name="send"><span>submit</span></button>
									</center>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<script type="text/JavaScript">
			if (window.history.replaceState) {
					indow.history.replaceState(null, null, window.location.href);
				}
		</script>

		<div class="section padding-bottom-big over-hide z-bigger" oncontextmenu="return false"
			onkeydown="return false;" onmousedown="return false;">
			<div class="container">
				<div class="row px-5 px-xl-2 justify-content-center">
					<div class="col-lg-12 mb-5 text-center">
						<h5 class="mb-3" style="font-weight: bold; font-size: x-large"><u>Social Handles</u></h5>
					</div>
					<div class="col-md-4 mb-5 text-center"
						data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
						<h2 class="mb-3 fa fa-instagram"></h2>
						<h5 class="mb-3">Instagram</h5>
						<h6 class="mb-0 pb-0"><a
								href="https://www.instagram.com/_theguywithglasses_">@_theguywithglasses_</a></h6>
					</div>
					<div class="col-md-4 mb-5 text-center"
						data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
						<h2 class="mb-3 fa fa-github"></h2>
						<h5 class="mb-3">GitHub</h5>
						<h6 class="mb-0 pb-0"><a href="https://www.github.com/cmulay">@cmulay</a></h6>
					</div>
					<div class="col-md-4 mb-5 text-center"
						data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
						<h2 class="mb-3 fa fa-linkedin"></h2>
						<h5 class="mb-3">LinkedIn</h5>
						<h6 class="mb-0 pb-0"><a href="https://www.linkedin.com/in/cmulay17/">@cmulay17</a></h6>
					</div>

				</div>
			</div>
		</div>

		<div class="section padding-top-bottom over-hide z-bigger background-dark-3 footer" oncontextmenu="return false"
			onkeydown="return false;" onmousedown="return false;">
			<div class="shadow-on-footer" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.1s">
				codewithchin@gmail.com</div>
			<div class="container" data-scroll-reveal="enter bottom move 20px over 0.5s after 0.4s">
				<div class="row">
					<div class="col-12 text-center z-bigger py-5">
						<div class="footer-lines">
							<a href="mailto:codewithchin@gmail.com" class="hover-target">
								<h4>Email Me</h4>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Scroll to top
		================================================== -->

		<div class="scroll-to-top hover-target"></div>

		<!-- Page cursor
		================================================== -->

		<div class='cursor' id="cursor"></div>
		<div class='cursor2' id="cursor2"></div>
		<div class='cursor3' id="cursor3"></div>

	</div>

	<!-- JAVASCRIPT
    ================================================== -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/custom.js"></script>

	<!-- End Document
================================================== -->
</body>

</html>