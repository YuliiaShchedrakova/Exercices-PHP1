<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Ex_multiplication PHP</title>
</head>

<?php  

$rows=10;
$cols=10; 

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table='<tr>';
echo '<tr>';

for ($td=1; $td<=$cols; $td++){
    echo'<td>'.$tr*$td. '</td>'; 
}

echo '</tr>';
}
echo $table;

?>


</body>
</html>