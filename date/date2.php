<?php

$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];

if(isset($day) && isset($month) && isset($year)){
    if($day <= 1 && $month != 1){
        $day = 31;
        $month = $month -1;
        echo "Veille de la date = $day : $month : $year <br>" ;}
            elseif($month <= 1 && $day <=1){
                $day = 31;
                $month = 12;
                $year = $year -1;
                echo "Veille de la date = $day : $month : $year <br>" ;
            }else{
    $day = $day -1;
    echo "Veille de la date = $day : $month : $year <br>" ;
    }
}

$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];

if(isset($day) && isset($month) && isset($year)){
    if($day >= 31 && $month >= 12){
        $day = 1;
        $month = 1;
        $year = $year + 1;
        echo "Lendemain de la date = $day : $month : $year <br>" ;}
            elseif($day >= 31){
        $day = $_POST["day"];
        $month = $_POST["month"];
        $day = 1;
        $month = $month +1;
        echo "Lendemain de la date = $day : $month : $year <br>" ;
    }else{
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];
    $day = $day +1;
    echo "Lendemain de la date = $day : $month : $year <br>" ;
    }
}


else{echo "Entrez une date";}

?>