<?php 
if(isset($_GET["insert"])){
    switch($_GET["insert"]){
        case "region":
            echo "<span>Insertion dans la table région réussie</span>";
            break;
    }
}

if(isset($_GET["erreur_ins"])){
    switch($_GET["erreur_ins"]){
        case "region":
            echo "<span>Insertion dans la table région loupée</span>";
            break;
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>rando</title>
</head>
<body>
    <nav>
        <a href="form_region.php?page=ajout">Ajouter Région</a>
    </nav> 
</body>
</html>