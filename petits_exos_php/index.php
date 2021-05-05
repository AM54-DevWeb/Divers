<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aleatoire</title>
</head>
<body>

<form action="aleatoire.php" method="POST">
    <label for="nb">Saisir un nombre entre 1 et 10</label>
    <input type="text" id="nb" name="nb">
    <input type="submit" value="Valider">
</form>
    
<br />

<form action="multi.php" method="POST">
    <label for="multi">Saisir un nombre à multiplier</label>
    <input type="number" id="multi" name="multi">
    <input type="submit" value="Valider">
</form>

<br />

<form action="minmax.php" method="POST">
    <label for="nb">Saisir un nombre entre 0 et 1000</label>
    <input type="number" id="nb1" name="nb1">
    <input type="number" id="nb2" name="nb2">
    <input type="number" id="nb3" name="nb3">
    <input type="number" id="nb4" name="nb4">
    <input type="number" id="nb5" name="nb5">
    <input type="number" id="nb6" name="nb6">
    <input type="number" id="nb7" name="nb7">
    <input type="number" id="nb8" name="nb8">
    <input type="number" id="nb9" name="nb9">
    <input type="number" id="nb10" name="nb10">
    <input type="submit" value="Valider">
</form>



</body>
</html>