<div class="d-flex bg-dark" id="wrapper" style="height: 62px !important;"></div>
<style>
    .jumbotron {
        background-image: url("<?= baseUrl ?><?= $img_banner ?>");
    }
</style>
<div class="jumbotron">
    <div class="container">
        <img src="" alt="" srcset="">
        <h1 class="display-3">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg mb-5" href="#" role="button">Learn more »</a></p>
    </div>
</div>
<div class="container py-5">
    <h6><small class="text-muted">HOME</small> | TIENDA </h6>
    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
</div>

<div class="container py-5">

    <div class="d-flex" id="wrapper">
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
            </div>
        </div>
        <div id="page-content-wrapper">
        <div class="container-fluid">
                    <h1 class="mt-4">Simple Sidebar</h1>
                    <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                    <p>
                        Make sure to keep all page content within the
                        <code>#page-content-wrapper</code>
                        . The top navbar is optional, and just for demonstration. Just create an element with the
                        <code>#sidebarToggle</code>
                        ID which will toggle the menu when clicked.
                    </p>
                </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-3 vh-100">
            <h3>Categorias</h3>
            <?php require_once 'views/layout/sidebar.php'; ?>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col col-lg-8">
                    <h3><?= $totalproductos ?> Productos relacionados</h3>
                </div>
                <div class="col col-lg-4">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Ordenar por...</option>
                        <option value="1">Ordenar de menor a mayor</option>
                        <option value="2">Ordenar de mayor a menor</option>
                        <option value="3">Ordenr de A a la Z</option>
                        <option value="3">Ordenr de Z a la A</option>
                    </select>
                </div>
            </div>
            <div id="contentProducts" class="row">
                <?php if ($totalproductos == 0) : ?>
                    <div class="col-12 col-lg-12 col-sm-12 mt-5">
                        <center>
                            <h1>PROXIMAMENTE!</h1>
                        </center>
                        <img src="<?= baseUrl ?>assets/img/mtpgwb/mantenimiento.jpg" alt="mantenimiento" style="width: 100%;">
                    </div>
                <?php else : ?>
                    <?php foreach ($productos as $products) : ?>
                        <div class="col-md-3 col-sm-12">
                            <a href="<?= baseUrl ?>home/detalleProducto?prod=<?= $products['id'] ?>" class="text-decoration-none text-black">
                                <cennter>
                                    <img src="<?= baseUrl ?>assets/img/productos/AIBPXzzSD6zzzz_1_1.png" width="250" height="auto" alt="">
                                    <h5><?= $products['prod_nombre']; ?></h5><small>$<?= $products['prod_precio']; ?></small>
                                </cennter>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

</div>