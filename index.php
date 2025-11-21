<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Variables</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">Variables</h1>
	</div>

	<?php 
        $path = $_SERVER['DOCUMENT_ROOT'];
        echo '<p class="root">Root path: ' . $path . '</p>';
    ?>        
    <div class="containerist">
        <?php
        require 'data.php';
        echo '<p class="mostImportant">Global variables: </p>';
        echo '<p><span class="important">$GLOBALS</span> = ' . $GlobalsDef . '</p>';
        echo '<p><span class="important">$_POST</span> = ' . $PostDef . '</p>';
        echo '<p><span class="important">$_SERVER</span> = ' . $ServerDef . '</p>';
        echo '<p><span class="important">$_COOKIE</span> = ' . $CookieDef . '</p>';
        echo '<p><span class="important">$_ENV</span> = ' . $EnvDef . '</p>';
        echo '<p><span class="important">$_FILES</span> = ' . $FilesDef . '</p>';
        echo '<p><span class="important">$_GET</span> = ' . $GetDef . '</p>';
        echo '<p><span class="important">$_REQUEST</span> = ' . $RequsetDef . '</p>';
        echo '<p><span class="important">$_SESSION</span> = ' . $SessionDef . '</p>';
        ?>
    </div>

    <div class="mainContainer">
        <?php 
            echo '<h1>Calculator</h1>';
            $number1 = 2;
            $number2 = 5;

            $scitanie = ($number1 + $number2);
            $odcitanie = ($number1 - $number2);
            $nasobenie = ($number1 * $number2);
            $delenie = ($number1 / $number2);

            $umocnenie = 1; //dá sa použiť aj funkcia pow($number1, $number2);
            for ($i = 0; $i < $number2; $i++) {
                $umocnenie *= $number1;
            }
            $odmocnenie = pow($number1, 1 / $number2); //for -moc komplikované


            // gettype() = double; var_dump() = float;
            if (gettype($scitanie) === 'double') { 
                $scitanie = round($scitanie, 2);
            } 
            if ((gettype($odcitanie) === 'double')) {
                $odcitanie = round($odcitanie, 2);
            } 
            if (gettype($nasobenie) === 'double') {
                $nasobenie = round($nasobenie, 2);
            } 
            if (gettype($delenie) === 'double') {
                $delenie = round($delenie, 2);
            } 
            if (gettype($umocnenie) === 'double') {
                $umocnenie = round($umocnenie, 2);
            } 
            if (gettype($odmocnenie) === 'double') {
                $odmocnenie = round($odmocnenie, 2);
            }

            echo '<p>Scitanie: ' . $number1 . ' + ' . $number2 . ' = ' . $scitanie . '</p>';
            echo '<p>Odcitanie: ' . $number1 . ' - ' . $number2 . ' = ' . $odcitanie . '</p>';
            echo '<p>Nasobenie: ' . $number1 . ' * ' . $number2 . ' = ' . $nasobenie . '</p>';
            echo '<p>Delenie: ' . $number1 . ' / ' . $number2 . ' = ' . $delenie . '</p>';   
            echo '<p>Umocnenie: ' . $number1 . ' ^ ' . $number2 . ' = ' . $umocnenie . '</p>';
            echo '<p>Odmocnenie: ' . $number1 . ' √ ' . $number2 . ' = ' . $odmocnenie . '</p>';

            
        ?>
    </div>

</body>
</html>