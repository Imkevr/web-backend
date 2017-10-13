<?php 
error_reporting(1);  #error_reporting(0); == uit

$artikels = array(

              array ( 'titel' =>"Hij wou ‘een goei verkrachtingsscène’ met me oefenen",
             'datum' => '12 oktober 2017',
             'inhoud' => 'In de nasleep van het aanrand-schandaal rond Hollywoodproducer Harvey Weinstein klappen ook hier actrices uit de biecht. Actrices Anemone Valcke en Marijke Pinoy getuigden in ‘Van Gils & Gasten’ op Eén over situaties waarin zij door de jaren heen op Vlaamse conservatoria, podia en op filmsets zijn mee geconfronteerd. ',
             'afbeelding'=> 'img/actrice.jpg',
             'afbeeldingBeschrijving' => 'Foto van actrices Anemone Valck en Marijke Pinoy',
),

            array ( 'titel' => 'Buurman (54) met enkelband bekent moord op 24-jarige studente in Luik',
            'datum' => '12 oktober 2017',
            'inhoud' =>'Een 54-jarige Luikenaar zit in de cel voor de moord op zijn buurmeisje. De 24-jarige Louise L., die diergeneeskunde studeerde in Luik, werd gewurgd en neergestoken. ',
            'afbeelding'=> 'img/slachtoffer.jpg' ,
            'afbeeldingBeschrijving' => 'Foto van het slachtoffer Louise L.',
),

            array ( 'titel' => 'Ikea gaat zonnepanelen verkopen in ons land (en je hoeft ze niet zelf te installeren)',
            'datum' => '12 oktober 2017',
            'inhoud' => 'Meubelreus Ikea gaat vanaf vandaag zonnepanelen verkopen in ons land. Eerst online en vanaf eind januari ook in de acht Belgische warenhuizen van de Zweedse keten.',
            'afbeelding'=> 'img/ikea.jpg',
            'afbeeldingBeschrijving' =>' Foto van ikea winkelen met zonnepanelen op het dak',
),

);

$artikelNiGevonden = FALSE;
$artikelGevonden   = FALSE;


if ( $_GET['id'])
{
    $id = $_GET['id'];

    if (array_key_exists( $id , $artikels )) #zoekt of key waarde is terug te vinden in array
    {
        $artikels 			= 	array( $artikels[$id] );
        $artikelGevonden    = TRUE;

    }
    else
    {
        $artikelNiGevonden = TRUE;
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
		body
		{
			font-family:"Segoe UI";
			color:#423f37;
		}

		.container
		{
			width:	1024px;
			margin:	0 auto;
		}

		img
		{
			max-width: 100%;
		}

		.multiple
		{
			float:left;
			width:288px;
			margin:16px;
			padding:16px;
			box-sizing:border-box;
			background-color:#EEEEEE;
		}

		.multiple:nth-child(3n+1)
		{
			margin-left:0px;
		}

		.multiple:nth-child(3n)
		{
			margin-right:0px;
		}

		.single img
		{
			float:right;
			margin-left: 16px;
		}


	</style>
    <?php if ( !$artikelGevonden ): ?>
		<title>Opdracht $_GET </title>

	<?php elseif ( $nietBestaandArtikel ): ?>
		<title>Opdracht $_GET / Het artikel met id <?php echo $id ?> bestaat niet</title>

	<?php else: ?>
		<title>Opdracht $_GET / <?php echo $artikels[0]['titel'] ?></title>

	<?php endif ?>
</head>
<body>

<h1>De krant van vandaag</h1>

    <div class = "container " >

       <?php foreach ( $artikels as $id => $value): ?>

       <div class ="multiple">

          <h3><?php echo $value['titel']?></h3>

          <p><?php echo $value["datum"]?></p>

          <p><?php echo ( !$artikelGevonden ) ? str_replace ( "\r\n", "</p><p>", substr( $artikel['inhoud'], 0, 50 ) ) . '...': str_replace ( "\r\n", "</p><p>",$artikel['inhoud'] ) ; ?></p>

          <a href="opdracht-get.php?id=<?php echo $id ?>">Lees verder</a>

         <img src="<?php echo $value['afbeelding']?>" alt="<?php echo $value["afbeeldingBeschrijving"]?>">
        
         </div>

      <?php endforeach ?>


    </div>
    
</body>
</html>