<?php
declare(strict_types=1);

namespace App\models ;

class Coche extends Vehiculo {
    protected int $puertas;
    public function __construct(int $id, string $marca, string $modelo,int $anio,string $tipo,int $puertas) {
    parent::__construct($id, $marca, $modelo, $anio, $tipo);
    $this->puertas = $puertas;

    }

    /**
     * Get the value of puertas
     */ 
    public function getPuertas()
    {
        return $this->puertas;
    }

}



     
