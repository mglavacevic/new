<?php

    include 'functions.php';
	
	$izraz = $veza->prepare('DELETE FROM `korisnik` WHERE `id`=:id');
	$izraz->execute([
        'id' => $_POST["id"]
    ]);
	
	echo "OK";