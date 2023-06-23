<?php include("cabecalho.php"); ?>

<form action="cadastro_salvar.php" method="POST" class="d-flex justify-content-center flex-column w-100 align-items-center">

<label for="">Nome:</label>
<input type="text" name="nome">

<label for="sobrenome">Sobrenome:</label>
<input type="text" name="sobrenome" required>

<label for="email">Email:</label>
<input type="text" name="email" required>

<label for="telefone">Telefone:</label>
<input type="text" name="telefone" required>

<label for="senha">Senha:</label>
<input type="password" name="senha" required> <br>

<input type="submit" value="Salvar" required class="btn btn-primary">
</form>

<?php if (isset($erro)) { ?>
        <p><?php echo $erro; ?></p>
    <?php } ?>





<?php include("rodape.php")?>