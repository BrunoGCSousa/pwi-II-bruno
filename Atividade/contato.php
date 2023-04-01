<?php include("./secao/cabecalho.php") ?>

<h4>Formulário</h4>

<form action="formulario.php" method="POST">

    Nome: <input type="text" placeholder="Nome" name='nome'>

    Mensagem: <textarea name="mensagem" cols="30" rows="10" placeholder="Insira sua mensagem"></textarea>

    <input type="submit" value="Enviar" class="enviar">
</form>

<?php include("./secao/rodape.php") ?>