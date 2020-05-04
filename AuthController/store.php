<?php 
require $_SERVER['DOCUMENT_ROOT']."models/user.php";

$user = new User($_POST['nome'], $_POST['email'], $_POST['senha']);

$user->register();

header('Location: /views/catalogo/index.php');