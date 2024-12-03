<?php

$id = $_GET['id'] ?? false;

$bici = (new Catalogo())->producto_x_id($id);

$marca_id = (new Marca())->lista_completa();

?>

<div>
                <?= (new Alerta())->get_alertas() ?>
            </div>
            
<div class="row m-5">
    <div class="col">
        <h1 class="text-center mb-5">Editar Producto</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_Producto.php?id=<?= $bici->getId() ?>" method="POST" enctype="multipart/form-data">

                <div class="col-6 mb-3">
                    <label class="form-label" for="marca_id">Marca</label>
                    <select class="form-select" name="marca_id" id="marca_id">
                        <option value="" selected disabled>Elija una opcion</option>
                        <?php foreach ($marca_id as $a) { ?>
                            <option value="<?= $a->getId() ?>" <?= $a->getId() == $bici->getMarca_id() ? "selected" : ""   ?>><?= $a->getNombre() ?></option>

                        <?php } ?>
                    </select>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="modelo">Modelo</label>
                    <input type="text" class="form-control" name="modelo" id="modelo" value="<?= $bici->getModelo() ?>" required>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="rodado">Rodado</label>
                    <input type="text" class="form-control" name="rodado" id="rodado" value="<?= $bici->getRodado() ?>" required>

                </div>


                <div class="col-6 mb-3">
                    <label class="form-label" for="numero">Color</label>
                    <input type="text" class="form-control" name="color" id="color" value="<?= $bici->getColor() ?>" required>
                </div>

                <div class="col-2 mb-3">
                    <label class="form-label" for="imagen">Imagen Actual:</label>
                    <img width="150px" class="rounded" src="../img/bicis/<?= $bici->getImagen() ?>" alt="" class="img-fluid">
                    <input type="hidden" class="form-control" name="imagen_og" id="imagen_og" value="<?= $bici->getImagen() ?>">
                </div>


                <div class="col-6 mb-3">
                    <label class="form-label" for="imagen">Reemplazar Imagen</label>
                    <input type="file" class="form-control" name="imagen" id="imagen">
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label" for="bajada">Bajada</label>
                    <textarea name="bajada" id="bajada" class="form-control"><?= $bici->getBajada() ?></textarea>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="precio">Precio</label>
                    <input type="varchar" class="form-control" name="precio" id="precio" value="<?= $bici->getPrecio() ?>" required>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="destacado">Destacado</label>
                    <input type="varchar" class="form-control" name="destacado" id="destacado" value="<?= $bici->getDestacado() ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Editar Producto</button>

            </form>
        </div>
    </div>
</div>