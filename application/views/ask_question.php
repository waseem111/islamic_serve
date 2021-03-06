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

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">

<?php require_once "head.php"; ?>

	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Post Your Question</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						
						<span class="crumbs-span">/</span>
						<span class="current">Post Your Question</span>
					</div>
				</div>
			</div>
		</section>
	</div>
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<div class="page-content ask-question">
					<div class="boxedtitle page-title"><h2>Post Your Question</h2></div>
					
					<p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
					
					<div class="form-style form-style-3" id="">
						<form>
							<div class="form-inputs clearfix">
								<p>
									<label class="required">Question Title<span>*</span></label>
									<input type="text" id="">
									<span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
								</p>
								
								<p>
									<label class="required">Category<span>*</span></label>
									<span class="styled-select">
										<select>
											<option value="">Select a Category</option>
											<option value="1">Economics</option>
											<option value="2">Business & Employment</option>
											<option value="3">Education</option>
											<option value="4">Family & Personal</option>
											<option value="5">Hajj & Umrah</option>
											<option value="6">Marriage</option>
											<option value="7">Politics</option>
											<option value="8">Prayer & Ramadhan</option>
											<option value="9">Quran & Sunnah</option>
											<option value="10">Tafseer</option>
											<option value="11">Usul & Fiqh</option>
											<option value="12">Other</option>
										</select>
									</span>
									<span class="form-description">Please choose the appropriate section so easily search for your question .</span>
								</p>
							
								<div class="clearfix"></div>
								
								
							</div>
							<div id="">
								<p>
									<label class="required">Details<span>*</span></label>
									<textarea id="question-details" aria-required="true" cols="58" rows="8"></textarea>
									<span class="form-description">Type the description thoroughly and in detail .</span>
								</p>
							</div>
							<p class="form-submit" style="text-align: center;"> 
								<button class="color button small publish-question">  Submit Question </button>
							</p>
						</form>
					</div>
				</div>
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
				
			</aside>
		</div>
	</section>
	
	<?php require_once "footer.php" ?>

</div>

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