<?php

    $id = $_GET['id'] ?? FALSE;

    $bici  = (new Catalogo())->producto_x_id($id);

?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Está seguro que desea eliminar el producto? <?= $bici->getModelo() ?></h1>

        <a href="actions/delete_Producto.php?id=<?= $bici->getId() ?>" class="btn btn-danger d-block">Eliminar</a>


</div>