<?php

    $access = $_SESSION["access"];
    $admin_display = "none";
    if ($access == true)
    {
        $admin_display = "block";
    }

?>





<!--	<div id="msgid">-->


<script type="text/javascript">
	function ChangeThemes1(value)
	{
		//var h = document.getElementsByTagName('head').item(0);
		//var s = document.createElement("link");
		//s.type = "text/css";
		//s.appendChild(document.createTextNode("href=\"test.css\ rel=\"stylesheet\""));
		//h.appendChild(s);
		var cssfile = "";
		var cssId = "";
		DebugAlert("ChangeThemes:: value=" + value, debug);

		if (value == "custom-1")
		{
			cssfile = 'kfb_style.css';
			cssId = value;
		}

		if (value == "custom-2")
		{
			DebugAlert("ChangeThemes:: Changing them to 'neal.css'", debug);
			cssfile = 'kfb_style_2.css';
			cssId = value;
		}

		if (value == "custom-3")
		{
			cssfile = 'kfb_style_3.css';
			cssId = value;
		}

		if (value == "custom-4")
		{
			cssfile = 'kfb_style_3.css';
			cssId = value;
		}
		if (value == "custom-5")
		{
			cssfile = 'neal.css';
			cssId = value;
		}

		DebugAlert("ChangeThemes:: cssfile=" + cssfile, debug);

		//var cssId = 'myCss';  // you could encode the css path itself to generate id..
		//if (!document.getElementById(cssId))
		if (value!="")
		{

			// $(document).ready(function(){
			//$("#msgid").html("This is Hello World by JQuery " + value );
			//});
			// $('link[id=myCss2]').remove();
			//$('link[id=myCss1]').remove();
			$("link[href='kfb_style.css']").remove();
			//$('link[rel=stylesheet][href="test.css"]').remove();
			//$('link[rel=stylesheet][href="test2.css"]').remove();
			//$("link[href='test.css']").prop('disabled', true);
			//$("link[href='test2.css']").prop('disabled', true);
			//var head  = document.getElementsByTagName('head')[0];
			//var link  = document.createElement('link');
			//link.id   = cssId;
			//link.rel  = 'stylesheet';
			//link.type = 'text/css';
			//link.href = cssfile;
			//link.media = 'all';
			//head.appendChild(link);
			//cssId ="";
			DebugAlert("ChangeThemes:: SetTheme('" + cssfile + "');",debug );
			SetTheme(cssfile);
		}
	}
</script>


