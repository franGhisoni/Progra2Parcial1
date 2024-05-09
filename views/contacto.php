<div class="fondito">

<div class="container contact">
      <div class="text">
          ¡Contáctanos!
      </div>
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
                <textarea rows="8" cols="80" id="mensaje" name="mensaje" required autocomplete="off"></textarea>
                <br />
                <div class="underline"></div>
                <label for="mensaje">Escríbenos tu mensaje:</label>
                <br />
                <div class="form-row submit-btn">
                  <div class="input-data">
                      <div class="inner"></div>
                      <input type="submit" value="Enviar">
                  </div>
                </div>
            </div>
          </div>
      </form>
</div>

</div>