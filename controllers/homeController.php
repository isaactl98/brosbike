<?php
require_once 'models/productos.php';
require_once 'models/categoriaProducto.php';

class homeController
{

    public function index()
    {
        require_once 'views/home/home.php';
    }
    // MODULO DE CATEGORIA DE PRODUCTOS
    public function shopBrosBike()
    {
        $allProductos =  new Productos();
        //VALIDACION DE LA CATEGORIA SOLICITADA
        if (isset($_GET['idcategoriaProducto']) && $_GET['idcategoriaProducto'] != 1) {
            
            $idcategoriaProducto = $_GET['idcategoriaProducto'];
            $productos =  $allProductos->getAllProductosActivosByCategoria($idcategoriaProducto);
            $totalproductos =  $productos->num_rows;
            $banner =  new categoriaProducto();
            $img_banner =  $banner->getBannerCategoria($idcategoriaProducto);
            
            require_once 'views/shop/index.php';
        } else {

            $idcategoriaProducto = 1;
            $productos =  $allProductos->getAllProductosActivosByCategoria($idcategoriaProducto);
            $totalproductos =  $productos->num_rows;
            $banner =  new categoriaProducto();
            $img_banner =  $banner->getBannerCategoria($idcategoriaProducto);
            require_once 'views/shop/index.php';
        }
    }

    public function detalleProducto()
    {
        if (isset($_GET['prod'])) {
            $idprod =  $_GET['prod'];
            $infoProductoById =  new Productos();
            $infoProductoById->setId($idprod);
            $infoProducto = $infoProductoById->getAllInfoPorductoById();

            require_once 'views/shop/detalleproducto.php';
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
?>