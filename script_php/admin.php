<?php

require("connexion.php");

$users=$bdd->prepare("SELECT * FROM utilisateur");
$users->execute(array());

//on parcours la liste de ts les utilisateurs de la table

while($myUser=$users->fetch()){
    $nbcar=strlen($myUser['mdp_utilisateur']);
    if($nbcar!=60){

        $hashpass=password_hash($myUser["mdp_utilisateur"],PASSWORD_BCRYPT);

        $update=$bdd->prepare("UPDATE utilisateur
                               SET mdp_utilisateur=?
                              WHERE id_utilisateur=?");
       $update->execute(array($hashpass,$myUser["id_utilisateur"]));
       header("location:../index.php");
    }
}

?>