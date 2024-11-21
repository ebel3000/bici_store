<?php

$marcaId = $_GET['mar'] ?? FALSE;

$miObjetobici = new Catalogo();

$productos = $miObjetobici->catalogo_x_marca($marcaId);

?>

<h1 class="text-center my-5 display-4 fw-bold" >Catálogo por <?=  $titulo ?> </h1>

<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $bici) { ?>
    
    <div class="col-3">
        <div class="card border-3 border border-success rounded-5 mb-3">
            <img src="img/bicis/<?=$bici->getImagen()?>" class="card-img-top rounded-5" alt="">
            <div class="card-body" style="height:125px; overflow: hidden;">
                <p class="fs-6 m-0 fw-bold text-success"><?=$bici->getNombre()?> Modelo <?=$bici->getModelo()?></p>
                <p class="card-text"><?=mb_substr($bici->getBajada(), 0 , 30)?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Rodado <?=$bici->getRodado()?></li>
                <li class="list-group-item">Color <?=$bici->getColor()?></li>
            </ul>
            <div class="card-body" style="height:125px; overflow: hidden;">
                <p class="fs-3 mb-3 fw-bold text-success"><?=$bici->getPrecio()?></p>
                <a href="index.php?sec=producto&id=<?=$bici->getId()?>" class="btn btn-outline-success btn-sm w-50 rounded-5 fw-bold" >VER MÁS</a>
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