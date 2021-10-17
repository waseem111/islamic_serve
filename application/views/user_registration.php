<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <title>Islamic Serve</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/skins.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/base.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/lists.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/prettyPhoto.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontello/css/fontello.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  	<style>
  	span.form_error{
  		color:red !important;
  	}
  	</style>
</head>
<body>

	<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	
	
<?php require_once "head.php"; ?>

	
	<section class="container main-content page-full-width">
		<div class="row">
			<div class="contact-us">
				<div class="col-md-3">&nbsp;</div>
				<div class="col-md-6 col-sm-12">
					<div class="page-content">
						<h2>Register Now</h2>
						<form class="form-style form-style-3 form-style-5 form-js" action="<?php echo base_url('user/registration') ?>" method="post">
							<div class="form-inputs clearfix">
								<p>
									<label for="name" class="required">Name<span>*</span></label>
									<input type="text" class="required-item" value="<?php echo set_value('Name') ?>" name="Name" id="Name" aria-required="true" required>
									<?php echo form_error('Name'); ?>
								</p>
								<p>
									<label for="mail" class="required">E-Mail<span>*</span></label>
									<input type="text" class="required-item" id="Email" name="Email" value="<?php echo set_value('Email') ?>" aria-required="true" required>
									<?php echo form_error('Email'); ?>
								</p>
								<p>
									<label for="url" class="required">Password</label>
									<input type="password" id="Password" name="Password" value="<?php echo set_value('Password') ?>" required>
									<?php echo form_error('Password'); ?>
								</p>
								<p>
									<label for="url" class="required">Confirm Password</label>
									<input type="password" id="confirm_password" name="confirm_password" value="<?php echo set_value('confirm_password') ?>" required>
									<?php echo form_error('confirm_password'); ?>
								</p>
							</div>
							<p class="form-submit">
								<input name="signup" type="submit" value="Sign Up" class="submit button small color">
							</p>
						</form>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div><!-- End contact-us -->
		</div><!-- End row -->
	</section><!-- End container -->
	
	<?php require_once "footer.php" ?>

</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script> 
 <script src="<?php echo base_url() ?>assets/js/html5.js"></script>
<script src="<?php echo base_url() ?>assets/js/jflickrfeed.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.inview.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.tipsy.js"></script>
<script src="<?php echo base_url() ?>assets/js/tabs.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.scrollTo.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.nav.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.bxslider.min.js"></script> 
</body>
</html>