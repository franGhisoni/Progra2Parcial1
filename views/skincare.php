
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">

                <div class="container mt-5">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Ingredientes
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">Opción 1</li>
                                        <li class="list-group-item">Opción 2</li>
                                        <li class="list-group-item">Opción 3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Usos
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">Opción A</li>
                                        <li class="list-group-item">Opción B</li>
                                        <li class="list-group-item">Opción C</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <?php
// Leer el contenido del archivo productos.json
$productos_json = file_get_contents('datos/productos.json');
// Decodificar el JSON en un array asociativo
$productos_data = json_decode($productos_json, true);
?>

<!-- Grilla de productos -->
<div class="col-md-9">
    <div class="row">
        <?php foreach ($productos_data['skincare'] as $producto): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                    <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                    <p class="card-text">Precio: $<?php echo $producto['precio']; ?></p>
                    <p class="card-text">Stock: <?php echo $producto['stock']; ?></p>
                    <a href="#" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


        </div>
    </div>
