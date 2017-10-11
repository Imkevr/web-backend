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
    <title>Opdracht for : deel 4</title>
    <style>
		.odd
			{
				background-color	:	green;
			}

	</style>
</head>
<body>
  <h1>Opdracht for : deel 4</h1>

  <table>
			<thead>
                
                <th>Tafel </th>
             
             <?php   for ( $thRij =0; $thRij <= $rijen ; $thRij ++  ): ?>

        <th> <?php echo $thRij ?></th>

             <?php endfor ?>

            
            
            </thead>
            <tbody>
		        <?php foreach ($tafelsArr as $tafels => $productenArr): ?>
                    
				        <tr>
                        <td> <?php echo $tafels ?></td>
				        	<?php foreach ($productenArr as $number ): ?>

           <td class="<?= ( $number % 2 > 0 ) ? 'odd' : '' ?>"><?=  $number ?></td>
					
                            <?php endforeach ?>
				        </tr>

		        <?php endforeach ?>
        </tbody>
	</table>
    
</body>
</html>