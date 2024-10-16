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
<!-- test commit git 2-->

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