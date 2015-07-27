<?php
require '../vendor/autoload.php';

// controllers import
require 'controllers/ItemController.php';

// application creation
$app = new \Slim\Slim ( array (
		'debug' => true,
		'log.enabled' => true 
) );

// create instances of all controllers
$itemController = new ItemController ( $app );

// run the app
$app->run ();

?>
