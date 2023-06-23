<?php

    $id = $_POST['idFilme'];
    $nomeFilme = $_POST['nomeFilme'];
    $descricao = $_POST['descricao'];
    $ano = $_POST['ano'];
    $diretor = $_POST['diretor'];
    $genero = $_POST['genero'];
    $linkTrailer = $_POST['linkTrailer'];
    $imagemFilme = $_POST['imagemFilme'];


    include("conexao.php");

    $stmt = $pdo->prepare(
        "update filmes set
        nomeFilme = '$nomeFilme',
        anoFilme = '$ano',
        diretor = '$diretor',
        descricao = '$descricao',
        linkTrailer = '$linkTrailer',
        imagemFilme = '$imagemFilme',
        idGenero = '$genero'
        where idFilme = '$id';
        "
        
    );	    
	$stmt ->execute();    

    header("location:gerenciar.php"); 

?>