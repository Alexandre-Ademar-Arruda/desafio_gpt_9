<<<<<<< HEAD
<?php
function inserir_orcamento($conn,$nome,$endereco_origem,$endereco_destino,$moveis){
    $sql = "INSERT INTO orcamento(nome, origem, destino, itens)VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt){
        throw new Exception("Erro ao preparar a query: " . $conn->error);
    }
    $stmt->bind_param("ssss", $nome,$endereco_origem,$endereco_destino,$moveis);
    
    if(!$stmt->execute()){
        throw new Exception("Erro ao executar a query: " . $stmt->error);
    }
    $stmt->close();
}
=======
<?php
function inserir_orcamento($conn,$nome,$endereco_origem,$endereco_destino,$moveis){
    $sql = "INSERT INTO orcamento(nome, origem, destino, itens)VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt){
        throw new Exception("Erro ao preparar a query: " . $conn->error);
    }
    $stmt->bind_param("ssss", $nome,$endereco_origem,$endereco_destino,$moveis);
    
    if(!$stmt->execute()){
        throw new Exception("Erro ao executar a query: " . $stmt->error);
    }
    $stmt->close();
}
>>>>>>> 178822df125b058c9b7fdd867354b630637802a6
?>