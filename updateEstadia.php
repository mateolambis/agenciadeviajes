<?php
if(isset($_POST['Enviar'])){

include 'conexion.php';
$id             =$_POST['id'];
$medio          =$_POST['medio'];
$tipo_estadia   =$_POST['tes'];
$caracteristicas=$_POST['car'];
$destino        =$_POST['dest'];
$huespedes      =$_POST['hue'];

    $query = "UPDATE estadia
            SET medio='$medio', tipo_estadia='$tipo_estadia', caracteristicas='$caracteristicas', destino='$destino', 
            huespedes='$huespedes'
            where idEstadia='$id'";
    $consulta = mysqli_query($conn, $query);

    if ($consulta) {
        echo ("Registro actualizado");
        echo "<a href='mostrarEstadia.php'>Volver</a>";
    }
    else {
        echo("Hay un error en la Actualización");
    }
}
?>