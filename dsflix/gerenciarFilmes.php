<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DS FLIX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/styles/styles.css" />
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
                        <a class="nav-link" href="#">GERENCIAR FILMES</a>
                    </li>
                </ul>
                <div class="text-align-center">
                    <?php
                    echo "<span> Bem vindo $_SESSION[nome], </span>";
                    ?>
                    <a href="index.php">sair?</a>
                </div>
            </div>

        </div>
    </nav>

    <div class="container cadastrar-filme">

        <h2 class="mb-3">Editar um filme</h2>
        <form action="editarFilme.php" method="POST" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="idFilme" value="<?php echo @$_GET['idFilme']; ?>" />
            </div>
            <div class="mb-3">
                <label for="filme">Filme</label>
                <input type="text" class="form-control" id="filme" name="filme"
                value="<?php echo @$_GET['filme']; ?>" />
            </div>
            <div class="mb-3">
                <label for="genero">Genero</label>
                <select class="form-select" require name="genero">
                    <option selected disabled><?php echo @$_GET['genero'] ?></option>
                <?php
                $stmt = $pdo->prepare("select * from genero");
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

                    echo "
                    <option value='$row[1]'>$row[1]</option>
                ";

                }
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="descricao">Sinopse do filme</label>
                <textarea class="form-control" id="descricao" style="height: 100px" name="sinopse"
                    maxlength="255"><?php echo @$_GET['sinopse']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="genero">Imagem Filme</label>
                <input type="text" class="form-control" name="imagemFilme"
                    value="<?php echo @$_GET['imagemFilme']; ?>" />
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>


    <div class="container lista-filmes">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">idGenero</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Sinopse</th>
                    <th scope="col">imagemFilme</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->prepare("select * from filme ORDER BY idFilme ASC");
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                    echo "<tr class='celula'>";
                    echo "<td> $row[0] </td>";
                    echo "<td> $row[1] </td>";
                    echo "<td> $row[2] </td>";
                    echo "<td> $row[3] </td>";
                    echo "<td> $row[4] </td>";
                    echo "<td> <img src='$row[5]'> </td>";
                    echo "<td> 
                            <a href='removerFilme.php?id=$row[0]'><ion-icon name='trash-outline'></ion-icon></a>
                            <a href='?idFilme=$row[0]&filme=$row[1]&genero=$row[3]&sinopse=$row[4]&descricao=$row[5]&imagemFilme=$row[5]'><ion-icon name='create-outline'></ion-icon></a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
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