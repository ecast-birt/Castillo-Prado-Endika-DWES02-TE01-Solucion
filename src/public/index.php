<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php' ;

use App\Controllers\VehicleController;
use App\Models\Vehicle;
use App\Models\Coche;
use App\Models\Moto;


function request(): string
{
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    return $method;
}

$metodoActual = request();

if ($metodoActual === "GET" ) {
    $controller = new VehicleController();

    $id = $_GET["id"] ?? null;
    $vehiculo = $controller->getById($_GET['id']);
    require_once __DIR__ . '/../app/Views/vehiculo_get.php'; ;
    //var_dump($vehiculo);
} 

if ($metodoActual === "POST" ) {
    ;
} 