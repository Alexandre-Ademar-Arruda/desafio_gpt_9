<<<<<<< HEAD
<?php

function limpa_dados($dados) {

    try{

        if(!is_string($dados)){

            throw new Exception("Preencha o campo corretamente.");

        }
        
        $dados = htmlspecialchars($dados);
        
        $dados = trim($dados);
        
        if(!preg_match('/[a-zA-ZÀ-ÿ]+/', $dados)){
            throw new Exception("Preencha o campo corretamente");
        }
        
        return $dados;

    } catch (Exception $e) {

        die("Falha ao preencher campo: " . $e->getMessage());

    }
=======
<?php

function limpa_dados($dados) {

    try{

        if(!is_string($dados)){

            throw new Exception("Preencha o campo corretamente.");

        }
        
        $dados = htmlspecialchars($dados);
        
        $dados = trim($dados);
        
        if(!preg_match('/[a-zA-ZÀ-ÿ]+/', $dados)){
            throw new Exception("Preencha o campo corretamente");
        }
        
        return $dados;

    } catch (Exception $e) {

        die("Falha ao preencher campo: " . $e->getMessage());

    }
>>>>>>> 178822df125b058c9b7fdd867354b630637802a6
}