<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Vehículo</title>
</head>
<body>
    <h1>Resultado de añadir un vehiculo</h1>


    <?php if (isset($vehiculo) && $vehiculo !== null): ?>
        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px;">
            <?php  var_dump($vehiculo) ?>
        </div>
    <?php else: ?>
        <p style="color: red;">Lo sentimos, no se han podido cargar los vehiculos.</p>
    <?php endif; ?>

    <br>
    <a href="../index.html">Realizar otra búsqueda</a>
</body>
</html>