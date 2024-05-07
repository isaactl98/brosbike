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
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-3">
            <h3>Categorias</h3>
            <?php require_once 'views/layout/sidebar.php'; ?>
        </div>
        <div class="col-lg-9">
            <div class="content">
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
                            <div class="col-md-3 col-sm-12 p-2">
                                <a href="<?= baseUrl ?>home/detalleProducto&prod=<?= $products['id'] ?>" class="text-decoration-none text-black">
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
</div>