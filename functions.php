<?php

function jel_prijavljen(){
	return isset($_SESSION['email']);
}
function provjeri_korisnikove_podatke($email , $mobitel) {

 	return ($email = $_POST['email']  && $mobitel = $_POST['mobitel'] );

	}




?>
