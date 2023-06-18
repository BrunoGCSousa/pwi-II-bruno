<?php 
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DS FLIX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/styles/styles.css" />
</head>

<body>

<?php include('nav.php')?>

<div class="row categorias">
    <?php 
    
    $id = $_GET['id'];
    $genero = $_GET['genero'];

    
    echo "<h2 class='titulo-2'>Ver todos os filmes de $genero</h2>";

    ?>


        
        <?php

    $stmt = $pdo->prepare("SELECT * FROM `filme` WHERE genero = :genero;");
    $stmt->bindParam(':genero', $genero);
    $stmt->execute();
    
    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        
        echo "<div class='col-6 filme'> 
        <h1> $row[filme] </h1>
        <a href='filme.php?id=$row[0]'>
        <img
        src='$row[imagemFilme]'
        />
        </a>";
        echo "<p> $row[sinopse] </p>
        </div> ";
        
    }
    
    
    ?>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>