<div class="header-container kfb_title" style="padding-bottom: 0px;">

	<!-- header-top start -->
	<!-- classes:  -->
	<!-- "dark": dark version of header top e.g. class="header-top dark" -->
	<!-- "colored": colored version of header top e.g. class="header-top colored" -->
	<!-- ================ -->


	<div>

		<div class="brand" >


			<!-- logo -->
			<div id="logo" class="kfb_title">
				<!--Changed by Kandis on 2/29-->
				<!--<a href="index.php" class= "kfb_logo"><img style="display: inline;" id="logo_img" src="images/kfb_logo15-dropshadow5.png" class= "kfb_logo" alt="KFB logo"></a>-->
				<div class="column-left">
                <!--<img style="display: inline;" id="logo_img" src="kfb_images/kfb_logo_higher_res2.png" class= "kfb_logo" alt="KFB logo" onclick="showpopup()">-->
				</div>
				<div class="column-center">
					<br><h1 style="display: inline;" class = "kfb_titles">Neal Noble</h1>

				</div>
			</div>
			<!-- <h1 class = "kfb_title">Kent Food bank & Emergency Services</h1> -->
		</div>

		<!-- <div class="address-bar">-->
		<!--	<h3 class = "kfb_title">Serving low-income residents of the Kent School District</h3>-->
		<!-- </div>-->
		<!-- <div class="row"> -->

	</div>
	<div>   <!--   <div class="header-top dark "> Removed by Kandis 2/29-->
		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-6 col-md-9">

					<!-- header-top-first start -->
					<!-- ================ -->


					<div class="col-lg-6">


						<div class="header-top-first clearfix" >
							<!-- </div> -->
							<!--neal
                            <ul class="social-links circle small clearfix hidden-xs">

                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>

                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>

                                <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>

                            </ul>
                            -->
							<!--
                            <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation">
                                        <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                        <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                        <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                        <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                        <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                        <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div

                            <ul class="list-inline hidden-sm hidden-xs">
                                <li><i class="fa fa-map-marker pr-5 pl-10"></i>515 W Harrison St. Suite 107 Kent, WA 98032/li&gt;
                                </li><li><i class="fa fa-phone pr-5 pl-10"></i>(253)-520-3550</li>
                                <li><i class="fa fa-envelope-o pr-5 pl-10"></i>Kentfoodbank@gmail.com</li>
                            </ul>
                            -->
						</div>

						<!-- header-top-first end -->
					</div>



					<!-- header-top-second start -->
					<!-- ================ -->
					<div id="header-top-second" class="clearfix">

						<!-- header top dropdowns start -->
						<!-- ================ -->
						<!-- Neal
                        <div class="header-top-dropdown text-right">
                            <div class="btn-group">
                                <a href="page-signup.html" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>
                            </div>

                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Login</button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                    <li>
                                        <form class="login-form margin-clear">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Username</label>
                                                <input type="text" class="form-control" placeholder="">
                                                <i class="fa fa-user form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="">
                                                <i class="fa fa-lock form-control-feedback"></i>
                                            </div>

                                            <button type="submit" class="btn btn-gray btn-sm">Log In</button>
                                            <span class="pl-5 pr-5">or</span>
                                            <button type="submit" class="btn btn-default btn-sm">Sing Up</button>
                                            <ul>
                                                <li><a href="#">Forgot your password?</a></li>
                                            </ul>
                                            <span class="text-center">Login with</span>

                                            <ul class="social-links circle small colored clearfix">
                                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </form>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        neal -->
						<!--  header top dropdowns end -->
					</div>
					<!-- header-top-second end -->
				</div>
			</div>
		</div>
	</div>





	<!--   </div></.row -->
	<!-- header-top end -->

	<!-- header start -->
	<!-- classes:  -->
	<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
	<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
	<!-- "full-width": mandatory class for the full-width menu layout -->
	<!-- "centered": mandatory class for the centered logo layout -->
	<!-- ================ -->
	<header class="header fixed clearfix kfb_topmenubar" >
		<!--test1-->
		<div class="container">
			<!--test2-->
			<div class="row ">
				<!--test3-->
				<div class="col-md-3">
					<!--test4-->
					<!-- header-left start -->
					<!-- ================ -->
					<div class="header-left clearfix">
						<!--test5-->


						<!-- name-and-slogan -->
						<div class="site-slogan">
							<!--test6-->
						</div>
						<!--test7-->
					</div>
					<!-- header-left end -->
					<!--test8-->
				</div>
				<!--test9-->
				<div class="col-md-24">
					<!--test10-->

					<!-- header-right start -->
					<!-- ================ -->
					<div class="header-right clearfix">
						<!--test11-->

						<!-- main-navigation start -->
						<!-- classes: -->
						<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
						<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
						<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
						<!-- ================ -->

						<div class="main-navigation  animated with-dropdown-buttons"  >
							<!--test12-->
							<!-- navbar start -->
							<!-- ================ -->
							<!--<nav class="navbar navbar-default" role="navigation">-->
							<nav class="navbar navbar-default">
								<div class="container-fluid">
									<!--test13-->

									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<!--test14-->
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" >
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>

									</div>
									<!--test15-->
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="navbar-collapse-1">
										<!-- main-menu -->
										<!--test16 asdfafalsdkf adsf  aldkfjadfa adlkja asdlkf akdlsfj asdlf-->






										<ul class="nav navbar-nav style " >
											<!--													style="color:red; !important;"-->


											<!-- mega-menu start -->
											<li class="kfb_menubar-button">
												<!--<a href="index.php" class="dropdown active mega-menu  kfb_menubar-button"  data-toggle="dropdown" >Home</a>-->
												<!-- <a href="index.php" class="dropdown-toggle"  data-toggle="dropdown">Home</a> -->

												<a href="index.php" class="button" >Home</a>
												<!-- neal
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="title"><i class="fa fa-laptop pr-10"></i> home</h4>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="index.html"><i class="icon-home pr-10"></i>Home Default</a></li>
                                                                            <li ><a href="index-corporate-1.html"><i class="icon-suitcase pr-10"></i>Corporate 1</a></li>
                                                                            <li ><a href="index-corporate-2.html"><i class="icon-suitcase pr-10"></i>Corporate 2</a></li>
                                                                            <li ><a href="index-corporate-3.html"><i class="icon-suitcase pr-10"></i>Corporate 3</a></li>
                                                                            <li ><a href="index-shop.html"><i class="icon-basket-1 pr-10"></i>Commerce 1</a></li>
                                                                            <li ><a href="index-shop-2.html"><i class="icon-basket-1 pr-10"></i>Commerce 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="index-portfolio.html"><i class="icon-briefcase pr-10"></i>Portfolio/Agency</a></li>
                                                                            <li ><a href="index-medical.html"><i class="fa fa-ambulance pr-10"></i>Medical</a></li>
                                                                            <li ><a href="index-restaurant.html"><i class="fa fa-cutlery pr-10"></i>Restaurant</a></li>
                                                                            <li ><a href="index-wedding.html"><i class="icon-heart pr-10"></i>Wedding</a></li>
                                                                            <li ><a href="index-landing.html"><i class="fa fa-star pr-10"></i>Landing Page</a></li>
                                                                            <li ><a href="page-coming-soon.html"><i class="fa fa-clock-o pr-10"></i>Coming Soon</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="index-one-page.html"><i class="icon-home pr-10"></i>One Page Version</a></li>
                                                                            <li ><a href="index-construction.html"><i class="fa fa-building pr-10"></i>Construction <span class="badge">New</span></a></li>
                                                                            <li ><a href="index-education.html"><i class="fa fa-graduation-cap pr-10"></i>Education <span class="badge">New</span></a></li>
                                                                            <li ><a href="index-hotel.html"><i class="fa fa-bed pr-10"></i>Hotel <span class="badge">New</span></a></li>
                                                                            <li ><a href="index-blog.html"><i class="fa fa-pencil pr-10"></i>Blog <span class="badge">New</span></a></li>
                                                                            <li ><a href="index-beauty.html"><i class="fa fa-magic pr-10"></i>Beauty Center <span class="badge">New</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                                neal -->
											</li>
											<!-- mega-menu end -->
											<!-- mega-menu start -->
											<li class="kfb_menubar-button">
												<a href="kfb_about.php" class="button">About</a>
												<!-- Neal
                                                <ul class="dropdown-menu">

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-9">
                                                                <h4 class="title">About</h4>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="page-about.html"><i class="fa fa-angle-right"></i>About Us 1</a></li>
                                                                            <li ><a href="page-about-2.html"><i class="fa fa-angle-right"></i>About Us 2</a></li>
                                                                            <li ><a href="page-about-3.html"><i class="fa fa-angle-right"></i>About Us 3</a></li>
                                                                            <li ><a href="page-about-4.html"><i class="fa fa-angle-right"></i>About Us 4</a></li>
                                                                            <li ><a href="page-about-me.html"><i class="fa fa-angle-right"></i>About Me</a></li>
                                                                            <li ><a href="page-team.html"><i class="fa fa-angle-right"></i>Our Team - Options 1</a></li>
                                                                            <li ><a href="page-team-2.html"><i class="fa fa-angle-right"></i>Our Team - Options 2</a></li>
                                                                            <li ><a href="page-team-3.html"><i class="fa fa-angle-right"></i>Our Team - Options 3</a></li>
                                                                            <li ><a href="page-coming-soon.html"><i class="fa fa-angle-right"></i>Coming Soon Page</a></li>
                                                                            <li ><a href="page-faq.html"><i class="fa fa-angle-right"></i>FAQ page</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="page-services.html"><i class="fa fa-angle-right"></i>Services 1</a></li>
                                                                            <li ><a href="page-services-2.html"><i class="fa fa-angle-right"></i>Services 2</a></li>
                                                                            <li ><a href="page-services-3.html"><i class="fa fa-angle-right"></i>Services 3</a></li>
                                                                            <li ><a href="page-contact.html"><i class="fa fa-angle-right"></i>Contact 1</a></li>
                                                                            <li ><a href="page-contact-2.html"><i class="fa fa-angle-right"></i>Contact 2</a></li>
                                                                            <li ><a href="page-contact-3.html"><i class="fa fa-angle-right"></i>Contact 3</a></li>
                                                                            <li ><a href="page-login.html"><i class="fa fa-angle-right"></i>Login 1</a></li>
                                                                            <li ><a href="page-login-2.html"><i class="fa fa-angle-right"></i>Login 2 - Fullsreen</a></li>
                                                                            <li ><a href="page-signup.html"><i class="fa fa-angle-right"></i>Sign Up 1</a></li>
                                                                            <li ><a href="page-signup-2.html"><i class="fa fa-angle-right"></i>Sign Up 2 - Fullsreen</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="page-404.html"><i class="fa fa-angle-right"></i>404 error</a></li>
                                                                            <li ><a href="page-404-2.html"><i class="fa fa-angle-right"></i>404 error - Parallax</a></li>
                                                                            <li class="active"><a href="page-affix-sidebar.html"><i class="fa fa-angle-right"></i>Sidebar - Affix Menu</a></li>
                                                                            <li ><a href="page-left-sidebar.html"><i class="fa fa-angle-right"></i>Left Sidebar</a></li>
                                                                            <li ><a href="page-right-sidebar.html"><i class="fa fa-angle-right"></i>Right Sidebar</a></li>
                                                                            <li ><a href="page-two-sidebars.html"><i class="fa fa-angle-right"></i>Two Sidebars</a></li>
                                                                            <li ><a href="page-two-sidebars-left.html"><i class="fa fa-angle-right"></i>Two Sidebars Left</a></li>
                                                                            <li ><a href="page-two-sidebars-right.html"><i class="fa fa-angle-right"></i>Two Sidebars Right</a></li>
                                                                            <li ><a href="page-no-sidebars.html"><i class="fa fa-angle-right"></i>No Sidebars</a></li>
                                                                            <li ><a href="page-sitemap.html"><i class="fa fa-angle-right"></i>Sitemap</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-3 hidden-sm">
                                                                <h4 class="title">Premium HTML5 Template</h4>
                                                                <p class="mb-10">The Project is perfectly suitable for corporate, business and company webpages.</p>
                                                                <img src="images/section-image-3.png" alt="The Project">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                neal -->
											</li>
											<!-- mega-menu end -->
											<li class="kfb_menubar-button" style="">
												<a class="button" href=https://www.linkedin.com/home?trk=nav_responsive_tab_home" style="display: " target="_blank">LinkedIn</a>
												<!-- neal
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Headers</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="features-headers-default.html">Default/Semi-Transparent</a></li>
                                                            <li ><a href="features-headers-default-dark.html">Dark/Semi-Transparent</a></li>
                                                            <li ><a href="features-headers-classic.html">Classic Light</a></li>
                                                            <li ><a href="features-headers-classic-dark.html">Classic Dark</a></li>
                                                            <li ><a href="features-headers-colored.html">Colored/Light</a></li>
                                                            <li ><a href="features-headers-colored-dark.html">Colored/Dark</a></li>
                                                            <li ><a href="features-headers-full-width.html">Full Width</a></li>
                                                            <li ><a href="features-headers-offcanvas-left.html">Offcanvas Left Side</a></li>
                                                            <li ><a href="features-headers-offcanvas-right.html">Offcanvas Right Side</a></li>
                                                            <li ><a href="features-headers-logo-centered.html">Logo Centered</a></li>
                                                            <li ><a href="features-headers-slider-top.html">Slider Top</a></li>
                                                            <li ><a href="features-headers-simple.html">Simple Static</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Menus</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="features-headers-default.html">Default/On Hover Menu</a></li>
                                                            <li ><a href="features-menus-onhover-no-animations.html">On Hover Menu - No Animations</a></li>
                                                            <li ><a href="features-menus-onclick.html">On Click Menu - With Animations</a></li>
                                                            <li ><a href="features-menus-onclick-no-animations.html">On Click Menu - No Animations</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Footers <span class="badge">New</span></a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="features-footers-default.html#footer">Footer - Default</a></li>
                                                            <li ><a href="features-footers-contact-form.html#footer">Footer - Contact Form</a></li>
                                                            <li ><a href="features-footers-google-maps.html#footer">Footer - Google Maps</a></li>
                                                            <li ><a href="features-footers-subscribe.html#footer">Footer - Subscribe Form</a></li>
                                                            <li ><a href="features-footers-minimal.html#footer">Footer - Minimal</a></li>
                                                            <li ><a href="features-footers-links.html#footer">Footer - Links <span class="badge">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Main Sliders</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="features-sliders-fullscreen.html">Full Screen</a></li>
                                                            <li ><a href="features-sliders-fullwidth.html">Full Width</a></li>
                                                            <li ><a href="features-sliders-fullwidth-big-height.html">Full Width - Big Height</a></li>
                                                            <li ><a href="features-sliders-boxedwidth-light.html">Boxed Width - Light Bg</a></li>
                                                            <li ><a href="features-sliders-boxedwidth-dark.html">Boxed Width - Dark Bg</a></li>
                                                            <li ><a href="features-sliders-boxedwidth-default.html">Boxed Width - Default Bg</a></li>
                                                            <li ><a href="features-sliders-video-background.html">Video Background</a></li>
                                                            <li ><a href="features-sliders-text-rotator.html">Text Rotator</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Email Templates <span class="badge">New</span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a target="_blank" href="email_templates/email_template_blue.html">Blue</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_brown.html">Brown</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_cool_green.html">Cool Green</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_dark_cyan.html">Dark Cyan</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_dark_red.html">Dark Red</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_gold.html">Gold</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_gray.html">Gray</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_green.html">Green</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_light_blue.html">Light Blue</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_orange.html">Orange</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_pink.html">Pink</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_purple.html">Purple</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_red.html">Red</a></li>
                                                            <li><a target="_blank" href="email_templates/email_template_vivid_red.html">Vivid Red</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Pricing Tables</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="features-pricing-tables-1.html">Pricing Tables 1</a></li>
                                                            <li ><a href="features-pricing-tables-2.html">Pricing Tables 2</a></li>
                                                            <li ><a href="features-pricing-tables-3.html">Pricing Tables 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Icons</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="features-icons-fontawesome.html">Font Awesome</a></li>
                                                            <li ><a href="features-icons-fontello.html">Fontello</a></li>
                                                            <li ><a href="features-icons-glyphicons.html">Glyphicons</a></li>
                                                        </ul>
                                                    </li>
                                                    <li ><a href="features-dark-page.html">Dark Page</a></li>
                                                    <li ><a href="features-typography.html">Typography</a></li>
                                                    <li ><a href="features-backgrounds.html">Backgrounds</a></li>
                                                    <li ><a href="features-grid.html">Grid</a></li>
                                                </ul>
                                            neal -->
											</li>
											<!-- mega-menu start -->
											<li class="kfb_menubar-button" style="">
												<a href = "https://github.com/nrnoble" class="button" target="_blank">GitHub</a>
												<!-- neal
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="title"><i class="fa fa-magic pr-10"></i> Donate</h4>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="components-social-icons.html"><i class="icon-share pr-10"></i>Social Icons</a></li>
                                                                            <li ><a href="components-buttons.html"><i class="icon-flask pr-10"></i>Buttons</a></li>
                                                                            <li ><a href="components-forms.html"><i class="icon-eq pr-10"></i>Forms</a></li>
                                                                            <li ><a href="components-tabs-and-pills.html"><i class=" icon-dot-3 pr-10"></i>Tabs &amp; Pills</a></li>
                                                                            <li ><a href="components-accordions.html"><i class="icon-menu-outline pr-10"></i>Accordions</a></li>
                                                                            <li ><a href="components-progress-bars.html"><i class="icon-chart-line pr-10"></i>Progress Bars</a></li>
                                                                            <li ><a href="components-call-to-action.html"><i class="icon-chat pr-10"></i>Call to Action Blocks</a></li>
                                                                            <li ><a href="components-alerts-and-callouts.html"><i class="icon-info-circled pr-10"></i>Alerts &amp; Callouts</a></li>
                                                                            <li ><a href="components-content-sliders.html"><i class="icon-star-filled pr-10"></i>Content Sliders</a></li>
                                                                            <li ><a href="components-charts.html"><i class="icon-chart-pie pr-10"></i>Charts</a></li>
                                                                            <li ><a href="components-page-loaders.html"><i class="fa fa-circle-o-notch fa-spin"></i>Page Loaders <span class="badge">New</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="components-icon-boxes.html"><i class="icon-picture-outline pr-10"></i>Icon Boxes</a></li>
                                                                            <li ><a href="components-image-boxes.html"><i class="icon-camera-1 pr-10"></i>Image Boxes</a></li>
                                                                            <li ><a href="components-fullwidth-sections.html"><i class="icon-code-1 pr-10"></i>Full Width Sections</a></li>
                                                                            <li ><a href="components-animations.html"><i class="icon-docs pr-10"></i>Animations</a></li>
                                                                            <li ><a href="components-video-and-audio.html"><i class="icon-video pr-10"></i>Video &amp; Audio</a></li>
                                                                            <li ><a href="components-lightbox.html"><i class="icon-plus pr-10"></i>Lightbox</a></li>
                                                                            <li ><a href="components-counters.html"><i class="icon-sort-numeric pr-10"></i>Counters</a></li>
                                                                            <li ><a href="components-modals.html"><i class="icon-popup pr-10"></i>Modals</a></li>
                                                                            <li ><a href="components-tables.html"><i class="icon-th pr-10"></i>Tables</a></li>
                                                                            <li ><a href="components-text-rotators.html"><i class="icon-arrows-ccw pr-10"></i>Text Rotators</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            neal -->
											</li>

                                            <!-- mega-menu start -->
                                            <li class="kfb_menubar-button" style="">
                                                <a href = "nrn.php" class="button">Contact</a>
                                                <!-- neal
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="title"><i class="fa fa-magic pr-10"></i> Donate</h4>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="components-social-icons.html"><i class="icon-share pr-10"></i>Social Icons</a></li>
                                                                            <li ><a href="components-buttons.html"><i class="icon-flask pr-10"></i>Buttons</a></li>
                                                                            <li ><a href="components-forms.html"><i class="icon-eq pr-10"></i>Forms</a></li>
                                                                            <li ><a href="components-tabs-and-pills.html"><i class=" icon-dot-3 pr-10"></i>Tabs &amp; Pills</a></li>
                                                                            <li ><a href="components-accordions.html"><i class="icon-menu-outline pr-10"></i>Accordions</a></li>
                                                                            <li ><a href="components-progress-bars.html"><i class="icon-chart-line pr-10"></i>Progress Bars</a></li>
                                                                            <li ><a href="components-call-to-action.html"><i class="icon-chat pr-10"></i>Call to Action Blocks</a></li>
                                                                            <li ><a href="components-alerts-and-callouts.html"><i class="icon-info-circled pr-10"></i>Alerts &amp; Callouts</a></li>
                                                                            <li ><a href="components-content-sliders.html"><i class="icon-star-filled pr-10"></i>Content Sliders</a></li>
                                                                            <li ><a href="components-charts.html"><i class="icon-chart-pie pr-10"></i>Charts</a></li>
                                                                            <li ><a href="components-page-loaders.html"><i class="fa fa-circle-o-notch fa-spin"></i>Page Loaders <span class="badge">New</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="divider"></div>
                                                                        <ul class="menu">
                                                                            <li ><a href="components-icon-boxes.html"><i class="icon-picture-outline pr-10"></i>Icon Boxes</a></li>
                                                                            <li ><a href="components-image-boxes.html"><i class="icon-camera-1 pr-10"></i>Image Boxes</a></li>
                                                                            <li ><a href="components-fullwidth-sections.html"><i class="icon-code-1 pr-10"></i>Full Width Sections</a></li>
                                                                            <li ><a href="components-animations.html"><i class="icon-docs pr-10"></i>Animations</a></li>
                                                                            <li ><a href="components-video-and-audio.html"><i class="icon-video pr-10"></i>Video &amp; Audio</a></li>
                                                                            <li ><a href="components-lightbox.html"><i class="icon-plus pr-10"></i>Lightbox</a></li>
                                                                            <li ><a href="components-counters.html"><i class="icon-sort-numeric pr-10"></i>Counters</a></li>
                                                                            <li ><a href="components-modals.html"><i class="icon-popup pr-10"></i>Modals</a></li>
                                                                            <li ><a href="components-tables.html"><i class="icon-th pr-10"></i>Tables</a></li>
                                                                            <li ><a href="components-text-rotators.html"><i class="icon-arrows-ccw pr-10"></i>Text Rotators</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            neal -->
                                            </li>



                                            <!-- mega-menu end -->

											<li class="kfb_menubar-button">
												<a class="button"  onclick="showpopup()">Login</a>
												<!--	<a href="kfb_volunteer.php" style="color:black; background-color:#2d862d" data-toggle="dropdown">Volunteer</a>-->
												<!--
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Grid 1</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="portfolio-grid-1-2-col.html">2 Column</a></li>
                                                            <li ><a href="portfolio-grid-1-3-col.html">3 Column</a></li>
                                                            <li ><a href="portfolio-grid-1-4-col.html">4 Column</a></li>
                                                            <li ><a href="portfolio-grid-1-sidebar.html">With Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Grid 2</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="portfolio-grid-2-2-col.html">2 Column</a></li>
                                                            <li ><a href="portfolio-grid-2-3-col.html">3 Column</a></li>
                                                            <li ><a href="portfolio-grid-2-4-col.html">4 Column</a></li>
                                                            <li ><a href="portfolio-grid-2-sidebar.html">With Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Grid 3 - Dark</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="portfolio-grid-3-2-col.html">2 Column</a></li>
                                                            <li ><a href="portfolio-grid-3-3-col.html">3 Column</a></li>
                                                            <li ><a href="portfolio-grid-3-4-col.html">4 Column</a></li>
                                                            <li ><a href="portfolio-grid-3-sidebar.html">With Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Fullwidth</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="portfolio-fullwidth-2-col.html">2 Column</a></li>
                                                            <li ><a href="portfolio-fullwidth-3-col.html">3 Column</a></li>
                                                            <li ><a href="portfolio-fullwidth-4-col.html">4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio List</a>
                                                        <ul class="dropdown-menu">
                                                            <li ><a href="portfolio-list-1.html">List - Large Images</a></li>
                                                            <li ><a href="portfolio-list-2.html">List - Small Images</a></li>
                                                            <li ><a href="portfolio-list-sidebar.html">With Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li ><a href="portfolio-item.html">Single Item 1</a></li>
                                                    <li ><a href="portfolio-item-2.html">Single Item 2</a></li>
                                                    <li ><a href="portfolio-item-3.html">Single Item 3</a></li>
                                                </ul>
                                            </li>
                                            -->
											<li class="kfb_menubar-button">
												<a href="kfb_administrative.php" class="button" style="display:<?php echo $admin_display ?>">Contact List (admin)</a>
												<!--														<ul class="dropdown-menu">
                                                                                                            <li ><a href="index-shop.html">Shop Home 1</a></li>
                                                                                                            <li ><a href="index-shop-2.html">Shop Home 2</a></li>
                                                                                                            <li ><a href="shop-listing-4col.html">Grid - 4 Columns</a></li>
                                                                                                            <li ><a href="shop-listing-3col.html">Grid - 3 Columns</a></li>
                                                                                                            <li ><a href="shop-listing-2col.html">Grid - 2 Columns</a></li>
                                                                                                            <li ><a href="shop-listing-sidebar.html">Grid - With Sidebar</a></li>
                                                                                                            <li ><a href="shop-listing-list.html">List</a></li>
                                                                                                            <li ><a href="shop-product.html">Product</a></li>
                                                                                                            <li ><a href="shop-cart.html">Shopping Cart</a></li>
                                                                                                            <li ><a href="shop-checkout.html">Checkout Page - Step 1</a></li>
                                                                                                            <li ><a href="shop-checkout-payment.html">Checkout Page - Step 2</a></li>
                                                                                                            <li ><a href="shop-checkout-review.html">Checkout Page - Step 3</a></li>
                                                                                                            <li ><a href="shop-invoice.html">Invoice</a></li>
                                                                                                        </ul>-->


											</li>

											<!--
                                            <li class="dropdown ">
                                                <a href="blog-large-image-right-sidebar.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li ><a href="index-blog.html">Blog Home <span class="badge">New</span></a></li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Large Image</a>
                                                        <ul class="dropdown-menu to-left">
                                                            <li ><a href="blog-large-image-right-sidebar.html">Right Sidebar</a></li>
                                                            <li ><a href="blog-large-image-left-sidebar.html">Left Sidebar</a></li>
                                                            <li ><a href="blog-large-image-no-sidebar.html">Without Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Medium Image</a>
                                                        <ul class="dropdown-menu to-left">
                                                            <li ><a href="blog-medium-image-right-sidebar.html">Right Sidebar</a></li>
                                                            <li ><a href="blog-medium-image-left-sidebar.html">Left Sidebar</a></li>
                                                            <li ><a href="blog-medium-image-no-sidebar.html">Without Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Masonry</a>
                                                        <ul class="dropdown-menu to-left">
                                                            <li ><a href="blog-masonry-right-sidebar.html">Right Sidebar</a></li>
                                                            <li ><a href="blog-masonry-left-sidebar.html">Left Sidebar</a></li>
                                                            <li ><a href="blog-masonry-no-sidebar.html">Without Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li ><a href="blog-timeline.html">Timeline</a></li>
                                                    <li ><a href="blog-post.html">Blog Post</a></li>
                                                </ul>
                                            </li>
                                            -->


										</ul>



										<!-- main-menu end -->
										<!-- header dropdown buttons -->

										<!-- neal
                                        <div class="header-dropdown-buttons hidden-xs ">
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                                    <li>
                                                        <form role="search" class="search-box margin-clear">
                                                            <div class="form-group has-feedback">
                                                                <input type="text" class="form-control" placeholder="Search">
                                                                <i class="icon-search form-control-feedback"></i>
                                                            </div>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-basket-1"></i><span class="cart-count default-bg">8</span></button>
                                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
                                                    <li>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th class="quantity">QTY</th>
                                                                    <th class="product">Product</th>
                                                                    <th class="amount">Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="quantity">2 x</td>
                                                                    <td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
                                                                    <td class="amount">$199.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="quantity">3 x</td>
                                                                    <td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
                                                                    <td class="amount">$299.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="quantity">3 x</td>
                                                                    <td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
                                                                    <td class="amount">$1499.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="total-quantity" colspan="2">Total 8 Items</td>
                                                                    <td class="total-amount">$1997.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="panel-body text-right">
                                                            <a href="shop-cart.html" class="btn btn-group btn-gray btn-sm">View Cart</a>
                                                            <a href="shop-checkout.html" class="btn btn-group btn-gray btn-sm">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        -->
										<!-- header dropdown buttons end-->

									</div>
									<!--</ul></div>-->

								</div>
							</nav>
							<!-- navbar end -->

						</div>

						<!-- main-navigation end -->
					</div>

					<!-- header-right end -->

				</div>
			</div>
		</div>

	</header>
	<!-- header end -->
</div>


<div id="dialog" title="Administraive Login" style="display: none" class="pageblock text-align: center">

    <form id = "Loginform" method = "post" action = "nrn_dologin.php" >
        <input type = "text" id = "login" placeholder = "" name = "uid">
        <input type = "password" id = "password" name = "upass" placeholder = "***">
        <input type = "submit" id = "dologin" value = "Login">
    </form>

</div>