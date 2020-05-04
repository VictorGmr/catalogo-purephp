<?php

require $_SERVER['DOCUMENT_ROOT']."models/produto.php";

$produto = new Produto($_POST['nome'], $_POST['preco']);

$produto->insert();

header('Location: /views/catalogo/index.php');