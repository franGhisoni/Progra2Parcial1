<?php
require_once "classes/Producto.php";

$secciones_validas = [
    "home" => [
        "titulo" => "Inicio"
    ],
    "alumnos" => [
        "titulo" => "Los + Lindos :3 uwu"
    ],
    "productos" => [
        "titulo" => "Productos"
    ],
    "contacto" => [
        "titulo" => "Contacto"
    ],
    "testeo" => [
        "titulo" => "Test"
    ]
];

$seccion = isset($_GET['sec']) ? $_GET['sec'] : 'home';

if (!array_key_exists($seccion, $secciones_validas)) {
    $vista = "404";
    $titulo = "404: Página no encontrada";
} else {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NATURE | <?= $titulo ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <main class="main">
        <section class="main">
            <?php include_once 'views/navbar.php'; ?>
        </section>
    </main>
    <section>
        <?php
        require_once "views/$vista.php";
        ?>
    </section>
    <section>
        <?php include_once 'views/footer.php'; ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>