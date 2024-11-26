<?php
$bici = (new Catalogo())->catalogo_completo();

/* echo "<pre>";
    print_r($personaje);
    echo "</pre>"; */

?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de Catálogo</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="15%">Imagen</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Rodado</th>
                        <th scope="col">Color</th>
                        <th scope="col">Bajada</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Destacado</th>
                    </tr>
                </thead>
                <tbody>

                <?php  foreach($bici as $c){  ?>

                    <tr>
                        <td><img src="../img/bicis/<?=  $c->getImagen() ?>" class="img-fluid rounded" alt=""></td>
                        <th scope="row"><?=  $c->getproductosMarca() ?></th>
                        <td><?=  $c->getModelo() ?></td>
                        <td><?=  $c->getRodado() ?></td>
                        <td><?=  $c->getColor() ?></td>
                        <td><?=  $c->getBajada() ?></td>
                        <td><?=  $c->getPrecio() ?></td>
                        <td><?=  $c->getDestacado() ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?sec=edit_productos&id=<?= $c->getId() ?>">Editar</a>

                            <a class="btn btn-danger mt-2" href="index.php?sec=delete_productos&id=<?= $c->getId() ?>">Eliminar</a>
                        </td>
                    </tr>

                <?php  } ?>   
                    
                </tbody>
            </table>

            <a class="btn btn-primary mt-5" href="index.php?sec=add_productos">Cargar Nuevo Producto</a>

        </div>
    </div>

</div>