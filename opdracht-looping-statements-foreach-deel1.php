<?php 

$text        =  file_get_contents('../cursus/web-backend/public/cursus/opdrachten/opdracht-looping-statements-foreach/text-file.txt');
$textCharr   =  str_split( $text );

rsort( $textCharr  );
$revtextCharr =   array_reverse( $textCharr );

$statsArr     = array();

foreach($revtextCharr as $value)
{
    if ( isset ( $statsArr[ $value ] ) )
    {
        ++$statsArr[ $value ];
    }
    else
    {
        $statsArr[ $value ] = 1;
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht foreach </title>
</head>
<body>

    <h1>Opdracht foreach</h1>

    <p>tekst array<?php var_dump( $textCharr )?></p>
    <p>reversed tekst array<?php var_dump ($revtextCharr)?></p>
    <p>teller array<?php var_dump( $statsArr )?></p>
 
    
</body>
</html>