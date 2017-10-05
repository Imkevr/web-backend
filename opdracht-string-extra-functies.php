
<?php 
 $fruit             =   "kokosnoot";
 $fruitkarakters    =   strlen($fruit);
 $positie_O         =   strpos($fruit, "o");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>opdracht string extra functies</title>
</head>
<body>
    <p> Aantal karakters dat <?php echo $fruit ?> bevat = <?php  echo $fruitkarakters ?> .</p>
    <p>De eerte o in kokosnoot bevindt zich op de <?php  echo $positie_O ?>ste positie met index-0.</p>
</body>
</html>