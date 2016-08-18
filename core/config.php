<?php
	// Display errors during debug
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	ini_set('display_errors','On');
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	// Connect to global database.
	try {
		$db = new PDO(
	    'mysql:host=localhost;dbname=gymrank',
	    "root",
	    "",
	    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	} catch(PDOException $ex) {
		debugLog("MySQL query error (".$ex->getMessage().")");
		sendJson(500, array("error" => "MySQL query error (".$ex->getMessage().")"), true);
	}


	if(isset($_COOKIE['simplix_lang'])) {
		$lang = getSupportedLanguage($app->getCookie('gymrank_lang'));
		require_once('languages/'.$lang.'.lang.php');

	} else {
		require_once('languages/sv.lang.php');
	}
?>
