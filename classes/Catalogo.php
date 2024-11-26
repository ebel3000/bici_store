<?php

class Catalogo {

//Atributos

protected $id;
protected $marca_id;
protected $modelo;
protected $rodado;
protected $color;
protected $bajada;
protected $precio;
protected $imagen;
protected $destacado;

//Metodos


// Devuelve el catologo Completo
public function catalogo_completo(): array {
   $catalogo = [];
    
   $conexion = (new Conexion())->getConexion();

   $query = "SELECT * FROM catalogo";

   $PDOStatment = $conexion->prepare($query);

   $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
   $PDOStatment->execute();

   $catalogo = $PDOStatment->fetchAll();

   return $catalogo;

}




  // Devuelve el catalogo de productos de una marca en particular 
  public function catalogo_x_marca(int $marca_id) {
    $catalogo= [];
        
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM catalogo WHERE marca_id = $marca_id";

    $PDOStatment = $conexion->prepare($query);

    $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatment->execute();

    $catalogo = $PDOStatment->fetchAll();

    return $catalogo;  
}

public function producto_x_id(int $idProducto){

    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM catalogo WHERE id = :idProducto";

    $PDOStatment = $conexion->prepare($query);

    $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatment->execute(
        [
            'idProducto' => $idProducto
        ]
    );

    $resultado = $PDOStatment->fetch();

    if(!$resultado){
        return null;
    }

    return $resultado;


}


//Devuelve los productos destacados

public function destacado() {
    $conexion = (new Conexion())->getConexion();
    $query = "SELECT * FROM catalogo WHERE destacado = 1";
    $PDOStatment = $conexion->prepare($query);
    $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatment->execute();

    $resultado = $PDOStatment->fetchAll();
    
    // Devolvemos un array vacío si no hay resultados
    return $resultado;
}


// Devuelve el nombre de un producto y su modelo

/* public function getTitulo($aliasPrimero = false)
{

    if ($aliasPrimero) {
        $result = "$this->nombre ($this->nombre)";
    } else {
        $result = "$this->nombre ($this->alias)";
    }

    return $result;
}

 */



  //Metodos
        /* Metodo para insertar un nuevo Comic en la BD */

        public function insert($marca_id, $modelo, $rodado, $color, $bajada, $precio, $destacado, $id)
         {

        $conexion = (new Conexion())->getConexion();

        $query = "INSERT INTO catalogo VALUES(null, :marca_id, :modelo, :rodado, :color, :bajada, :precio, :destacado)";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->execute(
            [
                'id' => $id,
               'marca_id' => $marca_id,
               'modelo' => $modelo,
               'rodado' => $rodado,
               'color' => $color,
               'bajada' => $bajada,
               'precio' => $precio,
               'destacado' => $destacado
         ]
        );
    }


    
/* Editar un comic */

public function edit($marca_id, $modelo, $rodado, $color, $bajada, $precio, $destacado, $id)
{

$conexion = (new Conexion())->getConexion();

$query = "UPDATE catalogo SET 
        marca_id = :marca_id,
        modelo = :modelo,
        rodado = :rodado,
        color = :color,
        bajada = :bajada,
        precio = :precio,
        destacado = :destacado
        WHERE id = :id
";

$PDOStatment = $conexion->prepare($query);

$PDOStatment->execute(
   [
        'id' => $id,
       'marca_id' => $marca_id,
       'modelo' => $modelo,
       'rodado' => $rodado,
       'color' => $color,
       'bajada' => $bajada,
       'precio' => $precio,
       'destacado' => $destacado
 ]
);
}

  public function reemplazar_imagen($imagen, $id)
    {

        $conexion = (new Conexion())->getConexion();

        $query = "UPDATE catalogo SET imagen = :imagen WHERE id = :id";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->execute(
            [
                'id' => $id,
                'imagen' => $imagen
                
            ]
        );
    }

    /* Borrar Comic  */

    public function delete() {
        $conexion = (new Conexion())->getConexion();

        $query = "DELETE FROM catalogo WHERE id  = ?";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->execute([$this->id]);
    }

    



     

 

 public function getproductosMarca(){
    $marca_id = (new Marca())->get_x_id($this->marca_id);
    $nombre = $marca_id->getNombre();
    return $nombre;
  }
/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Get the value of marca_id
 */ 
public function getMarca_id()
{
return $this->marca_id;
}

/**
 * Get the value of modelo
 */ 
public function getModelo()
{
return $this->modelo;
}

/**
 * Get the value of rodado
 */ 
public function getRodado()
{
return $this->rodado;
}

/**
 * Get the value of color
 */ 
public function getColor()
{
return $this->color;
}

/**
 * Get the value of bajada
 */ 
public function getBajada()
{
return $this->bajada;
}

/**
 * Get the value of precio
 */ 
public function getPrecio()
{
return $this->precio;
}

/**
 * Get the value of imagen
 */ 
public function getImagen()
{
return $this->imagen;
}

/**
 * Get the value of destacado
 */ 
public function getDestacado()
{
return $this->destacado;
}
}



?>