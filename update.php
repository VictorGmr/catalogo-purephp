<?php

require $_SERVER['DOCUMENT_ROOT']."models/produto.php";

$request = $_POST;

Produto::update($request);

header('Location: /views/catalogo/index.php');