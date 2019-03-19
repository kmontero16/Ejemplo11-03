<?php

class Vacaciones {
    private $rut;
    private $nombre;
    private $cargo;
    private $fechaIni;
    private $diasTotales;
    private $comentarios;

    function __construct($rut, $nombre, $cargo, $fechaIni, $diasTotales, $comentarios) {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->fechaIni = $fechaIni;
        $this->diasTotales = $diasTotales;
        $this->comentarios = $comentarios;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setFechaIni($fechaIni) {
        $this->fechaIni = $fechaIni;
    }

    function setDiasTotales($diasTotales) {
        $this->diasTotales = $diasTotales;
    }

    function setComentarios($comentarios) {
        $this->comentarios = $comentarios;
    }
    
    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getFechaIni() {
        return $this->fechaIni;
    }

    function getDiasTotales() {
        return $this->diasTotales;
    }

    function getComentarios() {
        return $this->comentarios;
    }

    

}
