<?php

    require_once "../../functions/autoload.php";


    $id = $_GET['id'] ?? FALSE;

    
    $bici  = (new Catalogo())->producto_x_id($id);

    try {

       if(!empty($bici->getImagen())){
             (new Imagen())->borrarImagen(__DIR__ . "/../../img/bicis/" . $bici->getImagen());
          }

          $bici->delete();

          (new Alerta()) -> add_alerta("danger", "Se ha borrado correctamente");

         
            header("Location: ../index.php?sec=admin_catalogo");
    } catch (\Exception $e) {
        die("No se pudo eliminar el catalogo".  $e);
    }

?>