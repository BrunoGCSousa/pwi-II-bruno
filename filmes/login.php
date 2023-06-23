
<?php include("cabecalho.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" name="form_use" class="d-flex justify-content-center flex-column w-100 align-items-center">
        <label for="nome">Nome de usuário:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>

        <input action="#" type="submit" value="Entrar">
    </form>

    <?php

    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $stmt = $pdo->prepare("select * from contato where nome = '$nome' and senha = '$senha'");
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_BOTH);
        
        if(empty($row)) {
            echo "Senha ou usuário digitados incorretamente";
        } else {
            $_SESSION["id"] = $row['nome'];
            header('location:index.php');
        }
    }

    ?>

    
</body>
</html>



<?php include("rodape.php"); ?>
