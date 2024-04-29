<?php
session_start(); #SIEMPRE SE INICIA UNA SESSION PARA EL MANEJO DE LAS ACTIVIDADES DEL USUARIO EN LA PAGINA
/* ARCHIVOS GESTORES DEL CONTENIDO */
require_once 'autoload.php';
require_once 'db/db.php';
require_once 'config/helpers/utils.php';
require_once 'config/parameters.php';
require_once 'views/layout/head.php';
?>

<body id="page-top">
    <?php
    require_once 'views/layout/navbar.php';
    
    if (isset($_GET['controller'])) {
        $nameController = $_GET['controller'] . 'Controller';
    } else {
        $nameController = controller_default;
    }
    if (class_exists($nameController)) {
        $controller = new $nameController();
        if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
            $action = $_GET['action'];
            $controller->$action();
        } else {
            $action_defauld = action_default;
            $controller->$action_defauld();
        }
    }
    ?>
    </div>
    <?php
    require_once 'views/layout/footer.php';
    /* ELIMINACION DE LA SESSSION */
    Utils::deleteSession('errorLogin');
    ?>
    <!-- ./wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://kit.fontawesome.com/72dd9fd10e.js" crossorigin="anonymous"></script>

    <!--DATA TABLES-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

    <!-- ESTILOS DE EXPORTACION EXCEL -->
    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script>


</body>

</html>