<style>
    /*navbar*/
*{
  margin: 0;
  padding: 0;
}

header{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  transition: 0.7s;
  padding: 30px 20px;
  z-index: 10;
}

header.abajo{
  background: white;
  padding: 15px 20px;
}

header .navbar{
  position: relative;
  color: black;
  font-weight: bold;
  font-size: 2em;
  letter-spacing: 2px;
  transition: 1.5s;
  text-decoration: none;
  text-transform: uppercase;
  padding: 5px;
}

nav{
  position: relative;
  display: flex;
  align-items: center;
}

header ul{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

header ul li{
  list-style: none;
  display: inline-block;
  margin: 10px;
}

header ul li a{
  position: relative;
  text-transform: uppercase;
  font-family: helvetica;
  margin: 0 20px;
  text-decoration: none;
  color: black;
  font-weight: 600;
  transition: 0.7s;
  padding: 8px;
}

li a:hover{
  background: white;
  transition: 0.5s;
}

header a:hover{
  color: black;
}

header .navbar:hover{
  background: white;
  transition: 0.5s;
  color: black;
}


.zona1{
  position: relative;
  background: url(imagenes/personas.jpg);
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.zona1 h1{
  font-size: 60px;
  color: white;
}

.zona1 p{
  color: white;
  font-size: 1.5rem;
  padding: 1rem 3rem;
  font-family: helvetica;
}

.zona1 a{
  padding: 1rem 1.5rem;
  color: black;
  font-size: 1rem;
  background: #7DC3E6;
  border-radius: 20px;
  text-decoration: none;
}

.zona1 a:hover{
  transform: scaleY(1.3);
  letter-spacing: 2px;
}

header.abajo .navbar,
header.abajo ul li a{
  color: black;
}

</style>


  <header>
      <a href="index.php" class="navbar">Blue Sea</a>
        <nav>
          <ul>  
            <li>
              <a href="Transporte.php">Transporte</a>
            </li>
            <li>
              <a href="Estadia.php">Estadia</a>
            </li>
            <li>
              <a href="Clientes.php">Registrar usuario</a>
            </li>
          </ul>
        </nav>
  </header> 
  <section class="zona1"><br><br><br><br>
    <h1>El Mundo Te Espera</h1>  
    <p>Somos tu agencia de confianza</p>
      <a href="https://wa.me/573122960449">Cotiza tu viaje</a> 
  </section>

  <script type="text/javascript">
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("abajo", window.scrollY>0);
    })
  </script>
    