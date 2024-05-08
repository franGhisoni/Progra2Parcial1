<?php
$id = $_GET['id'] ?? FALSE;

$miProducto = new Producto();
$comic = $miProducto->productoPorId($id);

$json_data = file_get_contents('datos/productos.json');
$productos = json_decode($json_data);

?>
<div class="container">
    <div class="row">
        <?php if (!empty($productos)) {
            foreach ($productos as $producto) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $producto->imagen ?>" class="card-img-top" alt="<?= $producto->nombre ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto->nombre ?></h5>
                            <p class="card-text"><?= $producto->descripcion ?></p>
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