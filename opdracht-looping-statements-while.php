<?php 
    
    #deel 1
    $count  =   0;
    $numMax =   100;
    $numArr =   array();

   while ($count <= $numMax)
   {

        $numArr[] = $count;
        $count ++ ;

   }

     $numJoined =   implode( " , " , $numArr); #glues array to a string in this case with a ,

   

    #deel2
    $count      =   0;
    $numArrTwee =   array();

    while ($count <= $numMax)
    {

        if (($count % 3 == 0) && ($count > 40) && ($count < 80) )
        {

            $numArrTwee[] = $count;
            $count ++ ;

        }
   
    }


    $numJoinedTwee  =   implode( " , " , $numArrTwee);
  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>opdracht while deel 1</title>
</head>
<body>
    <h1>opdracht while deel 1</h1>

    <p>reeks 1 --><?= $numJoined ?></p>
    <p>reeks 2 --><?= $numJoinedTwee ?></p>
</body>
</html>