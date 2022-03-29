<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php



    if (isset($_GET['name'])  &&  isset($_GET['email'])  &&  isset($_GET['age'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
    ?>
            <h1>ACCESSO RIUSCITO</h1>
        <?php

        } else {

        ?>
            <h1>ACCESSO NEGATO</h1>
    <?php

        }
    }
    ?>




</body>

</html>