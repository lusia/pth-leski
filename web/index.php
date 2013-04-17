<?php
//ini_set('display_errors', 0);
//error_reporting(E_ALL | E_STRICT);

ini_set('display_errors', 1);
error_reporting(E_ALL);

$app = require __DIR__.'/../app/app.php';
$app->run();