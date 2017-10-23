<?php

require_once 'Produto.php';

$produto = new Produto;

$produto->setNome('Anderson');

echo $produto->getNome();