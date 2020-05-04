<?php 
require $_SERVER['DOCUMENT_ROOT']."models/user.php";

User::logout();

header('Location: /index.php');