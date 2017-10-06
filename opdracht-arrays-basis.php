<?php

#Opdracht arrays basis DEEL 1

#Dieren array manier 1
$arrDrnEen  =   array("panter", "Leeuw", "tijger", "hond", "kat", "zeehond", "egel", "muis", "koe", "paard");
#Dieren array manier 2
$arrDrnTwee [0] =   "paard";
$arrDrnTwee [0] =   "koe";
$arrDrnTwee [0] =   "muis";
$arrDrnTwee [0] =   "egel";
$arrDrnTwee [0] =   "zeehond";
$arrDrnTwee [0] =   "kat";
$arrDrnTwee [0] =   "hond";
$arrDrnTwee [0] =   "tijger";
$arrDrnTwee [0] =   "leeuw";
$arrDrnTwee [0] =   "panter";

#Voertuigen array
$voertuigen =   array("landvoertuigen"  => array( "auto", "fiets", "brommer", "bus", "camion"),
                      "watervoertuigen" => array("schip", "duikboot", "jetski", "zeilboot", "roeiboot"),  
                      "luchtvoertuigen" => array("zeplin", "sportvliegtuig", "vliegtuig", "luchtballon", "ruimteschip"));


#
#
#Opdracht arrays basis DEEL 2

$numberArr  =   array(1, 2, 3, 4, 5);
 
$productArr =   array_product($numberArr);

$reverseArr =   array_reverse($numberArr);

$somArr     =   array();


foreach ($numberArr as $value)
{
   if ($value %2 !=0)
   {
        $oddNbr[] = $value;

   }

}

foreach( $numberArr as $pos => $getal)
{

   $getal1 = $getal;
   $getal2 = $reverseArr[ $pos ];

   $somArr [ ] = $getal1 + $getal2;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht array basis</title>
</head>
<body>
   <h1>Opdracht array basis DEEL 1 </h1>

   <?php var_dump($voertuigen); ?>

    <h1>Opdracht array basis DEEL 2 </h1>

    <p>  product van array      --> <?php echo $productArr?></p>
   <p> array met oneven nummers --> <?php var_dump($oddNbr); ?> </p>
    <p>omgekeerde array         --> <?php var_dump($reverseArr); ?></p>
   <p> som van gewone array met omgekeerde array --><?php var_dump($somArr); ?> </p> 
</body>
</html>