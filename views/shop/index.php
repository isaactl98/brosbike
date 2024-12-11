<div class="d-flex" id="wrapper" style="height: 62px !important; background-color: #000 !important;"></div>
<style>
    .jumbotron {
        background-image: url("<?= baseUrl ?><?= $img_banner ?>");
    }
</style>
<div class="jumbotron">
    <div class="container">
        <img src="" alt="" srcset="">
        <h1 class="display-1">MOUNTAIN BIKES</h1>
        <p>Whether it's climbing and going down steep trails or jumping high at bike parks. Enjoy your riding and discover yourself.</p>
        <p><a class="btn btn-primary btn-lg mb-5" href="#" role="button">Learn more »</a></p>
    </div>
</div>
<div class="container py-2">
    <h6><small class="text-muted">HOME</small> / TIENDA / MTB</h6>
</div>

<div class="container py-5">
    <div class="row">
        <!-- <div class="col-lg-3">
            <h3>Categorias</h3>
            <?php //require_once 'views/layout/sidebar.php'; 
            ?>
        </div> -->
        <div class="col-lg-12">
            <div class="content">
                <div class="row">
                    <div class="col-12 col-lg-12 col-sm-12">
                        <div class="text-center">
                            <h3><strong>EXPLORA TODAS NUESTRAS LINEAS</strong></h3>
                            <hr>
                        </div>
                        <div class="text-center">
                            <?php foreach($allCategorias as $categoria):?>
                                <a href="<?= baseUrl?>home/shopBrosBike&idcategoriaProducto=<?= $categoria['id'] ?>" type="button" class="btn btn-outline-secondary"><?=$categoria['cat_nombre']?></a>
                                <?php endforeach;?>
                        </div>
                    </div>

                </div>
                <div id="contentProducts" class="row justify-content-center">
                    <?php if ($totalproductos == 0) : ?>
                        <div class="col-12 col-lg-12 col-sm-12 mt-5">
                            <center>
                                <h1>PROXIMAMENTE!</h1>
                            </center>
                            <img src="<?= baseUrl ?>assets/img/mtpgwb/mantenimiento.jpg" alt="mantenimiento" style="width: 100%;">
                        </div>
                    <?php else : ?>
                        <?php foreach ($productos as $products) : ?>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 p-4 m-3">
                                <a href="<?= baseUrl ?>home/detalleProducto&prod=<?= $products['id'] ?>" class="text-decoration-none text-black">
                                    <cennter>
                                        <img src="<?= baseUrl ?><?= $path_imgprod ?><?= $products['prod_img'] ?>" width="250" height="auto" alt="">
                                        <h5><strong><?= $products['prod_nombre']; ?></strong></h5>
                                        <button class="btn btn-primary btn-sm rounded-pill"> Ver mas!</button>
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