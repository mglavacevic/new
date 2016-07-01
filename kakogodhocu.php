<?php
    include 'functions.php';

$izraz = $veza->prepare('SELECT * FROM `korisnik` WHERE id=:id');
$izraz->execute([
    'id' => $_GET["id"]
]);
$red = $izraz->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <title>Adresar</title>
 </head>
 <body>
       <div>
        <h1>Izmjena podataka</h1>
        <form action="change.php" method="post">
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
    Ulica
  <input type="text" name="ulica" value="<?php echo $red->ulica;?>" /> <br/>
    E-mail
<input type="text" name="email" value="<?php echo $red->email;?>" /> <br/>
    Mobitel
<input type="text" name="mobitel" value="<?php echo $red->mobitel;?>" /> <br/>
<input type="submit" class="btn" />
        </fieldset>
        </form>
        </div>
 </body>
</html>
