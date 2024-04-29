<!-- Sidebar-->
<?php
$allCategorias  =  Utils::sidebarCategorias();
?>
<div class="border-bottom bg-white" id="sidebar-wrapper" style="display: block; width: 300px !important;">
    <!-- <div class="list-group list-group-flush"></div> -->
    <div class="list-group list-group-flush">
        <?php while ($categoria = $allCategorias->fetch_object()) : ?>
            <a class="list-group-item list-group-item-action p-3" href="<?= baseUrl ?>home/shopBrosBike&idcategoriaProducto=<?= $categoria->id ?>"><strong><?= $categoria->cat_nombre ?></strong></a>
        <?php endwhile; ?>
    </div>
</div>