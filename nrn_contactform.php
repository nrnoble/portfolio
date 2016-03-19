<?php
session_start();
if (isset($_POST['send']))
{
	//echo("<h2>sending email...</h2>"); 
    $expected = ['name', 'email', 'comments'];
    $required = ['name', 'comments'];
    $to = 'Neal Noble<nrnoble@hotmail.com>';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: kaneses@greenrivertech.net';
    $headers[] = 'Cc: neal@nrnoble.com, nnoble2@greenrivertech.net';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
     $authorized = '';
    require './kfb_includes/process_mail.php';

    if ($mailSent)
    {
        //print_r($_POST);
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['comments'] = $_POST['comments'];
       // echo "<script>showpopup();</script>";
        header('Location: nrn_contact_add.php');



        exit;
    }



    $errors = [];
$missing = [];
}
?>
<?php include "nrn_head.php" ?>








<body class="no-trans kfb_background">


<?php #include "thankyou_dialog.php";

if ($mailSent)
{
    echo "<script>alert(\"Thank you\");</script>";
    exit;
}

?>



<?php include "nrn_menubar.php" ?>

<?php include "nrn_login_dialog.php" ?>

 <div class="page-wrapper" >

		<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container kfb_background">

				<div class="container">
					<div class="row">
						
<!-- Think carefully before modifying code above this line  -->

					<!-- KFB page content starts here  -->
					
						<div class="main col-md-9">
							
		
						
						<div id = pageblock1s class = "pageblock">
						
						
						 
							<div id = "kfb_contactform" class="container" style="width: inherit">
						  
						  
						  
							<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" >
							  <div class="col-md-9">
					  
								<div class="well well-sm">
                                    <strong style = "color: blue">
										<i class="glyphicon;"></i>
										Contact Neal Noble</strong>
								</div>
							  
								<div class="form-group">
<!--								  <label for="InputName">Your Name</label>-->
                                    <label>Your Name</label>
								  <div class="input-group">
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
									<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
								</div>
								<div class="form-group">
<!--								  <label for="InputEmail">Your Email</label>-->
                                    <label>Your Email</label>
								  <div class="input-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required  >
									<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
								</div>
								<div class="form-group">
<!--								  <label for="InputMessage">Message</label>-->
								  <label>Message</label>
								  <div class="input-group">
									<textarea name="comments" id="InputMessage" class="form-control" rows="5" required></textarea>
									<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
								</div>
					  
					  <!--		  <div class="form-group">-->
					  <!---->
					  <!--			<label for="InputReal">What is 4+3? (Simple Spam Checker)</label>-->
					  <!--			<div class="input-group">-->
					  <!--			  <input type="text" class="form-control" name="InputReal" id="InputReal" required>-->
					  <!--			  <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>-->
					  <!--		  </div>-->
					  
								<input type="submit" name="send" id="send" value="send" class="btn btn-info pull-left">
							  </div>
							</form>
					  </div>


  
  
 
						
		
						
						
							
						</div> 
						

						
					
						</div>
					<!-- KFB page content ends here  -->
					
<!-- Think carefully before modifying code below this line  -->

						<!-- sidebar start -->
						<!-- ================ -->
						    
								<?php# include "kfb_sidebar_contactform.php" ?>
							
						<!-- sidebar end -->

					</div>
				
				</div>
			
			</section>
			<!-- main-container end -->
			
			
			
		</div>
		<!-- page-wrapper end -->

 			<!-- sidebar start -->


<?php #include "kfb_footer.html" ?>
</body>
</html>
