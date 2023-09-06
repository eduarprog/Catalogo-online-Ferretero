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
    <title>Ferretería Jotta-R</title>
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
pointer-events: none;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
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
.container .card{
  border-radius: 8px;
  box-shadow: 0 2px 2px rgba(0,0,0,0.2);
  overflow: hidden;
  transition: all 0.25s;

}
.container .card:hover{
    transform: translateY(-15px);
    box-shadow: 0 12px 16px rgba(0,0,0,0.2);
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
          <a href="inicio.php"  ><img src="img/logob2.png" width="90" height="90"></img></a>
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
                  <li><a class="dropdown-item" href="cotizacion.php"><i class="fa-solid fa-tag" style="color: #e40c0c;" ></i> &nbsp; COTIZACION</a></li>
                </ul>
              </div>
              <li class="nav-item">
                <a class="nav-link active"  aria-current="page" href="contacto.php"> CONTACTO</a>
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
             <i class="fa-solid fa-shop" style="color: #fcfdfd;"></i>
             &nbsp; &nbsp;
             <i class="fa-solid fa-cart-shopping" style="color: #f9fafb;"></i>
             &nbsp; &nbsp;
             <i class="fa-solid fa-screwdriver-wrench" style="color: #f8f9fc;"></i>
             &nbsp; &nbsp;
             <i class="fa-brands fa-product-hunt" style="color: #f5f5f5;"></i>
             </li>


       

          </div>
        </div>
      </nav>
</div>



<!--Imagen carrusel-->
<br>
<br>
<br>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/escribenos2.png" width="735px"  height="735px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 translate="no" style="color:#CA0403">Ferreteria Jotta-R</h1>
        <h4 style="color:#CA0403">Materiales de construcción, plomeria, pinturas y mas.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/escribenos2.png"class="d-block w-100" width="750px"  height="750px" alt="...">
      <div class="carousel-caption d-none d-md-block">
     <!-- <button type="button" class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Suscribirse!</button>-->
        <br>
        <h1 translate="no" style="color:#CA0403">Ferreteria Jotta-R</h1>
        <h4>No esperes mas y se uno de los primeros en recibir las ofertas.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/escribenos2.png" class="d-block w-100" width="750px"  height="750px" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1 translate="no" style="color:#CA0403">Ferreteria Jotta-R</h1>
        <h4>Some representative placeholder content for the third slide.</h4>
      </div>
    </div>
  </div>
 
</div>

<div id="whatsapp-button">
<a href="tel:+8095371825" title="Telefono Directo" style="background-color: transparent;" target="_blank">
<i class="fa-solid fa-phone fa-2xl" style="color: #020f6e;"></i>
  <br>
  <br>
  <a href="https://api.whatsapp.com/send?phone=8293426347" title="Whatsapp Directo" style="background-color: transparent;" target="_blank">
  <i class="fa-brands fa-whatsapp fa-2xl" style="color: #2def1f;"></i>
  <br>
 <br>
  <a href="https://g.page/r/CSaX0OgWiESjEB0/review" title="¡Deja una opinión!" style="background-color: transparent;" target="_blank">
  <i class="fa-solid fa-comment fa-2xl" style="color: #e7ca08;"></i>
  </a>
  <br>
  <br>
  <!-- Botón de compartir en Facebook -->
<div class="fb-share-button" data-href="https://www.tusitio.com/tupagina" data-layout="button" data-size="small">
  <a target="_blank" title="Compartir en facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.tusitio.com%2Ftupagina&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa-solid fa-share fa-2xl" style="color: #0c5fed;"></i></a>
</div>
</div>

<br>
<br>
<center>
<h3><i class="fa-solid fa-layer-group fa-2xs" style="color: #f71d1d;"></i> &nbsp;Catalogo</h3>
</center>
<br>


<center>
  <div class="container">
  <div class="row" >
    <div class="col-lg-4">
      <a href="hogar.php">
      <div class="card bg-dark text-white">
  <img src="img/23.png" width="400" height="400" class="card-img" alt="...">
  <div class="card-img-overlay">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h2 class="card-title"><u>Hogar</u></h2>
  </div>
</div>
      </a>
    </div>

    <div class="col-lg-4">
      <a href="plomeria.php">
      <div class="card bg-dark text-white">
  <img src="img/24.png" width="400" height="400" class="card-img" alt="...">
  <div class="card-img-overlay">
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="card-title"><u>Plomeria</u></h2>
  </div>
</div>
</a>
    </div>
    <div class="col-lg-4"> 
      <a href="pinturas.php">
      <div class="card bg-dark text-white">
  <img src="img/p.png" width="400" height="400" class="card-img" alt="...">
  <div class="card-img-overlay">
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="card-title"><u>Pinturas</u></h2>
  </div>
</div>
    </div>
  </div>
</a>
<br>

<center>
  <div class="container">
  <div class="row" >
    <div class="col-lg-4">
      <a href="electricos.php" >
      <div class="card bg-dark text-white">
  <img src="img/7.png" width="400" height="400" class="card-img" alt="...">
  <div class="card-img-overlay">
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="card-title"><u>Eléctricos</u></h2>
  </div>
</div>
      </a>
    </div>
    <div class="col-lg-4">
      <a href="construccion.php" >
      <div class="card bg-dark text-white">
  <img src="img/c.png" width="400" height="400" class="card-img" alt="...">
  <div class="card-img-overlay">
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="card-title" ><u>Construcción</u></h2>
  </div>
</div>
      </a>
    </div>
    <div class="col-lg-4"> 
      <a href="bombillos.php">
      <div class="card bg-dark text-white">
  <img src="img/22.png" width="400" height="400"  class="card-img" alt="...">
  <div class="card-img-overlay">
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="card-title"><u>Bombillos</u></h2>
  </div>
</div>
    </div>
  </div>
</a>

<br>
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <div class="container">

    <div class="row featurette">
      <div class="col-md-7">
        <h3 class="featurette-heading"> <i class="fa-solid fa-handshake fa-2xs" style="color: red;"></i> &nbsp;Ventas al por mayor y al detalle <span class="text-muted"></span></h3>
        <p class="lead"></p>
        <h4 class="lead">
          En articulos como: Luces led, regletas, bombillos, llaves de chorro y entre otros articulos.
      </div>
      
      <div class="col-md-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Aprovecha las ofertas.png" width="400px"  height="400px" class="d-block w-100 rounded" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/ofertas2.png" class="d-block w-100 rounded" width="400px" height="400px" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/ofertas3.png" class="d-block w-100 rounded" width="400px"  height="400px" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>
        </div>
        <br>
      </div>
    </div>

   

    <hr class="featurette-divider">

    
    

    <div class="row featurette">
      
      <div class="col-md-7">
       
    
        <h3 class="featurette-heading"><i class="fa-solid fa-play fa-2xs" style="color: #f50f0f;"  ></i> &nbsp;Videos<span class="text-muted"></span></h3>
          <iframe class="rounded" width="550" height="300" src="https://www.youtube.com/embed/NXBkLV9Pkss?autoplay=1&mute=1" title="Exterior y productos - Ferreteria Jotta-R" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="col-md-5">
        
          <h2 class="featurette-heading"><i class="fa-solid fa-users fa-2xs" style="color: red;"></i> Horario de atención<span class="text-muted"></span></h2>
        
        <h4 class="lead">
          Lunes:	AM8:00–18:00PM
        </h4>
        <h4 class="lead">
          Martes:	AM8:00–18:00PM
        </h4>
        <h4 class="lead">
          Miércoles:	AM8:00–18:00PM
        </h4>
        <h4 class="lead">
          Jueves:	AM8:00–18:00PM
        </h4>
        <h4 class="lead">
          Viernes:	AM8:00–18:00PM
        </h4>
       
        <h4 class="lead">
          Sábado:	AM8:00–18:00PM
        </h4>
        <h4 class="lead">
          Domingo: AM8:00–13:00PM
        </h4>
      </div>
    </div>
    

  <hr  class="featurette-divider">
<center>
<h3><i class="fa-solid fa-location-dot fa-xs" style="color: #f50f0f;"></i> Ubicación</h3>
        </center>
<iframe class="rounded mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.712139073683!2d-69.96746532590201!3d18.45137467128643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea561f1912b43f7%3A0xa3448816e8d09726!2sFerreteria%20JOTTA-R!5e0!3m2!1ses-419!2sdo!4v1681958612367!5m2!1ses-419!2sdo" width="1070" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


<hr>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card1">
                <div class="card-header bg-danger text-white " >
                    <h4><i class="fa-solid fa-message fa-xs" style="color: #fafcff;"></i> &nbsp; Formulario de opiniones</h4>
                </div>
                <div class="card-body">
                    <form action="correo.php" method="post">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre <i class="fa-solid fa-asterisk fa-2xs" style="color: #e3020a;"></i></label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required="" placeholder="Tu nombre">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico <i class="fa-solid fa-asterisk fa-2xs" style="color: #e3020a;"></i></label>
                            <input type="email" class="form-control" id="email" name="email" required="" placeholder="nombre@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje <i class="fa-solid fa-asterisk fa-2xs" style="color: #e3020a;"></i></label>
                            <textarea class="form-control" id="mensaje" rows="4" name="mensaje" required="" placeholder="Escribe tu mensaje aquí"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger" id="btnSend" >Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  <br>

     <!--Contacto via correo directo-->
     <div class="container">

    





       

<!--Pie de pagina-->
        
        <footer class="pie_pagina rounded" style="background-color: #CA0403; " >
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