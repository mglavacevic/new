<?php

include 'functions.php';

$izraz = $veza->prepare("SELECT * FROM `korisnik` WHERE id=:id");
$izraz->execute([
    'id' => $_GET['id']
]);
$rezultat = $izraz->fetch(PDO::FETCH_OBJ);


$title = $rezultat->ime . ' ' . $rezultat->prezime;
include 'header.template.php';
?>
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

        <a href="<?php echo HOST ?>kakogodhocu.php?id=<?php echo $rezultat->id ?>">Izmijeni</a>

        <div class="dodavanje">
            <a href="<?php HOST ?>create.php"> Dodaj </a> <br/>
        </div>
    </body>
</html>
