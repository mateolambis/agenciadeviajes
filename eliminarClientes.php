<?php   
include 'conexion.php';

$cedula=$_GET['id'];

$query= "DELETE from clientes where cedula=$cedula";

$cons = mysqli_query($conn, $query);

if ($cons){
    header("location: mostrarClientes.php");
}else{
    echo "<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}