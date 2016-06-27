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
    <?php 
	
	 $config = array(
    'database' => 'adresar',
    'username' => 'root',
    );
    
        $veza = new PDO("mysql:dbname=" . $config['database'], 
                                    $config['username']);
									
	$veza->exec("set names utf8");
	
	$izraz = $veza->prepare("select * from Korisnik");
	$izraz->execute();
	$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
	
	//print_r($rezultati);
	foreach($rezultati as $red):
	?>
  
  
	<div class="row">

        <div class="col-lg-2 col-md-2 col-sm-2 centrirano">
			<h2><?php echo $red->id ?> </h2> 
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10">
			<h3><button onclick="myFunction()"><?php echo $red->ime . " " . $red->prezime ?></h3></button>
			<h4><?php echo $red->drzava . " / " . $red->grad . " , " . $red->ulica ?></h4>
			<h5><?php echo $red->email . " , Kontakt broj: " . $red->mobitel ?></h5>
			
			
			<p id="demo"></p>
			
		</div>
		
		<div class="hrefovi">
		<a href="kakogodhocu.php?id=<?php echo $red->id;?>"> Promijeni </a> <br/>
		<a id="<?php echo $red->id;?>" class="obrisi"> Obriši </a>
		</div>
	</div>
  
    <?php endforeach; ?>

	
		
	
    
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
	
	
}
	
	</script>
  </body>
</html>