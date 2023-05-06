<?php 

include("conexao.php");
$nome = $_POST['nome'];
// $sinopse = $_POST['sinopse'];
// $ano = $_POST['ano'];
// $diretor = $_POST['diretor'];
// $genero = $_POST['genero'];
// $linkTrailer = $_POST['linkTrailer'];
// $imagemFilme = $_POST['imagemFilme'];
    

// $stmt = $pdo->prepare("insert into filmes 
//values(null,'$nome','$sinopse','$ano','$diretor', '$genero', '$linkTrailer', '$imagemFilme')");	    
// $stmt ->execute();

    // $nome = $_POST['txNome'];
    // $email = $_POST['txEmail'];
    // $assunto = $_POST['txAssunto'];
    // $mensagem = $_POST['txMensagem'];
    
   

    $stmt = $pdo->prepare("insert into filmes values(null,'$nome'");	    
	$stmt ->execute();    


echo "sucesso pai";

// header("location:index.php");   
?>