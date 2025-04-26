<?php

function get_config(){
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'jatochegando';

    $conect = new mysqli($host,$user,$password,$db);

    if($conect->connect_error){
        throw new Exception("Erro na conexçao: " . $conect->connect_error);
    }

    return $conect;
}
?>