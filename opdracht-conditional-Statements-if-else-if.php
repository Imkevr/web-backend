<?php   

 $number            =   76;
 $msgText           =   "Het getal ligt tussen ";


 if ( ($number > 0) && ($number <= 10))
 {
    $msgText = $msgText ."0 en 10";
 }
elseif( ($number > 10) && ($number <= 20)  )
{
    $msgText = $msgText . "10 en 20";
}
elseif( ($number >  20) && ($number <= 30)  )
{
    $msgText = $msgText . "20 en 30";
}
elseif( ($number >  30) && ($number <= 40)  )
{
    $msgText = $msgText . "30 en 40";
}
elseif( ($number > 40) && ($number <= 50)  )
{
    $msgText = $msgText . "40 en 50";
}
elseif( ($number >  50) && ($number <= 60)  )
{
    $msgText = $msgText ."50 en 60";
}
elseif( ($number >  60) && ($number <= 70)  )
{
    $msgText = $msgText ."60 en 70";
}
elseif( ($number >  70) && ($number <= 80)  )
{
    $msgText = $msgText ."70 en 80";
}
elseif( ($number > 80) && ($number <= 90)  )
{
    $msgText = $msgText ."80 en 90";
}
elseif( ($number >  90) && ($number <= 100)  )
{
    $msgText = $msgText ."90 en 100";
}
else
{
    $msgText = $msgText. "... error ...waarde van dit getal ligt niet tussen 1 en 100";
}

$reverseString   =   strrev($msgText);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title</title>
</head>
<body>
    <h1>Opdracht if else if</h1>
    
    <p>getal --> <?php echo $number ?></p>
    <p> <?php echo $msgText ?></p>
    <p>Laten we de zin omdraaien --> <?php echo $reverseString ?> </p>

</body>
</html>