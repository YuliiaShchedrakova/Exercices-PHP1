<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Mois_jour PHP</title>
</head>

<?php   

$tab=array( 
    "Janvier" =>  "31",
    "Fevrier"=>  "28",
    "Mars"=>  "31",
    "Avril"=>  "30",
    "Mai"=>  "31",
    "Juin"=>  "30",
    "Juillet"=>  "31",
    "Aout"=>  "31",
    "Septembre"=>  "30",
    "Octobre"=>  "31",
    "Novembre"=>  "30",
    "Decembre"=>  "31"
);

echo "<table border='1'><section><tr>";
foreach($tab as $cle =>$valeur){
    echo "<td>".$cle."</td><td> ".$valeur." </td></tr>";
};
echo "</section></table><br><br>";


//sort boucle

echo "<table border='1'><section><tr>";

foreach($tab as $cle =>$valeur) { 

    if($valeur==="31"){
    echo "<td>".$cle."</td><td> ".$valeur." </td></tr>";
}


//     else if ($valeur==="30"){
//     echo "<td>".$cle."</td><td> ".$valeur." </td></tr>";};
//     echo "</section></table><br><br>";
//     echo "<table border='1'><section><tr>";
// }
    

//     else ($valeur==="28"){
//     echo "<td>".$cle."</td><td> ".$valeur." </td></tr>";
// }
//     echo "</section></table>"

};
echo "</section></table><br><br>";

?>

<!-- // echo "<table border='1'><section><tr>"; 
// foreach($tab as $cle =>$valeur){
//     echo "<td>".$cle."</td><td> ".$valeur." </td></tr>";
//                     };
//     echo "</section></table><br><br>"; -->

<!-- 
//sort -->


<!-- // foreach($tab as $cle =>$valeur){

//     if($valeur==="31"){
//     echo "Les mois avec 31 jours : .$cle."<br>";
// }

// else if($valeur==="30"){
//     echo "Les mois avec 30 jours : .$cle."<br>";
// }

// else {
//     echo "Les mois avec mois que 28 jours : .$cle."<br>";
// }
  
// }; -->



<!-- ?> -->


</body>
</html>