<?php 
require $_SERVER['DOCUMENT_ROOT']."models/user.php";

$request = $_POST;

if(User::auth($request)){
    header('Location: /views/catalogo/index.php');
}else{
    echo '<script type="text/javascript">alert("Invalid Credentials!"); window.location.href="../views/auth/login.php";</script>';
}

