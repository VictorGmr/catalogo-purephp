<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Catalogo PurePHP</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/index.php">CatalogoPurePHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/views/catalogo/index.php">Products</a>
                </li>
                
                
                
            </ul>

            <ul class="navbar-nav ml-auto">
                <?php 
                    session_start(); 
                    
                    if($_SESSION["loggedin"] == false){
                        echo 
                            '<li class="nav-item">
                                <a class="nav-link" href="/views/auth/login.php">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/views/auth/register.php">Register</a>
                            </li>';
                    }else{

                        echo 
                            '<li class="nav-item">
                                <p style="margin-right:20px;" class="nav navbar-text">Welcome, '.$_SESSION["nome"].'</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/AuthController/logout.php">Logout</a>
                            </li>';
                    }
    
                    ?>
            </ul>
        </div>
    </nav>
    
