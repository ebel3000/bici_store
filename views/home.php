<?php
$miObjetoBici = new Catalogo();
$productos = $miObjetoBici->destacado();
?>

<div class="mt-5 mb-2">
    <h1 class="text-center fw-bold display-4">Tienda Online de bicicletas</h1>
</div>

<div class="mt-4 border border-4 border-success rounded-5" id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        $imagenes = [
            'BiciStore_cover1.jpeg',
            'BiciStore_cover2.jpeg',
            'BiciStore_cover3.jpeg',
            'BiciStore_cover4.jpeg'
        ];

        foreach ($imagenes as $index => $imagen) {
            $activeClass = $index === 0 ? 'active' : ''; // La primera imagen será activa
            echo "<div class='carousel-item $activeClass'>";
            echo "<img src='img/$imagen' class='rounded-5 d-block w-100' alt='imagen con bici'>";
            echo "</div>";
        }
        ?>
    </div>
</div>


<div class="mt-5 mb-3">
    <h1 class="text-center display-1">¡Últimos ingresos!</h1>
</div>

<div class="row">


    <?php foreach ($productos as $bici) { ?>

        <div class="col-3 mt-4 mb-5">
            <div class="card mb-3 rounded-5 border border-success border-2">
                <img src="img/bicis/<?= $bici->getImagen() ?>" class="card-img-top rounded-5" alt="">
                <div class="card-body" style="height:125px; overflow: hidden;">
                    <p class="fs-6 m-0 fw-bold text-primary"><?= $bici->getproductosMarca()?> Modelo <?= $bici->getModelo() ?></p>
                    <p class="card-text"><?= mb_substr($bici->getBajada(), 0, 30) ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Rodado <?= $bici->getRodado() ?></li>
                    <li class="list-group-item">Color <?= $bici->getColor() ?></li>

                </ul>
                <div class="card-body">
                    <p class="fs-3 mb-3 fw-bold text-success text-center"><?= $bici->getPrecio() ?></p>
                    <a href="index.php?sec=producto&id=<?= $bici->getId() ?>" class="btn btn-dark w-100 fw-bold rounded-5" aria-label="Ver más detalles del producto <?= $bici->getproductosMarca() ?> <?= $bici->getModelo() ?>">
                        VER MÁS
                    </a>

                </div>

            </div>
        </div>

    <?php } ?>