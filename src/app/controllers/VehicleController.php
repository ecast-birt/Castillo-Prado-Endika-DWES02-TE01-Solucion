<?php
namespace App\Controllers;

require __DIR__ . '/../../data/vehiculos_bbdd.php';

use App\Models\Coche;
use App\Models\Moto;
use App\Models\Vehiculo;


class VehicleController {
    
    public function store($vehiculoData): ?Vehiculo{
        
        return null;       
    }
    /*crearemos la fucion getById en el qe le daremos el id de un coche y nos devolvera 
    un objeto tipo vehiculo
    Si al recorres el array no encuentr nada, entoces devuelvv eun null
    */
    public function getById($id): ?Vehiculo
    {   
        $arrayVehiculos = $this->leerVehiculos();

        // 2. Recorremos el array buscando el ID que coincide
        foreach ($arrayVehiculos as $data) {
            if ($data->getId() === filter_var($id,FILTER_VALIDATE_INT)) {
                /*
                if ($data['tipo'] === 'coche') {
                    return new Coche($data['id'], $data['marca'], $data['modelo'],$data['anio'],$data['tipo'],$data['puertas']);
                } else if ($data['tipo'] === 'moto') {
                    return new Moto($data['id'], $data['marca'], $data['modelo'],$data['anio'],$data['tipo'],$data['sidecar']) ;
                }
                */
                $vehiculoReturn = $data;
                return $vehiculoReturn;
            }
        }
        //  Si el bucle termina y no encuentra nada, devuelve null
        return null;
        
    }
    
    private function leerVehiculos(){

        
        $arrayVehiculos = [];

        foreach (VEHICULOS as $arrayTemp ){
            if( $arrayTemp['tipo'] == 'coche'){
                $coche = new Coche(
                    $arrayTemp['id'],
                    $arrayTemp['marca'],
                    $arrayTemp['modelo'],
                    $arrayTemp['anio'],
                    $arrayTemp['tipo'],
                    $arrayTemp['puertas']
                    );
                array_push($arrayVehiculos, $coche);

                }elseif ( $arrayTemp['tipo'] == 'moto'){
                    $moto = new Moto(
                    $arrayTemp['id'],
                    $arrayTemp['marca'],
                    $arrayTemp['modelo'],
                    $arrayTemp['anio'],
                    $arrayTemp['tipo'],
                    $arrayTemp['sidecar']
                    );
                    array_push($arrayVehiculos, $moto);
                };
        }




        return $arrayVehiculos;
    }

}



