<?php

$autoLoader = require_once 'vendor/autoload.php';

// Instantiate the app
$app = new \Slim\App();

// Register routes
require_once 'src/routes.php';

// Run app
$app->run();