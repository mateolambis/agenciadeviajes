<?php

include 'conexion.php';
$cedula=$_POST['id'];
$nombre=$_POST['nom'];
$apellido=$_POST['ape'];
$tipo_doc=$_POST['tipo_doc'];
$email=$_POST['email'];
$num_celular=$_POST['num_cel'];
$fecha_nac=$_POST['fec_nac'];


$query="INSERT INTO
    clientes(cedula, nombre, apellido, tipo_doc, email, num_celular, fecha_nac)
    VALUES('$cedula', '$nombre', '$apellido', '$tipo_doc', '$email', '$num_celular', '$fecha_nac')";
$consulta=mysqli_query($conn, $query);

if($consulta){
    echo  "se inserto el registro a la base de datos correspondiente";
    echo "<a href='mostrarClientes.php'> volver</a>";
}
else{
    echo "hay un error en la consulta";
}