<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logob2.png">
    <title>Contacto | Ferretería Jotta-R</title>
    <style>
body {
  font-family: 'Crimson Pro', serif;
  font-size: 20px;
  zoom: 75%;
  background-color: #fff;
}

a:hover{
  color: #fd0839;
  text-decoration: none;
  opacity: 0.8;
  align-content: center;
}

.fijo {
  position: fixed;
  z-index: 9999;
  min-width: 100%;
}

.nav-link{
  text-decoration: none;
}

.fijo ul li a {
  display: block;
  pointer-events: auto;
  text-decoration: none;
  color: #333;
}

.aa:hover{
  opacity: 2;
}

.modal fade{
  pointer-events: none;
}

.d-flex{
  pointer-events: auto;
}

.navbar-brand{
  pointer-events: auto;
}

.nav-link{
  pointer-events: auto;
}

.container .card{
  border-radius: 8px;
  box-shadow: 0 2px 2px rgba(0,0,0,0.2);
  overflow: hidden;
  transition: all 0.25s;
}

#whatsapp-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  
}

#whatsapp-button img {
  width: 60px;
  height: 60px;
}

.info-box {
  background-color: #fff;
  width: 1010px;
  margin: 20px auto;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.info-box h1 {
 font-size: 24px;
 text-align: center;
 color: #333;

}

.info-box p {
  font-size: 20px;
  line-height: 1.5;
  color: #666;
}

.info-box a {
 text-decoration: none;
 color: #0078d4;
}

.info-box a:hover {
  text-decoration: underline;
}

hr{
 border: 1px solid red; /* Cambia el color de la barra horizontal a rojo */
 margin: 10px 0; /* Añade un margen superior e inferior para separación visual */
}

.container1{
  text-align:  center;
}
    </style>
</head>
 
     <!--Menu Principal-->

<body>
<div class="fijo">
<nav class="navbar navbar-expand-lg navbar-dark bg-" style="background-color: #CA0403;">
        <li class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Ferreteria Jotta-R" >
          <a href="inicio.php"  ><img src="img/logob2.png" width="90" height="90"></img></a>
          </li>
        <div class="container">
          <a class="navbar-brand" href="inicio.php" >INICIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="nosotros.php">NOSOTROS</a>
              </li>
              <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link" class="btn dropdown-toggle "  type="button" style="color: #fff;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  SERVICIOS <i class="fa-sharp fa-solid fa-chevron-up fa-rotate-180 fa-xs" style="color: #f7f7f7;"></i>
              </a>
                <ul  class="dropdown-menu dropdown-menu-danger" >
                  <li><a class="dropdown-item" href="cotizacion.php"><i class="fa-solid fa-tag" style="color: #e40c0c;" ></i> &nbsp; COTIZACION</a></li>
                </ul>
              </div>
              <li class="nav-item">
                <a class="nav-link active"  aria-current="page" href="contacto.php"> CONTACTO</a>
              </li>
              <div class="dropdown" >
                <a class="nav-link" class="btn dropdown-toggle" type="button" style="color: #fff;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  PRODUCTOS <i class="fa-sharp fa-solid fa-chevron-up fa-rotate-180 fa-xs" style="color: #f7f7f7;"></i>
              </a>
                <ul  class="dropdown-menu dropdown-menu-danger" >
                <li> <a class="dropdown-item" href="productos.php">  <i class="fa-solid fa-list" style="color: #e40c0c;"></i> 
                &nbsp;   TODOS
                </a></li>
                  <li><a class="dropdown-item" href="hogar.php"><i class="fa-solid fa-house" style="color: #e40c0c;"></i> &nbsp;   HOGAR</a></li>
                  <li><a class="dropdown-item" href="plomeria.php"> <i class="fa-solid fa-toilet" style="color: #e40c0c;"></i> &nbsp; PLOMERIA</a></li>
                  <li><a class="dropdown-item" href="pinturas.php"> <i class="fa-solid fa-palette" style="color: #e40c0c;"></i> &nbsp; PINTURAS</a></li>
                  <li><a class="dropdown-item" href="electricos.php"> <i class="fa-solid fa-bolt" style="color: #e40c0c;"></i> &nbsp; ELÉCTRICOS</a></li>
                  <li><a class="dropdown-item" href="construccion.php"> <i class="fa-solid fa-person-digging"  style="color: #e40c0c;"></i> &nbsp;CONSTRUCCIÓN</a></li>
                  <li><a class="dropdown-item" href="bombillos.php"><i class="fa-solid fa-lightbulb"  style="color: #e40c0c;"></i> &nbsp; BOMBILLOS</a></li>
                </ul>
              </div>
            </ul>
          </ul>
          <li class="navbar-nav">
             <i class="fa-solid fa-envelope" style="color: #f7f9fd;"></i>
             &nbsp; &nbsp;
             <i class="fa-solid fa-location-dot" style="color: #f7f9fd;"></i>
             &nbsp; &nbsp;
             <i class="fa-solid fa-phone" style="color: #f7f9fd;"></i>
             &nbsp; &nbsp;
             <i class="fa-solid fa-truck-fast" style="color: #f5f5f5;"></i>
             </li>
          </div>
        </div>
      </nav>
</div>

<br><br><br><br><br>

<!--Informacion de contacto-->

<div class="container1">
<h3><i class="fa-solid fa-phone fa-xs" style="color: #f50f0f;"></i> &nbsp;Comunícate con nosotros!</h3>
<hr>
<br>
</div>
     <div class="info-box">
      <h1><b>Información:</b></h1>
      <p class="card-text"> <i class="fa-solid fa-shop" style="color: #0a0a0a;"></i> &nbsp; Calle Higüey 2, Santo Domingo, Republica Dominicana.</p>
      <p class="card-text"><i class="fa-solid fa-phone" style="color: #0c0d0d;"></i> &nbsp; 809-530-1437</p>
      <a href="https://api.whatsapp.com/send?phone=8293426347" style="text-decoration: none;" target="_blank" rel="noopener" >
      <p class="card-text"><i class="fa-solid fa-comments" style="color: #0a0a0a;"></i> &nbsp; 829-342-6347</p>
 </a>
    <a href="mailto:ferreteriajr.2@gmail.com?subject=subject text" target="_blank" rel="noopener" style="text-decoration: none;" >
    <p class="card-text"><i class="fa-solid fa-envelope" style="color: #070808;"></i> &nbsp; ferreteriajr.2@gmail.com</p>
    </a>
    </div>
    <div>
    <div id="whatsapp-button">
    <a href="https://www.google.com/maps/place/Ferreteria+JOTTA-R/@18.45137,-69.96489,16z/data=!4m6!3m5!1s0x8ea561f1912b43f7:0xa3448816e8d09726!8m2!3d18.4513696!4d-69.9648904!16s%2Fg%2F11c5xdcm8s?hl=es-419&entry=ttu" title="Ubicación" style="background-color: transparent;" target="_blank">
  <i class="fa-solid fa-map-location-dot fa-2xl" style="color: #82aff8;"></i>
   <br>
   <br>
 <a href="tel:+8095371825" title="Telefono Directo" style="background-color: transparent;" target="_blank">
 <i class="fa-solid fa-phone fa-2xl" style="color: #020f6e;"></i>
    <br>
    <br>
    <a href="https://api.whatsapp.com/send?phone=8293426347" title="Whatsapp Directo" style="background-color: transparent;" target="_blank">
    <i class="fa-brands fa-whatsapp fa-2xl" style="color: #2def1f;"></i>
    <br>
   <br>
   <a href="mailto:ferreteriajr.2@gmail.com?subject=subject text"  title="Correo Directo" style="background-color: transparent;" target="_blank">
   <i class="fa-solid fa-envelope fa-2xl" style="color: #092fec;"></i>
   </a>
</div>
</div>

<!--Formulario de contacto en linea-->

<div class="container1">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card1">
                <div class="card-header bg-danger text-white " >
                    <h4> <i class="fa-solid fa-address-book fa-xs" style="color: #effbfb;"></i> &nbsp;Formulario de contacto</h4>
                    </div>
                    <div class="card-body">
                    <form action="contact.php" method="post">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre o Empresa <i class="fa-solid fa-asterisk fa-2xs" style="color: #e3020a;"></i></label>
                            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre o Empresa">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico <i class="fa-solid fa-asterisk fa-2xs" style="color: #e3020a;"></i></label>
                            <input type="email" class="form-control" id="email" placeholder="nombre@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje <i class="fa-solid fa-asterisk fa-2xs" style="color: #e3020a;"></i></label>
                            <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger">Enviar</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br>

     <!--Pie de pagina-->

        <div class="container1">
        <div class="container">
        <footer class="pie_pagina rounded" style="background-color: #CA0403;">
        <br>
        <div class="container" style="color:#fff" >
        <img style="margin-left: 840px;" width="150" src="img/tarjeta.png" >
        <h4 style="color:#fff" >SIGUENOS!</h4>
        <li class="nav-link">
        <a href="https://www.instagram.com/ferreteriajotta.r/?hl=es-la" target="_blank" rel="noopener">
        <i class="fa-brands fa-instagram " style="color: #f7f7f8;"></i></a>&nbsp;
        <a href="https://www.youtube.com/@FerreteriaJotta-R" target="_blank" rel="noopener" >
        <i class="fa-brands fa-youtube" style="color: #f6f7f9;"></i></a>&nbsp;
        <a href="https://www.facebook.com/ferreteriajotta.r" target="_blank" rel="noopener">
        <i class="fa-brands fa-facebook " style="color: #fafafa;"></i></a>&nbsp;
        <a href="https://www.google.com/search?q=Ferreteria+JOTTA-R&stick=H4sIAAAAAAAA_-NgU1I1qLBITTQ1M0wztDQ0SjIxTjO3MqhINDYxsbAwNEu1SDGwNDcyW8Qq5JZaVJRaklqUmajg5R8S4qgbBAAQ6KcnPgAAAA&hl=es-419&mat=CS9Gc3mrRgX2ElYBeenfiIAh5igBiDrIRyrwST16V58WjeUQyJWsRdYAwl0L1aKSbOQrvobhDCa6aLXzNrRo0kaKEixRIi20u2cAa5uAb6NCnLQEUTLQZ32wA0zTybq_9g&authuser=0" target="_blank" rel="noopener">
        <i class="fa-solid fa-shop" style="color: #eceff3;"></i></a>
        <div class="container" style="color:#fff"><br>
        <hr style="border: 1px solid white;"> &copy; 2024 - <b> Ferreteria Jotta-R </b> - Todos los Derechos Reservados
        </a>
        </div>
      </nav>  
    </div>
  </div>
</footer>
          
</body>
</html>