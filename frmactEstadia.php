<?php   
include 'conexion.php';
//en este codigo apartir de la llave primaria , trayendo los registros desde la base de datos
$id=$_GET['id'];
//creo la consulta
$query="SELECT * FROM estadia where idEstadia=$id";
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
      .container{
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

    <div class="container">
    <h1>Actualizar su estadía</h1>
    <form  action="updateEstadia.php" method="POST">
      <input class="table_item" type="number" readonly value="<?php echo $vec[0];?>" name="id">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="medio"  id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Pago en Línea
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="medio" value="pago en el destino" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Pago en el Destino
        </label><br><br> 
        <div class="col-auto">  
          <select class="form-select" aria-label="Default select example" name="tes">
            <option value="<?php echo $vec[2] ?>"><?php echo $vec[2] ?></option>
            <option value="Hotel">Hotel</option>
            <option value="Finca Hotel">Finca Hotel</option>
            <option value="Apartamento">Apartamento</option>
          </select>
        </div><br>
        <div class="col-auto">
            <i class="bi bi-house"></i>
            <label for="exampleInputEmail1" class="form-label">Digite las características de la estadía</label>
            <input type="text" class="form-control" id="teInput" value="<?php echo $vec[3] ?>" name="car">
        </div>
        <div class="col-auto">
            <i class="bi bi-geo-alt-fill"></i>
            <label for="exampleInputEmail1" class="form-label">Digíte el destino</label>
            <input type="text" class="form-control" id="teInput" aria-describedby="te" value="<?php echo $vec[4] ?>" name="dest">
        </div><br>
        <div class="col-auto">
        <select class="form-select" aria-label="Default select example" name="hue">
            <option value="<?php echo $vec[5] ?>"><?php echo $vec[5] ?></option>
            <option value="1 persona">1 Persona</option>
            <option value="2 Personas">2 Personas</option>
            <option value="3 Personas">3 Personas</option>
            <option value="4 Personas">4 Personas</option>
            <option value="5 personas">5 Personas</option>
          </select>
          </div><br><br>
        <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>       
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js" ></script>
</body>
</html>