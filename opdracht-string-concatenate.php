<?php

 $voornaam      =    "Imke";
 $naam          =    "Van Rompa";
 $volledigenaam =     $naam ." ". $voornaam;

 $nbrOfNaam     =     strlen($volledigenaam);



?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing string concatenate</title>
	</head>
	<body>
		<p>Mijn volledige naam is :<?php echo $volledigenaam ?></p>
		<p>Aantal karakters in string: <?php echo $nbrOfNaam ?></p>
	</body>
</html>