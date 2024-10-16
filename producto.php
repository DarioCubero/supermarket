<!-- products.php -->
<div class="bg-light text-center py-5">
    <h1>Productos</h1>
</div>

<div class="container mt-5">
    <div class="container mt-5">
        <!-- Input de filtro -->
        <table id='dataTable' class='table table-hover table-striped table-bordered table-dark'>
            <?php
            function nF($numero)
            {
                return number_format($numero, 2, ",", ".");
            }

            if (file_exists("csv/productos.csv")) {
                if ($handle = fopen("csv/productos.csv", "r")) {
                    echo "<thead>
                            <tr>";
                    // CABECERA
                    $cabecera = fgetcsv($handle); //array(3) { [0]=> string(8) "Producto" [1]=> string(6) "Precio" [2]=> string(8) "Cantidad" }

                    foreach ($cabecera as $celda) {
                        if ($celda == "Producto") {
                            echo "<th>$celda <i class='bi bi-funnel-fill'></i><input style='max-width: 100px; width: 100%;' type='text' id='filterInput' placeholder='Nombre...' onkeyup='filterTable()'></th>";
                        } else {
                            echo "<th>$celda</th>";
                        }
                    }
                    echo "<th>Total</th>";
                    echo "<th>Action</th>";
                    echo "</tr></thead><tbody id='tableBody'>";
                    while (($fila = fgetcsv($handle)) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($fila[0]) . "</td>"; //idProducto
                        echo "<td>" . htmlspecialchars($fila[1]) . "</td>"; //nombreProducto
                        echo "<td>" . htmlspecialchars($fila[2]) . "</td>"; //precioProducto
                        echo "<td>" . nF($fila[3]) . "</td>"; //cantidadProducto
                        echo "<td>" . $fila[2] * $fila[3] . "</td>"; //Total
                        echo "<td>
                              <button data-id='$fila[0]' data-nombre='$fila[1]' data-precio='$fila[2]' data-cantidad='$fila[3]'  class='btn btn-success bi-cart-plus'
                              </button>
                              <button class='btn btn-primary bi bi-pencil-square' onClick='edit($fila[0]);'></button>
                            
                            </td>"; //Total
                        echo "</tr>";
                    }
                    echo "
                        </tbody>";


                    fclose($handle);
                } else {
                    echo "El Archivo no ha sido abierto";
                }
            } else {
                echo "fichero no existe";
            }
            ?>
        </table>
        <!-- Controles de paginación -->
        <div class="pagination" id="paginationControls"></div>
        <br>
        <hr /><br><br><br>

        <!--  Tarjeta de Producto 1 BOOTSTRAP -------------2 -->
        <!-- <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Producto 1</h5>
                            <p class="card-text">Descripción breve del producto 1. Este producto es excelente.</p>
                            <p class="card-text"><strong>Precio: $19.99</strong></p>
                            <a href="#" class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 2">
                        <div class="card-body">
                            <h5 class="card-title">Producto 2</h5>
                            <p class="card-text">Descripción breve del producto 2. Este producto es muy popular.</p>
                            <p class="card-text"><strong>Precio: $29.99</strong></p>
                            <a href="#" class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                        <div class="card-body">
                            <h5 class="card-title">Producto 3</h5>
                            <p class="card-text">Descripción breve del producto 3. Este producto es de alta calidad.</p>
                            <p class="card-text"><strong>Precio: $39.99</strong></p>
                            <a href="#" class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
</div>