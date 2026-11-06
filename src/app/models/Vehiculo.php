<?php
declare(strict_types=1);

namespace App\models ;

class Vehiculo {
    protected int $id ;
    protected string $marca;
    protected string $modelo;
    protected int $anio;
    protected string $tipo;

    function __construct(int $id, string $marca, string $modelo,int $anio,string $tipo){
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->tipo = $tipo;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Get the value of anio
     */ 
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }
}