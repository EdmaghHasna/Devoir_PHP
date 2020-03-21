<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Delices des fruits et des legumes</h1>
<?php

                $pictures = array ("images/1.jfif", "images/2.jfif", "images/3.jfif" ) ;

                shuffle ($pictures) ; // Permet de charger une image aléatoire à l'aide de la fonction "shuffle()".

                for ($i = 0 ; $i < 3 ; $i ++)

            {

                echo "<td align = 'center'> <img src = \"" ;

                echo $pictures [$i] ;

                echo " \" width = '115' height = '115' </td>" ;

            }

?>
</body>
</html>



