<?php 

include("config.php");

    $filme = $_POST['filme'];
    $genero = $_POST['genero'];
    $sinopse = $_POST['sinopse'];
    $imagem = $_FILES['imagem']['tmp_name'];

    $img_data = addslashes(file_get_contents($imagem));

    if($_FILES['imagem']['name']){
        $imagem = $_FILES['imagem']['name'];
        $imagem_temp = $_FILES['imagem']['tmp_name'];
        $destino = 'img/' . $imagem;
        move_uploaded_file($imagem_temp, $destino);
    }

    $sql = "INSERT INTO filme (idFilme, filme, idGenero, genero, sinopse, imagemFilme) VALUES (null, '$filme', null, '$genero', '$sinopse', '$destino')";

    $stmt = $pdo -> prepare($sql);

    $stmt -> execute();
    
    header('location:gerenciarFilmes.php');



?>