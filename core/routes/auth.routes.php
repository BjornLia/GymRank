<?php
	$app->group('/login', function() use($app, $db, $lang) {
			$app->get('/', function() use($app, $db, $lang) {
					die("Login");
			});
	});
?>
