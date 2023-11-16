<?php

include 'conexion.php';
$medio=$_POST['medio'];
$tipo_estadia=$_POST['tes'];
$caracteristicas=$_POST['car'];
$destino=$_POST['dest'];
$huespedes=$_POST['hue'];


$query="INSERT INTO
    estadia(medio, tipo_estadia, caracteristicas, destino, huespedes)
    VALUES('$medio', '$tipo_estadia', '$caracteristicas', '$destino', '$huespedes')";
$consulta=mysqli_query($conn, $query);

if($consulta){
    echo  "se inserto el registro a la base de datos correspondiente";
    echo "<a href='mostrarEstadia.php'> volver</a>";
}
else{
    echo "hay un error en la consulta";
}