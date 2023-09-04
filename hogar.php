<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Resto de las etiquetas HEAD ... -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logob2.png" type="image/x-icon">
    <title>Hogar | Ferreteria Jotta-R</title>
    <style>

      body {
        font-family: 'Crimson Pro', serif;
        font-size: 20px;
        zoom: 75%;
        background-image: linear-gradient(135deg,
       #CA0403, #CA0403, #CA0403, #CA0403, #fff);
        background-size: 500%;
        
        
      }

      .fijo {
        pointer-events: none;
  position: fixed;
z-index: 9999;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
  ;
  
}



.fijo ul li a {
  display: block;
  pointer-events: auto;
  text-decoration: none;
  color: #333;
}


a:hover{
  color: #fd0839;
  text-decoration: none;
  opacity: 0.8;
  align-content: center;
}



.card{
  
  border: none;
  background: #eee;
  

}
.search {
  width: 100%;
      margin-bottom: auto;
    margin-top: 20px;
    height: 50px;
        background-color: #fff;
    padding: 10px;
    border-radius: 5px;
}

.search-input {
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    margin-top: 5px;
    caret-color: transparent;
    line-height: 20px;
    transition: width 0.4s linear
}

.search .search-input {
    padding: 0 10px;
    width: 100%;
    caret-color: #536bf6;
    font-size: 19px;
    font-weight: 300;
    color: black;
    transition: width 0.4s linear;
}


.search-icon {
        height: 34px;
    width: 70px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #536bf6;
    font-size: 17px;
        bottom: 30px;
        position: relative;
        border-radius: 5px;
        
        
}

.search-icon:hover{

  color: #fff !important;
}

a:link {
    text-decoration: none;
}



.card-inner {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    border:none;
    cursor: pointer;
    transition: all 2s;
}


.card-inner:hover{

   transform: scale(1.1);

}

.mg-text span{

  font-size: 12px;

}

.mg-text{

  line-height: 14px;
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
.aa{
  padding: 15px;
  color: #fff;
  text-decoration: none;
  border: 1px solid darkred;
  background:  #CA0403;
  display: inline-block;
  box-sizing: border-box;
  opacity: 0.8;
  align-content: center;
 

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

    </style>
</head>
<body>
<div class="fijo">
<nav class="navbar navbar-expand-lg navbar-dark bg-" style="background-color: #CA0403;">
        
        
        <li class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="Ferreteria Jotta-R" >
          <a  href="inicio.php" ><img src="img/logob2.png" width="90" height="90"></img></a>
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
                  <li><a class="dropdown-item" href="electricos.php"> <i class="fa-solid fa-bolt" style="color: #e40c0c;"></i> &nbsp; ELECTRICOS</a></li>
                  <li><a class="dropdown-item" href="construccion.php"> <i class="fa-solid fa-person-digging"  style="color: #e40c0c;"></i> &nbsp;CONSTRUCCION</a></li>
                  <li><a class="dropdown-item" href="bombillos.php"><i class="fa-solid fa-lightbulb"  style="color: #e40c0c;"></i> &nbsp; BOMBILLOS</a></li>
                </ul>
              </div>
              
            </ul>
          </ul>
            
          
          <li class="navbar-nav">
            <i class="fa-solid fa-key " style="color: #fbfcfe;"></i> &nbsp; &nbsp;

            <i class="fa-solid fa-hammer " style="color: #f5f5f5;"></i>
            &nbsp; &nbsp;
            <i class="fa-solid fa-faucet " style="color: #ffffff;"></i>
            &nbsp; &nbsp;
            <i class="fa-solid fa-car-battery" style="color: #f5f5f5;"></i>

             </li>



       
    </nav>
</div>
              

<br>
<br>
<br>

<form class="d-flex" id="form2" name="form2"  method="POST">
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <div class="card p-4 mt-3">
                    <a href="hogar.php" title="Actualizar" class="fa-solid fa-arrows-rotate " style=" background-color: transparent; color: #e20321;"></a>
                    <div class="d-flex justify-content-center px-5">
                        <div class="search">
                            <input type="text"  class="search-input" name="buscar" placeholder="¿Qué estás buscando?">
                            <input type="submit" value="Buscar" class="search-icon" style="background-color: #e20321 ; ">
                           
                            
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<br>


<?php
require 'conexion.php';
$conexion = conexion();
$por_pagina = 3;

if (isset($_GET['pagina']))
    $pagina = $_GET['pagina'];
else
    $pagina = 1;

$empieza = ($pagina - 1) * $por_pagina;

if (!empty($_POST['buscar'])) {
    $buscar = $_POST['buscar'];
    $sql = "SELECT * FROM hogar  WHERE Nombre LIKE '%$buscar%'";
} else {
  
  $sql="SELECT * FROM hogar LIMIT $empieza,$por_pagina";
  
}

$query = mysqli_query($conexion, $sql);
$resultados_encontrados = false;
?>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        if ($query) {
            if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
                    $resultados_encontrados = true;
                    // ... Tu código para mostrar los resultados ...
                    ?>
                     <div class="col">
                        <div class="card shadow-sm " style="max-width: 265px; border-radius: 15px;   ">
                            <center>
                                <img class="card-img-top" width="170" height="170" src="<?php echo $data['ImgRuta']?>">
                            </center>
                            <div class="card-body">
                                <center>
                                    <h5 class="card-title"><?php echo $data['Nombre'] ?></h5><br>
                                    <h5 class="card-title"><?php echo $data['Descripcion'] ?></h5>
                                </center>
                                <br>
                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        
                                    </div>                                   
                                    <p class="card-text" style="color:green"> <b> <?php echo $data ['precio'] ?>$RD</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                }
            } else {
               
            }
        } else {
            
        }
        ?>
    </div>

    <?php
    if (!$resultados_encontrados) {
        echo '<center><img src="img/datosno.png" width="360" height="360" ></center>';
    }
    ?>

    <?php
   $por_pagina=  1;
    $total_registros = mysqli_num_rows($query);
    $total_paginas = ceil($total_registros / $por_pagina);

    echo "<br>
    <center><a style='margin-left: 10px' class='aa' href='hogar.php?pagina=1'>" . 'Anterior' . "</a>";

    for ($i = 1; $i <= $total_paginas; $i++) {
        echo "<a  style='margin-left: 10px' class='aa' href='hogar.php?pagina=" . $i . "'> " . $i . "</a>  ";
    }

    echo "<a  class='aa' style='margin-left: 10px'  href='hogar.php?pagina=$total_paginas'>" . 'Siguiente' . "</a></center>";
    
    
    ?>

<hr>
    <br>
    <center>
      <h3 style="color:#EAECEC"><i class="fa-solid fa-wand-magic-sparkles fa-2xs" style="color: #EAECEC;"></i> &nbsp;Novedades</h3>
    </center>
    <br>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/3.png" class="d-block w-100" class="rounded" width="300px"  height="300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.png" class="d-block w-100" width="300px"  height="300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/1.png" class="d-block w-100" width="300px"  height="300px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/1.png" class="d-block w-100" width="300px"  height="300px" alt="...">
    </div>
  </div>
</div>

<br>

    <br>

<center>
      <footer class="border-top footer text-muted" style="background-color: #CA0403;">
      
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
          <br>
         *Los precios mostrados en esta página pueden variar sin previo aviso.
        <hr>
            &copy; 2023 - <b>Ferreteria Jotta-R</b> - Todos los derechos reservado</a>
           
        </center>
        </div>
    </footer>
    </div>
    <!--Pie de pagina-->

</div>

<!-- ... El pie de página y otros elementos HTML ... -->

</body>
</html>
