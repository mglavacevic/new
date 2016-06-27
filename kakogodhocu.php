<!DOCTYPE html>
<html lang="en">
 <head>
   <title>Adresar</title>
 </head>
 <body>

<?php
    $veza = new PDO("mysql:dbname=adresar;host=localhost", "root", "");
    $veza->exec("set names utf8");
    $izraz = $veza->prepare("select * from Korisnik where id=:id");
    $izraz->bindParam(":id", $_GET["id"]);
    $izraz->execute();
    $red = $izraz->fetch(PDO::FETCH_OBJ);
    ?>
       <div>
        <h1>Izmjena podataka</h1>
        <form action="change.php" method="POST">
        <fieldset>
     ID
<input type="text" name="id" value="<?php echo $red->id;?>" /> <br/>
    Ime
<input type="text" name="ime" value="<?php echo $red->ime;?>" /> <br/>
    Prezime
<input type="text" name="prezime" value="<?php echo $red->prezime;?>" /> <br/>
    Država
<input type="text" name="drzava" value="<?php echo $red->drzava;?>" /> <br/>
    Grad
<input type="text" name="grad" value="<?php echo $red->grad;?>" /> <br/>
    ulica
  <input type="text" name="ulica" value="<?php echo $red->ulica;?>" /> <br/>
    email
<input type="text" name="email" value="<?php echo $red->email;?>" /> <br/>
    mobitel
<input type="text" name="mobitel" value="<?php echo $red->mobitel;?>" /> <br/>
<input type="submit" class="btn" />
        </fieldset>
        </form>
        </div>
 </body>
</html>
