
<?php
 
 $getal         =    1;
 $weekdag       =   "";


 if ($getal == 1)
 {
     $weekdag = "maandag";
 }

 if ($getal == 2)
 {
     $weekdag = "dinsdag";
 }

 if ($getal == 3)
 {
     $weekdag = "woensdag";
 }

 if ($getal == 4)
 {
     $weekdag = "donderdag";
 }

 if ($getal == 5)
 {
     $weekdag = "vrijdag";
 }

 if ($getal == 6)
 {
     $weekdag = "zaterdag";
 }

 if ($getal == 7)
 {
     $weekdag = "zondag";
 }

 # start deel 2
 $dagToUpper    =   strtoupper($weekdag);
 $posA          =   strrpos($dagToUpper, "A");
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional statements if Deel 2</title>
</head>
<body>
      <p> <?php echo $weekdag ?> staat gelijk aan nummer <?php echo $getal ?></p>
      <p>weekdag naar hoofdletters                      --> <?php echo $dagToUpper ?></p>
      <p>alle letters naar hoofdletter behalve a        --> <?php echo str_replace("A", "a", $dagToUpper); ?></p>
      <p>alle letters naar hoofdletter behale laatste a --> <?php echo substr_replace($dagToUpper,"a", $posA, 1); ?></p>
</body>
</html>