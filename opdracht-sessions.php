<?php
	session_start();
	if ( isset( $_GET['session'] ) )
    {
        if ( $_GET['session']  == 'destroy' )
        {
            session_destroy( );
            header( 'location: opdracht-sessions.php' );
        }
    }
	var_dump( $_SESSION );
	$email		=	( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] : '';
	$nickname	=	( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht sessions </title>
</head>
<body>

<h1>Opdracht sessions</h1>

<a href="opdracht-sessions.php?session=destroy">Destroy sessie</a>

<h2>Deel1: registratiegegevens</h2>

<form action="opdracht-sessions.php" methode="POST">
    <ul>
        <li>
            <label for="email">email</label>
            <input type="text" id="email" name="email" value="<?= $email ?>" placeholder="vul email in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "email" ) ? 'autofocus' : '' ?>>
        </li>
        <li>
            <label for="nickname">nickname</label>
            <input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" placeholder="vul nickname in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "nickname" ) ? 'autofocus' : '' ?>>
        </li>
    </ul>

    <input type="submit" name="Submit">

</form>
</body>
</html>

