<?php  
    include("config.php");

    $nomeUsuario = $_POST['usuario'];
    $email = $_POST['email'];
    $tipoConta = $_POST['tipoConta'];
    $senha = $_POST['senha'];
    $duplicado = $email == $email;
    

    if ($duplicado) {
        echo "<script> window.alert('Este email já está em uso') </script>";
    }else {
        $stmt = $pdo->prepare("insert into usuario values(null,'$nomeUsuario','$email','$tipoConta','$senha')");	    
        $stmt ->execute();    
        header("location:index.php"); 
    }

    
?>