<?php

require_once "../../functions/autoload.php";

(new Autenticacion())->log_out();

(new Alerta()) -> add_alerta("secondary", "Se ha deslogueado correctamente");


header("Location: ../index.php?sec=login");

?>