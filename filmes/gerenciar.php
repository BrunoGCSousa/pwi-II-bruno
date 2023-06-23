<?php include('cabecalho.php') ?>

<form action="filme-editar.php" class="container formulario" method="POST">
    <h1>Formulário para cadastro de filmes</h1>
    <div class="row">
    <div>
          <input type="hidden" name="idFilme" value="<?php echo @$_GET['idFilme']; ?>" />
        </div>		
        <div class="mb-3 col-12">
            <label for="nomeFilme" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Ex: Titanic" name="nomeFilme"  value="<?php echo @$_GET['nomeFilme']; ?>">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-12">
            <label for="descricao" class="form-label">Sinopse</label>
            <textarea id="descricao" cols="30" rows="10" class="form-control" name="descricao"><?php echo @$_GET['descricao']; ?></textarea>
        </div>
    </div>
    <div class="row">
    <div class="mb-3 col-4">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" placeholder="Ex: 2020" name="ano"  value="<?php echo @$_GET['ano']; ?>">
        </div>
        <div class="mb-3 col-4">
            <label for="diretor" class="form-label">Diretor</label>
            <input type="text" class="form-control" id="diretor" placeholder="Ex: Zack Snyder" name="diretor"  value="<?php echo @$_GET['diretor']; ?>">
        </div>
        <div class="mb-3 col-4">
            <label for="genero" class="form-label">Gênero</label>
            <input type="text" class="form-control" id="genero" placeholder="EX: Aventura" name="genero"  value="<?php echo @$_GET['genero']; ?>">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="linkTrailer" class="form-label">Link Trailer</label>
            <input type="text" class="form-control" id="linkTrailer" placeholder="Link do Trailer" name="linkTrailer"  value="<?php echo @$_GET['linkTrailer']; ?>">
        </div>
        <div class="mb-3 col-6">
            <label for="imgFilme" class="form-label">Imagem filme</label>
            <input type="text" class="form-control" id="imgFilme" name="imagemFilme" placeholder="Link da imagem"  value="<?php echo @$_GET['imagemFilme']; ?>">
        </div>
    </div>
    <div class="col-auto">
    <button type="submit" class="btn btn-light">Salvar</button>
  </div>
</form>


    <section>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id do filme</th>
                <th scope="col">Nome do filme </th>
                <th scope="col">ano do filme</th>
                <th scope="col">diretor</th>
                <th scope="col">sinopse</th>			
                <th scope="col">link trailer</th>
                <th scope="col">link imagem</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $pdo->prepare("select * from filmes");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                    echo "<tr class='celula'>";
                    echo "<td> $row[0] </td>";						
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";											
                    echo "<td> $row[4] </td>";
                    echo "<td> $row[5] </td>";
                    echo "<td> $row[6] </td>";
                    echo "<td> 
                            <a href='?idFilme=$row[0]&nomeFilme=$row[1]&ano=$row[2]&diretor=$row[3]&descricao=$row[4]&linkTrailer=$row[5]&imagemFilme=$row[6]&genero=$row[7]'> Editar </a>
                            <a href='filme-remover.php?idFilme=$row[0]'> Remover </a>
                            </td>";
                  echo "</tr>";
                }	
            ?>
            </tbody>
        </table>
    </section>
    
</body>
</html>



<?php include('rodape.php') ?>