<?php

$id = $_POST['idFilme'];
$filme = $_POST['filme'];
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];
$imagemFilme = $_POST['imagemFilme'];

    include("config.php");

    $stmt = $pdo->prepare(
        "update filme set
        filme = '$filme',
        idGenero = null,
        genero = '$genero',
        sinopse = '$sinopse',
        imagemFilme = '$imagemFilme' 

        where idFilme = '$id';
        "
        
    );	    
	$stmt ->execute();    

    header("location:gerenciarFilmes.php"); 

?>