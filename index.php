<?php

require 'vendor/autoload.php';

$app = new Slim\App();

require_once('core/routes/auth.route.php');

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->get('/goodbye/{name}', function ($request, $response, $args) {
    $response->write("Good bye whore , " . $args['name']);
    return $response;
});

$app->run();
