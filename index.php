<?php

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});

$app->get('/goodbye/{name}', function ($request, $response, $args) {
    $response->write("Good bye, " . $args['name']);
    return $response;
});

$app->run();
