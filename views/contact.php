<div class="bg-light text-center py-5">
    <h1>Contact</h1>
    <p>Envíanos un Mensaje.</p>
</div>
<div class="container mt-5">
    <form action="">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" id="mensaje" rows="4" placeholder="Tu mensaje" required></textarea>
        </div>

        <select class="form-select" name="ciudad" id="ciudad" required>
            <option for="ciudad" selected>Selecciona ciudad:</option>


            <?php 
            include 'csv/ciudades.php';
            foreach ($ciudades as $ciudad): ?>
                <option value="<?php echo $ciudad['id']; ?>">
                    <?php echo $ciudad['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<div class="container">
    <div class="form-container bg-dark text-light">
      <h2 class="text-center mb-4">Formulario de Registro</h2>

      <form>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control bg-dark text-light border-secondary" id="nombre" placeholder="Introduce tu nombre">
          </div>

          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control bg-dark text-light border-secondary" id="email" placeholder="name@example.com">
            <div class="form-text text-muted">Nunca compartiremos tu email con nadie.</div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control bg-dark text-light border-secondary" id="password" placeholder="Introduce tu contraseña">
          </div>

          <div class="col-md-6 mb-3">
            <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control bg-dark text-light border-secondary" id="confirm-password" placeholder="Confirma tu contraseña">
          </div>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="terminos">
          <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Registrarse</button>
      </form>
    </div>
  </div>
    <div class="form-container">
      <h2 class="text-center mb-4">Formulario de Registro</h2>

      <form>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre">
          </div>

          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
            <div class="form-text">Nunca compartiremos tu email con nadie.</div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
          </div>

          <div class="col-md-6 mb-3">
            <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu contraseña">
          </div>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="terminos">
          <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
        </div>

        <button type="submit" class="btn btn-custom w-100">Registrarse</button>
      </form>
    </div>
  </div>