<?php
session_start();

// Si no hay usuario logueado, redirige a login.php
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/controllers/controllerproducto.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Stock Actual</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php require_once __DIR__ . '/views/header.php'; ?>
    <?php
    $controller = new StockController();
    $controller->stockActual();
    ?>
</body>
</html>
