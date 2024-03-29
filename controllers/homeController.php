<?php 
require_once 'models/productos.php';
require_once 'models/categoriaProducto.php';

class homeController
{

    public function index()
    {
        require_once 'views/home/home.php';
    }
    public function shopBrosBike()
    {

        $allProductos =  new Productos();
        $productos =  $allProductos->getAllProductosActivos();
        $banner =  new categoriaProducto();


        $totalproductos =  $productos->num_rows;

        //VALIDACION DE LA CATEGORIA SOLICITADA
        if (isset($_GET['idcategoriaProducto'])) {
            $idcategoriaProducto = $_GET['idcategoriaProducto'];

            require_once 'views/shop/index.php';
        } else {
            $idcategoriaProducto = 1;
            $img_banner =  $banner->getBannerCategoria($idcategoriaProducto);
            require_once 'views/shop/index.php';
        }
    }
    public function servicios()
    {
    }
    public function gripFox()
    {
    }
    public function contacto()
    {
    }
}
