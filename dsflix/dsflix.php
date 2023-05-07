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
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">DS <span>FLIX</span></a>
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
                <div class="text-align-center">
                    <?php
                    $stmt = $pdo->prepare("select * from usuario");
                    $stmt->execute();

                    $row = $stmt->fetch(PDO::FETCH_BOTH);

                    echo "<span> Bem vindo $row[usuario], </span>";
                    ?>
                    <a href="#">sair?</a>
                </div>
            </div>

        </div>
    </nav>


    <div class="hero-section">
        <div class="video-banner">
            <video src="./img/banner.mp4" autoplay loop muted></video>
        </div>
        <div class="hero-text">
            <h1>DS <span>FLIX</span></h1>
            <p>Veja os melhores filmes</p>
            <h3>
                Aqui você verá todos os filmes de A a Z, são muitos filmes
                mesmo, incontaveis entre 0 a 1000 (mil). Só aqui, é serio,
                não to mentindo.
            </h3>

            <button>Ver filmes</button>
        </div>
    </div>

    <h2 class="titulo-2">Veja os filmes em <b>cartaz</b></h2>

    <section class="variable slider">

        <?php
        $stmt = $pdo->prepare("select * from filme");
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

            echo "
                <div>
                    <img
                        src='$row[imagemFilme]'
                    />
                </div>
                    ";

        }
        ?>
    </section>

    <h2 class="titulo-2">Escolha por <b>categoria</b></h2>

    <section class="variable slider">
        <div class="categoria">
            <h3>Terror</h3>
            😨
        </div>
        <div class="categoria">
            <h3>Comédia</h3>
            😂
        </div>
        <div class="categoria">
            <h3>Romance</h3>
            🥰
        </div>
        <div class="categoria">
            <h3>Aventura</h3>
            🤠
        </div>
        <div class="categoria">
            <h3>Suspense</h3>
            🧐
        </div>
        <div class="categoria">
            <h3>Ficção cientifica</h3>
            🤓
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on("ready", function () {
            $(".variable").slick({
                dots: true,
                infinite: true,
                variableWidth: true,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 2,
                swipeToSlide: true
            });
        });
    </script>
</body>