<?php   
include 'conexion.php';

$id=$_GET['id'];

$query= "DELETE from transporte where idtransporte=$id";

$cons = mysqli_query($conn, $query);

if ($cons){
    header("location: mostrarTransporte.php");
}else{
    echo "<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}