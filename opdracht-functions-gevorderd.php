<?php 

 $md5HashKey    =   "d1fa402db91a7a93c4f414b8278ce073";

 $search1       =   "2";
 $search2       =   "8";
 $search3       =   "a";

 function searchCharachter ($search)
 {
    global $md5HashKey;
    $string =  $md5HashKey;

    $stringLen =  strlen( $string);

    $stringAantal = substr_count ( $string , $search );
    
     $searchProcent = ( $stringAantal / $stringLen ) * 100;
    
    return $searchProcent;
 }

 function searchCharachter2 ($search , $string )
 {
     $stringLen =  strlen( $string);
    
     $stringAantal = substr_count ( $string , $search );
    
     $searchProcent = ( $stringAantal / $stringLen ) * 100;
    
    return $searchProcent;

     
 }

 function searchCharachter3 ($search)
 {
    $string = $GLOBALS['md5HashKey'];
    $stringLen =  strlen( $string);
    
     $stringAantal = substr_count ( $string , $search );
    
     $searchProcent = ( $stringAantal / $stringLen ) * 100;
    
    return $searchProcent;
 }


 $eersteFunctie	    =	searchCharachter($search1 );
 $tweedeFunctie 	=	searchCharachter2( $search2, $md5HashKey );
 $derdeFunctie  	=	searchCharachter3( $search3 );

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing functies gevorderd: deel1</title>
	</head>
	<body>
		
		<h1>Oplossing functies gevorderd: deel1</h1>

	
		<p>Het karakter "<?php echo $search1?>" komt <?php echo $eersteFunctie ?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $search2?>" komt <?php echo $tweedeFunctie ?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $search3?>" komt <?php echo $derdeFunctie ?>% voor in de string "<?php echo $md5HashKey ?>"</p>

	</body>
</html>