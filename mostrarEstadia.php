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
  <h1>Mostrar Estadia</h1>
  <form class="d-flex" role="search">
        <input name="Buscar" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button name="btn" class="btn btn-outline-success" type="submit">Buscar</button>
      </form>

  <table class="table">
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Medio de pago</th>
      <th scope="col">Tipo estadia</th>
      <th scope="col">Caracteristicas</th>
      <th scope="col">Destino</th>
      <th scope="col">Huespedes</th>
      <th scope="col">Acción</th>
    </tr>
    <?php
    if(isset($_GET['btn'])) {

    $search=$_GET ['Buscar'];
    $Buscar="%$search%";
    include("Conexion.php");
    $query = "SELECT * FROM estadia WHERE idEstadia LIKE '$Buscar' or
              tipo_estadia LIKE '$Buscar' or caracteristicas LIKE '$Buscar' or destino LIKE '$Buscar' or huespedes LIKE '$Buscar'";
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
        <td>
          <a href='frmactEstadia.php?id=<?php echo $vec[0] ?>'>
            <i class='ri-edit-2-line'></i></a>
          <a href='eliminarEstadia.php?id=<?php echo $vec[0] ?>'><i class='ri-eraser-line'></i></a>
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
        
  <script src="confirmacionEstadia.js"></script>
</body>

</html>