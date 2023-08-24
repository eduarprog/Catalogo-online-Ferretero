<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logob2.png" type="image/x-icon">
    <title>Nosotros | Ferreteria Jotta-R</title>
    <style>
      body {
        font-family: 'Crimson Pro', serif;
        font-size: 20px;
        background-color: #EAECEC;
      }
      .fijo {
  position: fixed;
z-index: 9999;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
  ;
  
}

.fijo ul li {
  float: left;
  
}

.fijo ul li a {
  display: block;
  text-decoration: none;
  color: #333;
}

a:hover{
  color: #fd0839;
  text-decoration: none;
  opacity: 0.8;
  align-content: center;
}
#whatsapp-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 9999;
 
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


    </style>
  
</head>

<script>
  window.onscroll = function() {
  var whatsappButton = document.getElementById("whatsapp-button");
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollPosition > 100) {
    whatsappButton.style.opacity = "1";
 
  }
};
</script>
  <!--Menu Principal-->

<body>
  <div class="fijo">
    <nav class="navbar navbar-expand-lg navbar-dark bg-" style="background-color: #CA0403;">
        <link rel="shortcut icon" href="img/logob2.png" type="image/x-icon">
        <li class="nav-link">
          <a href="inicio.php"  ><img src="img/logob2.png" width="65" height="65"></img></a>
          </li>
        <div class="container">
          <a class="navbar-brand" href="inicio.php">INICIO</a>
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
                <a class="nav-link active" aria-current="page" href="contacto.php">CONTACTO</a>
              </li>
              <div class="dropdown" >
                <a class="nav-link"
                <button class="btn dropdown-toggle" type="button" style="color: #fff;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  PRODUCTOS <i class="fa-sharp fa-solid fa-chevron-up fa-rotate-180" style="color: #f7f7f7;"></i>
                </button>
              </a>
              
                <ul  class="dropdown-menu dropdown-menu-danger" >
                <li> <a class="dropdown-item" href="index.php">  <i class="fa-solid fa-list" style="color: #e40c0c;"></i> 
                &nbsp;   TODOS
                </a></li>
                  <li><a class="dropdown-item" href="hogar.php"><i class="fa-solid fa-house" style="color: #e40c0c;"></i> &nbsp;   HOGAR</a></li>
                  <li><a class="dropdown-item" href="plomeria.php"> <i class="fa-solid fa-toilet" style="color: #e40c0c;"></i> &nbsp; PLOMERIA</a></li>
                  <li><a class="dropdown-item" href="pinturas.php"> <i class="fa-solid fa-palette" style="color: #e40c0c;"></i> &nbsp; PINTURAS</a></li>
                  <li><a class="dropdown-item" href="electricos.php"> <i class="fa-solid fa-bolt" style="color: #e40c0c;"></i> &nbsp; ELECTRICOS</a></li>
                  <li><a class="dropdown-item" href="construccion.php"> <i class="fa-solid fa-person-digging"  style="color: #e40c0c;"></i> &nbsp;CONSTRUCCION</a></li>
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

      <!--Informacion de la empresa-->

        </div> 
    </div>

        <br>
        <br>
        <br>
        <br>
        
        
        <div class="container">
    
        <div class="row featurette">
          <div class="col-md-7">

            <h2 class="featurette-heading"><i class="fa-solid fa-minus fa-2xs" style="color: #ee1111;"></i>&nbsp;¿Quiénes Somos? <span class="text-muted"></span></h2>
            
            <h4 class="lead" >
              Somos una empresa encargada de servirles con todas sus necesidades y venderles productos de buena calidad a buenos precios y que cumplan con sus estandares.
<br>
              <br>
              <br>
              <h2 class="featurette-heading" ><i class="fa-solid fa-minus fa-2xs" style="color: #ee1111;"></i> &nbsp; Misión<span class="text-muted"></span></h2>
            
            <h4 class="lead">
              Proporcionar soluciones para la construcción, preparación y mejoramiento del entorno, con su servicio a tiempo y un equipo comprometido.
<br>
<br>
              <br>
              <h2 class="featurette-heading" ><i class="fa-solid fa-minus fa-2xs" style="color: #ee1111;"></i>&nbsp; Visión<span class="text-muted"></span></h2>
            
            <h4 class="lead">
              Ser líderes en el mercado de ferretería, construcción y decoración, ofreciendo un servicio rápido y eficiente basado en la innovación continúa y con la gente más especializada.
          </div>

          
         
          <div class="col-md-5 order-md-1">
            <img src="img/Logoi.png" class="rounded mx-auto d-block"  width="400" height="400" >
    
          </div>
        </div>
          
        
        <div id="whatsapp-button">
  <a href="https://www.google.com/maps/place/Ferreteria+JOTTA-R/@18.45137,-69.96489,16z/data=!4m6!3m5!1s0x8ea561f1912b43f7:0xa3448816e8d09726!8m2!3d18.4513696!4d-69.9648904!16s%2Fg%2F11c5xdcm8s?hl=es-419&entry=ttu" title="Ubicación" style="background-color: transparent;" target="_blank">
  <i class="fa-solid fa-map-location-dot fa-2xl" style="color: #82aff8;"></i>
  <br>
  <br>
  <a href="mailto:ferreteriajr.2@gmail.com?subject=subject text"  title="Correo Directo" style="background-color: transparent;" target="_blank">
  <i class="fa-solid fa-envelope fa-2xl" style="color: #092fec;"></i>
  
  
   
  </a>
