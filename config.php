<<<<<<< HEAD
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
=======
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
>>>>>>> 178822df125b058c9b7fdd867354b630637802a6
?>