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

$app->group('/users', $authenticate, function () use ($app, $db) {
  $app->get('/', function() use($db){
    try {
      $query = "SELECT * FROM users ORDER BY id DESC";
      $stmt = $db->prepare($query);
      $stmt->execute();
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $ex) {

    }
  });

  $app->get('/:id', function($id) use($db){

  });

  $app->post('/', function() use($db){

  });

  $app->put('/:id', function($id) use($db){

  });

  $app->delete('/:id', function($id) use($db){

  });
});

$app->run();
