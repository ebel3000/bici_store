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
    $catalogo= [];
    
   $conexion = (new Conexion())->getConexion();

   $query = "SELECT * FROM comics";

   $PDOStatment = $conexion->prepare($query);

   $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
   $PDOStatment->execute();

   $catalogo = $PDOStatment->fetchAll();

   return $catalogo;

}




  // Devuelve el catalogo de productos de un personaje en particular 
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

    $query = "SELECT * FROM comics WHERE id = :idProducto";

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