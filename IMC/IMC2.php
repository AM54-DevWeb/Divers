<?php 

$poid = $_POST["poid"];
$taille = $_POST["taille"];
$IMC = $poid / (($taille * $taille));


if(isset($_POST["poid"])){
    
    if(isset($_POST["taille"]));
    echo $IMC;
}


if($IMC < 20){
    echo "Trop bas";
}

if($IMC > 25){
    echo "Trop haut";
}

if($IMC > 20 and $IMC < 25){
    echo "Normal";
}

?>