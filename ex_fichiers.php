<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice fichiers_PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>

<?php


// exercice 2


$l=file_get_contents("customers.csv");

$all=explode("\n",$l);

echo "<table class='table table-success table-hover' ><section><thead><tr>
<th>Prénom</th>
<th>Nom de famille</th>
<th>Email</th>
<th>Téléphone</th>
<th>ville</th>
<th>État</th></tr></thead><tbody>";

foreach ($all as $l){
    $allN=explode(",",$l);
echo "<tr>";
foreach($allN as $item){ 
echo "<td>".$item."</td>";
};
echo"</tr>";
};

echo "</tbody></section></table>";


//exercice 1

    $s="Salut c'est moi ! ";

    $b=fopen("ex_fichier.txt","a");

    fputs($b,$s);
    fclose($b);
  
    $l=file("liens.txt");
    echo $l;

    foreach($l as $ligne){
        echo $ligne;
    };

    print_r(file("liens.txt"));
    print_r(explode(",",$l));


?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<script src="customers.csv"></script><script src="essai.txt" ><script><script src="liens.txt" ><script>

</body>
</html>