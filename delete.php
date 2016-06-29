<?php 
	
	$veza = new PDO("mysql:dbname=adresar;host=localhost",
	"root", "");
	$veza->exec("set names utf8");
	
	$izraz = $veza->prepare("delete from Korisnik where id=:id");
	$izraz->bindParam(":id", $_POST["id"]);
	$izraz->execute();
	
	echo "OK";