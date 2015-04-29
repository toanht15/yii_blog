<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->


	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
 	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->


	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<!-- <div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div> --><!-- header -->

	<!-- <div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div> --><!-- mainmenu -->
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>


	<?php echo $content; ?>

	<div class="clear"></div>
	
	<div id="bsnavbar">
		<?php
		$this->widget(
			'booster.widgets.TbNavbar',
			array(
				'type' => 'null',
				'brand' => 'My Yii Blog',
				'brandUrl' => array('/'),
				'brandOptions'=>array('style'=>'width: auto; margin-left: 70px'),
        'collapse' => true, // requires bootstrap-responsive.css
        'fixed' => 'top',
        'fluid' => true,
        'items' => array(
        	array(
        		'class' => 'booster.widgets.TbMenu',
        		'type' => 'navbar',
        		'items' => array(
        			//array('label' => 'Home', 'url' =>array('/')),
        			),
        		),
        	'<form class="navbar-form navbar-left" style="margin-left:20px" action=""><div class="form-group"><input type="text" class="form-control" placeholder="Search"></div></form>',
        	array(
        		'class' => 'booster.widgets.TbMenu',
        		'type' => 'navbar',
        		'htmlOptions' => array('class' => 'pull-right', 'style'=>'margin-right: 70px'),
        		'items' => array(
        			array('label' => 'About', 'url' => array('/site/page', 'view'=>'about')),
        			array('label'=> 'Contact','url'=> array('/site/contact')),
        			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
        			array(
        				'label' => ''.Yii::app()->user->name.'',
        				'visible'=>!Yii::app()->user->isGuest,
        				'url' => '#',
        				'items' => array(
        					array('label' => 'Profile', 'url' => '#'),
        					array('label' => 'List Post', 'url' => array('/post/index')),
        					array(
        						'label' => 'Something else here',
        						'url' => '#'
        						),
        					'---',
        					array('label' => 'Logout', 'url'=>array('/site/logout')),
        					)
        				),
        			),
        		),
        	),
)
);
?>
</div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by OWS.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
