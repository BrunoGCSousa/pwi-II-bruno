<?php

    $id = $_POST['idFilme'];
    $nome = $_POST['nomeFilme'];
    $descricao = $_POST['descricao'];
    $ano = $_POST['ano'];
    $diretor = $_POST['diretor'];
    $genero = $_POST['genero'];
    $linkTrailer = $_POST['linkTrailer'];
    $imagemFilme = $_POST['imagemFilme'];


    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare(
        "update filmes set
        nomeFilme = '$nome',
        anoFilme = '$ano',
        diretor = '$diretor',
        descricao = '$descricao',
        linkTrailer = '$linkTrailer',
        linkImagem = '$imagemFilme',
        where idFilme = '$id';
        "
        
    );	    
	$stmt ->execute();    

    header("location:gerenciar.php"); 

?>