<?php include('cabecalho.php') ?>




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
                                        <h2>$row[nomeFilme] </h2>
                                        <h5><a href='genero.php'>Genero:</a></h5>
                                        <h3> $row[idGenero]</h3>
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