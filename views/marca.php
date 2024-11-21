<?php
    $marca_id = $_GET['id'] ?? FALSE;


$miObjetobici = new Catalogo();

$productos = $miObjetobici->catalogo_x_marca($marca_id);

$Titulomarca = (new Marca())->get_x_id($marca_id);



?>

<h1 class="text-center my-5 display-4 fw-bold" >Catálogo por <?= $Titulomarca->getNombre()?> </h1>

<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $bici) { ?>
    
    <div class="col-3">
        <div class="card border-3 border border-success rounded-5 mb-3">
            <img src="img/bicis/<?=$bici->getImagen()?>" class="card-img-top rounded-5" alt="">
            <div class="card-body" style="height:125px; overflow: hidden;">
                <p class="fs-6 m-0 fw-bold text-success"><?=$bici-> getproductosMarca()?> Modelo <?=$bici->getModelo()?></p>
                <p class="card-text">ver</p>
            </div>
                <a href="index.php?sec=producto&id=<?=$bici->getId()?>" class="btn btn-outline-success btn-sm w-50 rounded-5 fw-bold" >VER MÁS</a>
            </div>

        </div>
 

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mt-3 mb-3">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>