<?PHP
$id = $_GET['id'] ?? FALSE;

$miObjetoProducto = new Producto();
$producto = $miObjetoProducto->productoPorId($id);

?>
<div class="container">
    <div class="row">
        <?PHP if (!empty($producto)) { ?>
            <div class="col">
            <h1 class="text-center my-5"> <?= $producto->getNombre() ?></h1>
                <div class="mb-5">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="img/<?= $producto->getImagen(); ?>" class="img-fluid rounded-start border-end" alt="Imagen de <?= $producto->getNombre() ?>">
                        </div>
                        <div class="col-md-7 d-flex flex-column p-3">
                            <div class="card-body flex-grow-0">
                                <p class="fs-4 m-0 fw-bold"><?= $producto->getNombre() ?></p>
                                <h2 class="card-title fs-2 mb-4"><?= $producto->getNombre(); ?></h2>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="fw-light"><?= $producto->getDescripcion(); ?></li>
                                <li class="list-group-item">
                                    <span class="fw-light"><?= $producto->getNombre(); ?></span>
                                    <div class="quantity-selector">
                                        <button class="quantity-decrease bg-black border-0 text-white p-1">-</button>
                                        <input type="number" name="cantidad" value="1" min="1">
                                        <button class="quantity-increase">+</button>
                                    </div>
                                </li>
                                <li class="list-group-item"><span class="fw-light"> Fecha de lanzamiento: <?= $producto->getLanzamiento(); ?></li>
                            </ul>

                            <div class="card-body flex-grow-0 mt-auto">
                                <div class="fs-3 mb-3 fw-medium text-center">ARS $<?= $producto->precioFormateado() ?></div>
                                <div class="row">
                                    <div class="col-9">
                                        <a href="#" class="btn w-100 border">Agregar al carrito</a>
                                    </div>
                                    <div class="col-3">
                                        <a href="#" class="btn w-100 border"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.920 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.060.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                            </svg></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="cuadrado"></div>


            </div>
        <?PHP } else { ?>
            <div class="col">
                <h2 class="text-center m-5">No se encontró el producto deseado.</h2>
            </div>
        <?PHP } ?>
    </div>

</div>