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

            if (file_exists("assets/csv/productos.csv")) {
                if ($handle = fopen("assets/csv/productos.csv", "r")) {
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

    </div>
</div>

