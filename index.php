<?php include "nrn_head.php";?>

<body class="no-trans  kfb_background">

<?php include "nrn_login_dialog.php" ?>

<div id="fb-root">
</div>

<script>
	(function(d, s, id)
	{
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
		fjs.parentNode.insertBefore(js, fjs);
	}
	(document, 'script', 'facebook-jssdk'));
</script>


<?php include "nrn_menubar.php" ?>

<div class="page-wrapper" >


	<!-- main-container start -->
	<!-- ================ -->

	<!-- carousels -->
	<section class="main-container kfb_background">

		<div class="container">
			<div class="row">
				<div class="main col-md-9">
					<!--<h3><i>Serving low-income residents of the Kent School District</i></h3>  --> <!-- slide bar -->
					<!-- <div id = "slideshow"  class="pageblock slideshow" style = "text-align:center; background-color: black; color:white;"> -->
					<!-- moved by Kandis 2/29 -->


<!--					<div class="pageblock">-->
<!--						<input type="button" id="show_login" value="Show Login" onclick="showpopup()"><br>-->
<!--						<input type="button" id="close_login" value="close_login" onclick="hidepopup()"><br>-->
<!--						Note: Strictly for testing\debugging purposes. Will be removed after testing is completed.-->
<!---->
<!--					</div >-->






					<div id = "about_neal" class="pageblock">
						<div id="header-3">


							<h2 class="space-top">Neal Noble</h2>
							<div class="separator-2"></div>

							<!-- <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">  -->
							<hr class="visible-xs">

							<img src="neal_noble_75.png">


						</div>
					</div>




					<div id = "my_background" class="pageblock">
						<div id="header-3">
							<h2 class="space-top">Background</h2>
							<div class="separator-2"></div>

							<!-- <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">  -->
							<hr class="visible-xs">

							<p>12 years of testing for Microsoft. Shipping SMS 2.0, BackOffice 4.5, Exchange SDK,
								Exchange 2000 OWA, Exchange 2003 OWA. Responsible for testing high profile features
								and pushing for quality in all test areas. Independently developed automation tools to
								eliminate redundant manual tasks and testing. Over 5 years working outside of Microsoft
								with corporate customers solving desktop software\hardware\networking problems. A
								passion for software and the software development process. </p>

						</div>
					</div>




				<?php include "modal.php" ?>


				<div id =  "contact" class="pageblock" style="display:none ">
					<div id="header-9">
						<h2 class="space-top">Contact</h2>
						<div class="separator-2"></div>
						<a href="nrn.php">Contact</a>
					</div>
				</div>


					<script>
						$("#myModal").draggable({
							handle: ".modal-header"
						});

					</script>


				<!-- main end -->





			</div>

									<!-- sidebar start -->
			<!-- ================ -->

			<?php # include "kfb_sidebar.php" ?>



			<!-- sidebar end -->


		</div>


	</section>
	<!-- main-container end -->

</div>
<!-- page-wrapper end -->

<!-- </div> -->

<?php #include "kfb_footer.php" ?>
</body>
</html>