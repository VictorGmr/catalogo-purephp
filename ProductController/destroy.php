<?php

require $_SERVER['DOCUMENT_ROOT']."models/produto.php";

Produto::delete($_POST['id']);

header('Location: /views/catalogo/index.php');