<?php

session_start();

include 'db.php';

function provjeri_korisnikove_podatke($email , $pass, $veza) {
    $izraz = $veza->prepare(
        'SELECT * FROM `login` WHERE `email`=:email AND `pass`=:pass'
    );
    $izraz->execute([
        'email' => $email,
        'pass' => $pass
    ]);

    $data = $izraz->fetch(PDO::FETCH_OBJ);

    if ($data !== false) {

        //  Vratit ID trenutno ulogiranog korisnika
        return $data->id;
    }

    return false;
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	$mobitel = $_POST['mobitel'];

	if ( $user_id = provjeri_korisnikove_podatke($email , md5($mobitel), $veza) ) {

if($user_id !== false){
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header("Location: lista.php");
  } else {
    exit('jebiga');
    }
        // Spremit ID trenutno ulogiranog korisnika

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

    	<form action="<?php echo HOST ?>login.php" method="post">
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
