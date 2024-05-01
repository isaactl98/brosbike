<!-- Sidebar-->
<?php
$allCategorias  =  Utils::sidebarCategorias();
?>

<div class="sidebar">
    <?php while ($categoria = $allCategorias->fetch_object()) : ?>
        <a class="p-3" href="<?= baseUrl ?>home/shopBrosBike&idcategoriaProducto=<?= $categoria->id ?>"><strong><?= $categoria->cat_nombre ?></strong></a>
    <?php endwhile; ?>
</div>
