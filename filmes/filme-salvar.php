<?php 

include("conexao.php");
$nome = $_POST['nome'];
$sinopse = $_POST['sinopse'];
$ano = $_POST['ano'];
$diretor = $_POST['diretor'];
$genero = $_POST['genero'];
$linkTrailer = $_POST['linkTrailer'];
$arqINome = $_FILES["imagemFilme"]["name"];
$arqITipo = $_FILES["imagemFilme"]["type"];
$arqITamanho = $_FILES["imagemFilme"]["size"];
$arqINomeTemp = $_FILES["imagemFilme"]["tmp_name"];



move_uploaded_file($arqINomeTemp, "images/" . $arqINome);
$caminho = $arqINome;

    

$stmt = $pdo->prepare("insert into filmes 
values(null,'$nome','$ano','$diretor','$sinopse', '$linkTrailer', '$caminho', '$genero')");	    
$stmt ->execute();

header("location:cartaz.php");   
?>