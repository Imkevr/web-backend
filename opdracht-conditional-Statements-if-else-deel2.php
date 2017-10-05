<?php 

 $totSec       =    221108521;
 $minT          =    60;
 $uurT          =    $minT * $minT;
 $dagT          =    $uurT * 24;
 $wekenT        =    $dagT * 7;
 $maandT        =    $dagT * 31;
 $jarenT        =    $dagT * 365;

 $min          = floor ($totSec / $minT);
 $uur          = floor ($totSec / $uurT);
 $dag          = floor ($totSec / $dagT);
 $weken        = floor ($totSec / $wekenT);
 $maand        = floor ($totSec / $maandT);
 $jaren        = floor ($totSec / $jarenT);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>statement if-else DEEL 2</title>
</head>
<body>
    <h1>statement if-else DEEL 2</h1>
     <p>In <?php echo $totSec ?> seconden zitten ... </p>

    <p>min      : <?php echo $min ?></p>
    <p>uren     : <?php echo $uur ?></p>
    <p>dagen    : <?php echo $dag?></p>
    <p>weken    : <?php echo $weken?></p>
    <p>maanden  : <?php echo $maand?></p>
    <p>jaren    : <?php echo $jaren?></p>

</body>
</html>