<?php

class categoriaProducto{

  private $id;
  private $cat_nombre;
  private $db;

  public function __construct()
  {
    $this->db = dataBase::conexion();
  }

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
   * Get the value of cat_nombre
   */ 
  public function getCat_nombre()
  {
    return $this->cat_nombre;
  }

  /**
   * Set the value of cat_nombre
   *
   * @return  self
   */ 
  public function setCat_nombre($cat_nombre)
  {
    $this->cat_nombre = $cat_nombre;

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

  public function getAllCategorias(){

    $sql =  "SELECT * FROM categorias";
    $allCategorrias =  $this->db->query($sql);

    return $allCategorrias;
  }

  public function getBannerCategoria($idcategoria){
    $sql = "SELECT img_banner AS banner FROM categorias WHERE id = {$idcategoria}";
    $banner =  $this->db->query($sql)->fetch_object()->banner;
    return $banner;
  }
}

?>