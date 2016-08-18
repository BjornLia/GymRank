<?php
	$app->post('/login', function() use($app, $db, $lang) {
	    $username = $app->request()->post('username');
	    $ip = $_SERVER['REMOTE_ADDR'];
	    $query = "SELECT * FROM users WHERE email = :username";
	    $stmt = $db->prepare($query);
	    $stmt->execute(array(":username" => $username));
	    $user = $stmt->fetch(PDO::FETCH_ASSOC);

	    if($user && password_verify($app->request()->post('password'), $user['password'])) {
	    	debugLog($user['email'] . " Logged in successfully from IP: ".$ip);
	    	setCookies($db, $user);
	    	$app->redirect("/");
	    } else {
	    	debugLog("Attempted login with credentials [".$username.":".$app->request()->post('password')."] from IP: " . $ip);
	    	$app->render('login.tpl.php', array("lang" => $lang, "error" => $lang['global']['Wrong username or password']));
	    }
	});

	$app->get('/logout', function() use($app, $db) {
	    unsetCookies();
	    $app->redirect('/login');
	});
?>
