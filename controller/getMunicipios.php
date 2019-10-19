<?php

require ('../model/consultas.php');

//header ('Content-Type: application/json; charset= UTF-8');


function getMuni(){

	$consulta = new consultas();
	$municipios = $consulta->getMunicipios();

	foreach($municipios as $municipio){

					echo "<option value=\"". $municipio['ID_M'] ."\">" .$municipio['NOMBRE_M'] ."</option>";

	}


}





   // $enfermedades[$indexEnf]->enfermedad = $enfermedad;




?>
