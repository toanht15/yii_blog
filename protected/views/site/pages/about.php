<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>

<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print"> -->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->


	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/app.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/about.css" media="screen, projection">
    

 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<!-- <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> -->
					<img src="https://scontent-hkg.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/1796527_529018360539555_1450998807_n.jpg?oh=6f971d6b25e1b0fe25f040354061e0b8&oe=55E1E4DE" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Hoang The Toan
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<!-- <div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div> -->
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <h4>About me</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste doloribus fugit illum, saepe in! Officiis nihil, sequi sapiente repellendus maxime. Quisquam, sit error voluptatum, maiores asperiores soluta sed officia iure aut neque, quibusdam odit excepturi distinctio corrupti ab molestias quo maxime reiciendis deserunt autem non laboriosam magnam. Dignissimos at debitis perferendis impedit! Doloremque porro recusandae quod quisquam quaerat, repellat ipsum officia quasi velit obcaecati repudiandae minima. Consequatur, hic at veritatis voluptatem id, natus corporis dolorum debitis sapiente doloribus quibusdam nemo accusamus in exercitationem. Excepturi placeat eius omnis unde eaque laudantium, voluptatibus sunt animi dolorum voluptatem itaque quibusdam vel hic autem.</p>
            <div class="row">
            	<div class="col-md-6">
            		<h4>Contact Infomation</h4>
            		<dl class="dl-horizontal">
            			<dt>Email: </dt><dd>toanht@ows.vn</dd>
            			<dt>Phone Number: </dt><dd>0947150593</dd>
            			<dt>SkypeID: </dt><dd>toanht989</dd>
            			<dt>Address: </dt><dd>75 Giai Phong Street, Ha Noi</dd>
            			<dt>External Links: </dt><dd><a href="http://facebook.com/hoangthetoan">Facebook</a>
														<a href="#">Blog</a>
            			</dd>
            		</dl>
            	</div>
            	<div class="col-md-6">
            		<h4>Personal Infomation</h4>
            		<dl class="dl-horizontal">
            			<dt>Birthday: </dt><dd>15/05/1993</dd>
            			<dt>Job: </dt><dd>Developer</dd>
            			<dt>High School: </dt><dd>Thai Lao</dd>
            			<dt>University: </dt><dd>Ha Noi of science and technology</dd>
            			<dt>Intership: </dt><dd>OWS Company</dd>
            			
            	</div>

            </div>
            </div>
		</div>
	</div>
</div>
<br>
<br>
</body>



