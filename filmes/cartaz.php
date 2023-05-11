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



<div class="pets">
            <h2 class="h1 text-center my-5">Veja os filmes em <strong>Cartaz</strong></h2>
            <div class="lista-de-imagens row">              
                <?php
                        $stmt = $pdo->prepare("select * from filmes");
                        $stmt->execute();

                        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

                            echo "
                                    <div class='pet col-xl-3 col-md-5' style='--imagem-fundo: url(" . "$row[imagemFilme]');'>
                                    <div class='preto'></div>
                                    <div class='descricao'>
                                        <h2>$row[nomeFilme]</h2>
                                        <h3>$row[genero]</h3>
                                        <div class='oculto'>
                                            <h4>Diretor: $row[diretor]<br>
                                                Ano: $row[anoFilme]</h4>
                                                <p>$row[descricao]</p>
                                                <h4><a href='$row[linkTrailer]' target='_blank'>Ver o trailer</a></h4>
                                        </div>
                                    </div>
                                </div>
                                    ";

                        }
                ?>
                
            </div>
        </div>

<?php include('rodape.php') ?>