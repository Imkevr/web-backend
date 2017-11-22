<?php 
session_start();

var_dump($_SESSION);

$email		=	( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] : '';
$nickname		=	( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] : '';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht sessions</title>
</head>
<body>
    <h1>Deel 1 : registratiegegevens </h1>

    <form action="opdracht-sessions.php" method="post">

    <label for="email">e-mail</label>
    <input type="email" name="email" id="email">

    <label for="nickname">nickname</label>
    <input type="text" name="nickname" id="nickname">



    <input type="submit" value="submit">
    
    
    </form>

    



</body>
</html>