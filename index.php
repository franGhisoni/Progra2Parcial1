<?php


const DB_SERVER = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "5";
const DB_NAME = "progra2_parcial2";

const DB_DNS = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8mb4";

$conexion = new PDO(DB_DNS, DB_USER, DB_PASSWORD);

$query 

// holis commitakjsdnjkashndjks


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
    $body_class = 'body-404';
} else {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
    $body_class = "body-$seccion";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NATURE | <?= $titulo ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="<?= $body_class ?>">

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.quantity-increase').on('click', function() {
            var $input = $(this).parent().find('input[name="cantidad"]');
            var newValue = parseInt($input.val()) + 1;
            $input.val(newValue);
        });

        $('.quantity-decrease').on('click', function() {
            var $input = $(this).parent().find('input[name="cantidad"]');
            var newValue = parseInt($input.val()) - 1;
            if (newValue >= 1) {
                $input.val(newValue);
            }
        });
    });
</script>


</body>
</html>
