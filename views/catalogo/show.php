<?php require $_SERVER['DOCUMENT_ROOT']."/views/layouts/header.php"?>
<?php require $_SERVER['DOCUMENT_ROOT']."models/produto.php"?>

    <div class="card" style="text-align:center; padding-bottom:20px;">
        
        <h1><?php echo Produto::selectById($_GET['id'])['nome']; ?></h1>
        <p>Name of the product: <?php echo Produto::selectById($_GET['id'])['nome']; ?></p>
        <p>Price of the product: R$<?php echo Produto::selectById($_GET['id'])['preco']; ?></p>
        <!--@if(file_exists('./img/produtos/'.md5($produto->id)))
            <div>
                <img src="{{asset('img/produtos/'.md5($produto->id))}}" width="500" height="500">
            </div>
        @else-->
            <div>
                <img src="/img/no-image.png" width="500" height="500">
            </div>
        <!--@endif-->
        

        <!--@if(Auth::check())-->
            <div>

                <a style="display:inline-block;" href="/views/catalogo/edit.php?id=<?php echo $_GET['id'];?>"><button class="btn btn-primary">Edit</button></a>
                
                <form style="display:inline-block;" action="/destroy.php" method="POST">
                    <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>

                <a style="display:inline-block;" href="javascript:history.back()"><button class="btn btn-primary">Back</button></a>
            </div>
        </div>
            
        <!--@else
        <div style="text-align:center;">
            <a href="javascript:history.back()"><button type="button" class="btn btn-primary">Back</button></a>
        </div>
            
        @endif-->
    </div>
