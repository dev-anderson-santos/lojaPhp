<?php 
    require_once 'cabecalho.php';
    require_once 'funcoes/conecta.php';
    require_once 'funcoes/banco-produto.php';
    
    /*$id = $_GET['id'];
    $produtoRemovido = selecionaUmProduto($conexao, $id); */
    if(array_key_exists("removido", $_GET) && $_GET['removido'] == true) :
        /*$id = $_POST['id'];
        if($_POST['id'] == $id) : 
            $produtoRemovido = selecionaUmProduto($conexao, $id); 
        */?>
        <p class="text-success">Produto <?php
               
               //$produtoRemovido['nome'];
            //echo $id;
        //endif;?> 
        foi removido com sucesso</p>
    <?php endif;
?>
    <table class="table table-bordered table-striped table-hover">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
        <?php $prods = listaProdutos($conexao);
        foreach($prods as $produto) : ?>
        <tr>        
            <td><?php echo $produto['nome']; ?></td>
            <td><?php echo $produto['valor']; ?></td>
            <td><?php echo substr($produto['descricao'], 0, 40); ?></td>
            
            <td><?php echo $produto['categoria_nome']; ?></td>
            <td>
                <a href="edita-produto-formulario.php?id=<?=$produto['id']?>" class="btn btn-secondary">Editar</a>
            </td>
            <td>        
                <form action="remove-produto.php" method="POST">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>  
        
        <?php endforeach; ?>
    </table>
<?php require_once 'cabecalho.php'; ?>