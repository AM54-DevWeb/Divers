<?php

if(isset($_POST["nb"])){
    $nb=$_POST["nb"];
    $i=0;
    $aleatoire=rand(0,10);
    while($aleatoire != $nb){
        $i++;
        $aleatoire=rand(0,10);
        echo "<br>".$aleatoire;
    }

    echo "<br> Le nombre $nb a été trouvé en $i fois";
}

?>