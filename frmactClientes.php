<?php   
include 'conexion.php';
//en este codigo apartir de la llave primaria , trayendo los registros desde la base de datos
$cedula=$_GET['id'];
//creo la consulta
$query="SELECT * FROM clientes where cedula=$cedula";
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
      <h1>Registrar usuario</h1>
      <form method="post" action="updateClientes.php">
      <form class="needs-validation" novalidate>  
         <div class="col-auto">
            <i class="bi bi-card-heading"></i>
            <label for="exampleInputEmail1" class="form-label">Ingrese el numero de su cédula</label>
            <input type="number" class="form-control" id="cedulaInput" aria-describedby="cedula" value="<?php echo $vec[0];?>" name="id">
         </div><br>
         
         <div class="col-auto">
            <i class="bi bi-person"></i>
            <label for="exampleInputEmail1" class="form-label">Ingrese su nombre</label>
            <input type="text" class="form-control" id="nombreInput" aria-describedby="nombre" value="<?php echo $vec[1];?>" name="nom">
         </div>
         <div class="col-auto">
            <i class="bi bi-person-fill"></i>
            <label for="exampleInputEmail1" class="form-label">Ingrese su apellido</label>
            <input type="text" class="form-control" id="apellidoInput" aria-describedby="apellido" value="<?php echo $vec[2];?>" name="ape">
         </div>
         <div class="col-auto">
            <i class="bi bi-envelope"></i>
            <label for="InputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" aria-describedby="email" value="<?php echo $vec[3];?>" name="email">
         </div><br> 
          
         <div class="col-auto">
            <select class="form-select" aria-label="Default select example" name="tipo_doc">
                <option value="<?php echo $vec[4];?>"><?php echo $vec[4];?></option>
                <option value="Registro civil de nacimiento">Registro civil de nacimiento</option>
                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                <option value="Tarjeta de extranjería">Tarjeta de extranjería </option>
                <option value="Pasaporte">Pasaporte</option>
            </select>
          </div><br>

          <div class="col-auto">
            <i class="bi bi-phone"></i>
            <label for="exampleInputEmail1" class="form-label">Ingrese el numero de celular</label>
            <input type="number" class="form-control" id="celularInput" aria-describedby="celular" value="<?php echo $vec[5];?>" name="num_cel">
          </div>
          <div class="col-auto">
            <i class="bi bi-calendar"></i>
            <label for="exampleInputEmail1" class="form-label">Ingrese su fecha de nacimiento</label>
            <input type="date" class="form-control" id="fechaInput" aria-describedby="fecha" value="<?php echo $vec[6];?>" name="fec_nac">
          </div><br>
          <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
      </form>
    </div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="Estadia.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Transporte.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Estadia.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Clientes.php">4</a></li>
    <li class="page-item">
      <a class="page-link" href="index.php" aria-label="Next">
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
