<?php

    include 'functions.php';

    $izraz = $veza->prepare(
        'INSERT INTO `korisnik`'
        . ' (ime, prezime, drzava, grad, ulica, email, mobitel)'
        . 'VALUES (:ime, :prezime, :drzava, :grad, :ulica, :email, :mobitel)'
    );

    $izraz->execute([
        'ime' => $_POST["ime"],
        'prezime' => $_POST["prezime"],
        'drzava' => $_POST["drzava"],
        'grad' =>$_POST["grad"],
        'ulica' =>$_POST["ulica"],
        'email' =>$_POST["email"],
        'mobitel' =>$_POST["mobitel"],
    ]);


    header("location: lista.php");