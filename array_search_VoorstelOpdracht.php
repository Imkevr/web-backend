
<?php 

$colorArr    =   array("green", "blue","red","yellow","green","purple","blue");

$foundKey1   =   array_search("blue", $colorArr);

$catsArr    =   array( 
        1 => array(
             "ras" => "Pers",
             "kleur"=> "wit",
             "naam"=> "Phee"
        ),=
        6 => array(
            "ras" => "Britse korthaar",
            "kleur"=> "grijs",
            "naam"=> "Maybell"

        )
        );
$foundKey2  =   array_search('grijs', array_column($catsArr, "kleur"));

//$founKeyArr =   array( array_keys($colorArr, "blue"));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>array_search</h2>    

<pre><?php print_r($colorArr)?></pre>

<p> <code>array_search("blue", $colorArr)</code></p>

<p>Levert dit als resultaat --> key = <?php echo $foundKey1?> value = <?php echo $colorArr[$foundKey1]?></p>

<p>Array bevat 2 "blue" waardes maar <code>array_search</code> geeft enkel de eerst gevonde key weer!</p>



<h3>Meerdere keys met zelfde value: </h3>

<p><code>print_r(array_keys($colorArr, "blue"));</code></p>

<p>geeft als resultaat : </p>

<pre><?php print_r(array_keys($colorArr, "blue"))?></pre>




<h3>multi-dimentional array:</h3>

<pre><?php print_r($catsArr)?></pre>

<p> <code>array_search("grijs" , array_colomn($catsArr, "kleur"));</code> </p>

<p>Levert dit als resultaat --> key = <?php echo $foundKey2?></p>




</body>
</html>