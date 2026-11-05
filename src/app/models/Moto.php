<?php
declare(strict_types=1);

namespace App\Models ;

class Moto extends Vehiculo {
    protected bool $sidecar;
    public function __construct(int $id, string $marca, string $modelo,int $anio,string $tipo,bool $sidecar) {
    parent::__construct($id, $marca, $modelo, $anio, $tipo);
    $this->sidecar = $sidecar;

    }

    /**
     * Get the value of sidecar
     */ 
    public function getSidecar()
    {
        return $this->sidecar;
    }
}