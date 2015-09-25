<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<!--
	Ed ecco il forum della ProLoco, se leggi questo sei un gran smanettone,
     smettila fuori c'è un mondo bellissimo che ti aspetta.
-->
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/skel.css" media="screen, projection" />
			<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="print" />
			<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-desktop.css" media="print" />
			<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" media="screen, projection" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>

<body>
	<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href=# id="logo">Pro loco Monesiglio</a></h1>
								<nav id="nav">
									<?php $this->widget('zii.widgets.CMenu',array(
										'items'=>array(
											array('label'=>'Homepage', 'url'=>array('/')),
											array('label'=>'Forum', 'url'=>array('/discussioni', 'view'=>'about')),
											array('label'=>'Prossimo Evento', 'url'=>array('/site/prossimo_evento')),
											array('label'=>'Facebook', 'url'=>array('https://www.facebook.com/proloco.monesiglio')),
											array('label'=>'Direttivo', 'url'=>array('/site/direttivo', 'view'=>'about')),
											array('label'=>'Area Privata', 'url'=>array('/site/area_privata')),
											/*
											array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
											array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
											*/
										),
									)); ?>
								</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?>
	<?php if(!isset($_GET['r'])){ ?>
		<div id="banner-wrapper">
			<div class="container">

				<div id="banner">
					<h2>La Pro loco di Monesiglio vi da il Benvenuto</h2>
					<span>Partecipate alle feste, forniteci consigli e rimanete aggiornati sugli eventi</span>
				</div>

			</div>
		</div>
	<?php } ?>
		
		
	<div id="main">
		<div class="container">
			<div class="row main-row">
				<?php echo $content; ?>
			</div>
		</div>
	</div>

	<div class="clear"></div>

	<div id="footer-wrapper">
			<div class="container">
				<div class="row">
					<div class="8u">
						
						<section>
							<h2>How about a truckload of links?</h2>
							<div>
								<div class="row">
									<div class="3u">
										<ul class="link-list">
											<li><a href="#">Sed neque nisi consequat</a></li>
											<li><a href="#">Dapibus sed mattis blandit</a></li>
											<li><a href="#">Quis accumsan lorem</a></li>
											<li><a href="#">Suspendisse varius ipsum</a></li>
											<li><a href="#">Eget et amet consequat</a></li>
										</ul>
									</div>
									<div class="3u">
										<ul class="link-list">
											<li><a href="#">Quis accumsan lorem</a></li>
											<li><a href="#">Sed neque nisi consequat</a></li>
											<li><a href="#">Eget et amet consequat</a></li>
											<li><a href="#">Dapibus sed mattis blandit</a></li>
											<li><a href="#">Vitae magna sed dolore</a></li>
										</ul>
									</div>
									<div class="3u">
										<ul class="link-list">
											<li><a href="#">Sed neque nisi consequat</a></li>
											<li><a href="#">Dapibus sed mattis blandit</a></li>
											<li><a href="#">Quis accumsan lorem</a></li>
											<li><a href="#">Suspendisse varius ipsum</a></li>
											<li><a href="#">Eget et amet consequat</a></li>
										</ul>
									</div>
									<div class="3u">
										<ul class="link-list">
											<li><a href="#">Quis accumsan lorem</a></li>
											<li><a href="#">Sed neque nisi consequat</a></li>
											<li><a href="#">Eget et amet consequat</a></li>
											<li><a href="#">Dapibus sed mattis blandit</a></li>
											<li><a href="#">Vitae magna sed dolore</a></li>
										</ul>
									</div>
								</div>
							</div>
						</section>
					
					</div>
					<div class="4u">

						<section>
							<h2>Something of interest</h2>
							<p>Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed. 
							Suspendisse eu varius nibh. Suspendisse vitae magna eget odio amet 
							mollis justo facilisis quis. Sed sagittis mauris amet tellus gravida
							lorem ipsum dolor sit amet consequat blandit.</p>
							<footer class="controls">
								<a href="#" class="button">Oh, please continue ....</a>
							</footer>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="12u">

						<div id="copyright">
							&copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
