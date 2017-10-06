<?php

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

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht array functions Deel 1</title>
</head>
<body>


    <h1>Opdracht array functions Deel 1</h1>
    <p>Hoeveel dieren komen er voor in $dierenArr --> <?php echo  $aantalDrn ?></p>
    <p>bevind <?php echo $teZoekenDier ?> zich in $dierenArr --> <?php echo $foundMsg ?></p>


</body>
</html>