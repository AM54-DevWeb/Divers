<?php 

try{
    $bdd=new PDO('mysql:host=localhost;dbname=test0;charset=utf8','root','');
}catch(exception $e){
    die('erreur'.$e->getMessage());
}

?>

//? PDO permet d'eviter les injections sql , on contre la faille avec les striptags , et les mdp sont cryptés en BLuefish 