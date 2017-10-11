
<?php
 $shoppinArr    =   array("tomaten", "paprika", "eieren", "melk");
 $counter        =   0;
 $arrayLength   =   count($shoppinArr);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoodschappenLijstje</title>
    <style>
			
			.oneven
			{
				background-color	:	lightgreen;
			}

		</style>
</head>
<body>


   
    <h1>BoodschappenLijstje </h1>

    <ul>

        <?php while ($counter < $arrayLength):?>
     <li><?php  echo $shoppinArr[$counter] ?></li>
        <?php $counter ++ ?>
        <?php endwhile ?>

    </ul>
  
        <!-- makkelijker met een foreach dan while 
        <?php  foreach( $shoppinArr as $key => $val ):?>
        <li><?php  echo $val ?></li>
        <?php endforeach?>-->
  


</body>
</html>