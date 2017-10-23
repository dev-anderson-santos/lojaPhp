<?php
    require_once 'cabecalho.php';
    require_once 'classes/Produto.php';
    require_once 'funcoes/conecta.php';
    require_once 'funcoes/banco-produto.php';

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];
 
    if(array_key_exists('usado', $_POST)) {
        $usado = 1; // true;
    } else {
        $usado = 0; // false;
    }
    

    /*$produto = new Produto;

    $produto->setNome($nome); 
    $produto->setNome($preco);*/

    if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { 
?>
        
    <p class="text-success">Produto <?= $nome ?> com valor de R$<?= $preco ?> foi adicionado com sucesso</p>
    <?php } else {
        $msg = mysqli_error($conexao); 
    ?>
        <p class="text-danger">Produto <?= $nome ?> não foi adicionado: <?= $msg ?></p>
    <?php }
    ?>

<?php require_once 'cabecalho.php'; ?>