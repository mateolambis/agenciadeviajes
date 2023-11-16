<?php   
include 'conexion.php';
//en este codigo apartir de la llave primaria , trayendo los registros desde la base de datos
$id=$_GET['id'];
//creo la consulta
$query="SELECT * FROM transporte where idtransporte=$id";
//ejecuto la consulta con la funcion
$consulta=mysqli_query($conn, $query);
//convierto el resultado en vector para acceder
//facilmente a los datos
$vec = mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
      .form-registrar{
        width: 550px;
        background: #6B80E8;
        padding: 30px;
        margin: auto;
        margin-top: 100px;
        border-radius: 10px;
        color: white;
      }
    </style>
</head>
<body>

<?php
include('navbar.php');
?>

      <section class="form-registrar">
        <h1>Actualizar transporte</h1>
        <form method="post" action="updateTransporte.php">
            <div class="col-auto">
            <input class="table_item" type="number" readonly value="<?php echo $vec[0];?>" name="id"><br>
            <i class="bi bi-geo-alt-fill"></i>
              <label for="exampleInputEmail1" class="form-label">Lugar origen</label>
              <input type="text" class="form-control" id="salidaInput" aria-describedby="origen" value="<?php echo $vec[1] ?>" name="lsal">
            </div>
            <div class="col-auto">
            <i class="bi bi-geo-alt-fill"></i>
              <label for="exampleInputEmail1" class="form-label">Lugar destino</label>
              <input type="text" class="form-control" id="regresoInput" aria-describedby="destino" value="<?php echo $vec[2] ?>" name="ldes">
            </div>
            <div class="col-auto">
              <i class="bi bi-calendar"></i>
              <label for="exampleInputEmail1" class="form-label">Fecha salida</label>
              <input type="date" class="form-control" id="fechasa" aria-describedby="Salida" value="<?php echo $vec[3] ?>" name="fsal">
            </div>
            <div class="col-auto">
            <i class="bi bi-calendar"></i>
              <label for="exampleInputEmail1" class="form-label">Fecha regreso</label>
              <input type="date" class="form-control" id="fechare" aria-describedby="regreso" value="<?php echo $vec[4] ?>" name="freg">
            </div>
            <div class="col-auto">
                <i class="bi bi-clock"></i>
                <label for="exampleInputEmail1" class="form-label">Hora salida</label>
                <input type="time" class="form-control" id="horasa" aria-describedby="regreso" value="<?php echo $vec[5] ?>" name="hsal">
            </div>
            <div class="col-auto">
                <i class="bi bi-clock"></i>
                <label for="exampleInputEmail1" class="form-label">Hora regreso</label>
                <input type="time" class="form-control" id="horareg" aria-describedby="regreso" value="<?php echo $vec[6] ?>" name="hreg">
            </div><br>
            <div class="col-auto">
              <select class="form-select" aria-label="Default select example" value="<?php echo $vec[7] ?>" name="tra">
                <option selected>Medio de transporte</option>
                <option value="Avion">Avion</option>
                <option value="Bus">Bus</option>
                <option value="Carro particular">Carro particular</option>
              </select>
            </div><br><br>

            <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
        </form>
      </section>
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="C0803.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="C0803.php">1</a></li>
    <li class="page-item"><a class="page-link" href="transporte.php">2</a></li>
    <li class="page-item"><a class="page-link" href="estadia.php">3</a></li>
    <li class="page-item"><a class="page-link" href="clientes.php">4</a></li>
    <li class="page-item">
      <a class="page-link" href="estadia.php" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js" ></script>
</body>
</html>