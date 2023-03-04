<?php

$nota1 = floatval ($_POST['nota1']);
$nota2 = floatval ($_POST['nota2']);
$nota3 = floatval ($_POST['nota3']);
$nota4 = floatval ($_POST['nota4']);

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "A média é $media <br>";

if ($media >= 6) {
    echo '<h1 style="color: #0000ff"> Aprovado </h1>';
} else {
    echo '<h1 style="color: #ff0000"> Reprovado </h1>';
}


?>