<?php 
require_once 'Controller/plantillaController.php';
require_once 'Controller/FormulariosController.php';
require_once 'Model/formulariosModelo.php';

$objPlantilla = new plantillaController();
$objPlantilla->ctrTraerPlantilla();
?>