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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog.css" media="screen, projection">
    

 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


	
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
        			array('label' => 'My Photos', 'url' =>array('/album')),
        			),
        		),
        	'<form class="navbar-form navbar-left" style="margin-left:20px" 
                action="'
                .Yii::app()->createUrl('post/search').'"  
                method="post" >
                <div class="form-group"><input type="text" name="search_str" id="test" class="form-control" placeholder="Search"></div>
            </form>',
            array(
        		'class' => 'booster.widgets.TbMenu',
        		'type' => 'navbar',
        		'htmlOptions' => array('class' => 'pull-right', 'style'=>'margin-right: 70px'),
        		'items' => array(
        			array('label' => 'About', 'url' => array('/site/page', 'view'=>'about')),
                    //array('label'=> 'Contact','url'=> "#LoginModal",'linkOptions' => array('data-toggle'=>'modal')  ),
        			array('label'=> 'Contact','url'=> array('/site/contact')	),
                    //array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
        			array('label'=>'Login', 'url'=>"#LoginModal",'linkOptions' => array('data-toggle'=>'modal'), 'visible'=>Yii::app()->user->isGuest),
        			array(
        				'label' => ''.Yii::app()->user->name.'',
        				'visible'=>!Yii::app()->user->isGuest,
        				'url' => '#',
        				'items' => array(
        					array('label' => 'Edit Profile', 'url' => array('/user')),
        					array('label' => 'List Post', 'url' => array('/post/index')),
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


<?php $this->beginWidget(
    'booster.widgets.TbModal',
    array('id' => 'LoginModal')
); ?>
 
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3>Login</h3>
    </div>
 
    <div class="modal-body">
<?php $model=new LoginForm;
$form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
        'htmlOptions' => array('class' => 'login-form'), // for inset effect
        'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'action'=>array('site/login'),
    )
); 

  echo $form->textFieldGroup($model, 'username');
  echo $form->error($model,'username');
  echo $form->passwordFieldGroup($model, 'password'); 
  echo $form->error($model,'password');
  echo $form->checkboxGroup($model, 'rememberMe');
  echo $form->error($model,'rememberMe');



$this->widget(
    'booster.widgets.TbButton',
    array('buttonType' => 'submit', 'label' => 'Login')
); 


 $this->endWidget();
unset($form); ?>
</div>
<?php $this->endWidget(); ?> <!--end modal-->


	<div id="footer" class="blog-footer">
		Copyright &copy; <?php echo date('Y'); ?> by OWS.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
