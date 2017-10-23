<?php 
    require_once 'cabecalho.php'; 
    require_once 'funcoes/banco-produto.php'; 

    $id = $_POST['id'];
    
    removeProduto($conexao, $id);
    header("location: lista-produtos.php?removido=true");
    die();
?>

    

<?php require_once 'rodape.php'; ?>