<?php
session_start();
header('Cache-control: private'); // IE 6 FIX
if (isSet($_GET['lang'])) {
    $lang = $_GET['lang'];
// register the session and set the cookie
    $_SESSION['lang'] = $lang;
    setcookie('lang', $lang, time() + (3600 * 24 * 30));
} else if (isSet($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'en';
}
switch ($lang) {
    case 'en':
        $lang_file = 'lang.en.php';
        break;
    case 'ba':
        $lang_file = 'lang.ba.php';
        break;
    case 'ma':
        $lang_file = 'lang.ma.php';
        break;
    default:
        $lang_file = 'lang.en.php';
}
include_once 'languages/' . $lang_file;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width; initial-scale=1; minimum-scale=1,maximum-scale=1.0; user-scalable=1;" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Massimo</title>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
            <link href="css/style.css" rel="stylesheet" type="text/css" />
            <link href="css/custom-style.css" rel="stylesheet" type="text/css" />
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
                <link rel="icon" href="favicon.ico" type="image/x-icon">

                    <script src="js/jquery-1.11.0.min.js"></script>
                    <script src="js/script.js"></script>

                    </head>


