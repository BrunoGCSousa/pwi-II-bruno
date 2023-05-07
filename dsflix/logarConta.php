<?php  
    include("config.php");

    $usuarioOuEmail = $_POST['usuarioOuEmail'];
    $logSenha = $_POST['logSenha'];
    
    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE (usuario = '$usuarioOuEmail' OR email = '$usuarioOuEmail') AND senha = '$logSenha'");	
    $stmt ->execute();

    $row = $stmt ->fetch(PDO::FETCH_BOTH);

    if ($stmt->rowCount() > 0) {
        header("location:dsflix.php");
    } else {
        echo "Usuario não encontrado";
    }
?>