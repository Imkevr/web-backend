
<?php //opdracht-herhalingsopdracht01.php 

$cursus         = FALSE;
$voorbeelden 	= FALSE;
$oplossingen 	= FALSE;
$search 		= FALSE;

if (isset($_GET['link'])) 
{

    switch($_GET['link'])
    {
        case 'cursus':
            $cursus 	= 	true;
            break;

        case 'voorbeelden':

            $voorbeelden 	= 	true;
            $map			=	'voorbeelden';
            $bestandenArray 	= 	getBestanden( $map );

            break;

        case 'oplossingen':
        
            $oplossingen 	=	true;
            $map			=	'oplossingen';
            $bestandenArray 	= 	getBestanden( $map );

            break;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herhalingsopdracht 1</title>

    <style>
			iframe
			{
				width:1000px;
				height:750px;
			}
	</style>

</head>
<body>

    <h1>Indexpagina</h1>

    <nav>
    <ul>
    <li><a href="opdracht-herhalingsopdracht01.phplink=cursus">Cursus</a></li>
    <li><a href="opdracht-herhalingsopdracht01.phplink=voorbeelden">Voorbeelden</a></li>
    <li><a href="opdracht-herhalingsopdracht01.phplink=opdrachten">Oplossingen</a></li>
    </ul>
    </nav>


    <form action="opdracht-herhalingsopdracht01.php" method="get">
    <label for="search">Zoek naar: </label>
    <input type="search" name="search" id="search" placeholder="geef een zoekterm">
    <input type="submit" name="submit" id="submit" >
    </form>


    <?php if ( $cursus ): ?>
			<iframe src="../cursus/web-backend/public/cursus/web-backend-cursus.pdf"></iframe>
	<?php endif ?>
</body>
</html>