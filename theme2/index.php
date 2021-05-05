<link rel="stylesheet" href="style.css">
<?php include("header.php") ?>


    <section>
        <p>Coucou !</p>

<!--  FORM NOM PRENOM  -->
        <?php
$nomUtilisateur = "";

if(isset($_POST["nom_utilisateur"])) {
    $nomUtilisateur =$_POST["nom_utilisateur"];
}

$prenomUtilisateur = "";

if(isset(/*$_GET*/$_POST["prenom_utilisateur"])){
    $prenomUtilisateur = /*$_GET*/$_POST["prenom_utilisateur"];
}
?>
<div class="formulaire">

<form method="POST" class="form1" class="<?php if($prenomUtilisateur == "toto") {
            echo "test";
        }?>">
    <label class="NomPrenom">Nom</label><br />
    <input class="formulaireInput" type="text" name="nom_utilisateur" value="<?php echo $nomUtilisateur; ?>"/><br />
    <?php 
        if($nomUtilisateur == ""){
            echo '<div class="champ"> Ce champ est obligatoire </div>';
}?>
<br />
    <label class="NomPrenom">Prénom</label><br />
    <input class="formulaireInput" type="text" name="prenom_utilisateur" value="<?php echo $prenomUtilisateur; ?>"/><br />    
    <?php 

        if($prenomUtilisateur == ""){
            echo '<div class="champ"> Ce champ est obligatoire </div>';
        }
?>
<br />
    <center><input class='valider' type="submit" value="Valider" /></center>
</form>
</div>
<!--  FORM NOM PRENOM  -->




    </section>

    <?php include("footer.php") ?>
