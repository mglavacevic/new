<?php

var_dump($_POST);

try {
    $veza = new PDO("mysql:dbname=adresar;host=localhost", "root", "");
    $veza->exec("set names utf8");
    $izraz = $veza->prepare("Update Korisnik set ime= ? , prezime= ? , drzava= ? , grad= ? , ulica= ? , email= ? , mobitel= ? where id= ?");
    $izraz->bindValue(1, $_POST["ime"], PDO::PARAM_STR);
    $izraz->bindValue(2, $_POST["prezime"], PDO::PARAM_STR);
		$izraz->bindValue(3, $_POST["drzava"], PDO::PARAM_STR);
		$izraz->bindValue(4, $_POST["grad"], PDO::PARAM_STR);
		$izraz->bindValue(5, $_POST["ulica"], PDO::PARAM_STR);
	  $izraz->bindValue(6, $_POST["email"], PDO::PARAM_STR);
		$izraz->bindValue(7, $_POST["mobitel"], PDO::PARAM_STR);
    $izraz->bindValue(8, $_POST["id"], PDO::PARAM_INT);
    $izraz->execute();

} catch (Exception $e) {
    var_dump($e->getMessage());
}

header("location: lista.php");
