<div class="container contact">
      <h2 class="text">
          ¡Contáctanos!
      </h2>
      <form action="index.php?sec=formulario" method="POST">
          <div class="form-row">
            <div class="input-data">
                <input type="text" id="nombre" name="nombre" required autocomplete="off">
                <div class="underline"></div>
                <label for="nombre">Nombre:</label>
            </div>
            <div class="input-data">
                <input type="text" id="apellido" name="apellido" required autocomplete="off">
                <div class="underline"></div>
                <label for="apellido">Apellido:</label>
            </div>
          </div>
          <div class="form-row">
            <div class="input-data">
                <input type="email" id="email" name="email" required autocomplete="off">
                <div class="underline"></div>
                <label for="email">Email:</label>
            </div>
            <div class="input-data">
                <input type="number" id="edad" name="edad" required autocomplete="off">
                <div class="underline"></div>
                <label for="edad">Edad:</label>
            </div>
          </div>
          <div class="form-row">
            <div class="input-data textarea">
                <textarea id="mensaje" name="mensaje" required autocomplete="off" maxlength="200"></textarea>
                <div class="underline"></div>
                <label for="mensaje">Escríbenos tu mensaje:</label>
                </div>
            </div>
            <div class="boton">
                <button class="button" type="submit">Enviar</button>
            </div>
      </form>
</div>