<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Date&Time_PHP</title>
</head> 

<?php  

date_default_timezone_set("Europe/Paris");

$db=new DateTime();
$dt="14/07/2019";
$ts=strtotime(str_replace("/","-",$dt));
$numeroS=date("W",$ts);

echo "La numéro de semaine de la date 14/07/2019 est : ".$numeroS;


    var_dump($db);
    $db->format("Y-m-d");
    $end=new DateTime("2024-09-24");

    $rf=date_diff($db,$end);
    echo $rf->format("<br><br> il reste %R%a jours <br> <br>");
    echo date("  H\hi");
    bissextile($db);

    function bissextile($db){
        $yy=intval($db->format("Y"));
        if($yy%4===0){
            echo "<br><br> année bissextile";
        }
        else{ 
            echo "<br><br> pas une année bissextile";
        };
    };

$err=var_dump(checkdate(32,17,2019));
verif($err);

function verif($err){ 
if ($err==false){
    echo "<br><br>  32/17/2019 est erronée";
}
else{
    echo "<br><br>  c'est est faux ";
};};

$db->add(new DateInterval('P1M'));
echo "<br><br> Dans 1 mois la date sera comme ca : ".$debut->format("Y-m-d");

$ts=1000200000;
$resultat=date("d/m/Y H:i:s",$ts);

echo "<br> 1000200000 est le timestamp de cette date : ".$resultat; 


?>

</body>
</html>