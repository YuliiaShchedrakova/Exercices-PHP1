<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Capitales PHP</title>
</head>

<?php  


$capitales = array(

    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"

);

//sort2 capitales par alphabet.

echo "<table border='1'><section>";
ksort($capitales);
foreach ($capitales as $capitale => $pays) {
    echo "<tr><td>".$capitale."</td><td>".$pays."</td></tr>";
};
echo "</section></table><br><br>";


//sort1 pays par alphabet.

echo "<table border='1'><section>";
ksort($capitales);
foreach ($capitales as $pays => $capitale) {
    echo "<tr><td>".$capitale."</td><td>".$pays."</td></tr>";
};
echo "</section></table><br><br>";


//sort3 Nombre de pays

$nb=count($capitales); 
echo "Le tableau contient ".$nb."pays.";



//sort4 lettre B

echo "<table border='1'><section>";

foreach($capitales as $capitale => $pays){
    if( substr($capitale,0,1)=="B"){
        // unset($capitales[$capitale]);
        echo "<tr><td>".$capitale." </td><td>".$pays."</td></tr>";
    };
};
// var_dump($capitales);

echo "</section></table><br><br>";
//  foreach ($capitales as $capitale => $pays) {
     
//  };


?>

</body>
</html>