</div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2" >
            <center>
            <h2 class="featurette-heading"><i class="fa-solid fa-business-time fa-2xs" style="color: #f20707;"></i>&nbsp;Servicios<span class="text-muted"></span></h2>
            <center>
            <p class="lead"></p>
            <h4 class="lead" >
              - Brindamos al cliente la ayuda y guia a la hora de comprar algun producto.
                <h4 class="lead" >
                  - Ventas al por mayor y al detalle.
                  <h4 class="lead" >
                    - Realizamos cotizaciones de productos via whatsapp.
                    <h4 class="lead" >
                      - Encargamos productos pero con la mitad paga por antelación
          </div>
          
          <div class="col-md-5 order-md-1">
            <img src="img/servicio1.png" class="rounded mx-auto d-block"  width="200" height="200" >
            
          </div>
        </div>
   
        
    
        <hr class="featurette-divider">
    <div class="container">

    <div class="row featurette">
      <div class="col-md-7">
        <center>
        <h2 class="featurette-heading"><i class="fa-solid fa-wand-magic-sparkles fa-2xs" style="color: #e01515;"></i> &nbsp;Novedades <span class="text-muted"></span></h2>
      </center>
        <p class="lead"></p>
        <center>
        <h4 class="lead">
          - Aceptamos efectivo y tarjeta de credito.
          <h4 class="lead">
            - Abrimos los dias feriados hasta las 12PM.
            <h4 class="lead">
              - Estamos tambien respondiendo sus inquietudes por instagram y facebook.
              <h4 class="lead">
                - Proximamente estaremos realizando envios en materiales de construcción.
          </center>
      </div>
      
      <div class="col-md-5">
        <center>
          <h2 class="featurette-heading"><i class="fa-solid fa-image fa-2xs" style="color: #da0707;"></i> &nbsp;Galeria<span class="text-muted"></span></h2>
        </center>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img  src="img/frente.jpg" width="400px"  height="400px" class="d-block w-100 rounded" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Almacen</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/p2.jpeg" class="d-block w-100 rounded" width="400px"  height="400px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Local</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Frente.logosg.JPG" class="d-block w-100 rounded" width="400px"  height="400px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Local | Productos</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Frente.logosg.JPG" class="d-block w-100 rounded" width="400px"  height="400px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Local | Productos</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Frente.logosg.JPG" class="d-block w-100 rounded" width="400px"  height="400px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Local | Productos</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Frente.logosg.JPG" class="d-block w-100 rounded" width="400px"  height="400px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Local | Productos</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Frente.logosg.JPG" class="d-block w-100 rounded" width="400px"  height="400px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Local | Productos</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Frente.logosg.JPG" class="d-block w-100 rounded" width="400px"  height="400px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Local | Productos</h5>
                
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <br>
   <!--Pie de pagina-->

   <center>
      <footer class="border-top footer text-muted" style="background-color: #CA0403;">
      
      <br>
      <div class="container" style="color:#fff" >
        <h4 style="color:#fff" >SIGUENOS!</h4>
        <li class="nav-link">
        <a href="https://www.instagram.com/ferreteriajotta.r/?hl=es-la" target="_blank" rel="noopener">
        <i class="fa-brands fa-instagram " style="color: #f7f7f8;"></i></a>
        &nbsp;
        <a href="https://www.youtube.com/feed/library" target="_blank" rel="noopener" >
        <i class="fa-brands fa-youtube" style="color: #f6f7f9;"></i></a>
        &nbsp;
        <a href="https://www.facebook.com/ferreteriajotta.r" target="_blank" rel="noopener">
        <i class="fa-brands fa-facebook " style="color: #fafafa;"></i></a>
      &nbsp;
      <a href="https://www.google.com/search?q=Ferreteria+JOTTA-R&stick=H4sIAAAAAAAA_-NgU1I1qLBITTQ1M0wztDQ0SjIxTjO3MqhINDYxsbAwNEu1SDGwNDcyW8Qq5JZaVJRaklqUmajg5R8S4qgbBAAQ6KcnPgAAAA&hl=es-419&mat=CS9Gc3mrRgX2ElYBeenfiIAh5igBiDrIRyrwST16V58WjeUQyJWsRdYAwl0L1aKSbOQrvobhDCa6aLXzNrRo0kaKEixRIi20u2cAa5uAb6NCnLQEUTLQZ32wA0zTybq_9g&authuser=0" target="_blank" rel="noopener">
      <i class="fa-solid fa-shop" style="color: #eceff3;"></i></a>
      </a>
      
        <div class="container" style="color: #fff;">
          
        <hr>
            &copy; 2023 - <b> Ferreteria Jotta-R </b>- Todos los derechos reservado</a>
        </center>
        </div>
    </footer>
    </div>
    <!--Pie de pagina-->


</body>
</html>