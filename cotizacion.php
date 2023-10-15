<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logob2.png" type="image/x-icon">
    <title>Cotización | Ferretería Jotta-R</title>
    <style>
      body {
        font-family: 'Crimson Pro', serif;
        font-size: 20px;
        zoom: 75%;
        background-color: #fff;
      }
      .fijo {
  position: fixed;
z-index: 9999;
  top: 0;
  left: 0;
  min-width: 100%;
 
  
}

a:hover{
  color: #fd0839;
  text-decoration: none;
  opacity: 0.8;
  align-content: center;
}



.fijo ul li a {
  display: block;
  text-decoration: none;
  color: #333;
}


#whatsapp-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  ;
}

#whatsapp-button img {
  width: 60px;
  height: 60px;
}

body::-webkit-scrollbar{
  width: 11px;
}
body::-webkit-scrollbar-thumb{
  background: #CA0403;
  border-radius: 6px;
}
body::-webkit-scrollbar-thumb:hover{
  background: #fd0839;
  
}
hr {
    border: 1px solid red; /* Cambia el color de la barra horizontal a rojo */
    margin: 10px 0; /* Añade un margen superior e inferior para separación visual */
  }


    </style>
</head>

  <!--Menu Principal-->
<body>
<div class="fijo">
<nav class="navbar navbar-expand-lg navbar-dark bg-" style="background-color: #CA0403;">
        <li class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Ferreteria Jotta-R" >
          <a href="inicio.php" ><img src="img/logob2.png" width="90" height="90"></img></a>
          </li>
        <div class="container">
          <a   class="navbar-brand" href="inicio.php" >INICIO</a> 
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
                <a class="nav-link"
                <button class="btn dropdown-toggle "  type="button" style="color: #fff;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  SERVICIOS <i class="fa-sharp fa-solid fa-chevron-up fa-rotate-180" style="color: #f7f7f7;"></i>
                </button>
              </a>
                <ul  class="dropdown-menu dropdown-menu-danger" >
                  <li><a class="dropdown-item" href="cotizacion.php"><i class="fa-solid fa-tag" style="color: #e40c0c;" ></i> &nbsp;COTIZACIÓN</a></li>
                </ul>
              </div>
              <li class="nav-item">
                <a class="nav-link active"  aria-current="page" href="contacto.php">CONTACTO</a>
              </li>
              <div class="dropdown" >
                <a class="nav-link"
                <button class="btn dropdown-toggle" type="button" style="color: #fff;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  PRODUCTOS <i class="fa-sharp fa-solid fa-chevron-up fa-rotate-180" style="color: #f7f7f7;"></i>
                </button>
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
            <i class="fa-solid fa-handshake" style="color: #fcfcfd;"></i>
            &nbsp; &nbsp;
            <i class="fa-solid fa-layer-group" style="color: #f1f4f8;"></i>
            &nbsp; &nbsp;
            <i class="fa-solid fa-shop" style="color: #ffffff;"></i>
            &nbsp; &nbsp;
            <i class="fa-solid fa-circle-info" style="color: #f3f4f7;"></i>
             </li>
          </div>
        </div>
      </nav>
</div>

<!--Espacio menu - contenido-->
    <br>
    <br>
    <br>
    <br>
    <br>
   <br>
      
<!--Texto e imagen para cotizacion-->
      <div class="container">
        <div class="row featurette">
          <div class="col-md-7">
            <h1 class="featurette-heading">COTIZACIÓNES<span class="text-muted"></span></h1>
            <hr>
              <img src="img/cot.png" class="mw-100 rounded"  alt="Cotizacion" >
          </div>
        </div>

        <!--Link directo a whatsapp-->
        <div id="whatsapp-button">
  <a href="https://api.whatsapp.com/send?phone=8293426347" title="Cotización via Whatsapp" style="background-color: transparent;" target="_blank">
  <i class="fa-brands fa-whatsapp fa-2xl" style="color: #2def1f;"></i>
  </a>
</div>

<hr>

<!--Formulario de cotizacion en linea-->
<center>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card1">
                <div class="card-header bg-danger text-white">
                    <h4><i class="fa-solid fa-tags fa-xs" style="color: #f1f4f9;"></i> &nbsp; Formulario de Cotización </h4>
                </div>
                <div class="card-body">
                <form action="cot.php" method="post">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre  <i class="fa-solid fa-asterisk fa-2xs" style="color: #e3020a;"></i></label>
                            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre o Empresa">
                        </div>
                        <div class="mb-3">
                            <label for="rnc" class="form-label">RNC</label>
                            <input type="text" class="form-control" id="rnc" placeholder="Escribre el RNC">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico <i class="fa-solid fa-asterisk fa-2xs" style="color: #e3020a;"></i></label>
                            <input type="email" class="form-control" id="email" placeholder="nombre@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Productos <i class="fa-solid fa-asterisk fa-2xs" style="color: #e3020a;"></i></label>
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

          <hr class="featurette-divider">


        <div class="container">
       
          <h5>*Los precios pueden estar sujetos a cambios.</h5>

          
          <!--Pie de pagina-->
        
        <footer class="pie_pagina rounded" style="background-color: #CA0403;" >
        <br>
        <div class="container" style="color:#fff" >
        <h4 style="color:#fff" >SIGUENOS!</h4>
        <li class="nav-link">
        <a href="https://www.instagram.com/ferreteriajotta.r/?hl=es-la" target="_blank" rel="noopener">
        <i class="fa-brands fa-instagram " style="color: #f7f7f8;"></i></a>
        &nbsp;
        <a href="https://www.youtube.com/@FerreteriaJotta-R" target="_blank" rel="noopener" >
        <i class="fa-brands fa-youtube" style="color: #f6f7f9;"></i></a>
        &nbsp;
        <a href="https://www.facebook.com/ferreteriajotta.r" target="_blank" rel="noopener">
        <i class="fa-brands fa-facebook " style="color: #fafafa;"></i></a>
      &nbsp;
      <a href="https://www.google.com/search?q=Ferreteria+JOTTA-R&stick=H4sIAAAAAAAA_-NgU1I1qLBITTQ1M0wztDQ0SjIxTjO3MqhINDYxsbAwNEu1SDGwNDcyW8Qq5JZaVJRaklqUmajg5R8S4qgbBAAQ6KcnPgAAAA&hl=es-419&mat=CS9Gc3mrRgX2ElYBeenfiIAh5igBiDrIRyrwST16V58WjeUQyJWsRdYAwl0L1aKSbOQrvobhDCa6aLXzNrRo0kaKEixRIi20u2cAa5uAb6NCnLQEUTLQZ32wA0zTybq_9g&authuser=0" target="_blank" rel="noopener">
      <i class="fa-solid fa-shop" style="color: #eceff3;"></i></a>
      </a>
          <div class="container" style="color:#fff" >
          <hr style="border: 1px solid white;">
              &copy; 2023 - <b> Ferreteria Jotta-R </b> - Todos los Derechos Reservados 
            </a>
            </div>
          </nav>
          </div>
      </footer>
      </body>
      </html>