<div class="d-flex bg-dark" id="wrapper" style="height: 62px !important;"></div>

<div class="container py-5">
    <h6><small class="text-muted">HOME</small> | TIENDA</h6>
</div>

<div class="container py-5">

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
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <?php foreach ($productos as $products) : ?>
                    <div class="col-md-3 col-sm-12">
                        <cennter>
                            <img src="<?= baseUrl ?>assets/img/productos/AIBPXzzSD6zzzz_1_1.png" width="250" height="auto" alt="">
                            <h5><?= $products['prod_nombre']; ?></h5><small>$<?= $products['prod_precio']; ?></small>
                        </cennter>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>

</div>