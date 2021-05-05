<?php 

$unkg=7.45;
$deuxkg=7.95;
$quatrekg=8.95;
$sixkg=20.95;


$colis1p = $_POST["colis1p"];
$colis1q = $_POST["colis1q"];
$colis1 = "";

$colis2p = $_POST["colis2p"];
$colis2q = $_POST["colis2q"];
$colis2 = "";

$colis3p = $_POST["colis3p"];
$colis3q = $_POST["colis3q"];
$colis3 = "";
/*
$colis4p = $_POST["colis4p"];
$colis4q = $_POST["colis4q"];
$colis4 = "";*/

/*colis 1*/

if(isset($_POST["colis1p"])) {
    
    if(isset($_POST["colis1q"]));
}

if($colis1p == 1){
    $colis1p = $unkg;
    $colis1 = $colis1p * $colis1q;
}

elseif($colis1p == 2 || $colis1p == 3){
    $colis1p = $deuxkg;
    $colis1 = $colis1p * $colis1q;
}

elseif($colis1p == 4 || $colis1p == 5){
    $colis1p = $quatrekg;
    $colis1 = $colis1p * $colis1q;
}

elseif($colis1p >= 6){
    $colis1p = $sixkg;
    $colis1 = $colis1p * $colis1q;
}

/*colis 2*/

if(isset($_POST["colis2p"])) {
    
    if(isset($_POST["colis2q"]));
}

if($colis2p == 1){
    $colis2p = $unkg;
    $colis2 = $colis2p * $colis2q;
}

elseif($colis2p == 2 || $colis2p == 3){
    $colis2p = $deuxkg;
    $colis2 = $colis2p * $colis2q;
}

elseif($colis2p == 4 || $colis2p == 5){
    $colis2p = $quatrekg;
    $colis2 = $colis2p * $colis2q;
}

elseif($colis2p >= 6){
    $colis2p = $sixkg;
    $colis2 = $colis2p * $colis2q;
}

/*Colis 3*/

if($colis3p == 1){
    $colis3p = $unkg;
    $colis3 = $colis3p * $colis3q;
}

elseif($colis3p == 2 || $colis3p == 3){
    $colis3p = $deuxkg;
    $colis3 = $colis3p * $colis3q;
}

elseif($colis3p == 4 || $colis3p == 5){
    $colis3p = $quatrekg;
    $colis3 = $colis3p * $colis3q;
}

elseif($colis3p >= 6){
    $colis3p = $sixkg;
    $colis3 = $colis3p * $colis3q;
}

echo "TOTAL A PAYER : <br />";
echo "$colis1" + "$colis2" + "$colis3";

?>