<?php
    require_once 'connexion_bdd.php';

    if(isset($_POST['pseudo']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['password']) && isset($_POST['password_retype'])){

        //Permet de sécuriser les données ? A vérifier(faille)
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        $prenom =$_POST['prenom'];
        $password_retype = $_POST['password_retype'];
        $nom = $_POST['nom'];

       //On vérifie dans notre BDD les infos en effectuant une requête
        $check = $bdd->prepare('SELECT pseudo_utilisateur, mdp_utilisateur, nom_utilisateur, prenom_utilisateur FROM utilisateur WHERE pseudo_utilisateur = ?');
        $check->execute(array($pseudo));
        $data = $check->fetch();
        $row = $check->rowCount();


        //Si les données ne sont pas présentes dans la BDD
        if($row == 0){
            if(strlen($pseudo)<=100){
                if($password == $password_retype){

                //On hash le password
                $password = password_hash($password, PASSWORD_DEFAULT);

                $insert = $bdd->prepare('INSERT INTO utilisateur(pseudo_utilisateur, mdp_utilisateur, nom_utilisateur, prenom_utilisateur) VALUES(:pseudo, :password, :nom, :prenom)');

                $insert->execute(array(

                    'pseudo' => $pseudo,
                    'password' => $password,
                    'nom' => $nom,
                    'prenom' => $prenom
                ));
                header('Location:inscription.php?reg_err=success');
                die();

                }else{
                    header('Location:inscription.php?reg_err=password');
                    die();
                }


            }else{
                //Si les pseudo trop long
                header('Location:inscription.php?reg_err=pseudo_lenght');
                die();
        }

    }else{
           //Si les données sont déjà présente dans la BDD
        header('Location:inscription.php?reg_err=already');
        die();
    }
    }
