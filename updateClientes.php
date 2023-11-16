<?php
if(isset($_POST['Enviar'])){

    include 'conexion.php';
    $cedula=$_POST['id'];
    $nombre=$_POST['nom'];
    $apellido=$_POST['ape'];
    $email=$_POST['email'];
    $tipo_doc=$_POST['tipo_doc'];
    $num_celular=$_POST['num_cel'];
    $fecha_nac=$_POST['fec_nac'];

    $query = "UPDATE Clientes
            SET cedula='$cedula', nombre='$nombre', apellido='$apellido', email='$email', 
            tipo_doc='$tipo_doc', num_celular='$num_celular', fecha_nac='$fecha_nac'
            where cedula='$cedula'";
    $consulta = mysqli_query($conn, $query);

    if ($consulta) {
        echo ("Registro actualizado");
        echo "<a href='mostrarClientes.php'>Volver</a>";
    }
    else {
        echo("Hay un error en la Actualización");
    }
}
?>