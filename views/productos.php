<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/vista-productos-belleza-masculinos-pantalla-roca-o-piedra (2).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/vista-productos-belleza-masculinos-pantalla-roca-o-piedra (3).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/vista-productos-belleza-masculinos-pantalla-roca-o-piedra (2).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
</div>

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
