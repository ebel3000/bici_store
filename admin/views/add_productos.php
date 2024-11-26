<?php

$catalogo = (new Catalogo())->catalogo_completo();
$marca_id = (new Marca())->lista_completa();
?>


<div class="row -my-5">
    <div class="col">
        <h1 class="text-center mb-5">Agregar Nuevo Producto
        </h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_Producto.php" method="POST" enctype="multipart/form-data">


                <div class="col-6 mb-3">
                    <label class="form-label" for="marca_id">Marca</label>
                    <select class="form-select" name="marca_id" id="marca_id">
                        <option value="" selected disabled>Elija una opcion</option>
                        <?php foreach ($marca_id as $a) { ?>
                            <option value="<?= $a->getId() ?>"><?= $a->getNombre() ?></option>

                        <?php } ?>
                    </select>
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="modelo">Modelo</label>
                    <input type="text" class="form-control" name="modelo" id="modelo" required>
                </div>

             

                
                <div class="col-6 mb-3">
                            <label class="form-label" for="rodado">Rodado</label>
                            <select class="form-select" name="rodado" id="rodado">
                                <option value="" selected disabled>Elija una opcion</option>
                                <option>16 - peques</option>
                                <option>20 - adolescentes</option>
                                <option>24 - adultos</option>
                                <option>28 - especial</option>
                            </select>
                        </div>

                <div class="col-6 mb-3">
                            <label class="form-label" for="imagen">Imagen</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="numero">Color</label>
                    <input type="text" class="form-control" name="color" id="color" required>
                </div>



                <!--     
                        <div class="col-12 mb-3">
                            <label class="form-label" for="bajada">Bajada</label>
                            <textarea name="bajada" id="bajada" class="form-control"></textarea>
                          
                        </div>
 -->



                <div class="col-6 mb-3">
                    <label class="form-label" for="bajada">Bajada</label>
                    <input type="text" class="form-control" name="bajada" id="bajada">
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label" for="precio">Precio</label>
                    <input type="varchar" class="form-control" name="precio" id="precio">
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="destacado">Destacado</label>
                    <input type="varchar" class="form-control" name="destacado" id="destacado">
                </div>

                <button type="submit" class="btn btn-primary">Cargar Producto</button>




            </form>
        </div>
    </div>
</div>