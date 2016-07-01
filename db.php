<?php

define('DB_NAME', 'test');
define('DB_PASS', '');
define('DB_USER', 'root');
define('HOST', 'http://localhost/collab_tasks/');

$veza = new PDO("mysql:dbname=" . DB_NAME, DB_USER, DB_PASS);
$veza->exec("set names utf8");
