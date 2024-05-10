<?php
require_once "classes/Producto.php";

$secciones_validas = [
    "home" => [
        "titulo" => "Inicio"
    ],
    "alumnos" => [
        "titulo" => "Staff"
    ],
    "productos" => [
        "titulo" => "Productos"
    ],
    "contacto" => [
        "titulo" => "Contacto"
    ],
    "formulario" => [
        "titulo" => "Formulario"
    ],
    "detalles" => [
        "titulo" => "Detalle"
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="body-<?= $seccion ?>">

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const readMoreBtns = document.querySelectorAll('.read-more-btn');
            
            readMoreBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const hiddenText = this.parentNode.previousElementSibling;
                    const iconPlus = this.querySelector('.fa-plus');
                    const iconMinus = this.querySelector('.fa-minus');
                    if (hiddenText.style.display === 'none') {
                        hiddenText.style.display = 'block';
                        iconPlus.style.display = 'none';
                        iconMinus.style.display = 'inline-block';
                        this.querySelector('.button-text').textContent = 'Leer menos';
                    } else {
                        hiddenText.style.display = 'none';
                        iconPlus.style.display = 'inline-block';
                        iconMinus.style.display = 'none';
                        this.querySelector('.button-text').textContent = 'Leer más';
                    }
                });
            });
        });
    </script>


</body>
</html>