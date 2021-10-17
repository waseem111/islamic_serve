<style>
.dropbtn {
  

  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 999;
  top:40px
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  width: 100%;
}

.dropdown-content a:hover {background-color: #eb9141;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {width:100%}
</style>
<div id="header-nav1">
    <div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Login</h2>
						<div class="form-style form-style-3">
							<form>
								<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="text" value="Username" onfocus="if (this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}">
										<i class="icon-user"></i>
									</p>
									<p class="login-password">
										<input type="password" value="Password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
										<i class="icon-lock"></i>
										<a href="#">Forget</a>
									</p>
								</div>
								<p class="form-submit login-submit">
									<input type="submit" value="Log in" class="button color small login-submit submit">
								</p>
								<div class="rememberme">
									<label><input type="checkbox" checked="checked"> Remember Me</label>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="page-content Register">
						<h2>Register Now</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravdio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequa. Vivamus vulputate posuere nisl quis consequat.</p>
						<a class="button color small " href="<?php echo base_url() ?>user/signup">Create an account</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	
	<div class="panel-pop" id="signup">
		<h2>Register Now<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<form method="post" action="#">
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text" name="Name" id="Name" required value="<?php echo set_value('Name') ?>">
						<?php echo form_error('Name'); ?>
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email" name="Email" id="email1" required value="<?php echo set_value('Email') ?>">
						<?php echo form_error('Email'); ?>
					</p>
					<p>
						<label class="required">Password<span>*</span></label>
						<input type="password" name="Password" value="" id="password1" required value="<?php echo set_value('Password') ?>">
						<?php echo form_error('Password'); ?>
					</p>
					<p>
						<label class="required">Confirm Password<span>*</span></label>
						<input type="password" name="confirm_password" id="confirm_password" value="" required>
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Signup" id="sigup_btn" name="signup" class="button color small submit">
				</p>
			</form>
		</div>
	</div><!-- End signup -->
	
	<div class="panel-pop" id="lost-password">
		<h2>Lost Password<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<p>Lost your password? Please enter your username and email address. You will receive a link to create a new password via email.</p>
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Reset" class="button color small submit">
				</p>
			</form>
			<div class="clearfix"></div>
		</div>
	</div><!-- End lost-password -->
	
	<div id="header-top">
		<section class="container clearfix">
			<nav class="header-top-nav">
				<ul>
					
					<li><a href="login.html" id="login-panel"><i class="icon-user"></i>Login Area</a></li>
					
					<li class="dropdown">
					<a href="#" class="dropbtn"><i class="icon-user"></i>Hi,Waseem</a>
  <div class="dropdown-content">
    <a href="<?php echo base_url() ?>profile" style="padding: 4px; line-height: 2;">Profile</a>
    <a href="#" style="padding: 4px;  line-height: 2;">Questions </a>
    <a href="<?php echo base_url() ?>editeprofile" style="padding: 4px; line-height: 2;">Edit Profile</a>
  </div>
</li>
				</ul>


			
			</nav>
			<div class="header-search">
				<p  style="font-size: 12px;font-weight: normal;color:#fff;padding: 7px 0 7px 30px;margin-bottom: 0;">
					<div class="my-date2" style=" color: #fff"></div>
					
                </p>
			</div>
		</section><!-- End container -->
	</div><!-- End header-top -->
	<header id="header">
		<section class="container clearfix">
			<div class="logo"><a href="index.html"><img alt="" src="<?php echo base_url() ?>assets/images/logo.png" width="60%"></a></div>
			<nav class="navigation">
				<ul style="    float: right;">
					<li class=""><a href="<?php echo base_url() ?>">Home</a>
						
					</li>
					
					<li class="ask_question"><a href="<?php echo base_url() ?>askquestion">Ask Question</a></li>
					<li><a href="<?php echo base_url() ?>Category">Category</a></li>
					<li><a href="<?php echo base_url() ?>newanswers">New Answers</a></li>
					<!-- <li><a href="#">Get to Know Islaam</a></li>
					<li><a href="#">Books & Article </a>
						<ul>
							<li><a href="#">Books</a></li>
							<li><a href="#">Article</a></li>
						</ul>
					</li> -->
					<li><a href="<?php echo base_url() ?>ourteam"> Our Team </a></li>
					
					<li><a href="<?php echo base_url() ?>contact">Contact </a></li>
				</ul>
			</nav>
		</section><!-- End container -->
	</header><!-- End header -->
	
	<div class="section-warp ask-me">
		<div class="container clearfix">
			<div class="box_icon box_warp box_no_border box_no_background" box_border="transparent" box_background="transparent" box_color="#FFF">
				<div class="row">
					<div class="col-md-12" style="padding-top: 0px;">
						<h2>Welcome to Islamic Serve , Awesome Questions & Answer </h2>
						<!-- <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p> -->
						<!-- <div class="clearfix"></div> -->
						<!-- <a class="color button dark_button medium" href="#">About Us</a>
						<a class="color button dark_button medium" href="#">Join Now</a> -->
						<!-- <div class="clearfix"></div> -->
						<form class="form-style form-style-2">
							<p style="margin-bottom: 20px !important;">
								<input type="text" id="question_title" value="Islamic any question and you be sure find your answer ?" onfocus="if(this.value=='Ask any question and you be sure find your answer ?')this.value='';" onblur="if(this.value=='')this.value='Ask any question and you be sure find your answer ?';" style="margin-top: 0px;">
								<i class="icon-pencil"></i>
								<span class="color button small publish-question">Query  Now</span>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.hijri.date.js"></script>

<script>
    $('.my-date').hijriDate();
    $('.my-date2').hijriDate({
      gregorian: true,
	  hijri:true,
	  showWeekDay: true,
      showGregDate: true,
      separator: '&nbsp;|&nbsp;',
      weekDayLang: 'en',
      hijriLang: 'en',
      gregLang: 'en',



	  
      correction: +1
    });
  </script>
  <script type="text/javascript">


   

  </script>
