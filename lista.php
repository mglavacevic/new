<?php

include 'functions.php';


$user_id = $_SESSION["user_id"];

$izraz = $veza->prepare("SELECT * FROM `korisnik` WHERE id = $user_id");
$izraz->execute();
$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

include 'header.template.php'
?>
<ul>
<?php foreach ($rezultati as $red): ?>
<li><h1></h1><a href="<?php echo HOST ?>prikaz.php?id=<?php echo $red->id ?>"><?php echo $red->ime . ' ' . $red->prezime ?></a></h1></li>

<div>

<a href="<?php echo HOST ?>delete.php?id=<?php echo $red->id ?>" data-id="<?php echo $red->id ?>" class="obrisi"> Obriši </a>
<a href="kakogodhocu.php?id=<?php echo $red->id;?>">Izmijeni</a> <br/>

</div>


<?php endforeach ?>

<div class="dodavanje">
<a href="<?php echo HOST ?>novi.php"> Dodaj </a> <br/>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
<script>
	$(".obrisi").click(function(){
		var id = $(this).data("id");
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
  });
</script>

  </ul>
 </body>
</html>
