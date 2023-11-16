<?php

include 'conexion.php';
$lu_salida=$_POST['lsal'];
$lu_destino=$_POST['ldes'];
$fecha_salida=$_POST['fsal'];
$fecha_regreso=$_POST['freg'];
$hora_salida=$_POST['hsal'];
$hora_regreso=$_POST['hreg'];
$medio_trans=$_POST['tra'];

$query="INSERT INTO
    transporte(lu_salida, lu_destino, fecha_salida, fecha_regreso, hora_salida, hora_regreso, medio_trans)
    VALUES('$lu_salida', '$lu_destino', '$fecha_salida', '$fecha_regreso', '$hora_salida', '$hora_regreso', '$medio_trans')";
$consulta=mysqli_query($conn, $query);

if($consulta){
    echo "se inserto el registro a la base de datos correspondiente";
    echo "<a href='mostrarTransporte.php'> volver</a>";
}
else{
    echo " hay un error en la consulta";
}
?>