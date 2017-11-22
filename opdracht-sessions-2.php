<?php 

session_start();
if ( isset( $_POST[ 'submit' ] ) )
{
    $_SESSION['registrationData'][ 'deel1' ]['email']       =   $_POST[ 'email' ];
    $_SESSION['registrationData'][ 'deel1' ]['nickname']    =   $_POST[ 'nickname' ];
}

$registrationData['deel1'] = $_SESSION['registrationData']['deel1'];

$straat = isset($_SESSION['registrationData']['deel2']['straat']);
$nummer = isset($_SESSION['registrationData']['deel2']['nummer']);
$gemeente = isset($_SESSION['registrationData']['deel2']['gemeente']);
$postcode = isset($_SESSION['registrationData']['deel2']['postcode']);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht Sessions : deel 2</title>
</head>
<body>

<ul>
        <?php foreach( $registrationData[ 'deel1' ] as $key => $value ):  ?>
            <li><?= $key ?>: <?= $value ?></li>
        <?php endforeach ?>
 </ul>
<h2>Deel 2 : adres</h2>

<form action="opdracht-sessions-2.php" method="post">

    <label for="straat">straat</label>
    <input type="text" name="straat" >

    <label for="nummer">nummer</label>
    <input type="text" name="nummer" id="nummer">

    <label for="gemeente">gemeente</label>
    <input type="text" name="gemeente" id="gemeente">

    <label for="postcode">postcode</label>
    <input type="text" name="postcode" id="postcode">

    <input type="submit" value="submit">
    
    
    </form>



    
</body>
</html>