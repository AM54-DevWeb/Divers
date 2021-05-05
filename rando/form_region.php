<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Region</title>
</head>
<body>
    <?php
    if(isset($_GET["page"])){
        if($_GET["page"]=="ajout"){
    ?>
        <form action="script_php/insert.php?action=region" method="post">
    <?php }else{ ?>
        <form action="script_php/update.php?action=region" method="post">
    <?php } ?>

        <label for="nom_region">nom</label>
        <input type="text" name="nom_region" id="nom_region">

        <input type="submit" value="Valider">
    </form>
<?php } ?>

</body>
</html>