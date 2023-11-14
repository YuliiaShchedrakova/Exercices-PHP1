<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Departements PHP</title>
</head>

<?php  

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

//sort1 regions par alph. 

ksort($departements);

foreach($departements as $region => $depart){

    echo "<p>$region : ";
    foreach($depart as $liste){
    echo" $liste </p>";
    };

    echo "<br>";

};



//sort2 nombres de depart.

ksort($departements);

foreach($departements as $region => $depart){
    
    echo "<p> $region : ";
    $nbr=count($depart);
    echo"$nbr</p>";
    
    echo "<br>"; 

};



?>

</body>
</html>