<?php 

$hobbyArr               =   array("voetbal", "turnen", "zwemmen");
$validateString         =   "<html><body><h1> Lovely tittel </h1></body></html>";
$validateStringTwee     =   "<html><body><h1> Lovely tittel </h1></html></body>";

function drukArrayAf ($array)
{
    $returnArray    =   array();
    foreach ( $array as $key => $value)
    {
    

        $returnArray [] =  'Hobby' . '[' . $key . '] heeft waarde ' . $value;

    }

    return $returnArray;
}

 $testresult = drukArrayAf( $hobbyArr);

 function validateHtmlTag ( $html )
 {
     $startTag  =   "<html>";
     $endTag    =   "</html>";

     $endTagLength  =   strLen($endTag);
     $strLength     =   strlen($html);

     $posStartTag   =   strpos( $html, $startTag , 0);
     $posEndTag     =   strpos( $html, $endTag  , ($strLength-$endTagLength));

    

     if ( ($posEndTag !== FALSE ) &&  ($posStartTag !== FALSE ))
     {
         $isValid = "String is valid";

     }
     else 
     {
         $isValid = "String is not valid";

     }

      return $isValid;
 }

 $validateStringResult       = validateHtmlTag($validateString);
 $validateStringResultTwee   = validateHtmlTag($validateStringTwee);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>opdracht function deel 2</title>
</head>
<body>
<h1>opdracht function deel 2</h1>

   <?php foreach($testresult as $key => $value):?>
   <p> <?php echo $value ?></p>
   <?php endforeach?>

   <p> <?php echo $validateStringResult ?></p>
   <p> <?php echo $validateStringResultTwee ?></p>
    
</body>
</html>