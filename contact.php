<div class="bg-light text-center py-5">
    <h1>Contact</h1>
    <p>Envíanos un Mensaje.</p>
</div>
<div class="container mt-5">
    <form action="7_arrays.php">
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


        <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
        <select class="form-select" name="provincia" id="provincia" required>
            <option for="provincia" selected>Selecciona provincia:</option>
            <?php
            foreach ($provincias as $provincia) {
                echo "<option value='$provincia'>$provincia</option>";
            }
            ?>
        </select>
        <!-- CHECKBOX MULTISELECT -->
        <div class="form-group">
            <label for="mensaje">Ciudades:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">1</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>