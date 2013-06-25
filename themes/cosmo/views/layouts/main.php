<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div class="container">
	<div class="clear"></div>
	<div class="row-fluid">
		<div class="span4">
			<img src="/itomex_sc/images/Logo_WWU_Muenster.svg" class="logo" />
		</div>
		<div class="span4 offset4">
			<img src="/itomex_sc/images/itomex_logo.png" class="logo2" />
		</div>
	</div>
	<div class="clear"></div>
	<div class="row-fluid">
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="#">ITOMEX Service Catalogue</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li><a href="#contact">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php echo $content; ?>
	<div class="clear"></div>
	<div class="row-fluid footer">
		<h4>ITOMEX Service Catalogue</h4>
	</div>
</div><!-- page -->
</body>
</html>
