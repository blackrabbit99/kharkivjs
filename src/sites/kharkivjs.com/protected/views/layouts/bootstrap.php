<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <!-- Le styles -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
    </head>
    <body>        
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/">KharkivJS</a>
                    <div class="nav-collapse">
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'nav',
                            'items' => array(
                                array('label' => 'topics', 'url' => array('/site/index')),
                                array('label' => 'partners', 'url' => '/partners'),
                                array('label' => 'location', 'url' => '/location'),
                                array('label' => 'organizers', 'url' => '/organizers'),
                                array('label' => 'admin panel', 'url' => '/registred_members', 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'logout', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)

                            //array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            ),
                            'htmlOptions' => array(
                                'class' => 'nav'
                            ),
                        ));
                        ?>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div id="main">
            <div id="content">
                <?php echo $content; ?>
            </div>
        </div>

</html>
