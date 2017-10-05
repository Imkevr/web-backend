<?php 

 $jaartal           =   2016; 
 # $jaartal           =   2017; -->test
 $schrikkeljaar     =   FALSE;
 $jaOfNee           =   "";


 if ( (($jaartal%4 == 0) && ($jaartal%100 != 0)) || ($jaartal%400 == 0)  )
 {
     $schrikkeljaar = TRUE;
     $jaOfNee    =   "ja";
 }

 else
 {
    $jaOfNee    =   "nee";
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statements if-else DEEL 1</title>
</head>
<body>
    <h1>Statements if-else DEEL 1</h1>    


    <p>Is <?php echo $jaartal ?> een schrikkeljaar ? --> <?php echo  $jaOfNee   ?></p>

</body>
</html>