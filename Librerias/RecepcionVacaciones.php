<?php
include('Constantes.php');
include('VacacionesClass.php');
$oVacas=new Vacaciones($_POST["rut"], $_POST["nombre"], $_POST["cargo"], "", "10", "coment");


if(isset($_SESSION["aVacaciones"])){
    $arrV=$_SESSION["aVacaciones"];
}
$arrV[]=$oVacas;
$_SESSION["aVacaciones"]=$arrV;

echo "<pre>";
var_dump($arrV);
echo '</pre>';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

