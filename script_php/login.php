<?php
session_start();
require("connexion.php");

//Recherche l'utilisateur qui a le pseudo saisi

$users=$bdd->prepare("SELECT * FROM  utilisateur WHERE pseudo_utilisateur=?");
$users->execute(array(htmlspecialchars($_POST["pseudo"])));

// je regarde cb d'enregistrements sont retournés
$nbUser=$users->rowCount();

//Le pseudo existe
if($nbUser!=0){
    $myUser=$users->fetch();

    //j'utilise la fonction password pour verfier le mdp de lutilisateur correspond au mdp hashé qui est en base
    if(password_verify(strip_tags($_POST["mdp"]),$myUser["mdp_utilisateur"])){
        // jalimente ma variable de session pour pouvoir afficher le nom et prenom de lutilisateur sur lindex
        $_SESSION["id_utilisateur"]=$myUser["id_utilisateur"];
        $_SESSION["type_utilisateur"]=$myUser["type_utilisateur"];
        echo $_SESSION["type_utilisateur"];
        
        // tt est ok ,lutilisateur est co on retoune à l'index
        header("location:../index.php");
        exit;
    }else{

// le mdp n'est pas bon je retourne sur le formulaire ac un message d'erreur
        header("location:../index.php?aff=connexion&erreur=mdp_faux");
        exit;
    }
    }else{
// le pseudo n'existe pas : je retourne sur le formulaire ac un message d'erreur
header("location:../index.php?aff=connexion&erreur=login");
exit;
    }



?>