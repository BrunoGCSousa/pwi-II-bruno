<?php 

    $nome = $_POST['txNome'];
    $idade = $_POST['txIdade'];
    
    echo "Seu nome é $nome, sua idade é $idade anos e ";
    if ($idade <= 10) {
        echo "você é uma criança e menor de idade";
    } else if ($idade > 10 && $idade <= 18) {
        echo "você menor de idade";
    } else if($idade >= 18) {
        echo "você maior de idade";
    }


    

?>