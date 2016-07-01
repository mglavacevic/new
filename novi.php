<?php include 'functions.php' ?><!DOCTYPE html>
<html lang="en">
 <head>
   <title>Adresar</title>
 </head>
 <body>
       <div>
        <h1>Izmjena podataka</h1>
        <form action="<?php echo HOST ?>create.php" method="post">
        <fieldset>
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
