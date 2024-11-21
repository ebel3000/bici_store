<?php

$id = $_GET['id'] ?? FALSE;

$miObjetoBici = new Catalogo();
$bici = $miObjetoBici->producto_x_id($id);


?>


<?php if (isset($bici)) { ?>

    <div class="mt-4 mb-4"><h1 class="text-center fw-bold display-4">Bicicleta <span class=fw-light> <?=$bici->getproductosMarca()?> </span></h1> </div>
       <h2 class= "text-center mb-5">Modelo <span class=fw-light> <?=$bici->getModelo()?>  </span> </h2>  

    <div class="col">
        <div class="my-5">
            <div class="row g-5">
                <div class="col-6">
                    <img class="img-fluid border border-4 border-success rounded-5" src="img/bicis/<?=$bici->getImagen()?>" alt="">
                </div>
                    <div class="col-6">

                    <div class="card-body" style="height:125px; overflow: hidden;">
                        <p class="fs-2 m-0 fw-bold">Bicicleta: <?=$bici->getproductosMarca()?></p>
                        <p class="card-text"><?=$bici->getBajada()?></p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Rodado: <?=$bici->getRodado()?></li>
                        <li class="list-group-item list-group-item-success mb-4">Color: <?=$bici->getColor()?></li>
                    </ul>
                    <div class="card-body" style="height:225px; overflow: hidden;">
                        <p class="fs-2 mb-3 fw-bold text-success text-start"><?=$bici->getPrecio()?></p>
                        <a href="index.php?sec=producto&id=<?=$bici->getId()?> " class="btn btn-outline-success btn-sm w-150 rounded-5 fw-bold">COMPRAR</a>
                    </div>

                    </div>
            
                
            </div>
        </div>
    </div>

<?php } else { ?>
    <div class="col-12">
        <h2 class="text-center text-danger mt-5 mb-5">No se encontraron Productos</h2>
    </div>
<?php } ?>
</div>