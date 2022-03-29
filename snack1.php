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
            'ospite' => 'Basket Roma',
            
            'punti_casa' => 45, 
            'punti_ospite' => 21,
        ],
        [

            'casa' => 'Basket Torino',
            'ospite' => 'Basket Palermo',
            'punti_casa' => 35,
            'punti_ospite' => 71,
            
        ],
        [

            'casa' => 'Basket Venezia',
            'ospite' => 'Basket Genova',
            'punti_casa' => 49,
            'punti_ospite' => 11,
            
        ],
    ]

    ?>

    <?php
    for ($i = 0; $i < count($partite); $i++) {
    ?>
        <div>
            <h1>
                <?php echo $partite[$i]['casa']; ?> - <?php echo $partite[$i]['ospite']; ?> | <?php echo $partite[$i]['punti_casa']; ?> - <?php  echo $partite[$i]['punti_ospite'] ?>
            </h1>
        </div>
    <?php
    }
    ?>


</body>

</html>