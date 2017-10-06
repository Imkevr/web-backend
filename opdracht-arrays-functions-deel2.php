<?php

#deel 1
$dierenArr      =   array("panter", "Leeuw", "tijger", "hond", "kat", "zeehond", "egel", "muis", "koe", "paard","olifant");

$aantalDrn      =   count($dierenArr);

$teZoekenDier   = "kakkerlak";

$isFound        = in_array($teZoekenDier, $dierenArr);

$foundMsg       = "";

if($isFound)
{
    $foundMsg = "gevonden";
}
else
{

    $foundMsg = "niet gevonden";
}

# deel 2

sort($dierenArr);

$zoogdieren  = array("giraf", "nijlpaard", "konijn");

$dierenlijst = array_merge($dierenArr , $zoogdieren);


 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht array functions Deel 2</title>
</head>
<body>


    <h1>Opdracht array functions Deel 2</h1>
   <p>Array op alfabetische volgorde --> <?php foreach($dierenArr as $key => $val)
                                             {
                                                echo " / dier[" . $key . "]= " .  $val ;

                                                 }
                                                 
                                                 ?> </p>
    <p>samengevoegde array dierenlijst --> <?php print_r($dierenlijst);?></p>


</body>
</html>