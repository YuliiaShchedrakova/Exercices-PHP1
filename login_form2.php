
<?php

session_start();
var_dump($_SESSION); 
var_dump($_REQUEST);

if (isset($_POST["ok"])){
    
    //variables 

    $hash1 = '$2y$10$g9S/Ixog9k0aCBpBSajKyuwftCxznBEgSmXt.lE29yrpibURnQSGu';
    $ident=$_POST["ident"];
    $p=$_POST["p"];
    $em=$_POST["em"];
    $pw=$_POST["pw"];
    $n=$_POST["n"];

    echo password_hash($pw, PASSWORD_DEFAULT);
    
    var_dump("mon hash : ".$hash1);
    var_dump("<br><br>password de hash : ".password_hash($pw,PASSWORD_DEFAULT));
    var_dump("<br><br>boleen (password_verify):".password_verify($_POST["pw"], $hash1)) ;
    $ver=password_verify($pw, $hash1);
    var_dump($ver);
    echo "<br>"; 
};


 //email

    function fun1($em) {
        $valid = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/";

        if (preg_match($valid, $em)) {
        return true;
            
            } else {
            echo "<p>Adresse mail invalide</p>";
            return false;
            };
    };

//prénom
    function fun2($p) {
        $val = "/^[a-zA-Z]+$/";

        if (preg_match($val, $p)) {
        return true;
            
            } else {
            echo "<p>Pas bon prenom (invalid)</p>";
            return false;
            };
    };

//ident
    function fun3($ident) {
        $val =  "/^[a-zA-Z]+$/";

        if (preg_match($val, $ident)) {
            return true;
            
            } else {
            echo "<p>Identifiant pas bon (invalide)</p>";
            return false;
            };
    }; 


//nom
    function fun4($n) {
        $val ="/^[a-zA-Z]+$/";

        if (preg_match($val, $n)) {
        return true;
            
            } else {
            echo "<p>Nom pas bon (invalide)</p>";
            return false;
            };
    };

    

    if (fun2($p)==true & fun1($em)==true & fun4($n)==true & fun3($ident)==true & password_verify($_POST["pw"], $hash1)){ 

        $_SESSION["auth"]="oui";


    $_SESSION['p'] = $p;
    $_SESSION['n'] = $n;
    $_SESSION['em'] = $em;
    $_SESSION['ident'] = $ident;
    
    if (password_verify($_POST["pw"], $hash1)){
        $_SESSION["ok"]="okk";
    return true;
        
            
        } else {
        echo "<p>Mot de passe pas bon (invalide) </p>";
        return false;
        }; 


    header("Location: oui.php");
    exit();}

        else {
        unset($_SESSION["ident"]);
        session_destroy();
        echo "Corrige le formulaire svp !";
        };

?>