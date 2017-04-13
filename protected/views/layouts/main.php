<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-formhelpers.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-formhelpers.js" defer></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">myTimesheet</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><?php echo CHtml::link('About', Yii::app()->request->baseUrl.'/index.php/site/about', array()); ?></li>
					<li><?php echo CHtml::link('Job', Yii::app()->request->baseUrl.'/index.php/job/index', array()); ?></li>
					<li><?php echo CHtml::link('Account', Yii::app()->request->baseUrl.'/index.php/user/'.Yii::app()->user->id, array()); ?></li>
					<li><?php echo CHtml::link('Contact', Yii::app()->request->baseUrl.'/index.php/site/contact', array()); ?></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><?php if (Yii::app()->user->isGuest) echo CHtml::link('Login', Yii::app()->request->baseUrl.'/index.php/site/login', array()); ?></li>
					<li><?php if (!Yii::app()->user->isGuest) echo CHtml::link('Logout', Yii::app()->request->baseUrl.'/index.php/site/logout', array()); ?></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<main>
		<div class="container-fluid">

			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?>
			<?php endif?>

			<?php echo $content; ?>

		</div>
	</main>
	
	<footer>
		Copyright &copy; <?php echo date('Y'); ?> by <?php echo CHtml::link('MK Development', 'http://mkotok.com', array('target'=>'_blank')); ?>.<br/>
		All Rights Reserved.<br/>
	</footer>

</div>

</body>
</html>
