<?php require_once 'cabecalho.php'; 
    require_once 'funcoes/conecta.php';
    require_once 'funcoes/banco-categoria.php';

    $categorias = listaCategorias($conexao);
?>
    
    <h1>Formulário de produtos</h1>
    <form action="adiciona-produto.php" method="POST">
        <table class="table">
            <tr>
                <td>Nome:</td>   
                <td><input type="text" class="form-control" name="nome"></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input type="number" class="form-control" name="preco"></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea class="form-control" name="descricao"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" value="true"> Usado</td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                    <?php 
                    foreach($categorias as $categoria) : ?>
                        <option value="<?=$categoria['id'];?>">
                            <?=$categoria['nome'];?>
                        </option>
                        
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary" value="Cadastrar"></td>
            </tr>
            </table>
    </form>
    
<?php require_once 'rodape.php'; ?>