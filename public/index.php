<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
define("TRACK_INIT", microtime(true));
error_reporting(E_ALL);
$app = require '../app/bootstrap.php';
$app->run();
