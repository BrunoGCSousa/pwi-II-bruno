<?php  
    include("config.php");

    
    $nomeUsuario = $_POST['usuario'];
    $email = $_POST['email'];
    $tipoConta = $_POST['tipoConta'];
    $senha = $_POST['senha'];
    $stmt = $pdo->prepare("select * from usuario where email = '$email'");	    
    $stmt ->execute();

    $temEmail = $stmt -> fetch(PDO::FETCH_BOTH);
    
    if(!empty($temEmail)){
        echo "<script> window.alert('Este email já está em uso') </script>";
    } else {
        $stmt = $pdo->prepare("insert into usuario values(null,'$nomeUsuario','$email','$tipoConta','$senha')");	    
        $stmt ->execute();    
        echo "<script> window.alert('Registrado com sucesso') </script>";
        header("location: dsflix.php");
        $_SESSION['nome'] = $nomeUsuario;
    }


?>