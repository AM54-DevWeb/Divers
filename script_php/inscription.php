<?php 
session_start();
require("connexion.php"); 

// on verifie que les 2 mots de passe saisis sont bien identiques
if($_POST["mdp"]==$_POST["mdp_confirm"]){

    // on recherche en base si un utilisateur a déja ce pseusi
    $users=$bdd->prepare("SELECT * FROM utilisateur WHERE pseudo_utilisateur=?");
    $users->execute(array($_POST["pseudo"]));

// je recupère le nb de lignes
    $nbUsers=$users->rowCount();
    if ($nbUsers==0){

//*Je vais haché le mdp

$hashpass=password_hash(strip_tags($_POST["mdp"]),PASSWORD_BCRYPT);

        // jinsere le nouvel utilisateur en base avec un prepare et execute
        $insert = $bdd -> prepare("INSERT INTO utilisateur (pseudo_utilisateur, nom_utilisateur, 
        prenom_utilisateur, mdp_utilisateur, type_utilisateur)

        VALUES (:pseudo_utilisateur, :nom_utilisateur, :prenom_utilisateur, 
        :mdp_utilisateur, :type_utilisateur)");

//htmlspecialchars ou strip empeche d'iinjecter du code dans nos pages
        $insert -> execute(array(":pseudo_utilisateur"=>htmlspecialchars($_POST["pseudo"]), 
                                    ":nom_utilisateur"=>strip_tags($_POST["nom"]), 
                                    ":prenom_utilisateur"=>strip_tags($_POST["prenom"]), 
                                    ":mdp_utilisateur"=>$hashpass, 
                                    ":type_utilisateur"=>2));
       
        
// si ca fonctionne je retourne sur lindex on pourrait mettre un echo pour confirmer l'inscription
    if($insert){
        $_SESSION["id_utilisateur"]=$bdd->lastInsertId();
        header("location:../index.php");
        exit;
    }else{
        // sinon je retourne sur lindex ac un messsaage d'erreur sur l'insertion
        header("location:../index.php?erreur=insert");
        exit;
}
    }else{
        //fin if(nbusers=0)
        //le pseudo est deja utilisé : je retourne sur index avec un mess d'erreur sur le pseudo
        header("location:../index.php?aff=inscription&erreur=pseudo");
        exit;
    }
}else{
    //fin if($_POST['mdp']==$_POST["mdp_confirm]){
        //les mdp sont differents je retourne sur index en affichant le formulaire
        //avec un messsage d'erreur le mot de passe

    header("location:../index.php?aff=inscription&erreur=mdp");
    exit;
}
?>