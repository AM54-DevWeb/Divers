<?php
$min=1001;
$max=0;

for($i=1;$i<11;$i++){
    $nomvar="nb".$i;
    if(isset($_POST[$nomvar])){
        if($_POST[$nomvar]<0 || $_POST[$nomvar]>1000){
            echo "<br>Le nombre saisi est incorrect";
            exit;
        }else{
            if($max<$_POST[$nomvar]){
                $max=$_POST[$nomvar];
            }
            if($min>$_POST[$nomvar]){
                $min=$_POST[$nomvar];
            }
        }
    }
}
echo "<br>le nombre saisi le plus petit est : $min";
echo "<br> Le nombre saisi le plus grand est : $max";

?>