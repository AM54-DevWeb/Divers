<?php
$carac="n";
$i=substr($_POST["phrase"],$_POST["nb"],1);
$pos=strpos($_POST["phrase"],$carac);
$nb1=$_POST["nb"];
$ph1=$_POST["phrase"];



if(isset($_POST["phrase"])){
    
if(isset($_POST["nb"])){

    if($_POST["nb"]>strlen($_POST["phrase"])){
        echo "le nombre saisi est trop grand";
    }

    else{
        echo "La $pos er/eme lettre est $i <br><br> ";
    }

    if(strpos($_POST["phrase"],$carac)==$_POST["nb"]){
        echo "Bravo il y a un $carac à la position $nb1 <br><br>";
    }

    if(strpos($_POST["phrase"],$carac)!=$_POST["nb"]){
        echo "Le premier $carac de la phrase $ph1 est a la position $pos<br><br>";
    }

    echo "La lettre se trouvant en position $nb1 de la phrase $ph1 est $i";

}
}
?>