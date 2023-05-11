<?php include("cabecalho.php"); ?>



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