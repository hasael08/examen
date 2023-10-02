<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta del Formulario</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigo = $_POST["codigo"];
        $descripcion = $_POST["descripcion"];
        $nombre = $_POST["nombre"];
        $proveedor = $_POST["proveedor"];
        $precioCompra = $_POST["precio_compra"];
        $precioVenta = $_POST["precio_venta"];
        $categoria = $_POST["categoria"];
        $stock = $_POST["stock"];
    }
    ?>

    <h2>Respuesta del Formulario</h2>
    <strong>Código:</strong> <?php echo $codigo; ?><br>
    <strong>Descripción:</strong> <?php echo $descripcion; ?><br>
    <strong>Nombre:</strong> <?php echo $nombre; ?><br>
    <strong>Proveedor:</strong> <?php echo $proveedor; ?><br>
    <strong>Precio de Compra:</strong> <?php echo $precioCompra; ?><br>
    <strong>Precio de Venta:</strong> <?php echo $precioVenta; ?><br>
    <strong>Categoría:</strong> <?php echo $categoria; ?><br>
    <strong>Stock:</strong> <?php echo $stock; ?>
</body>
</html>
