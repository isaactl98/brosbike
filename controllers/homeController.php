<?php require_once 'models/productos.php';

class homeController
{

    public function index()
    {
        require_once 'views/home/home.php';
    }
    public function shopBrosBike(){

        $allProductos =  new Productos();
        $productos =  $allProductos->getAllProductosActivos();

        $totalproductos =  $productos->num_rows;

        if (isset($_GET['idcategoriaProducto'])) {
            $idcategoriaProducto = $_GET['idcategoriaProducto'];
            
            require_once 'views/shop/index.php';
        }else{
            $idcategoriaProducto = 1;
            require_once 'views/shop/index.php';
            
        }

    }
    public function servicios(){

    }
    public function gripFox(){

    }
    public function contacto(){
        
        
    }

}

?>
 