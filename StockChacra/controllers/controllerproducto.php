<?php
require_once __DIR__ . '/../models/modelproducto.php';

class StockController {
    public function stockActual() {
        global $pdo;
        $productoModel = new Producto($pdo);
        $productos = $productoModel->obtenerStockActual();

        include __DIR__ . '/../views/stock/actual.php';
    }
}
