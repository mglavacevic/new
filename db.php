<?php

$config = array(
	'database' => 'adresar',
	'username' => 'root',
);

$veza = new PDO("mysql:dbname=" . $config['database'], $config['username']);
								
$veza->exec("set names utf8");