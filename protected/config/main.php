<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
$ConfigDir=dirname(__FILE__);
$params = require_once($ConfigDir . DIRECTORY_SEPARATOR . 'params.php');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	'params' => $params,
	// preloading 'log' component	
	'preload'=>array('bootstrap','log'),
	'language' => 'zh_cn',
	'theme' => 'aquarius',//matrix,aquarius
	// autoloading model matrixmatrixand component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.giix-components.*', // giix components
		'application.modules.user.models.*',
		'application.modules.user.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
				'generatorPaths' => array(
						'ext.giix-core', // giix generators
						'bootstrap.gii'
				),
		),
		'user'=>array(
				'hash'=>'md5',
				'sendActivationMail' => false,
				'loginNotActiv' => false,
				'activeAfterRegister' => false,
				'autoLogin' => true,
				'registrationUrl' => array('/user/registration'),
				'recoveryUrl' => array('/user/recovery'),
				'loginUrl' => array('/user/login'),
				'returnUrl' => array('/user/profile'),
				'returnLogoutUrl' => array('/user/login'),
				),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'class' => 'WebUser',
            'allowAutoLogin'=>true,
            'loginUrl' => array('/user/login'),
		),
			/* load bootstrap components */
			'bootstrap' => array(
					'class' => 'ext.bootstrap.components.Bootstrap',
					'responsiveCss' => true,
			),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=train',
			'emulatePrepare' => true,
			'username' => 'train',
			'password' => '635803',
			'charset' => 'utf8',
			'tablePrefix' => 'train_',
			
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
			'clientScript'=>array(
					'scriptMap'=>array(
							//'jquery.js'=>'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
							//'jquery.min.js'=>'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
							'jquery.js'=>false,
							'jquery.min.js'=>false,
							'jquery-ui.min.js'=>false,
							'jquery-ui.js'=>false,
			
							'bootstrap.js'=>false,
							'jquery.cookie.js'=>false,
							//'config.css'=>'public/css/config.css',
					),
			),
	),
	
);