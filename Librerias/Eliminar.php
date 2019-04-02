<?php
include ('./VacacionesClass.php');
include './Constantes.php';
$idEliminar=$_POST["rut"];

foreach($_SESSION["aVacaciones"] as $key => $oVacacion){
    if($oVacacion->getRut()==$idEliminar){
        unset($_SESSION["aVacaciones"][$key]);
        echo "ELIMINADO";
    }
}

