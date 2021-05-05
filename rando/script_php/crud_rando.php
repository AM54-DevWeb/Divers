<?php 
function connect_rando(){

if($bdd=mysqli_connect('localhost','root','','rando')){
    mysqli_set_charset($bdd,"utf8");
}else{
    echo 'erreur de connexion';
}
    return $bdd;
}


function create_region(){
    $bdd=connect_rando();
    $creer=mysqli_query($bdd, "CREATE TABLE IF NOT EXISTS region(id_region INT AUTO_INCREMENT PRIMARY KEY, nom_region VARCHAR(100))");

        return $creer;
    }

    function insert_region($nom){
        $insert=false;
        $bdd=connect_rando();
        $creer=create_region();
        if($creer){
            $insert=mysqli_query($bdd,"INSERT INTO region (nom_region) VALUES('".$nom."')");
        }
    return $insert;
    }
    
    ?>
