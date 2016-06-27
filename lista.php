<?php

include 'db.php';

$izraz = $veza->prepare("select * from Korisnik");
$izraz->execute();
$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Adresar</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/stil.css" rel="stylesheet">


  </head>
  <body>
  <h1> Adresar </h1>

  <ul>
<?php foreach ($rezultati as $red): ?>
	<li><h1></h1><a href="http://localhost/collab_tasks/prikaz.php?id=<?php echo $red->id ?>"><?php echo $red->ime . ' ' . $red->prezime ?></a></h1></li>

<div>

<a id="<?php echo $red->id;?>" class="obrisi"> Obriši </a>
<a href="kakogodhocu.php?id=<?php echo $red->id;?>">Izmijeni</a> <br/>

</div>


<?php endforeach ?>

<div class="dodavanje">
<a href="create.php"> Dodaj </a> <br/>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
<script>
	$(".obrisi").click(function(){
		var id = $(this).attr("id");
		$.ajax({
			type:"POST",
			url: "delete.php",
			data: "id=" + id,
			success: function(vratioServer){
							if(vratioServer=="OK"){
								location.reload();
							}else{
								alert(vratioServer);
							}
						}
	});
		return false;
	});


</script>

  </ul>
 </body>
</html>
