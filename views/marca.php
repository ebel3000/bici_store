<?php
    $marca_id = $_GET['id'] ?? FALSE;


$miObjetobici = new Catalogo();

$productos = $miObjetobici->catalogo_x_marca($marca_id);

$Titulomarca = (new Marca())->get_x_id($marca_id);



?>

<div class="m-5">
<h1 class="text-center fw-bold display-4">Catálogo por <?= $Titulomarca->getNombre()?></h1>
</div>

<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $bici) { ?>
    
    <div class="col-3">
        <div class="card border border-2 border-success rounded-5 mb-3">
            <img src="img/bicis/<?=$bici->getImagen()?>" class="card-img-top rounded-5" alt="">
            <div class="card-body" style="height:125px; overflow: hidden;">
                <p class="fs-6 m-0 fw-bold text-success"><?=$bici-> getproductosMarca()?> Modelo <?=$bici->getModelo()?></p>
                <p class="card-text"><?=mb_substr($bici->getBajada(), 0 , 20)?>...</p>            
                <a href="index.php?sec=producto&id=<?=$bici->getId()?>" class="btn rounded rounded-pill btn-outline-success btn-sm w-50 fw-bold" >VER MÁS</a>
                </div>
            </div>

        </div>
 

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mt-3 mb-3">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>