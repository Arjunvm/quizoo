<?php
//dependency import
require 'properties.php';
require 'lib/Slim/Slim.php';
require 'security/Security.php';

//init Slim Framework
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Security($app));
require 'security/Login.php';
require 'security/ManageUser.php';

//resources
	//db quizoo_db
		require('./resource/quizoo_db/custom/SignUpCustom.php');
		require('./resource/quizoo_db/SignUp.php');
		require('./resource/quizoo_db/custom/UserCustom.php');
		require('./resource/quizoo_db/User.php');
	

$app->run();


?>
