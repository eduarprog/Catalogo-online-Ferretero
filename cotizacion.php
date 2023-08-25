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
    <title>Cotización | Ferreteria Jotta-R</title>
    <style>
      body {
        font-family: 'Crimson Pro', serif;
        font-size: 19px;
        background-color: #EAECEC;
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

.img{
  width: 110%;
  height: auto;
  
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
        
        <li class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Ferreteria Jotta-R" >
          <a  href="inicio.php" ><img src="img/logob2.png" width="65" height="65"></img></a>
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
</div>

    <br>
    <br>
    <br>
    <br>
    
      

      <div class="container">
    
        <div class="row featurette">
          <div class="col-md-7">

            <h1 class="featurette-heading">COTIZACIÓNES<span class="text-muted"></span></h1>
            
            <hr class="featurette-divider">
            
              <img src="img/1.png"  class="img rounded"  alt="Cotizacion" width="600" height="600" >


          
      
          </div>
        </div>

        <div id="whatsapp-button">
  <a href="https://api.whatsapp.com/send?phone=8293426347" title="Whatsapp Directo" style="background-color: transparent;" target="_blank">
  <i class="fa-brands fa-whatsapp fa-2xl" style="color: #2def1f;"></i>
  </a>
  
</div>


<center>
        <hr  class="featurette-divider">
        
          <div class="card text-white bg-danger mb-3" style="max-width: 30rem;">
            <div class="card-header">Cotización via correo</div>
            <div class="card-body">
              <form action="https://formsubmit.co/eduardoantoniosanchezbaez@gmail.com" method="POST">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre o Empresa</span>
                <input required="true" type="text" name="name" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">RNC (opcional)</span>
                <input  type="text" name="name" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input required="true" type="email" name="email" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@ejemplo.com</span>
              </div>
            
              <div class="input-group">
                <span class="input-group-text">Cotizacion:</span>
                <textarea required="true"  name="Mensaje" class="form-control" aria-label="With textarea"></textarea>
              </div>
              
              <br>
              
              <button  type="submit" class="btn btn-outline-light"  > Enviar</button>
              
              <input type="hidden" name="_template" value="box">
              <input type="hidden" name="_subject" value="¡Nuevo envío!">
              <input type="hidden" name="_next" value="http://127.0.0.1:5501/cotizacion.php">
              <input type="hidden" name="_captcha" value="false" >
        
              <br>
              <br>
              <p class="card-text">Te estaremos respondiendo lo mas pronto posible.</p>
            </div>
          </div>
          <hr class="featurette-divider">
        <div class="container">
       
          <h4>*Los precios pueden estar sujetos a cambios*</h4>

          
        
                
    
          
          <!--Pie de pagina-->
        
        <footer class="pie_pagina" style="background-color: #CA0403;" >
        <br>
        <h4 style="color:#fff" >SIGUENOS!</h4>
        <li class="nav-link">
        <a href="https://www.instagram.com/ferreteriajotta.r/?hl=es-la" target="_blank" rel="noopener">
        <i class="fa-brands fa-instagram fa-beat" style="color: #f7f7f8;"></i></a>
        </li>
        <a href="https://www.facebook.com/ferreteriajotta.r" target="_blank" rel="noopener">
        <i class="fa-brands fa-facebook fa-beat" style="color: #fafafa;"></i>
      </a>
          <div class="container" style="color:#fff" >
            

          <hr>
              &copy; 2023 - <b> Ferreteria Jotta-R </b> - Todos los Derechos Reservados
            </a>

            

              
             
            </div>
          </nav>
              
          </div>
          
      </footer>


     



      </body>
      </html>