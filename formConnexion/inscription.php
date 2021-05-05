<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <title>Connexion</title>
        </head>
        <body>
        <div class="login-form">
            <?php
                if(isset($_GET['reg_err'])){

                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err){
                        case 'success':
                            ?>
                            <div class="alert alert-success">
                            <strong>Succès</strong> Vous avez bien été enregistré
                            </div>
                    <?php
                        break;
                        case 'password':
                            ?>
                            <div class="alert alert-danger">
                            <strong>Incohérence</strong> Les mots de passe ne correspondent pas
                            </div>
                    <?php
                        break;
                        case 'pseudo_lenght':
                            ?>
                            <div class="alert alert-danger">
                            <strong>Trop long</strong> Votre pseudo est trop grand. Veuillez choisir un autre pseudo
                            </div>
                    <?php
                        break;   
                        case 'already':
                            ?>
                            <div class="alert alert-danger">
                            <strong>Déjà existant</strong> Ce compte existe déjà !
                            </div>
                    <?php
                        break;   


                    }
                }



            ?>

            <!-- Notre formulaire Inscription -->
            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>       
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <input type="text" name="prenom" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Valider</button>
                </div>   
            </form>
            <p class="text-center"><a href="connexion.php">Se connecter</a></p>
        </div>
        <!-- Notre CSS -->
        
        </body>
</html>