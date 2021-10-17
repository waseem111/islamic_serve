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
  
</head>
<body>


<div id="wrap" class="grid_1200">
	
<?php require_once "head.php"; ?>	
<section class="container main-content">
		<div class="row">
			
      <div class="col-md-9">
				<div class="page-content">
					<div class="boxedtitle page-title"><h2>Edit Profile</h2></div>
					
					<div class="form-style form-style-4">
						<form>
							<div class="form-inputs clearfix">
								<p>
									<label>First Name</label>
									<input type="text">
								</p>
								<p>
									<label>Last Name</label>
									<input type="text">
								</p>
								<p>
									<label class="required">E-Mail<span>*</span></label>
									<input type="email">
								</p>
								<p>
									<label>Website</label>
									<input type="text">
								</p>
								<p>
									<label class="required">Password<span>*</span></label>
									<input type="password" value="">
								</p>
								<p>
									<label class="required">Confirm Password<span>*</span></label>
									<input type="password" value="">
								</p>
								<p>
									<label>Country</label>
									<input type="text">
								</p>
							</div>
							<div class="form-style form-style-2">
								<div class="user-profile-img"><img src="https://2code.info/demo/html/ask-me/images/demo/admin.jpeg" alt="admin"></div>
								<p class="user-profile-p">
									<label>Profile Picture</label>
									</p><div class="fileinputs">
										<input type="file" class="file">
										<div class="fakefile">
											<button type="button" class="button small margin_0">Select file</button>
											<span><i class="icon-arrow-up"></i>Browse</span>
										</div>
									</div>
								<p></p>
								<div class="clearfix"></div>
								<p>
									<label>About Yourself</label>
									<textarea cols="58" rows="8"></textarea>
								</p>
							</div>
							<div class="form-inputs clearfix">
								<p>
									<label>Facebook</label>
									<input type="text">
								</p>
								<p>
									<label>Twitter</label>
									<input type="text">
								</p>
								<p>
									<label>Linkedin</label>
									<input type="email">
								</p>
								<p>
									<label>Google plus</label>
									<input type="text">
								</p>
							</div>
							<p class="form-submit">
								<input type="submit" value="Update" class="button color small login-submit submit">
							</p>
						</form>
					</div>
				</div><!-- End page-content -->
			</div>
			<aside class="col-md-3 sidebar">
				<div class="widget widget_stats">
					<h3 class="widget_title">Stats</h3>
					<div class="ul_list ul_list-icon-ok">
						<ul>
							<li><i class="icon-question-sign"></i>Questions ( <span>20</span> )</li>
							<li><i class="icon-comment"></i>Answers ( <span>50</span> )</li>
						</ul>
					</div>
				</div>
				
				<div class="widget widget_social">
					<h3 class="widget_title">Find Us</h3>
					<ul>
					
						<li class="facebook-fans">
							<a href="#" target="_blank">
							<strong>
								<i class="social_icon-facebook"></i>
								<span>5,000</span><br>
								<small>People like it</small>
							</strong>
							</a>
						</li>
						<li class="twitter-followers">
							<a href="#" target="_blank">
							<strong>
								<i class="social_icon-twitter"></i>
								<span>3,000</span><br>
								<small>Followers</small>
							</strong>
							</a>
						</li>
						<li class="youtube-subs">
							<a href="#" target="_blank">
							<strong>
								<i class="icon-play"></i>
								<span>1,000</span><br>
								<small>Subscribers</small>
							</strong>
							</a>
						</li>
					</ul>
				</div>
				
			
				
		
				
				
				
				<div class="widget">
					<h3 class="widget_title">Recent Questions</h3>
					<ul class="related-posts">
						<li class="related-item">
							<h3><a href="#">This is my first Question</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="clear"></div><span>Feb 22, 2014</span>
						</li>
						<li class="related-item">
							<h3><a href="#">This Is My Second Poll Question</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="clear"></div><span>Feb 22, 2014</span>
						</li>
					</ul>
				</div>
				
			</aside><!-- End sidebar -->
		</div><!-- End row -->
	</section>
	
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