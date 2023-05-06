<?php include("cabecalho.php"); ?>

<header>
    <nav>
        <div>
            <h1><img src="./images/bllbranco.png" alt=""></h1>
        </div>

        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Cartaz</a></li>
            <li><a href="#">Gêneros</a></li>
            <li><a href="cadastrarFilme.php">Cadastrar filme</a></li>
        </ul>
    </nav>
</header>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/banner.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>O MARIO É FODA PIPIPOPO</h5>
                <p>O MARIO É FODA PIPIPOPO</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/guardioes.png" alt="Second slide">
            <h5>....</h5>
            <p>...</p>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/john.png" alt="Third slide">
            <h5>....</h5>
            <p>...</p>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>


<p>DESCRIÇÃO DO NOSSO SITE:</p>
<p>Aqui teremos filmes e generos:</p>
<p>Basicamente, se você precisa procurar algum filme, ver sua sinopse ou coisas do tipo, o BLL Filmes é o seu site, aqui
    vamos dar dicas e descrições para facilitar sua noite de maratonas.
</p>
< <?php include("rodape.php"); ?>