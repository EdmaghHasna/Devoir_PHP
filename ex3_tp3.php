
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border=1>
    <tr bgcolor='blue'>
        <th>Numero de commande</th>
        <th>Numero Client</th>
        <th>Date de commande</th>
        <th>Désignation article/th>
        <th>Quantité</th>
        <th>prix unitaire</th>
        <th>Date de livraison</th>
        <th>Adresse client</th>
    </tr>
<?php
try{
$source=fopen("test.txt","r");
}catch(exception $e){
    die("l'erreur est:".$e);
}

while($ligne=fgets($source)){
    echo"<tr>";
    $arr=explode("|",$ligne);
    
    foreach($arr as $cellule){
        echo "<td>".$cellule."</td>";
    }
    echo"</tr>";
}
?>
</table>
</body>
</html>
