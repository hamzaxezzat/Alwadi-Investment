<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Ecotrand - SinglePage and MultiPage HTML template</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-custom.js"></script>

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="widget widget_search">
					<form method="get" class="searchform search-form" action="/">
						<div class="form-group">
							<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
						</div>
						<button type="submit" class="btn">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="modal-dialog">
			<div class="fw-messages-wrap ls p-normal">
				<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
				<!--
			<ul class="list-unstyled">
				<li>Message To User</li>
			</ul>
			-->

			</div>
		</div>
	</div><!-- eof .modal -->

	<div class="modal fade " id="loginModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal_login_form">
				<div class="modal-body ">
					<div class="menu-left cover-image">
						<img src="images/events/01.jpg" alt="img">
					</div>
					<div class="menu-right ls">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<p>
							<a href="#" class="link-underline">Sign in</a>
							<span class="pl-3 pr-3">or</span>
							<a href="#" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#registerModal" class="color-font">Sign up</a>
						</p>

						<div class="divider-50"></div>

						<form>

							<div class="form-group">
								<label for="login-email">Email address</label>
								<input type="text" class="form-control" id="login-email" placeholder="Email">
							</div>

							<div class="form-group">
								<label for="login-password">Password</label>
								<input type="password" class="form-control" id="login-password" placeholder="Password">
							</div>

							<div class="checkbox form-group mt-35">
								<input type="checkbox" id="remember_me_checkbox">
								<label class="mb-0" for="remember_me_checkbox">Remember Me
								</label>
							</div>

							<button type="submit" class="btn mt-20 btn-maincolor">Get Started</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade " id="registerModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal_login_form">
				<div class="modal-body ">
					<div class="menu-left cover-image">
						<img src="images/events/02.jpg" alt="img">
					</div>
					<div class="menu-right ls">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<p>
							<a href="#" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#loginModal" class="link-underline">Sign in</a>
							<span class="pl-3 pr-3">or</span>
							<a href="#" class="color-font">Sign up</a>
						</p>

						<div class="divider-50"></div>

						<form>

							<div class="form-group">
								<label for="login-email">Full Name</label>
								<input type="text" class="form-control" id="login-name" placeholder="Enter your full name">
							</div>

							<div class="form-group">
								<label for="login-password-registr">Password</label>
								<input type="password" class="form-control" id="login-password-registr" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="login-email-registr">Email</label>
								<input type="text" class="form-control" id="login-email-registr" placeholder="Your email goes here">
							</div>


							<div class="checkbox form-group mt-35">
								<input type="checkbox" id="agree_me_checkbox">
								<label class="mb-0" for="agree_me_checkbox">I agree all terms of science
								</label>
							</div>

							<button type="submit" class="btn btn-maincolor mt-20">Get Started</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->
			<section class="page_topline ls s-borderbottom c-my-10 d-lg-none">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-8 text-start">
							<span class="social-icons">

								<a href="#" class="fa fa-facebook " title="facebook"></a>
								<a href="#" class="fa fa-twitter " title="twitter"></a>
								<a href="#" class="fa fa-instagram " title="google"></a>

							</span>
						</div>
						<div class="col-4 text-end">
							<!--modal search-->
							<span>
								<a href="#search_modal" class="search_modal_button" data-bs-toggle="modal" data-bs-target="#search_modal">
									<i class="fa fa-search"></i>
								</a>
							</span>

						</div>
					</div>
				</div>
			</section>
			<!--eof topline-->

			<!-- header with logo in center of navigation (centered with scripts) - three Bootstrap columns - left includes, navigation and right includes-->
			<header class="page_header header_logo_center ls">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-xl-1 d-none d-xl-block">
							<ul class="top-includes">
								<li>
									<span class="social-icons">

										<a href="#" class="fa fa-facebook " title="facebook"></a>
										<a href="#" class="fa fa-twitter " title="twitter"></a>
										<a href="#" class="fa fa-instagram " title="google"></a>

									</span>
								</li>
							</ul>
						</div>
						<div class="col-xl-10 col-12 text-sm-center text-start position-relative">
							<div class="logo_wrapper">
								<a href="./" class="logo">
									<img src="images/logo.png" alt="img">
								</a>

							</div>
							<!-- main nav start -->
							<nav class="top-nav">
								<ul class="nav sf-menu">
									<li class="nav-item active">
										<a class="nav-link" href="index.html">Home</a>
										<ul>
											<li class="nav-item">
												<a class="nav-link" href="index.html">MultiPage</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="index2.html">MultiPage 2</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="index3.html">MultiPage 3</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="index_static.html">Static Intro</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="index_singlepage.html">Single Page</a>
											</li>
										</ul>
									</li>

									<!-- blog -->
									<li class="nav-item">
										<a class="nav-link" href="blog-right.html">Blog</a>
										<ul>

											<li class="nav-item">
												<a class="nav-link" href="blog-right.html">Right Sidebar</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="blog-left.html">Left Sidebar</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="blog-full.html">No Sidebar</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="blog-grid.html">Blog Grid</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="blog-single-right.html">Post</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="blog-single-right.html">Right Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="blog-single-left.html">Left Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="blog-single-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="blog-single-video-right.html">Video Post</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="blog-single-video-right.html">Right Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="blog-single-video-left.html">Left Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="blog-single-video-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

										</ul>
									</li>
									<!-- eof blog -->

									<li class="nav-item">
										<a class="nav-link" href="#">Features</a>
										<div class="mega-menu">
											<ul class="mega-menu-row">
												<li class="mega-menu-col">
													<a class="nav-link" href="#">Headers</a>
													<ul>
														<li class="nav-item">
															<a class="nav-link" href="header1.html">Header Type 1</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header2.html">Header Type 2</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header3.html">Header Type 3</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header4.html">Header Type 4</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header5.html">Header Type 5</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header6.html">Header Type 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a class="nav-link" href="#">Side Menus</a>
													<ul>
														<li class="nav-item">
															<a class="nav-link" href="header-side.html">Push Left</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header-side-right.html">Push Right</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header-side-slide.html">Slide Left</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header-side-slide-right.html">Slide Right</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header-side-sticked.html">Sticked Left</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="header-side-sticked-right.html">Sticked Right</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a class="nav-link" href="title1.html">Title Sections</a>
													<ul>
														<li class="nav-item">
															<a class="nav-link" href="title1.html">Title section 1</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="title2.html">Title section 2</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="title3.html">Title section 3</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="title4.html">Title section 4</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="title5.html">Title section 5</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="title6.html">Title section 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a class="nav-link" href="footer1.html#footer">Footers</a>
													<ul>
														<li class="nav-item">
															<a class="nav-link" href="footer1.html">Footer Type 1</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="footer2.html">Footer Type 2</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="footer3.html">Footer Type 3</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="footer4.html">Footer Type 4</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="footer5.html">Footer Type 5</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="footer6.html">Footer Type 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a class="nav-link" href="copyright1.html">Copyright</a>

													<ul>
														<li class="nav-item">
															<a class="nav-link" href="copyright1.html">Copyright 1</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="copyright2.html">Copyright 2</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="copyright3.html">Copyright 3</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="copyright4.html">Copyright 4</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="copyright5.html">Copyright 5</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" href="copyright6.html">Copyright 6</a>
														</li>
													</ul>
												</li>

											</ul>
										</div> <!-- eof mega menu -->
									</li>
									<!-- eof features -->


									<li class="nav-item">
										<a class="nav-link" href="about.html">Pages</a>
										<ul>


											<li class="nav-item">
												<a class="nav-link" href="about.html">About</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="services.html">Our Services</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="services.html">Services list</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="service-single.html">Single Service</a>
													</li>
												</ul>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="pricing.html">Pricing</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="gallery-tiled.html">Gallery</a>
											</li>

											<!-- shop -->
											<li class="nav-item">
												<a class="nav-link" href="shop-right.html">Shop</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="shop-account-dashboard.html">Account</a>
														<ul>

															<li class="nav-item">
																<a class="nav-link" href="shop-account-details.html">Account details</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="shop-account-addresses.html">Addresses</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="shop-account-address-edit.html">Edit Address</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="shop-account-orders.html">Orders</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="shop-account-order-single.html">Single Order</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="shop-account-downloads.html">Downloads</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="shop-account-password-reset.html">Password Reset</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="shop-account-login.html">Login/Logout</a>
															</li>

														</ul>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shop-right.html">Right Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shop-left.html">Left Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shop-product.html">Product</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shop-product-left.html">Product Left Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shop-product-right.html">Product Right Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shop-cart.html">Cart</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shop-checkout.html">Checkout</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shop-order-received.html">Order Received</a>
													</li>

												</ul>
											</li>
											<!-- eof shop -->

											<!-- features -->
											<li class="nav-item">
												<a class="nav-link" href="shortcodes_iconbox.html">Shortcodes</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_typography.html">Typography</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_buttons.html">Buttons</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_pricing.html">Pricing</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_iconbox.html">Icon Boxes</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_progress.html">Progress</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_bootstrap.html">Bootstrap Elements</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_animation.html">Animation</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_icons.html">Template Icons</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_socialicons.html">Social Icons</a>
													</li>
												</ul>
											</li>
											<!-- eof shortcodes -->

											<li class="nav-item">
												<a class="nav-link" href="shortcodes_widgets_default.html">Widgets</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_widgets_default.html">Default Widgets</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_widgets_shop.html">Shop Widgets</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="shortcodes_widgets_custom.html">Custom Widgets</a>
													</li>
												</ul>

											</li>


											<!-- events -->
											<li class="nav-item">
												<a class="nav-link" href="events-left.html">Events</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="events-left.html">Left Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="events-right.html">Right Sidebar</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="events-full.html">Full Width</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="event-single-left.html">Single Event</a>
														<ul>
															<li class="nav-item">
																<a class="nav-link" href="event-single-left.html">Left Sidebar</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="event-single-right.html">Right Sidebar</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="event-single-full.html">Full Width</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<!-- eof events -->


											<li class="nav-item">
												<a class="nav-link" href="team.html">Team</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="team.html">Team List</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="team-single.html">Team Member</a>
													</li>
												</ul>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="department.html">Department</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="department.html">Department List</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="department-single.html">Department Member</a>
													</li>
												</ul>
											</li>


											<li class="nav-item">
												<a class="nav-link" href="comingsoon.html">Comingsoon</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="faq.html">FAQ</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="faq.html">FAQ</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="faq2.html">FAQ 2</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="404.html">404</a>
											</li>

										</ul>
									</li>
									<!-- eof pages -->

									<!-- gallery -->
									<li class="nav-item">
										<a class="nav-link" href="case-image.html">Cases</a>
										<ul>
											<!-- Cases image only -->
											<li class="nav-item">
												<a class="nav-link" href="case-image.html">Image Only</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="case-image-2-cols.html">2 columns</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="case-image.html">3 columns</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="case-image-4-cols-fullwidth.html">4 columns fullwidth</a>
													</li>

												</ul>
											</li>
											<!-- eof Cases image only -->

											<!-- Cases with title -->
											<li class="nav-item">
												<a class="nav-link" href="case-title.html">Image With Title</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="case-title-2-cols.html">2 columns</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="case-title.html">3 column</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="case-title-4-cols-fullwidth.html">4 columns fullwidth</a>
													</li>
												</ul>
											</li>
											<!-- eof Cases with title -->

											<!-- Cases with excerpt -->
											<li class="nav-item">
												<a class="nav-link" href="case-excerpt.html">Image with Excerpt</a>
												<ul>
													<li class="nav-item">
														<a class="nav-link" href="case-excerpt-2-cols.html">2 columns</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="case-excerpt.html">3 column</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="case-excerpt-4-cols-fullwidth.html">4 columns fullwdith</a>
													</li>
												</ul>
											</li>
											<!-- eof Cases with excerpt -->

											<li class="nav-item">
												<a class="nav-link" href="case-tiled.html">Tiled Cases</a>
											</li>

											<!-- Cases item -->
											<li class="nav-item">
												<a class="nav-link" href="case-single.html">Cases Item</a>
											</li>
											<!-- eof Cases item -->
										</ul>
									</li>
									<!-- eof Cases -->

									<!-- contacts -->
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
										<ul>
											<li class="nav-item">
												<a class="nav-link" href="contact.html">Contact 1</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="contact2.html">Contact 2</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="contact3.html">Contact 3</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="contact4.html">Contact 4</a>
											</li>
										</ul>
									</li>
									<!-- eof contacts -->

								</ul>


							</nav>
							<!-- eof main nav -->
						</div>
						<div class="col-xl-1 text-end d-none d-xl-block">
							<ul class="top-includes">
								<li>
									<!--modal search-->
									<span>
										<a href="#search_modal" class="search_modal_button" data-bs-toggle="modal" data-bs-target="#search_modal">
											<i class="fa fa-search"></i>
										</a>
									</span>

								</li>
							</ul>
						</div>


					</div>
				</div>
				<!-- header toggler -->
				<span class="toggle_menu"><span></span></span>
			</header>


			<section class="ds s-py-150 error-404 not-found page_404 s-overlay mobile-overlay">
				<div class="container">
					<div class="row">


						<div class="col-sm-12 text-center">

							<header class="page-header">
								<h3><span class="emptytext">4</span>0<span class="emptytext">4</span></h3>
							</header>
							<!-- .page-header -->

							<div class="page-content">
								<h4 class="mb-15">oops...</h4>
								<p class="fw-600">We're sorry, but something went wrong</p>
								<div class="divider-50"></div>
								<p>
									<a href="./" class="btn btn-maincolor btn-medium">Go to homepage</a>
								</p>
							</div>
							<!-- .page-content -->
						</div>
					</div>
				</div>
			</section>

			<section class="page_copyright ls s-py-25">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-12 text-center">
							<p class="color-dark">Copyright &copy; <span class="copyright_year">2021</span> All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>

		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/vendor/jquery-3.6.0.min.js"></script>
	<script src="js/vendor/bootstrap.bundle.min.js"></script>
	<script src="js/vendor/affix.js"></script>
	<script src="js/vendor/jquery.appear.js"></script>
	<script src="js/vendor/jquery.cookie.js"></script>
	<script src="js/vendor/jquery.easing.1.3.js"></script>
	<script src="js/vendor/jquery.hoverIntent.js"></script>
	<script src="js/vendor/superfish.js"></script>
	<script src="js/vendor/bootstrap-progressbar.min.js"></script>
	<script src="js/vendor/jquery.countdown.min.js"></script>
	<script src="js/vendor/jquery.countTo.js"></script>
	<script src="js/vendor/jquery.easypiechart.min.js"></script>
	<script src="js/vendor/jquery.scrollbar.min.js"></script>
	<script src="js/vendor/jquery.localScroll.min.js"></script>
	<script src="js/vendor/jquery.scrollTo.min.js"></script>
	<script src="js/vendor/jquery.ui.totop.js"></script>
	<script src="js/vendor/jquery.parallax-1.1.3.js"></script>
	<script src="js/vendor/isotope.pkgd.min.js"></script>
	<script src="js/vendor/jquery.flexslider-min.js"></script>
	<script src="js/vendor/owl.carousel.min.js"></script>
	<script src="js/vendor/photoswipe.js"></script>
	<script src="js/vendor/photoswipe-ui-default.min.js"></script>
	<script src="js/vendor/jflickrfeed.min.js"></script>
	<script src="js/vendor/spectragram.min.js"></script>
	<script src="twitter/jquery.tweet.js"></script>
	<script src="js/vendor/circletype.min.js"></script>
	<script src="js/vendor/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>


</body>

</html>