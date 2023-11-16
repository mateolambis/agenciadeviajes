<?php
include 'conexion.php';
$query = "SELECT Cedula, Nombre FROM profesores";
$consulta = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <style>
    .form-registrar {
      width: 550px;
      background: #EDEFF0;
      padding: 30px;
      margin: auto;
      margin-top: 100px;
      border-radius: 10px;
      color: #959B9E;
    }
  </style>
</head>

<body>
  <div class="form-registrar">
    <h1>Registrar su Transporte</h1>
    <form method="post" action="regtransporte.php">
      <div class="col-auto">
        <select name="profe" class="form-select">
          <option selected> Seleccione el profesor (a)</option>
          <?php
          while ($v = mysqli_fetch_array($consulta)) {
            echo "‹option value=" . $v['Cedula'] . "›" . $v['Nombre'] . "‹/option›";
          }
          ?>
        </select>
      </div>
      <div class="col-auto">
        <i class="bi bi-list-ol"></i>
        <label for="exampleInputEmail1" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="regresoInput" aria-describedby="destino" name="ldes">
      </div>
      <div class="col-auto">
        <i class="bi bi-file-person"></i>
        <label for="exampleInputEmail1" class="form-label">nombre</label>
        <input type="text" class="form-control" id="horareg" aria-describedby="regreso" name="hreg">
      </div>
      <div class="col-auto">
        <i class="bi bi-journal-text"></i>
        <label for="exampleInputEmail1" class="form-label">Descripcion</label>
        <input type="date" class="form-control" id="fechasa" aria-describedby="Salida" name="fsal">
      </div>
      <div class="col-auto">
        <i class="bi bi-calendar"></i>
        <label for="exampleInputEmail1" class="form-label">calificacion</label>
        <input type="date" class="form-control" id="fechare" aria-describedby="regreso" name="freg">
      </div>
      <div class="col-auto">
        <i class="bi bi-clock"></i>
        <label for="exampleInputEmail1" class="form-label">precio</label>
        <input type="time" class="form-control" id="horasa" aria-describedby="regreso" name="hsal">
      </div>
      <br>
      <br><br>

      <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>