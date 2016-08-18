<?php

function debugLog($message) {
    global $app;
    global $db;
    $date = date("[Y-m-d H:i:s] ");
    $d = date("Y-m-d H:i:s");
    $app->log->debug($date . " " . $message);
    try {
      /*$query = "INSERT INTO interface_log (text, log_date) VALUES(:text, :date)";
      $stmt = $db->prepare($query);
      $stmt->execute(array(":text" => $message, ":date" => $d));*/
    } catch(PDOException $ex) {

    }
}

function sendJson($status, $data, $slim) {
    header("Content-Type: application/json");
    if($slim) {
        global $app;
        $app->halt($status, json_encode($data));
    } else {
        http_response_code($status);
        echo json_encode($data);
    }
    die();
}

function setCookies($db, $user) {
    /*global $app;
    $app->setCookie('privs', $user['account_type']);
    $app->setCookie('auth', $user['id']);
    $app->setCookie('uname', $user['firstname'] . " " . $user['lastname']);*/
}

function unsetCookies() {
    global $app;
    /*$app->deleteCookie('privs');
    $app->deleteCookie('auth');
    $app->deleteCookie('uname');*/
}


function getSupportedLanguage($lang) {
    $supported = array("sv", "en", "pl", "it", "de");
    if(in_array($lang, $supported)) {
        return $lang;
    } else {
        return "sv";
    }
}

?>
