<?php 

$pigHealth      =   5;
$maximumThrows  =   8;


function calculateHit ()
{
    global $pigHealth;

    $valueArr   =   array();

    $hitChance  =   rand(0.9);  # --> 10 waardes


    if ( $hitChance <= 3 ) # --> 40% van 10 mogelijke random waardes
    {
        $pigHealth -- ;
        $valueArr["hit"]     = TRUE;
        $valueArr["¨message"]= "Raak! Er zijn nog maar ". $pigHealth ." varkens over.";

    }
    else
    {
        $valueArr["hit"]     = FALSE;
        $valueArr["message"] = "Mis! Nog ".$pigHealth." varkens in het team.";

    }

    return $valueArr;


}

function launchAngryBird ()
{
   global $pigHealth;
   global $maximumThrows;

   static $gameAdvance  =   array();

   


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht functions gevorderd deel 2</title>
</head>
<body>
    <h1>Opdracht functions gevorderd deel 2</h1>


</body>
</html>