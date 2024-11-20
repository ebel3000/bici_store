<?php


$miObjetoBici = new Catalogo();
$productos = $miObjetoBici->catalogo_completo();



?>
<div class="mt-5 mb-2">
<h1 class="text-center fw-bold display-4" >Catálogo</h1>
</div>

<div class="mt-4 mb-5 border border-4 border-success rounded-5" id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php 
        $imagenes = [
            'BiciStore_cover4.jpeg',
            'BiciStore_cover3.jpeg',
            'bicistore_header1.jpeg',
            'bicistore_header2.jpg'
        ];
        
        foreach ($imagenes as $index => $imagen) {
            $activeClass = ($index === 0) ? 'active' : ''; // La primera imagen será activa
            echo "<div class='carousel-item $activeClass'>";
            echo "<img src='img/$imagen' class='rounded-5 d-block w-100' alt='Imagen de bicicletas'>";
            echo "</div>";
        }
        ?>
    </div>
</div>


<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $bici) { ?>
    
    <div class="col-3">
        <div class="card border border-2 border-success rounded-5 mb-3">
            <img src="img/bicis/<?=$bici->getImagen()?>" class="card-img-top rounded-5" alt="">
            <div class="card-body" style="height:125px; overflow: hidden;">
                <p class="fs-6 m-0 fw-bold text-success"><?=$bici->getMarca()?> Modelo <?=$bici->getModelo()?></p>
                <p class="card-text"><?=mb_substr($bici->getBajada(), 0 , 30)?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Rodado <?=$bici->getRodado()?></li>
                <li class="list-group-item">Color <?=$bici->getColor()?></li>
            </ul>
            <div class="card-body" style="height:125px; overflow: hidden;">
                <p class="fs-3 mb-3 fw-bold text-success"><?=$bici->getPrecio()?></p>
                <a href="index.php?sec=producto&id=<?=$bici->getId()?>" class="btn btn-outline-success btn-sm w-50 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mt-3 mb-5">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>