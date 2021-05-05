<?php
    //On commence une session et on se co à notre BDD
    session_start();
    require_once 'connexion_bdd.php';

    //On vérifie que les champs sont remplis
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){

        //Permet de sécuriser les données ? A vérifier(faille)
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);

        //On vérifie dans notre BDD les infos en effectuant une requête
        $check = $bdd->prepare('SELECT pseudo_utilisateur, mdp_utilisateur FROM utilisateur WHERE pseudo_utilisateur = ?');
        $check->execute(array($pseudo));
        $data = $check->fetch();
        $row = $check->rowCount();

        //On récupére le mdp hashé
        $hash = $data['mdp_utilisateur'];



        //Si la requête aboutie
        if($row == 1){
            
            //On vérifie que le password hashé (BDD) = le password entré ($_POST)
            $password = password_verify($password, $hash);
        
            if($password){

            //Si ça correspond on crée une session et on redirige vers notre espace membre

                $_SESSION['user'] = $data['pseudo_utilisateur'];
                header('Location:landing.php');



            }else{
                //Si mdp incorrect on redirige sur la page index
                header('Location:index.php?login_err=password');
                die();
            }


        }else{
            //Si la requête n aboutie pas redirection car l utilisateur existe pas
            header('Location:index.php?login_err=already');
            die();
        }


    }else{
        //Si on ne trouve rien dans la BDD on redirige également
        header('Location:index.php');
        die();
    }




?>