<?php
require_once 'conecta.php';

function listaCategorias($conexao) {
    $categorias = array();
    $query = "SELECT * from categorias";
    $result = mysqli_query($conexao, $query);
    
    while($categoria = mysqli_fetch_assoc($result)) {
        array_push($categorias, $categoria);
    }

    return $categorias;
}