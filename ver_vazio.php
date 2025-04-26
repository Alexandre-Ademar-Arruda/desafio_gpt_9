<<<<<<< HEAD
<?php

    require_once 'sanitiza_dados.php';

    function verifica_vazio($dados){

        try {

            if (!is_string($dados)) {

                throw new Exception("O valor fornecido nao é string");

            }

            return empty (limpa_dados($dados));

        } catch (Exception $e) {

            echo "Erro ao verificar campo: " . $e->getMessage();

            return true;

        }

    }
=======
<?php

    require_once 'sanitiza_dados.php';

    function verifica_vazio($dados){

        try {

            if (!is_string($dados)) {

                throw new Exception("O valor fornecido nao é string");

            }

            return empty (limpa_dados($dados));

        } catch (Exception $e) {

            echo "Erro ao verificar campo: " . $e->getMessage();

            return true;

        }

    }
>>>>>>> 178822df125b058c9b7fdd867354b630637802a6
?>