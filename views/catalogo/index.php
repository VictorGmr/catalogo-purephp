<?php require $_SERVER['DOCUMENT_ROOT']."/views/layouts/header.php"?>
<?php require $_SERVER['DOCUMENT_ROOT']."models/produto.php"?>

<div style="width:80%; margin:auto; margin-top: 20px;overflow:hidden;">
    <h1>Products</h1>

    <form style="margin-bottom: 20px;" action="/catalogo/buscar" method="POST">
        <div class="input-group">
            <!--@if($busca == null)-->
                <input style="margin-right: 10px;" type="text" class="form-control" name="busca" placeholder="Search">
            <!--@else
                <input style="margin-right: 10px;" type="text" class="form-control" name="busca" value="{{$busca}}">
            @endif-->
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
        
    </form>

    <div style="text-align:center;">
        <!--@if($produto->count() == 0)
            @if($busca == null)
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h4 class="display-4">There are no products currently registered.</h4>
                    </div>
                </div>
            @else
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h4 class="display-4">No results for your search were found.</h4>
                    </div>
                </div>
            @endif
        @endif-->

        <?php 
            foreach(Produto::selectAll() as $prod){
                echo "<div class='card' style='margin-right: 10px; margin-bottom: 10px; padding: 20px;display:inline-block;'><a href='/views/catalogo/show.php?id=".$prod['id']."'><img width='300' height='300' src='/img/no-image.png'></a><br />".$prod['nome']."</div>";
            }
        ?>


        <!--@foreach($produto as $prod)
            @if(file_exists('./img/produtos/'.md5($prod->id)))
                <div class="card" style="margin-bottom:10px; padding: 20px; display:inline-block;"><a href="/catalogo/{{$prod->id}}"><img width="300" height="300" src="{{asset('img/produtos/'.md5($prod->id))}}"></a><br />{{$prod->nome}}</div>   
            @else
                <div class="card" style="margin-bottom: 10px; padding: 20px;display:inline-block;"><a href="/catalogo/{{$prod->id}}"><img width="300" height="300" src="{{asset('img/no-image.png')}}"></a><br />{{$prod->nome}}</div>
            @endif 
        @endforeach-->
        
    </div>



    <div>
        <div style="margin-bottom: 10px">
            <?php 
            session_start();
            if($_SESSION["loggedin"] == true){
                echo '<a href="/views/catalogo/create.php"><button class="btn btn-primary">Add</button></a>';
            }
            ?>
        </div>

        <div style="display:inline-block">
            <!--{{$produto->links()}}-->
        </div>
    </div>
</div>

</body>
</html>

