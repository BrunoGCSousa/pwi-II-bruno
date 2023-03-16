<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

    // for ($i = 0; $i <= 100; $i++) {
    //     if ($i % 2 == 0) {
    //         echo "<h1>O numero $i é par <br></h1>";
    //     }
    // }

    // $um = 0;
    // while($um <=100) {

    //     if($um % 2 == 0){
    //         echo "<h1>$um é par <br></h1>";
    //     }
    //     $um++;
    // };

    $numero = 0;

    do {
        if($numero % 2 == 0) {
            echo "<h1 class='rosa'>$numero é par <br></h1>";
        } else {
            echo "<h1 class='roxo'>$numero é impar <br></h1>";
        }
        $numero++;
    } while($numero <= 100)

    ?>
</body>
</html>