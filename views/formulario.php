
      <div class="container form">
          <h2>Resumen del Formulario</h2>
          <p>Gracias por contactarnos. Aquí está un resumen de la información que nos has enviado:</p>
          <ul>
            <li><strong>Nombre:</strong> <?php echo $_POST['nombre']; ?></li>
            <li><strong>Apellido:</strong> <?php echo $_POST['apellido']; ?></li>
            <li><strong>Edad:</strong> <?php echo $_POST['edad']; ?></li>
            <li><strong>Email:</strong> <?php echo $_POST['email']; ?></li>
            <li><strong>Mensaje:</strong> <?php echo $_POST['mensaje']; ?></li>
          </ul>
    </div>

    <div class="container social">
      <h2>¡Encontranos en nuestras redes sociales!</h2>
        <div class="socialmedia">
          <a href="https://www.instagram.com" target="_blank" class="fab fa-instagram"></a>
          <a href="https://www.facebook.com" target="_blank" class="fab fa-facebook"></a>
          <a href="https://www.twitter.com" target="_blank" class="fab fa-twitter"></a>
          <a href="https://www.web.whatsapp.com" target="_blank" class="fab fa-whatsapp"></a>
        </div>
    </div>
