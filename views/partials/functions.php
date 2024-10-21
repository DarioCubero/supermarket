<script>
    $(document).ready(function() {
        $(document).on('click', '.agregar', function() {
            var id = $(this).data('id');
            var nombre = $(this).data('nombre');
            var precio = $(this).data('precio');
            var cantidad = $(this).data('cantidad');

            // Enviar datos a PHP a través de AJAX
            $.ajax({
                type: 'POST',
                url: 'guardar_sesion.php', // Archivo PHP que manejará la sesión
                data: {
                    id: id,
                    nombre: nombre,
                    precio: precio,
                    cantidad: cantidad
                },
                success: function(response) {
                    alert(response); // Mostrar la respuesta del servidor
                },
                error: function() {
                    alert('Error al enviar los datos.');
                }
            });
        });
    });

    // DATATABLE
    function edit(productId) {
        Swal.fire({
            title: "Editar",
            text: "ID: " + productId,
            icon: "success"
        });
    }

    // function add_to_cart() {
    //     alert("HOLA");
    //     // var_dump($param1, $param2, $param3, $param4);
    //     // Swal.fire({
    //     //     title: "Añadido a carrito",
    //     //     text: "ID: " + productId,
    //     //     icon: "success"
    //     // });


    //     // Función para agregar productos al carrito
    //     // if (isset($_POST['add_to_cart'])) {
    //     // Agregar producto al carrito
    //     // $_SESSION['cart'][] = [
    //     //     'idProducto' => $producto['idProducto'],
    //     //     'nombreProducto' => $producto['nombreProducto'],
    //     //     'precioProducto' => $producto['precioProducto'],
    //     //     'cantidadProducto' => $producto['cantidadProducto']
    //     // ];
    // }
</script>