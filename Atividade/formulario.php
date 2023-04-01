<?php include("./secao/cabecalho.php") ?>

<?php

$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];

echo "<h1> Seu nome é " . $nome . " <br> E a sua mensagem foi: " . $mensagem . "</h1>";


?>

<?php include("./secao/rodape.php") ?>