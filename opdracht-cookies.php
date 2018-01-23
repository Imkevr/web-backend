<?php
if ( isset( $_GET[ 'logout' ] ) )
{
    setcookie( 'authenticated', '', time() - 1000 );
    header('location:opdracht-cookies.php');
}
$fileContent	=	file_get_contents( 'opdracht-cookies.txt' );
$userData		=	explode( ',', $fileContent );
$message			=	false;
$isAuthenticated	=	false;
if ( !isset( $_COOKIE['authenticated'] ) )
{
    if ( isset( $_POST[ 'submit' ] ) )
    {
        if ( $_POST[ 'username' ] == $userData[ 0 ] &&
                $_POST[ 'password' ] == $userData[ 1 ] )
        {
            setcookie( 'authenticated', true, time() + 3600 );
            header( 'location: opdracht-cookies.php' );
        }
        else
        {
            $message = 'Er ging iets mis. Probeer opnieuw.';
        }
    }
}
else
{
    $message			=	'U bent ingelogd.';
    $isAuthenticated	=	true;
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht cookies</title>
        <link rel="stylesheet" href="http://oplossingen.web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://oplossingen.web-backend.local/css/facade.css">
    </head>
    <body>
    
    <section class="body">
        <h1>Opdracht cookies: deel 1</h1>

        <h1>Inloggen</h1>
		
		<?php if ($message): ?>
			<?=	$message ?>
		<?php endif ?>

		<?php if ( !$isAuthenticated ): ?>
		
			<form action="opdracht-cookies.php" method="post">
				<ul>
					<li>
						<label for="username">username: </label>
						<input type="text" name="username" id="username" value="jan">
					</li>
					<li>
						<label for="password">Password: </label>
						<input type="password" name="password" id="password" value="paswoord01">
					</li>
				</ul>
				<input type="submit" name="submit" value="log in">
			</form>
		<?php else: ?>

			<a href="opdracht-cookies.php?logout=true">Uitloggen</a>

		<?php endif ?>
    </body>    
</html>