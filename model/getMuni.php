<?php
if($db->connect_error) //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
{
    die('Error de conexión: ' . $db->connect_error); //si hay un error termina la aplicación y mostramos el error
}
$sql="SELECT ID_M, NOMBRE_M from MUNICIPIOS";
$combobit="";
$result = $db->query($sql); //usamos la conexion para dar un resultado a la variable
if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{

    while ($row = $result->fetch_array(MYSQLI_ASSOC))
    {
        $combobit .="<option value='".$row['ID_M']."'>".$row['NOMBRE_M']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
        //echo "<script>alert('entrodfsfsd');</script>";

    }
}
else
{
  $combobit .="<option value='0'>no hubo resultados</option>";
    //echo "No hubo resultados";
}
$db->close(); //cerramos la conexión
?>
