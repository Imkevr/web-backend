<?php 

 $number    =   6;
 $dag       =   "";

 switch ($number)
 {
        case 1:
            $dag = "maandag";
        break;

        case 2:
            $dag = "dinsdag";
        break;

        case 3:
            $dag = "woensdag";
        break;

        case 4:
            $dag = "donderdag";
        break;

        case 5:
            $dag = "vrijdag";
        break;

        case 6:
            $dag = "zaterdag";
        break;

        case 7:
            $dag = "zondag";
        break;

        default:
            $dag = ".. dit getal heeft geen corresponderende dag";
        break;
          

 }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht switch</title>
</head>
<body>
<h1>Opdracht switch</h1>
    <p>Nummer <?php echo $number?> is gelijk aan <?php echo $dag ?></p>

</body>
</html>