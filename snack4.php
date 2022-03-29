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
     
 
     $numbers = [];
  
     while (count($numbers) < 15) {
       $number = rand(1, 100);
       if(!in_array($number, $numbers)){
         $numbers[] = $number;
       }
     }
   
     for($i = 0; $i < count($numbers); $i++){
         echo $numbers[$i] .= ' ';
     }
    
    ?>
</body>
</html>