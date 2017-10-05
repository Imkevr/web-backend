
<?php 
#Deel 1
 $fruit             =   "kokosnoot";
 $fruitkarakters    =   strlen($fruit);
 $positie_O         =   strpos($fruit, "o");

#Deel 2
$_fruit             =   "ananas";
$positie_a          =   strpos($_fruit, "a", 3);
$fruitToUpper       =   strtoupper($_fruit);

#Deel 3
 $lettertje         =   "e";
 $cijfertje         =    3;
 $langsteWoord      =   "zandzeepsodemineralenwatersteenstralen";

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
     
    <h1>Deel 1 </h1>

    <p> Aantal karakters dat <?php echo $fruit ?> bevat = <?php  echo $fruitkarakters ?> .</p>
    <p>De eerte o in kokosnoot bevindt zich op de <?php  echo $positie_O ?>ste positie met index-0.</p>

    <h2>Deel 2</h2>
    <p>De laatste a in ananas bevindt zich op de <?php  echo $positie_a  ?>de positie met index-0.</p>
    <p>ananas naar hoofdletters --> <?php echo $fruitToUpper  ?></p>

    <h3>Deel3</h3>
    <p>Vervang  alle e’s in zandzeepsodemineralenwatersteenstralen variable door 3's</p>
    <p> <?php echo str_replace($lettertje, $cijfertje, $langsteWoord) ?></p>
</body>
</html>