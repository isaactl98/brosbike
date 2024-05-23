<?php

class Productos{

private $id;
private $categoria_id;
private $prod_nombre;
private $prod_descripcion;
private $prod_precio;
private $stock;
private $oferta;
private $precio_oferta;
private $is_b2b;
private $cant_b2b;
private $precio_b2b;
private $status;
private $prod_img;
private $fecha;
private $db;

  

/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}

/**
 * Get the value of categoria_id
 */ 
public function getCategoria_id()
{
return $this->categoria_id;
}

/**
 * Set the value of categoria_id
 *
 * @return  self
 */ 
public function setCategoria_id($categoria_id)
{
$this->categoria_id = $categoria_id;

return $this;
}

/**
 * Get the value of prod_nombre
 */ 
public function getProd_nombre()
{
return $this->prod_nombre;
}

/**
 * Set the value of prod_nombre
 *
 * @return  self
 */ 
public function setProd_nombre($prod_nombre)
{
$this->prod_nombre = $prod_nombre;

return $this;
}

/**
 * Get the value of prod_descripcion
 */ 
public function getProd_descripcion()
{
return $this->prod_descripcion;
}

/**
 * Set the value of prod_descripcion
 *
 * @return  self
 */ 
public function setProd_descripcion($prod_descripcion)
{
$this->prod_descripcion = $prod_descripcion;

return $this;
}

/**
 * Get the value of prod_precio
 */ 
public function getProd_precio()
{
return $this->prod_precio;
}

/**
 * Set the value of prod_precio
 *
 * @return  self
 */ 
public function setProd_precio($prod_precio)
{
$this->prod_precio = $prod_precio;

return $this;
}

/**
 * Get the value of stock
 */ 
public function getStock()
{
return $this->stock;
}

/**
 * Set the value of stock
 *
 * @return  self
 */ 
public function setStock($stock)
{
$this->stock = $stock;

return $this;
}

/**
 * Get the value of oferta
 */ 
public function getOferta()
{
return $this->oferta;
}

/**
 * Set the value of oferta
 *
 * @return  self
 */ 
public function setOferta($oferta)
{
$this->oferta = $oferta;

return $this;
}

/**
 * Get the value of precio_oferta
 */ 
public function getPrecio_oferta()
{
return $this->precio_oferta;
}

/**
 * Set the value of precio_oferta
 *
 * @return  self
 */ 
public function setPrecio_oferta($precio_oferta)
{
$this->precio_oferta = $precio_oferta;

return $this;
}

/**
 * Get the value of is_b2b
 */ 
public function getIs_b2b()
{
return $this->is_b2b;
}

/**
 * Set the value of is_b2b
 *
 * @return  self
 */ 
public function setIs_b2b($is_b2b)
{
$this->is_b2b = $is_b2b;

return $this;
}

/**
 * Get the value of cant_b2b
 */ 
public function getCant_b2b()
{
return $this->cant_b2b;
}

/**
 * Set the value of cant_b2b
 *
 * @return  self
 */ 
public function setCant_b2b($cant_b2b)
{
$this->cant_b2b = $cant_b2b;

return $this;
}

/**
 * Get the value of precio_b2b
 */ 
public function getPrecio_b2b()
{
return $this->precio_b2b;
}

/**
 * Set the value of precio_b2b
 *
 * @return  self
 */ 
public function setPrecio_b2b($precio_b2b)
{
$this->precio_b2b = $precio_b2b;

return $this;
}

/**
 * Get the value of status
 */ 
public function getStatus()
{
return $this->status;
}

/**
 * Set the value of status
 *
 * @return  self
 */ 
public function setStatus($status)
{
$this->status = $status;

return $this;
}

/**
 * Get the value of prod_img
 */ 
public function getProd_img()
{
return $this->prod_img;
}

/**
 * Set the value of prod_img
 *
 * @return  self
 */ 
public function setProd_img($prod_img)
{
$this->prod_img = $prod_img;

return $this;
}

/**
 * Get the value of fecha
 */ 
public function getFecha()
{
return $this->fecha;
}

/**
 * Set the value of fecha
 *
 * @return  self
 */ 
public function setFecha($fecha)
{
$this->fecha = $fecha;

return $this;
}

/**
 * Get the value of db
 */ 
public function getDb()
{
return $this->db;
}

/**
 * Set the value of db
 *
 * @return  self
 */ 
public function setDb($db)
{
$this->db = $db;

return $this;
}

public function __construct()
{
  $this->db =  dataBase::conexion();
}


public function getAllProductosActivos(){

  $sql =  "SELECT * FROM productos WHERE status =  1;";
  $allProductosActivos  =  $this->db->query($sql);
  return $allProductosActivos;
}
public function getAllProductosActivosByCategoria($idcategoria){
  $sql =  "SELECT * FROM productos WHERE categoria_id = {$idcategoria} AND status =  1;";
  $allProductosActivosByCategoria  =  $this->db->query($sql);
  return $allProductosActivosByCategoria;
}

public function getAllInfoPorductoById(){
  $sql = "SELECT * FROM productos WHERE id =  {$this->getId()};";
  $infoProducto =  $this->db->query($sql);

  return $infoProducto->fetch_object();
}
}

?>

