<?php
require_once 'conecta.php';

function listaProdutos($conexao) {
    $produtos = array();
    $query = "SELECT p.*, c.nome as categoria_nome 
              FROM produtos p JOIN categorias c
              WHERE p.categoria_id = c.id";

    $result = mysqli_query($conexao, $query);

    while($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

function selecionaUmProduto($conexao, $id) {
    $query = "SELECT * FROM produtos where id = {$id}";
    $result = mysqli_query($conexao, $query);
    $p = array();

    return mysqli_fetch_assoc($result);
        
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "INSERT INTO produtos (nome, valor, descricao, categoria_id, usado) VALUES('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
    //echo $query;
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id) {
    $query = "DELETE FROM produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function editaProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "UPDATE produtos SET nome = '{$nome}', valor = {$preco}, descricao = '{$descricao}', 
              categoria_id = {$categoria_id}, usado = {$usado} WHERE id = {$id}";
    //echo $query;
    return mysqli_query($conexao, $query);
}
