<?php include('cabecalho.php') ?>


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



<form action="filme-salvar.php" class="container formulario" method="POST">
    <h1>Formulário para cadastro de filmes</h1>
    <div class="row">
        <div class="mb-3 col-12">
            <label for="nomeFilme" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Ex: Titanic" name="nome">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-12">
            <label for="sinopse" class="form-label">Sinopse</label>
            <textarea name="sinopse" id="sinopse" cols="30" rows="10" class="form-control" name="sinopse"></textarea>
        </div>
    </div>
    <div class="row">
    <div class="mb-3 col-4">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" placeholder="Ex: 2020" name="ano">
        </div>
        <div class="mb-3 col-4">
            <label for="diretor" class="form-label">Diretor</label>
            <input type="text" class="form-control" id="diretor" placeholder="Ex: Zack Snyder" name="diretor">
        </div>
        <div class="mb-3 col-4">
            <label for="genero" class="form-label">Gênero</label>
            <input type="text" class="form-control" id="genero" placeholder="EX: Aventura" name="genero">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="linkTrailer" class="form-label">Link Trailer</label>
            <input type="text" class="form-control" id="linkTrailer" placeholder="Link do Trailer" name="linkTrailer">
        </div>
        <div class="mb-3 col-6">
            <label for="imgFilme" class="form-label">Imagem filme</label>
            <input type="text" class="form-control" id="imgFilme" name="imagemFilme" placeholder="Link da imagem">
        </div>
    </div>
    <div class="col-auto">
    <button type="submit" class="btn btn-light">Salvar</button>
  </div>
</form>

    <?php include('rodape.php') ?>