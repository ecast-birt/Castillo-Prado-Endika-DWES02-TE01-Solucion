<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Vehículo</title>
</head>
<body>
    <h1>Resultado de la Búsqueda</h1>

    //podria hacer un Vardum pero me he liado

    <?php if (isset($vehiculo) && $vehiculo !== null): ?>
        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px;">
            <p><strong>ID:</strong> <?= $vehiculo->getId(); ?></p>
            <p><strong>Marca:</strong> <?= $vehiculo->getMarca(); ?></p>
            <p><strong>Modelo:</strong> <?= $vehiculo->getModelo(); ?></p>
            <p><strong>Anio:</strong> <?= $vehiculo->getAnio(); ?></p>
            <p><strong>Tipo:</strong> <?= $vehiculo->getTipo(); ?></p>
            
            <!-- Si es una instancia de Coche, incluso puedes llamar a métodos específicos suyos -->
            <?php if (method_exists($vehiculo, 'getNumeroPuertas')): ?>
                <p><strong>Puertas:</strong> <?= $vehiculo->getNumeroPuertas(); ?></p>
            <?php endif; ?>
            
            <?php if (method_exists($vehiculo, 'getSidecar')): ?>
                <p><strong>Sidecar:</strong> <?= $vehiculo->getSidecar(); ?></p>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <p style="color: red;">Lo sentimos, no se ha encontrado ningún vehículo con ese ID.</p>
    <?php endif; ?>

    <br>
    <a href="./index.html">Realizar otra búsqueda</a>
</body>
</html>