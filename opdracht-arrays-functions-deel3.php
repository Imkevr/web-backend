<?php

 $rijen        =   10;
 $kolommen     =   10;
 $tafelsArr    =   array();


 for( $rij = 0; $rij <= $rijen ; $rij++)
    {
        $productArr   =   array();

        for ( $kolom = 0; $kolom <= $kolommen; ++$kolom)
        {
                $productArr[]   =   $rij * $kolom;

        }
        
        $tafelsArr [ $rij ] =  $productArr;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht for : deel 3</title>
    <style>
		.odd
			{
				background-color	:	green;
			}

	</style>
</head>
<body>
  <h1>Opdracht for : deel 3</h1>

  <table>
			
		<?php foreach ($tafelsArr as $productenArr): ?>

				<tr>
					<?php foreach ($productenArr as $number ): ?>

						<td class="<?= ( $number % 2 > 0 ) ? 'odd' : '' ?>"><?=  $number ?></td>
					
                    <?php endforeach ?>
				</tr>

		<?php endforeach ?>

	</table>
    
</body>
</html>