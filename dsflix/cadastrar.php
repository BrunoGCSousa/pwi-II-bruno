<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DS FLIX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/styles/login.css" />
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="dsflix.php">DS <span>FLIX</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrar.php">CADASTRAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gerenciarFilmes.php">GERENCIAR FILMES</a>
                    </li>
                </ul>
                <div>
                    <?php
                    $stmt = $pdo->prepare("select * from usuario");
                    $stmt->execute();

                    $row = $stmt->fetch(PDO::FETCH_BOTH);

                    echo "<span> Bem vindo $row[usuario],</span>";
                    ?>
                    <a href="index.php">sair?</a>
                </div>
            </div>

        </div>
    </nav>

    <div class="container cadastrar-filme">

        <h2 class="mb-3">Cadastrar um filme</h2>
        <form action="salvarfilme.php" method="POST" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="filme" placeholder="Avatar" name="filme" />
                <label for="filme">Filme</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="genero" placeholder="Gênero" name="genero" />
                <label for="genero">Gênero</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Escreva a sinopse do filme" id="descricao"
                    style="height: 100px" name="sinopse" maxlength="255"></textarea>
                <label for="descricao">Sinopse do filme</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Insira uma imagem do filme</label>
                <input class="form-control" type="file" id="formFile" name="imagem">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>