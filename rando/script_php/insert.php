<?php 
require("crud_rando.php");

if(isset($_GET["action"])){
    switch($_GET["action"]){
        case "region":
            $insert=insert_region($_POST["nom_region"]);
            if($insert){
                header("Location:../index.php?insert=region");
                exit;
            }else{
                header("Location:../index.php?erreur_ins=region");
                exit;
            }
            break;
    }
}
?>