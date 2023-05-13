<?php

    $id = $_GET['idFilme'];


    include("conexao.php");

    $stmt = $pdo->prepare("delete from filmes where idFilme = $id");	    
	$stmt ->execute();    

    header("location:gerenciar.php"); 

?>