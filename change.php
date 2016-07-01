<?php
include 'functions.php';

try {


    $izraz = $veza->prepare(
        'UPDATE `korisnik` SET `ime`=:ime, `prezime`=:prezime,'
        . '`drzava`=:drzava, `grad`=:grad, `ulica`=:ulica, `email`=:email,'
        . '`mobitel`=:mobitel WHERE `id`=:id'
    );
    $izraz->execute([
        'ime' => $_POST["ime"],
        'prezime' => $_POST["prezime"],
        'drzava' => $_POST["drzava"],
        'grad' =>$_POST["grad"],
        'ulica' =>$_POST["ulica"],
        'email' =>$_POST["email"],
        'mobitel' =>$_POST["mobitel"],
        'id' =>$_POST["id"],
    ]);
    header("location: lista.php");
} catch (Exception $e) {
    var_dump($e->getMessage());
}

