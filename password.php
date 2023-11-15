<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>Password_PHP</title>
</head> 

<!--button-->

<form method="POST" action="">Password: <input type="text" name="password">
<button type="submit" name="btn">OK</button>
</form>

<!--php-->

<?php  

if (isset($_POST["btn"])) {

    $password = $_POST["password"];

    function verif($password) {
    $verific = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/";

    if (preg_match($verific, $password)) {
        echo "Mot de passe bon";
            return true;
            
        } else {
            echo "Mot de passe invalide";
            return false;
        };
    };

    verif($password);
    
};

?>

</body>
</html>



