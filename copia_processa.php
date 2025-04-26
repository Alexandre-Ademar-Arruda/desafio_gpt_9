<<<<<<< HEAD
<?php
    $name='';
    $address_source='';
    $address_destination='';
    $residential_furniture='';


    try{
        function get_config(){
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $data_base = "jacheguei";
            
            $juncao = new mysqli($host,$user,$password,$data_base);

            if ($juncao->connect_error){
                throw new Exception("Erro ao se conectar com o Banco de Dados: " . $juncao->connect_error);
            }
            return $juncao;
        }
    }catch(Exception $e){
        echo "Erro ao se conectar com o Banco de Dados: " . $e->getMessage();
    }

    function limpa_dados($dados){
        try{
            if(!is_string($dados)){
                throw new Exception("Preencha os dados corretamente");
            }
            $dados = htmlspecialchars(trim($dados));
            return $dados;
        }catch(Exception $e){
            echo "Erro ao processar os dados: " . $e->getMessage();
        }
    }     
       
    function verifica_vazio($dados){
        if(!is_string($dados)){
            throw new Exception("Preencha todos os campos corretamente.");
        }
        return empty(limpa_dados($dados));
    }
    
    try{

        $conexao = get_config();

        if($_SERVER["REQUEST_METHOD"]=="POST"){    
            $name = limpa_dados($_POST['nome']);
            $address_source = limpa_dados($_POST['origem']);
            $address_destination = limpa_dados($_POST['destino']);
            $residential_furniture = limpa_dados($_POST['itens']);
        }
        
        if(verifica_vazio($name)||verifica_vazio($address_source)||verifica_vazio($address_destination)||verifica_vazio($residential_furniture)){
            throw new Exception("Preencha todos os campos.");
        }

        function inserir_dados($conexao,$name,$address_source,$address_destination,$residential_furniture){
            $sql = "INSERT INTO orcamento(nome,origem,destino,itens)VALUES(?,?,?,?)";
            $stmt = $conexao->prepare($sql);
            if(!$stmt){
                throw new Exception("Erro na preparaçao da query: " . $conexao->error);
            }
            $stmt->bind_param("ssss", $name,$address_source,$address_destination,$residential_furniture);
            if(!$stmt->execute()){
                throw new Exception("Erro ao executar a query: " . $stmt->error);
            }
            
            $stmt->close();
        }
    }catch(Exception $e){
        echo "Preencha os campos corretamente: " . $e->getMessage();
=======
<?php
    $name='';
    $address_source='';
    $address_destination='';
    $residential_furniture='';


    try{
        function get_config(){
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $data_base = "jacheguei";
            
            $juncao = new mysqli($host,$user,$password,$data_base);

            if ($juncao->connect_error){
                throw new Exception("Erro ao se conectar com o Banco de Dados: " . $juncao->connect_error);
            }
            return $juncao;
        }
    }catch(Exception $e){
        echo "Erro ao se conectar com o Banco de Dados: " . $e->getMessage();
    }

    function limpa_dados($dados){
        try{
            if(!is_string($dados)){
                throw new Exception("Preencha os dados corretamente");
            }
            $dados = htmlspecialchars(trim($dados));
            return $dados;
        }catch(Exception $e){
            echo "Erro ao processar os dados: " . $e->getMessage();
        }
    }     
       
    function verifica_vazio($dados){
        if(!is_string($dados)){
            throw new Exception("Preencha todos os campos corretamente.");
        }
        return empty(limpa_dados($dados));
    }
    
    try{

        $conexao = get_config();

        if($_SERVER["REQUEST_METHOD"]=="POST"){    
            $name = limpa_dados($_POST['nome']);
            $address_source = limpa_dados($_POST['origem']);
            $address_destination = limpa_dados($_POST['destino']);
            $residential_furniture = limpa_dados($_POST['itens']);
        }
        
        if(verifica_vazio($name)||verifica_vazio($address_source)||verifica_vazio($address_destination)||verifica_vazio($residential_furniture)){
            throw new Exception("Preencha todos os campos.");
        }

        function inserir_dados($conexao,$name,$address_source,$address_destination,$residential_furniture){
            $sql = "INSERT INTO orcamento(nome,origem,destino,itens)VALUES(?,?,?,?)";
            $stmt = $conexao->prepare($sql);
            if(!$stmt){
                throw new Exception("Erro na preparaçao da query: " . $conexao->error);
            }
            $stmt->bind_param("ssss", $name,$address_source,$address_destination,$residential_furniture);
            if(!$stmt->execute()){
                throw new Exception("Erro ao executar a query: " . $stmt->error);
            }
            
            $stmt->close();
        }
    }catch(Exception $e){
        echo "Preencha os campos corretamente: " . $e->getMessage();
>>>>>>> 178822df125b058c9b7fdd867354b630637802a6
    }