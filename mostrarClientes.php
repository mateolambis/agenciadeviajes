<?php
include('navbar.php');
?>




<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <div class="container">
  <h1>Mostrar clientes</h1>
  <form class="d-flex" role="search">
        <input name="Buscar" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button name="btn" class="btn btn-outline-success" type="submit">Buscar</button>
      </form>

  <table class="table">
    <tr>
      <th scope="col">cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">Tipo de Documento</th>
      <th scope="col">Email</th>
      <th scope="col">Numero de celular</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Acción</th>
    </tr>
    <?php
    if(isset($_GET['btn'])) {

    $search=$_GET ['Buscar'];
    $Buscar="%$search%";
    include("Conexion.php");
    $query = "SELECT * FROM clientes WHERE cedula LIKE '$Buscar' or
              cedula LIKE '$Buscar' or nombre LIKE '$Buscar' or apellido LIKE '$Buscar' or email LIKE '$Buscar' or tipo_doc LIKE '$Buscar' or num_celular LIKE '$Buscar' or fecha_nac LIKE '$Buscar'";
    $cons = mysqli_query($conn, $query);

    if(mysqli_num_rows($cons)!==0){
    while ($vec = mysqli_fetch_array($cons)) { ?>
      <tr>
        <td><?php echo $vec[0]; ?></td>
        <td><?php echo $vec[1]; ?></td>
        <td><?php echo $vec[2]; ?></td>
        <td><?php echo $vec[3]; ?></td>
        <td><?php echo $vec[4]; ?></td>
        <td><?php echo $vec[5]; ?></td>
        <td><?php echo $vec[6]; ?></td>
        <td>
          <a href='frmactClientes.php?id=<?php echo $vec[0] ?>'>
            <i class='ri-edit-2-line'></i></a>
          <a href='eliminarClientes.php?id=<?php echo $vec[0] ?>'><i class='ri-eraser-line'></i></a>
        </td>
      </tr>
    <?php }
    }else{
      echo"No se encontraron datos para esa busqueda";
    }
    } else{ 
        echo "Escribe un indicio de busqueda";
    }?>
  </table>
        
  <script src="confirmacionClientes.js"></script>
</body>

</html>