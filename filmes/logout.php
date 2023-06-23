<?php 
// quando o usuario deslogar será retirado as informções dele NO SITE não no banco
require 'conexao.php';
$_SESSION = [];
session_unset();
session_destroy();
header("location: index.php");
?>