<?php

 $rijen     =   10;
 $kolommen  =   10;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht for : deel 1</title>
</head>
<body>
    <h1>Opdracht for : deel 1</h1>
    <table>
         <?php for( $rij = 0; $rij < $rijen ; $rij++):?> 
   
            <tr>
					<?php for ( $kolom = 0; $kolom < $kolommen; ++$kolom): ?>
                    
						<td>kolom</td>

					<?php endfor ?>
			</tr>

         <?php endfor?>
    </table>
</body>
</html>