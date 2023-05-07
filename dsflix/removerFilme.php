<?php

    include("config.php");

    $id = $_GET['id'];

    // echo $id;


    $stmt = $pdo->prepare("delete from filme where idFilme = $id");	    
	$stmt ->execute();    

    header("location:gerenciarFilmes.php"); 


?>