<head>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$peso = $_POST["peso"];

if ($peso > 100) {
    echo "<body class='vermelho'>";
} 

    echo "Olá $nome, sua idade é $idade <br> <br>";

        if ($idade < 18) {
            echo "Você é menor de idade <br> <br>";
        } else {
            echo "Você é maior de idade! <br><br>";
        }
    
    echo "Seu peso é $peso Kgs <br> <br>";

    if ($peso > 100) {
        echo "Você está acima do peso, fazer regime.";
    }


if ($peso > 100) {
    echo "</body>";
}

    ?>
