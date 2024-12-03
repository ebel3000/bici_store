<?php
class Alerta{
    
    //MEtodo 1: registra alerta ene l sistema guardandolo en la session
    //esta alerta va a tener el tipo (color). Y el mensaje (contenido).


    public function add_alerta(string $tipo, string $mensaje){
        $_SESSION['alertas'][] = [
            'tipo' => $tipo,
            'mensaje' => $mensaje
        ];
    }

    //Metodo 2: vaciar la lista de alertas

public function clear_alertas(){
    $_SESSION['alertas'] = [];

}

    //Metodo 3: Mostrar alerta

public function get_alertas(){
    if(!empty ($_SESSION['alertas'])){
        $alertasActuales = "";

        foreach ($_SESSION['alertas'] as $alerta) {
            $alertasActuales =$this->print_alerta($alerta);
    } {}
    $this->clear_alertas();
    return $alertasActuales;
}else{
return null;

}
}

/* <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> */

    //Metodo 4: Crear alerta

    public function print_alerta($alerta){
        $html = "<div class='alert alert-{$alerta['tipo']} alert-dismissible fade show' role='alert'>";
        $html .= $alerta['mensaje'];
        $html .= "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        $html .= " </div>";

        return $html;
    }

}


?>