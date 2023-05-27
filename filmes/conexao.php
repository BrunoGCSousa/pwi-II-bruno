<?php 

    $servidor = "localhost";
    $banco="projetofilmes";
    $usuario="root";
    $senha="";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    

?>