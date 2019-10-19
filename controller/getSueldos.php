<?php

require ('../model/consultas.php');

header ('Content-Type: application/json; charset= UTF-8');



$consulta = new consultas();



$funcionarios = $consulta->getSueldos();

$i=0;

$nombre ="";

foreach($funcionarios as $funcionario){


    if($nombre != $funcionario['nombre']){
        $todos[$i] = array("nombre" => $funcionario['nombre'], "sueldo" => $funcionario['sueldo']);

        $nombre = $funcionario['nombre'];

        $i = $i +1;

    }


}

   // $enfermedades[$indexEnf]->enfermedad = $enfermedad;


$jsonResponse = json_encode($todos);

echo $jsonResponse;




?>
