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
	  .icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: currentColor;
  fill: currentColor;
}

.wrapper {
  width: 100%;
  width: 100%;
  height: auto;
 
  padding-top: 44px;
  display: flex;
 
  display: flex;
  
}
@media screen and (max-width: 768px) {
  .wrapper {
    height: auto;
    min-height: 100vh;
    padding-top: 100px;
  }
}

.profile-card {
  width: 100%;
  min-height: 468px;
  margin: auto;
  box-shadow: 0px 8px 60px -10px rgba(13, 28, 39, 0.6);
  background: #fff;
  border-radius: 12px;
 
  position: relative;
}
.profile-card.active .profile-card__cnt {
  filter: blur(6px);
}
.profile-card.active .profile-card-message,
.profile-card.active .profile-card__overlay {
  opacity: 1;
  pointer-events: auto;
  transition-delay: 0.1s;
}
.profile-card.active .profile-card-form {
  transform: none;
  transition-delay: 0.1s;
}
.profile-card__img {
  width: 150px;
  height: 150px;
  margin-left: auto;
  margin-right: auto;
  transform: translateY(-50%);
  
  overflow: hidden;
  position: relative;
  z-index: 4;
  
}
@media screen and (max-width: 576px) {
  .profile-card__img {
    width: 120px;
    height: 120px;
  }
}
.profile-card__img img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  
}
.profile-card__cnt {
  margin-top: -57px;
  text-align: center;
  padding: 0 20px;
  transition: all 0.3s;
}
.profile-card__name {
  font-weight: 700;
  font-size: 20px;
  color: #eb9141;
 
}
.profile-card__txt {
  font-size: 16px;
  font-weight: 500;
  color: #324e63;
  margin-bottom: 15px;
}
.profile-card__txt strong {
  font-weight: 700;
}
.profile-card-loc {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  font-weight: 600;
}
.profile-card-loc__icon {
  display: inline-flex;
  font-size: 27px;
  margin-right: 10px;
}
.profile-card-inf {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  align-items: flex-start;
  margin-top: 35px;
}
.profile-card-inf__item {
  padding: 10px 35px;
  min-width: 150px;
}
@media screen and (max-width: 768px) {
  .profile-card-inf__item {
    padding: 10px 20px;
    min-width: 120px;
  }
}
.profile-card-inf__title {
  font-weight: 700;
  font-size: 27px;
  color: #324e63;
}
.profile-card-inf__txt {
  font-weight: 500;
  margin-top: 7px;
}
.profile-card-social {
 
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
.profile-card-social__item {
  display: inline-flex;
  width: 40px;
  height: 40px;
  margin: 6px;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
  color: #fff;
  background: #405de6;
  box-shadow: 0px 7px 30px rgba(43, 98, 169, 0.5);
  position: relative;
  font-size: 21px;
  flex-shrink: 0;
  transition: all 0.3s;
}
@media screen and (max-width: 768px) {
  .profile-card-social__item {
    width: 50px;
    height: 50px;
    margin: 10px;
  }
}

.profile-card-social__item.facebook {
  background: linear-gradient(45deg, #3b5998, #0078d7);
  box-shadow: 0px 4px 30px rgba(43, 98, 169, 0.5);
}
.profile-card-social__item.twitter {
  background: linear-gradient(45deg, #1da1f2, #0e71c8);
  box-shadow: 0px 4px 30px rgba(19, 127, 212, 0.7);
}
.profile-card-social__item.instagram {
  background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
  box-shadow: 0px 4px 30px rgba(120, 64, 190, 0.6);
}
.profile-card-social__item.behance {
  background: linear-gradient(45deg, #1769ff, #213fca);
  box-shadow: 0px 4px 30px rgba(27, 86, 231, 0.7);
}
.profile-card-social__item.github {
  background: linear-gradient(45deg, #333333, #626b73);
  box-shadow: 0px 4px 30px rgba(63, 65, 67, 0.6);
}
.profile-card-social__item.codepen {
  background: linear-gradient(45deg, #324e63, #414447);
  box-shadow: 0px 4px 30px rgba(55, 75, 90, 0.6);
}
.profile-card-social__item.link {
  background: linear-gradient(45deg, #d5135a, #f05924);
  box-shadow: 0px 4px 30px rgba(223, 45, 70, 0.6);
}
.profile-card-social .icon-font {
  display: inline-flex;
}
.profile-card-ctr {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 40px;
}
@media screen and (max-width: 576px) {
  .profile-card-ctr {
    flex-wrap: wrap;
  }
}
.profile-card__button {
  background: none;
  border: none;
  font-family: "Quicksand", sans-serif;
  font-weight: 700;
  font-size: 19px;
  margin: 15px 35px;
  padding: 15px 40px;
  min-width: 201px;
  border-radius: 50px;
  min-height: 55px;
  color: #fff;
  cursor: pointer;
  backface-visibility: hidden;
  transition: all 0.3s;
}
@media screen and (max-width: 768px) {
  .profile-card__button {
    min-width: 170px;
    margin: 15px 25px;
  }
}
@media screen and (max-width: 576px) {
  .profile-card__button {
    min-width: inherit;
    margin: 0;
    margin-bottom: 16px;
    width: 100%;
    max-width: 300px;
  }
  .profile-card__button:last-child {
    margin-bottom: 0;
  }
}
.profile-card__button:focus {
  outline: none !important;
}
@media screen and (min-width: 768px) {
  .profile-card__button:hover {
    transform: translateY(-5px);
  }
}
.profile-card__button:first-child {
  margin-left: 0;
}
.profile-card__button:last-child {
  margin-right: 0;
}
.profile-card__button.button--blue {
  background: linear-gradient(45deg, #1da1f2, #0e71c8);
  box-shadow: 0px 4px 30px rgba(19, 127, 212, 0.4);
}
.profile-card__button.button--blue:hover {
  box-shadow: 0px 7px 30px rgba(19, 127, 212, 0.75);
}
.profile-card__button.button--orange {
  background: linear-gradient(45deg, #d5135a, #f05924);
  box-shadow: 0px 4px 30px rgba(223, 45, 70, 0.35);
}
.profile-card__button.button--orange:hover {
  box-shadow: 0px 7px 30px rgba(223, 45, 70, 0.75);
}
.profile-card__button.button--gray {
  box-shadow: none;
  background: #dcdcdc;
  color: #142029;
}
.profile-card-message {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  padding-top: 130px;
  padding-bottom: 100px;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
}
.profile-card-form {
  box-shadow: 0 4px 30px rgba(15, 22, 56, 0.35);
  max-width: 80%;
  margin-left: auto;
  margin-right: auto;
  height: 100%;
  background: #fff;
  border-radius: 10px;
  padding: 35px;
  transform: scale(0.8);
  position: relative;
  z-index: 3;
  transition: all 0.3s;
}
@media screen and (max-width: 768px) {
  .profile-card-form {
    max-width: 90%;
    height: auto;
  }
}
@media screen and (max-width: 576px) {
  .profile-card-form {
    padding: 20px;
  }
}
.profile-card-form__bottom {
  justify-content: space-between;
  display: flex;
}
@media screen and (max-width: 576px) {
  .profile-card-form__bottom {
    flex-wrap: wrap;
  }
}
.profile-card textarea {
  width: 100%;
  resize: none;
  height: 210px;
  margin-bottom: 20px;
  border: 2px solid #dcdcdc;
  border-radius: 10px;
  padding: 15px 20px;
  color: #324e63;
  font-weight: 500;
  font-family: "Quicksand", sans-serif;
  outline: none;
  transition: all 0.3s;
}
.profile-card textarea:focus {
  outline: none;
  border-color: #8a979e;
}
.profile-card__overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
  opacity: 0;
  background: rgba(22, 33, 72, 0.35);
  border-radius: 12px;
  transition: all 0.3s;
}
  </style>
</head>
<body>


<div id="wrap" class="grid_1200">
	
<?php require_once "head.php"; ?>	
	<section class="container main-content page-left-sidebar">
		<div class="row">
			<div class="col-lg-4">
				<div class="wrapper">
					<div class="profile-card js-profile-card">
					  <div class="profile-card__img">
						<img src="https://guidetoislam.com/assets/media/bilal-philips1821_bigThumb.jpg" alt="profile card">
					  </div>
				  
					  <div class="profile-card__cnt js-profile-cnt">
						<div class="profile-card__name">Billal Phillips
						</div>
						<div class="profile-card__txt">Ph.D. in Islamic Theology in 1994 <strong> University of Wales</strong></div>
						<div class="profile-card-loc">
				  
							<p style="font-size: 12px; text-align: left;    text-align: justify;">
							  He is the founder of Bayyinah Institute which offers various self-paced, full time and part time programs to make the learning of Arabic language and the study of Quran easily accessible worldwide. Nouman Ali Khan posses a lot of knowledge about the Quran and Sunnah and he passes this knowledge to others through his amazing books e.g; Divine Speech: Exploring Quran As Literature, Your Sin Is Not Greater Than Gods Mercy and Revive Your Heart: Putting Life in Perspective.
							</p>
						  <div class="profile-card-social">
							<a href="#" class="profile-card-social__item facebook" target="_blank">
							  <i class="social_icon-twitter font17"></i>
							</a>
					
							<a href="#" class="profile-card-social__item twitter" target="_blank">
							  <i class="social_icon-facebook font17"></i>
							</a>
					
							<a href="#" class="profile-card-social__item instagram" target="_blank">
							  
							  <i class="social_icon-gplus font17"></i>
							</a>
						  </div>
					
						  
						</div>
				  
						
					  </div>
				
				  
					</div>
				  
				  </div>
				  
				  
			</div>
			<div class="col-lg-4">
				<div class="wrapper">
					<div class="profile-card js-profile-card">
					  <div class="profile-card__img">
						<img src="https://bloggingtheologydotnet.files.wordpress.com/2017/09/17554196_1011250282341047_6997812027149433010_n.jpg" alt="profile card">
					  </div>
				  
					  <div class="profile-card__cnt js-profile-cnt">
						<div class="profile-card__name">Nouman Ali Khan

						</div>
						<div class="profile-card__txt">founder of Bayyinah Institute</div>
						<div class="profile-card-loc">
				  
						  <p style="font-size: 12px; text-align: left;    text-align: justify;">
							He is the founder of Bayyinah Institute which offers various self-paced, full time and part time programs to make the learning of Arabic language and the study of Quran easily accessible worldwide. Nouman Ali Khan posses a lot of knowledge about the Quran and Sunnah and he passes this knowledge to others through his amazing books e.g; Divine Speech: Exploring Quran As Literature, Your Sin Is Not Greater Than Gods Mercy and Revive Your Heart: Putting Life in Perspective.
						  </p>
						<div class="profile-card-social">
						  <a href="#" class="profile-card-social__item facebook" target="_blank">
							<i class="social_icon-twitter font17"></i>
						  </a>
				  
						  <a href="#" class="profile-card-social__item twitter" target="_blank">
							<i class="social_icon-facebook font17"></i>
						  </a>
				  
						  <a href="#" class="profile-card-social__item instagram" target="_blank">
							
							<i class="social_icon-gplus font17"></i>
						  </a>
						</div>
				  
						
					  </div>
				
				  
					</div>
				  
				  </div>
				  
				  
			</div>
		</div>
		<div class="col-lg-4">
			<div class="wrapper">
				<div class="profile-card js-profile-card">
				  <div class="profile-card__img">
					<img src="https://www.amust.com.au/wp-content/uploads/2019/06/1dcdac6e-e315-48c7-a178-88e5d6394fe4.jpg" alt="profile card">
				  </div>
			  
				  <div class="profile-card__cnt js-profile-cnt">
					<div class="profile-card__name">Mufti Menk


					</div>
					<div class="profile-card__txt">The Council of Islamic Scholars of Zimbabwe</div>
					<div class="profile-card-loc">
			  
					  <p style="font-size: 12px; text-align: left;    text-align: justify;">
						smail ibn Musa Menk, born in Harare, is a renowned Islamic preacher and Mufti of Zimbabwe. He is the Head of the Fatwa Department of Majlisul Ulama Zimbabwe (The Council of Islamic Scholars of Zimbabwe). He is also an Imam at Masjid Al Falaah in Harare. A great inspirational speaker and lecturer around the globe, is working solely for the Pleasure of Allah Almighty without any financial reward. We can not find or hear copyrights, charges, royalties, patents, and cost to invite him.					  </p>
					<div class="profile-card-social">
					  <a href="#" class="profile-card-social__item facebook" target="_blank">
						<i class="social_icon-twitter font17"></i>
					  </a>
			  
					  <a href="#" class="profile-card-social__item twitter" target="_blank">
						<i class="social_icon-facebook font17"></i>
					  </a>
			  
					  <a href="#" class="profile-card-social__item instagram" target="_blank">
						
						<i class="social_icon-gplus font17"></i>
					  </a>
					</div>
			  
					
				  </div>
			
			  
				</div>
			  
			  </div>
			  
			  
		</div>
	</div>
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