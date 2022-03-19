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
	//db LearningPortal_db
		require('./resource/LearningPortal_db/custom/UserCustom.php');
		require('./resource/LearningPortal_db/User.php');
		require('./resource/LearningPortal_db/custom/admin_queriesCustom.php');
		require('./resource/LearningPortal_db/admin_queries.php');
	

$app->run();


?>
