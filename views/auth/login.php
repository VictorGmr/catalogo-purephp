<?php require $_SERVER['DOCUMENT_ROOT']."/views/layouts/header.php"?>

<div class="card" style="padding: 30px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
    <h2 style="margin-bottom: 20px;">Login</h2>
    <form action="/AuthController/auth.php" method="POST">
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>
        
        <div class="form-group">
            <label for="senha">Password:</label>
            <input class="form-control" type="password" name="senha" id="senha" required>
        </div>


        <button class="btn btn-primary" type="submit">Login</button>
        <a href="/views/catalogo/index.php"><button type="button" class="btn btn-primary">Back</button></a>
    </form>
</div>

</body>
</html>