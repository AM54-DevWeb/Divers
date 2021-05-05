<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Espace membre</title>
</head>
<body>
    <h1> Bonjour <?php echo $_SESSION['user']; ?> ! </h1>
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Deconnexion</a>
</body>
</html>