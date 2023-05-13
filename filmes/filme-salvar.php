<?php 

include("conexao.php");
$nome = $_POST['nome'];
$sinopse = $_POST['sinopse'];
$ano = $_POST['ano'];
$diretor = $_POST['diretor'];
$genero = $_POST['genero'];
$linkTrailer = $_POST['linkTrailer'];
$imagemFilme = $_POST['imagemFilme'];
    

$stmt = $pdo->prepare("insert into filmes 
values(null,'$nome','$ano','$diretor','$sinopse', '$linkTrailer', '$imagemFilme', '$genero')");	    
$stmt ->execute();


$stmt = $pdo->prepare("insert into genero
values(null, '$genero')");	    
$stmt ->execute();

header("location:cartaz.php");   
?>