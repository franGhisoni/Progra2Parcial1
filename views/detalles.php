<?php
require_once '../classes/Producto.php'; // Asegúrate de que el nombre del archivo coincida

// Obtener el ID del producto desde la URL
$idProducto = $_GET['id'] ?? null;

// Obtener el objeto Producto correspondiente
$producto = null;
if ($idProducto !== null) {
    $miProducto = new Producto();
    $producto = $miProducto->productoPorId($idProducto);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <!-- Agrega tus estilos CSS aquí -->
</head>
<body>
    <div class="container">
        <?php
        if ($producto !== null) {
            echo '<h1>' . $producto->getNombre() . '</h1>';
            echo '<p>' . $producto->getDescripcion() . '</p>';
            echo '<p>Precio: $' . $producto->precioFormateado() . '</p>';
            // Mostrar más detalles según sea necesario
        } else {
            echo '<p>Producto no encontrado</p>';
        }
        ?>
        <a href="index.php">Volver a la página principal</a>
    </div>
</body>
</html>
