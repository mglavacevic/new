<?php

include 'db.php';

$izraz = $veza->prepare("select * from Korisnik where id=:id");
$izraz->bindValue(':id', $_GET['id']);
$izraz->execute();
$rezultat = $izraz->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $rezultat->ime . ' ' . $rezultat->prezime ?></title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/stil.css" rel="stylesheet">


  </head>
  <body>
  <h1> <?php echo $rezultat->ime . ' ' . $rezultat->prezime ?> </h1>

  <ul>
  	<li>Ime: <?php echo $rezultat->ime ?></li>
  	<li>Prezime: <?php echo $rezultat->prezime ?></li>
  	<li>Država: <?php echo $rezultat->drzava ?></li>
  	<li>Grad: <?php echo $rezultat->grad ?></li>
  	<li>Ulica: <?php echo $rezultat->ulica ?></li>
  	<li>Email: <?php echo $rezultat->email ?></li>
  	<li>Telefon: <?php echo $rezultat->telefon ?></li>
  	<li>Mobitel: <?php echo $rezultat->mobitel ?></li>
  </ul>


		



 </body>
</html>
