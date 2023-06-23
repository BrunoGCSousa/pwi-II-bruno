<?php 

include("conexao.php");
$nome = $_POST['nome'];
$sinopse = $_POST['sinopse'];
$ano = $_POST['ano'];
$diretor = $_POST['diretor'];
$genero = $_POST['genero'];
$linkTrailer = $_POST['linkTrailer'];
$imagemFilme = $_FILES["imagemFilme"]["tmp_name"];



$img_data = addslashes(file_get_contents($imagemFilme));

if ($_FILES['imagemFilme']['name']) {
    $imagemFilme = $_FILES['imagemFilme']['name'];
    $imagemFilme_temp = $_FILES['imagemFilme']['tmp_name'];
    $destino = 'images/' . $imagemFilme;
    move_uploaded_file($imagemFilme_temp, $destino);
}


$stmt = $pdo->prepare("insert into filmes 
values(null,'$nome','$ano','$diretor','$sinopse', '$linkTrailer', '$imagemFilme', '$genero')");	    
$stmt ->execute();

header("location:cartaz.php");   
?>