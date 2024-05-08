<?php
// Simulación de productos desde un archivo JSON
$productos_json = file_get_contents('productos.json');
$productos = json_decode($productos_json, true);

// Verificar si se pasó un ID de producto válido en la URL
if (isset($_GET['id']) && isset($productos[$_GET['id']])) {
    $id_producto = $_GET['id'];
    $producto = $productos[$id_producto];
} else {
    // Redireccionar o mostrar un mensaje de error si no se encontró el producto
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Detalles del Producto</h1>
        <div class="producto">
            <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
            <div class="info">
                <h2><?php echo $producto['nombre']; ?></h2>
                <p><?php echo $producto['descripcion']; ?></p>
                <p>Precio: $<?php echo $producto['precio']; ?></p>
                <a href="#" class="btn-comprar">Comprar</a>
            </div>
        </div>
        <a href="index.php" class="btn-volver">Volver a la página principal</a>
    </div>

</body>
</html>
