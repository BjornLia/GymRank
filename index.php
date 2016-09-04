<?php

require 'vendor/autoload.php';

$app = new Slim\Slim();
$app->get('/hello', function () {
echo 'hello';
});

$app->run();
