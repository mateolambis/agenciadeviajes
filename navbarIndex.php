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
  color: white;
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
  color: white;
  font-weight: 600;
  transition: 0.7s;
  padding: 8px;
}

li a:hover{
  background: white;
  transition: 0.5s;
  border-radius: 10px;
  color: black;
}

header a:hover{
  color: black;
}

header .navbar:hover{
  background: white;
  transition: 0.5s;
  color: black;
  border-radius: 10px;
}


.zona1{
  position: relative;
  background: url(imagenes/fondo.jpeg);
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
  color: white;
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
      <img style="width: 100px; height: 90px" src="imagenes/logo.png" alt="Logo Blue Sea">
        <nav>
          <ul>  
            <li>
              <a href="nosotros.php">Nosotros</a>
            </li>
            <li>
              <a href=".php">Contactanos</a>
            </li>
          </ul>
        </nav>
  </header> 
  <section class="zona1"><br><br><br><br>
    <h1>El Mundo Te Espera</h1>  
    <p>Somos tu agencia de confianza</p>
      <a href="https://wa.me/573122960449">Escribenos</a> 
  </section>

  <script type="text/javascript">
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("abajo", window.scrollY>0);
    })
  </script>
    