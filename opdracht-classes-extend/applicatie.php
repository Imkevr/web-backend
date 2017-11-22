<?php
	
	function __autoload($className)
	{
        require_once('classes/'.$className.'.php');
        
    }

    //animal
    $slak	=new Animal('Slowmow','male',20);
    $paard	=new Animal('Unicorn','female',100);
	$orka	=new Animal('Free Willy','male',500);
    
    $paard->changeHealth(+20);
    $orka->changeHealth(-100);
    //lion
    $simba 	=new Lion('Simba','male',250,'Congo lion');
	$scar 	= new Lion('Scar','female',250,'Kenia lion');
	//zebra
	$zeke =new Zebra('Zeke','male',100,'Quagga');
	$zana =new Zebra('Zana','female',80,'Selous');

 ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>opdracht classes extend</title>
    </head>
    <body>
	<h2>Animal</h2>
    <p><?php echo $slak->getName() ?> is een slak van het geslacht <?php echo $slak->getGender() ?> en heeft momenteel <?php echo $slak->getHealth() ?> levenspunten (special move: <?php echo $slak->doSpecialMove() ?>)</p>

	<p><?php echo $paard->getName() ?> is een paard van het geslacht <?php echo $paard->getGender() ?> en heeft momenteel <?php echo $paard->getHealth() ?> levenspunten  (special move: <?php echo $paard->doSpecialMove() ?>)</p>

	<p><?php echo $orka->getName() ?> is een orka van het geslacht <?php echo $orka->getGender() ?> en heeft momenteel <?php echo $orka->getHealth() ?> levenspunten  (special move: <?php echo $orka->doSpecialMove() ?>)</p>

 <h2>Lion</h2>
    <p>Simba's (soort: <?php echo $simba->getSpecies() ?>) special move: <?php echo $simba->doSpecialMove() ?></p>
	
    <p>Scar's (soort: <?php echo $scar->getSpecies()  ?>) special move: <?php echo $scar->doSpecialMove() ?></p>
    <h2>Zebra</h2>
    <p>Zekes's (soort: <?php echo $zeke->getSpecies() ?>) special move: <?php echo $zeke->doSpecialMove() ?></p>
   
    <p>Zekes's (soort: <?php echo $zana->getSpecies()  ?>) special move: <?php echo $zana->doSpecialMove() ?></p>


        
    </body>
    </html>