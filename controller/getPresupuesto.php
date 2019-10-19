<?php

require ('../model/consultas.php');

header ('Content-Type: application/json; charset= UTF-8');




$consulta = new consultas();



$presupuestos = $consulta->getPresupuestos();

$i=0;

$nombre ="";

foreach($presupuestos as $presupuesto	){


    if($nombre != $presupuesto['NOMBRE_M']){
        $todos[$i] = array("nombre" => $presupuesto['NOMBRE_M'], "presupuesto" => $presupuesto['PRESUPUESTO_TOTAL']);

        $nombre = $presupuesto['NOMBRE_M'];

        $i = $i +1;

    }




}

   // $enfermedades[$indexEnf]->enfermedad = $enfermedad;


$jsonResponse = json_encode($todos);

echo $jsonResponse;




?>
