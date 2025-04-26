<?php
    require_once 'config.php';
    require_once 'sanitiza_dados.php';
    require_once 'insert_dados.php';
    require_once 'ver_vazio.php';

    try{

        $conexao = get_config();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = limpa_dados($_POST['nome']);
            $address_source = limpa_dados($_POST['origem']);
            $address_destination = limpa_dados($_POST['destino']);
            $residential_furniture = isset ($_POST['itens']) ? implode(", ", $_POST['itens']) : '';
        }

        if (verifica_vazio($name)||verifica_vazio($address_source)||verifica_vazio($address_destination)||verifica_vazio($residential_furniture)){
            throw new Exception("Preencha os campos corretamente 1");
        }

        inserir_orcamento($conexao,$name,$address_source,$address_destination,$residential_furniture);

        echo "Orçamento enviado com sucesso!";

    }catch (Exception $e) {
        echo "Preencha o dados corretamente 2: " . $e->getMessage();
    }
