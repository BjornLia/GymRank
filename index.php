<?php

require 'vendor/autoload.php';
require_once '/core/config.php';

$authenticate = function() {
    return true;
    global $app;
    $app->halt(403);
    die();
};

$app = new Slim\Slim();
require_once '/core/routes/users.routes.php';

$app->run();
