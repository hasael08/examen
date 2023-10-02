<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Formulario de Registro de Productos</h1>
<form action="registrado.php" method="post">
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required><br><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" required><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="proveedor">Proveedor:</label>
        <input type="text" id="proveedor" name="proveedor" required><br><br>

        <label for="precio_compra">Precio de Compra:</label>
        <input type="number" id="precio_compra" name="precio_compra" required><br><br>

        <label for="precio_venta">Precio de Venta:</label>
        <input type="number" id="precio_venta" name="precio_venta" required><br><br>

        <label for="categoria">Categoría:</label>
        <select id="categoria" name="categoria" required>
        <option value="Categoria1">Seleccionar Categoria</option>
            <option value="Categoria1">Categoría 1</option>
            <option value="Categoria2">Categoría 2</option>
            <option value="Categoria3">Categoría 3</option>
        </select><br><br>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>