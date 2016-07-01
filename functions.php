<?php

session_start();

include 'db.php';

function jel_prijavljen(){
	return isset($_SESSION['email']);
}

if ( !jel_prijavljen() ) {
    header ('location: login.php');
    die();
}