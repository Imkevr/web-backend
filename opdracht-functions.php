<?php 


function berekenSom ($getal1 , $getal2)
{

    $result = $getal1 + $getal2;
    return $result;

}

function vermenigvuldig ($getal1 , $getal2)
{

    $result = $getal1 * $getal2;
    return $result;

}

function isEven ($getal)
{
    
    if( $getal % 2 == 0)
    { return TRUE; }
    else
    {return FALSE; }
    

}

function stringMeasure ($string)
{
    $strLength  =   strlen($string);
    $strUpperC  =   strtoupper($string);
    
    $stringArr[]   =    $strLength ;
    $stringArr[]   =    $strUpperC ;

    return $stringArr;
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht functies: deel1</title>
</head>
<body>
<h1>Opdracht functies: deel1</h1>
   <p> <?php echo berekenSom( 12 , 2) ?> </p>
   <p> <?php echo vermenigvuldig( 12 , 2) ?> </p>
   <p> <?php echo isEven( 12 ) ?> </p>
   <p> <?php echo isEven( 7 ) ?> </p>
   <p> <?php var_dump( stringMeasure( "Imke" ) )?> </p>
</body>
</html>