<?php
$min="min";
$max="max";
$val_aleatoire=rand((int)$_POST[$min],(int)$_POST[$max]);
$maval="maval";

if(isset($_POST[$maval]) && $_POST[$maval]!=""){

    if($_POST[$maval]<$_POST[$min] || $_POST[$maval]>$max){
        echo "Le nombre saisi est incorrect";
    }elseif($val_aleatoire>$_POST[$maval]){
        $maval=$_POST[$maval];
        echo "La valeur $val_aleatoire est supérieure à $maval";
    }elseif($val_aleatoire<$_POST[$maval]){
        $maval=$_POST[$maval];
        echo "La valeur $val_aleatoire est inférieure à $maval";
    }elseif($val_aleatoire=$_POST[$maval]){
        $maval=$_POST[$maval];
        echo "La valeur $val_aleatoire est égale à $maval";
    }
    }else{echo "Un des champs n'est pas renseigné";}

?>