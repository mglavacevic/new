<?php

session_start();


include 'functions.php';


if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	$mobitel = $_POST['mobitel'];

	if ( provjeri_korisnikove_podatke($email , $mobitel) ) {
		$_SESSION['email'] = $email;
		header("Location: lista.php");
	} else {
		$status = "<strong>Netočni podaci za prijavu!</strong>";
	}
}

?>


<!doctype html>
<html>
<head><title>Prijava</title></head>
<body>
     <h1>Prijavi se</h1>

    	<form action="login.php" method="post">
     	<ul>
     		<li>
     			<label for="email">Korisničko ime: </label>
     			<input type="text" name="email">
     		</li><br>

     		<li>
     			<label for="mobitel">Lozinka: </label>
     			<input type="password" name="mobitel">
     		</li><br>

     		<li>

     			<input type="submit" value="Prijava">
     		</li>


     	</ul>

     	<?php if (isset($status)) : ?>
     		<p><?php echo $status; ?></p>
		<?php endif; ?>
     	</form>

</body>
</html>
