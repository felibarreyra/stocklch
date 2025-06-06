<?php
require_once __DIR__ . '/../config/db.php';

class Producto {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerStockActual() {
        $sql = "SELECT nombre,unidad_medida,cantidad_actual,estado_producto,fecha_ingreso,pagado FROM productos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
