<?php

$annee = $_POST["year"];
$quatrecent = (($annee  % 400) == 0);
$cent = (($annee % 100) != 0);
$quatre = (($annee % 4) == 0);


if($quatrecent || $quatre && $cent){
    echo "Bissextile";
}

else{echo "Pas bissextile";}

?>