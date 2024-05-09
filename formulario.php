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
<body>

    <main class="main">
        <section class="main">
            <?php include_once 'views/navbar.php'; ?>
        </section>
    </main>
    <section>
    <div class="container form">
      <h2>Resumen del Formulario</h2>
      <p>Gracias por contactarnos. Aquí está un resumen de la información que nos has enviado:</p>
      <ul>
        <li><strong>Nombre:</strong> <?php echo $_POST['nombre']; ?></li>
        <li><strong>Email:</strong> <?php echo $_POST['email']; ?></li>
        <li><strong>Mensaje:</strong> <?php echo $_POST['mensaje']; ?></li>
      </ul>
    </div>
    </section>
    <section>
        <?php include_once 'views/footer.php'; ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>