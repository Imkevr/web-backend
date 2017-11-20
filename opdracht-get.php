<?php 
error_reporting(1);  #error_reporting(0); == uit

$artikels = array(

              array ( 'titel' =>"Hij wou ‘een goei verkrachtingsscène’ met me oefenen",
             'datum' => '12 oktober 2017',
             'inhoud' => "In de nasleep van het aanrand-schandaal rond Hollywoodproducer Harvey Weinstein klappen ook hier actrices uit de biecht. Actrices Anemone Valcke en Marijke Pinoy getuigden in ‘Van Gils & Gasten’ op Eén over situaties waarin zij door de jaren heen op Vlaamse conservatoria, podia en op filmsets zijn mee geconfronteerd. ",
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

$notExist = FALSE;
$singleArtikel    = FALSE;

if ( isset($_GET['id']) )
{

	$id = $_GET['id'];

	if( array_key_exists($id , $artikels))
	{
		$singleArtikel =TRUE;

		$artikels = array( $artikels[$id] );
          

	}
	else {$notExist = TRUE;}


}
if ( isset($_GET['verzend']) )
{

	$search = $_GET['search'];

	foreach ( $artikels as $key => $inhoud )
	{
		$keys = array_search($search , $artikels );
		
		if()
          
        else {$notExist = TRUE;}
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

        h1
		{
			text-align: center;
			color: #000;
		}
		form
		{
			float:right;
			padding-right: 20px;
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

		
		figcaption
		{
		   font-size:12px;
		}

		.single figcaption
		{
			clear:both;
			text-align:center;
		}

	</style>
	<?php if ( !$singleArtikel ): ?>
		<title>Oplossing get</title>
	<?php elseif ( $notExist ): ?>
		<title>  Artikel met id <?php echo $id ?> bestaat niet</title>
	<?php else: ?>
		<title> <?php echo $artikels[0]['titel'] ?></title>
	<?php endif ?>


</head>
<body>
<form action="opdracht-get.php" method="get">
 <input type="text" name="search" >
<button type="submit" form="form1" value="verzend">Zoek</button>
	</form>
<h1>De krant van vandaag</h1>


<?php if ( !$notExist ): ?>
<div class="container">


		<?php foreach ( $artikels as $id => $artikel ): ?>

		<div class="<?php echo ( !$singleArtikel ) ? 'multiple': 'single' ; ?>">
			<h2><?php echo $artikel['titel']?></h2>
			<p><?php echo $artikel['datum']?></p>
			<figure> 
			<img src="<?php echo $artikel['afbeelding']?>" alt="<?php echo $artikels['afbeeldingBeschrijving']?>">
			<figcaption><?php echo $artikel['afbeeldingBeschrijving']?></figcaption>
			</figure>
			<p><?php echo ( !$singleArtikel ) ? str_replace ( "\r\n", "</p><p>", substr( $artikel['inhoud'], 0, 50 ) ) . '...': str_replace ( "\r\n", "</p><p>",$artikel['inhoud'] )  ?></p>

			<?php if ( !$singleArtikel ): ?>
			<a href="opdracht-get.php?id=<?php echo $id ?>">Lees verder ></a>
		    <?php endif?>
		    
		</div>

		<?php endforeach?>

</div>
<?php else: ?>
		<p>Het artikel bestaat niet.</p>
<?php endif?>
</body>
</html>