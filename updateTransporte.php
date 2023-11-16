<?php
if(isset($_POST['Enviar'])){

include 'conexion.php';
$id=$_POST['id'];
$lu_salida=$_POST['lsal'];
$lu_destino=$_POST['ldes'];
$fecha_salida=$_POST['fsal'];
$fecha_regreso=$_POST['freg'];
$hora_salida=$_POST['hsal'];
$hora_regreso=$_POST['hreg'];
$medio_trans=$_POST['tra'];


    $query="UPDATE transporte
            SET lu_salida='$lu_salida', lu_destino='$lu_destino', fecha_salida='$fecha_salida', fecha_regreso='$fecha_regreso', 
            hora_salida='$hora_salida', hora_regreso='$hora_regreso', medio_trans='$medio_trans' where idtransporte='$id'";
    $consulta=mysqli_query($conn, $query);

    if ($consulta) {
        echo ("Registro actualizado");
        echo "<a href='mostrarTransporte.php'>Volver</a>";
    }
    else {
        echo("Hay un error en la Actualización");
    }
}
?>