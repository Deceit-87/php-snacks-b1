<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snack blocco 1</title>
</head>

<body>


    <!-- Olimpia Milano- Cantù | 55-60 -->

    <?php

    $partite = [

        [

            'casa' => 'Basket Milano', 
            'opsite' => 'Basket Roma',
            'punti_casa' => 45,
            'punti_opsite' => 21,
        ],
    ]

    ?>
    <div>
        <h1> 
            <?php echo $partite[0]['casa']; ?> - <?php echo $partite[0]['ospite']; ?>
        </h1>
    </div>


</body>

</html>