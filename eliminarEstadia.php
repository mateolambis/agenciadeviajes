<?php   
include 'conexion.php';

$id=$_GET['id'];

$query= "DELETE from estadia where idEstadia=$id";

$cons = mysqli_query($conn, $query);

if ($cons){
    header("location: mostrarEstadia.php");
}else{
    echo "<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}