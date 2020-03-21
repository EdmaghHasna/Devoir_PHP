<?php

//Tableau file(chaine nomdufichier);

 $Fichier= "test.txt";

 $TabFich = file($Fichier);





for($i = 0; $i < count($TabFich); $i++)
{
	print_r($TabFich[$i]);
}


//print_r(file("test.txt"));



?>