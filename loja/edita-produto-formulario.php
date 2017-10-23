<?php require_once 'cabecalho.php'; 
    require_once 'funcoes/conecta.php';
    require_once 'funcoes/banco-categoria.php';
    require_once 'funcoes/banco-produto.php';

    $id = $_GET['id'];

    $produto = selecionaUmProduto($conexao, $id);
    $categorias = listaCategorias($conexao);
    
    $usado = $produto['usado'] ? "checked='checked'" : "";
?>
    
    <h1>Editando os dados do produto</h1>
    <form action="edita-produto.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <table class="table">
            <tr>
                <td>Nome:</td>   
                <td><input type="text" class="form-control" name="nome" value="<?=$produto['nome']?>"></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input type="number" class="form-control" name="preco" value="<?=$produto['valor']?>"></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea class="form-control" name="descricao" value="descricao"><?=$produto['descricao']?>
                </textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" <?=$usado?> name="usado" value="true"> Usado</td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                    <?php 
                    foreach($categorias as $categoria) : 
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                        <option value="<?=$categoria['id'];?>" <?=$selecao?>>
                            <?=$categoria['nome'];?>
                        </option>
                        
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary" value="Editar"></td>
            </tr>
            </table>
    </form>
    
<?php require_once 'rodape.php'; ?>