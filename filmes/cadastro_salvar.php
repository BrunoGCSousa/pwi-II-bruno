<!-- Aqui mandamos o cadastro para o banco. -->
<?php include("conexao.php"); ?>

<?php 

$nome= $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$senha= $_POST['senha'];

echo $nome;
echo $sobrenome;
echo $email;
echo $telefone;
echo $senha;


$stmt = $pdo->prepare("insert into contato
values(null,'$nome','$sobrenome','$email','$telefone','$senha')");	    
$stmt ->execute();
header("Location: login.php");


?>

