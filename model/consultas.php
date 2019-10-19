<?php

require ('conexion.php');


class consultas{


public function getSueldos(){

    $conexion = new conexion();
    $query = "SELECT concat(se.NOMBRE, ' ', se.APELLIDO_P) as nombre, su.CANTIDAD as sueldo
				FROM SERVIDORES_PUBLICOS as se, SALARIOS AS su
				WHERE se.ID_S=su.ID_S;";
    $statement = $conexion->prepare($query);

    if(!$statement){


    return " Error al obtener los datos";

    }else{

        $valores=null;
            $statement->execute();

            while($resultados = $statement->fetch()){
                $valores [] = $resultados;
            }
            return $valores;

    }

}

	public function getPresupuestos(){

		$conexion = new conexion();
    $query = "SELECT NOMBRE_M, PRESUPUESTO_TOTAL FROM MUNICIPIOS";
    $statement = $conexion->prepare($query);

    if(!$statement){


    return " Error al obtener los datos";

    }else{

        $valores=null;
            $statement->execute();

            while($resultados = $statement->fetch()){
                $valores [] = $resultados;
            }
            return $valores;

    }

	}



}
