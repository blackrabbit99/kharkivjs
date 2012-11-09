<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=cp-1251" />
	<meta name="language" content="en" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    
    <link media="all" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/all.css" />
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Comfortaa:400,700&amp;subset=latin,cyrillic-ext' />
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic'>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.2.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.main.js"></script>
</head>
<body>
<div id="wrapper">
		<noscript><div>Javascript must be enabled for the correct page display</div></noscript>
		<div class="header-content">
			<header id="header">
				<section class="block">
					<strong class="logo"><a href="/">JS Kharkiv</a></strong>
					<div class="holder">
						<p>First Kharkiv JS will present talks and workshops about Html5 and JavaScript, the languages of the web. You'd get a chance to pick up with hipster's JS technology and proven solutions. </p>
						<!-- <a href="#" class="btn"><span class="r">Регистрация</span><span class="l"></span></a> -->
						<p>Technology stack: JavaScript, CoffeeScript, Backbone.js, Chaplin, HTML5, Sencha JS</p>
					</div>
				</section>
				<section class="title">
					<h1>Kharkiv JavaScript Conference 15 Dec. 2012</h1>
				</section>
				<nav>
                    <div id="mainmenu">
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'nav',
                            'items' => array(
                                array('label' => 'topics', 'url' => array('/site/index')),
                                array('label' => 'partners', 'url' => array('/site/page', 'view' => 'partners')),
                                array('label' => 'location', 'url' => array('/site/page', 'view' => 'location')),
                                array('label'=>'organizers', 'url' => array('site/page', 'view' => 'organizers')),
                                array('label' => 'admin panel', 'url' => array('/site/registred_members'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'logout', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                                
                                //array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                
                            ),
                        ));
                        ?>
                    </div>
				</nav>
			</header>
		</div>
		<div id="main">
			<div id="content">
                <?php echo $content; ?>
			</div>
		</div>
		<div class="footer-content">
			<footer id="footer">
				<ul class="social-m">
					<li><a href="#" class="facebook">facebook</a></li>
					<li><a href="#" class="twitter">twitter</a></li>
				</ul>
				<div class="holder">
					<dl>
						<dt>email:</dt>
                        <dd><a target="_blank" href="mailto:<?php echo CHtml::encode(Yii::app()->params['adminEmail']); ?>"><?php echo CHtml::encode(Yii::app()->params['adminEmail']); ?></a></dd>
					</dl>
					<span class="copy">Copyright &copy; <?php echo date('Y'); ?>  <span class="sep">Kharkiv JS </span></span>
				</div>
			</footer>
		</div>
	</div>
</html>
