<?php

 $rijen     =   10;
 $kolommen  =   10;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht for : deel 2</title>
    <style>
		.odd
			{
				background-color	:	green;
			}

	</style>
</head>
<body>
  <h1>Opdracht for : deel 2</h1>

  <table>
         <?php for( $rij = 0; $rij <= $rijen ; $rij++):?> 
   
            <tr>
				<?php for ( $kolom = 0; $kolom <= $kolommen; ++$kolom): ?>

                        <?php  $tafels  =   $rij * $kolom?>

						 <td class="<?= (( $tafels ) % 2 > 0 ) ? 'odd' : '' ?>"><?php echo $tafels ?></td>

				<?php endfor ?>
			</tr>

         <?php endfor?>
    </table>
    
</body>
</html>