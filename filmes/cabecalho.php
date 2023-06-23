<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li>
                <img src="./images/bllbranco.png" alt="">
            </li> 
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><a href="index.php">Inicio</a></button>
            </li> 
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><a href="cartaz.php">Cartaz</a></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><a href="genero.php">Genero</a></button>
            </li> 
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><a href="cadastrarFilme.php">Cadastrar</a></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><a href="gerenciar.php">Gerenciar</a></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><a href="login.php">Login</a></button>
            </li>
            <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><a href="cadastro_use.php">Cadastrar usuário</a></button>
            </li>
            

            <?php 
            
            if (empty($_SESSION["id"])) { // verifica se o id não está nulo e se não estiver executa o código               
                echo "Não tem ninguem logado";
            } else {
                $id = $_SESSION["id"];
                $stmt = $pdo->prepare("select * from contato where id = $id");
                $stmt->execute();
    
                $row = $stmt->fetch(PDO::FETCH_BOTH);

                
                echo "Bem vindo " . $id;
            }
            
            ?>

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><a href="logout.php">Sair</a></button>
            </li>

        </ul>
    </nav>
</header>
