<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Kharkiv JavaScript Conference',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'ext.mail.YiiMailMessage',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
        'swift' => array(),
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components'=>array(
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName'=>false,
            'rules' => array(
                'thank-you-for-registration' => 'site/page/view/thank-you-for-registration',
                'thank-you-for-confirmation' => 'site/confirmParticipation',
                '' => '/site/index',
                'registration' => 'site/registration',
                'partners' => 'site/page/view/partners',
                'location' => 'site/page/view/location',
                'translation' => 'site/page/view/translation',
                'organizers' => 'site/page/view/organizers',
                'login' => 'site/login',
                'registred_members' => 'site/registred_members',
                'confirmation' => 'site/confirmParticipation',
            ),
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
        
        'mail' => array(
            'class' => 'ext.mail.YiiMail',
            'transportType' => 'php',
            'viewPath' => 'application.views.mail',
            'logging' => true,
            'dryRun' => false
        ),
        
		// uncomment the following to enable URLs in path-format
       /*		 
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				 '/registration' => '/site/registration',
			),
			 
		),
        */
		 
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=kharkivjs_db',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'info@kharkivjs.com',
        'confirmation'=> array(
            'subject'   => 'Kharkivjs.com - Approval participation.',
            'message_view'   => 'confirmation_email'
        ),
        'information'=> array(
            'subject'   => 'Kharkivjs.com - Conference.',
            'message_view'   => 'information_mail'
        ),
	),
);