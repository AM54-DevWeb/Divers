<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions</title>
</head>
<body>
<center>    
<form action="cond.php" method="POST">
    <label for="maval"><strong>Saisir un nombre compris entre une valeur minimale et maximale :</strong><br /><br /></label>
    <label for="nombre">Nombre :<br /></label>
    <input type="text" id="maval" name="maval">
    <label for="min"><br /><br />Minimum :<br /></label>
    <input type="number" id="min" name="min">
    <label for="max"><br /><br />Maximum :<br /></label>
    <input type="number" id="max" name="max">
    <br />
    <br />
    <input type="submit" value="Valider">
</form>
</center>

<form action="phrase.php" method="POST">
<label for="phrase">Choisir une phrase : <br /></label>
<input type="text" name="phrase">
<label for="nb"><br />Choisir un nombre : <br /></label>
<input type="number" name="nb">
<br>
<br>
<input type="submit" value="Valider">
</form>

</body>
</html>