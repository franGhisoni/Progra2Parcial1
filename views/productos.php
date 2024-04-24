<?php
require_once 'classes/producto.php';

$id = $_GET['id'] ?? FALSE;

$miProducto = new Producto();
$productos = $miProducto->catalogoCompleto();

?>
<div class="container">
    <div class="row">
        <?php if (!empty($productos)) {
            foreach ($productos as $producto) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $producto->getImagen() ?>" class="card-img-top" alt="<?= $producto->getNombre() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto->getNombre() ?></h5>
                            <p class="card-text"><?= $producto->getDescripcion() ?></p>
                            <a href="#" class="btn btn-primary">Ver detalles</a>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <div class="col">
                <h2 class="text-center m-5">No se encontraron productos.</h2>
            </div>
        <?php } ?>
    </div>
</div>
