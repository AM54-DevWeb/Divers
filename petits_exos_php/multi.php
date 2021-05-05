<?php

if(isset($_POST["multi"])){
    $multi=$_POST["multi"];

    for($i=0;$i<11;$i++){

        echo "<br />".$i. "x".$multi."=".$i*$multi;
    }

    echo "<br /><br /> Voici la table de $multi";
}

?>