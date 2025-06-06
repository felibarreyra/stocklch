<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Stock Actual</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="stock-actual-container">
        <h1>Stock Actual</h1>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Unidad</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                    <th>Fecha Ingreso</th>
                    <th>Pagado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $p): ?>
                    <tr>
                        <td data-label="Producto"><?= htmlspecialchars($p['nombre']) ?></td>
                        <td data-label="Unidad"><?= htmlspecialchars($p['unidad_medida']) ?></td>
                        <td data-label="Cantidad"><?= htmlspecialchars($p['cantidad_actual']) ?></td>
                        <td data-label="Estado" class="estado"><?= htmlspecialchars($p['estado_producto']) ?></td>
                        <td data-label="Fecha Ingreso"><?= isset($p['fecha_ingreso']) ? htmlspecialchars($p['fecha_ingreso']) : 'N/D' ?></td>
                        <td data-label="Pagado" class="<?= !empty($p['pagado']) ? 'pagado' : 'no-pagado' ?>">
                        <?= !empty($p['pagado']) ? '✔️' : '❌' ?>
                        </td>


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
