

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <script src="https://kit.fontawesome.com/f97fcd2c02.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logob2.png" type="image/x-icon">
    <title>Productos | Ferreteria Jotta-R</title>
    <style>
      body {
        font-family: 'Crimson Pro', serif;
        font-size: 19px;
      }
      .carousel {
  display: flex;
  overflow: hidden;
}

.carousel__card {
  width: calc(100% / 3);
  flex-shrink: 0;
  /* Resto de los estilos */
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
    width: 34px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #536bf6;
    font-size: 10px;
        bottom: 30px;
        position: relative;
        border-radius: 5px;
}

.search-icon:hover{

  color: #fff !important;
}

a:link {
    text-decoration: none
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
.container .card:hover{
    transform: translateY(-15px);
    box-shadow: 0 12px 16px rgba(0,0,0,.2);
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-" style="background-color: #CA0403;">
        <link rel="shortcut icon" href="img/logob2.png" type="image/x-icon">
        <li class="nav-link">
          <a href="inicio.php"  ><img src="img/logob2.png" width="90" height="90"></img></a>
          </li>
        <div class="container-fluid">
          <a class="navbar-brand" href="inicio.php">INICIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="nosotros.html">NOSOTROS</a>
              </li>

              

              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contacto.html">CONTACTO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="productos.html">PRODUCTOS</a>
              </li>
            
            
            </ul>

           


      </nav>

      

    
      
      <!--
      <br>
      <div class="container">
      <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
      <form class="d-flex" id="form3" name="form3"  method="POST">
              <select class="form-select form-select-sm" aria-label=".form-select-lg example"  name="buscar" >
              <option selected >Filtrar por:</option>
  <option  value="lklkl">lklkl</option>
  <option value="value">value</option>
  <option value="Diablito">Diablito</option>
              <input class="btn btn-outline-dark" value="Filtrar"  data-bs-placement="top" type="submit"></button>
            </form>
          </div>
        </div>
      </nav>
-->


      <?php


require 'conexion.php';
$conexion=conexion();

$por_pagina=6;
    if(isset($_GET['pagina']))
    $pagina=$_GET['pagina'];

    else{
        $pagina=1;
    }

    $empieza=($pagina-1) * $por_pagina;
    $sql="SELECT * FROM producto LIMIT $empieza,$por_pagina";
    $data=mysqli_query($conexion,$sql);
 




?>

<?php

if (!empty($_POST['buscar'])){
    $buscar=$_POST['buscar'];
    $sql="SELECT * FROM producto  WHERE Nombre LIKE '%$buscar%' OR Descripcion LIKE '%$buscar%'";
    

}else{
  $empieza=($pagina-1) * $por_pagina;
  $sql="SELECT * FROM producto LIMIT $empieza,$por_pagina";
  $data=mysqli_query($conexion,$sql);

}
   

?>

<?php
$query=mysqli_query($conexion,$sql);
if($query){
    while($data=mysqli_fetch_assoc($query)){
      
    ?>


<br>
<main>
  

                 
                 
                 
                
                 <div class="container">
                     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                         <?php foreach($query as $data) { 
      ?>
                     <div class="text-center">
                     <div class="col">
    <div class="card shadow-sm">
        <center>
                         <img src="<?php echo $data ['ImgRuta'] ?>" width="80" class="rounded-circle">
                         </center>
                         <h3 class="mt-2"><?php echo $data['Nombre']?></h3>
                         <span class="mt-1 clearfix"><?php echo $data ['Descripcion'] ?></span>
                         <small class="mt-4"><?php echo $data ['precio'] ?></small>
                         
                         <div class="social-buttons mt-5"> 
                             <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button> 
                             <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> 
                             <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button> 
                             <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button> 
                              
                         </div>
                     
                     </div>
                     
                 
                 </div>
                     </div>
    
                     <?php } ?>




    <?php


$sql="SELECT * FROM producto";
$data=mysqli_query($conexion,$sql);



$por_pagina=6;
$total_registros=mysqli_num_rows($data);
$total_paginas=ceil($total_registros/$por_pagina);

echo "<center><a href='index.php?pagina=1'>" .'Anterior'. "</a>";

for($i=1; $i<=$total_paginas; $i++)

{
  echo"<a  href='index.php?pagina=".$i."'> ".$i."</a> ";
}

echo"<center><a href='index.php?pagina=$total_paginas'>" .'siguiente'."</center></a>";


       





?>


 



    
    </div>
    
    <br>
    <!--Pie de pagina-->

<center>
      <footer class="border-top footer text-muted" style="background-color: #CA0403;">
      
      <br>
      <h4 style="color:#fff">SIGUENOS!</h4>
        <li class="nav-link">
        <a href="https://www.youtube.com/watch?v=QEa1SvZlWtY">
        <i class="fa-brands fa-instagram fa-beat" style="color: #f7f7f8;"></i></a>
        </li>
        <a href="">
        <i class="fa-brands fa-facebook fa-beat" style="color: #fafafa;"></i>
      </a>
      
        <div class="container" style="color: #fff;">
          
        <hr>
            &copy; 2023 - Ferreteria Jotta-R - Todos los derechos reservado</a>
        </center>
        </div>
    </footer>
    </div>
    <!--Pie de pagina-->



    

<?php






    }
}else




{

  
  echo '



  <center>
      <footer class="border-top footer text-muted" style="background-color: #CA0403;">
        <div class="container" style="color: #fff;">
          
            &copy; 2023 -  Ferreteria Jotta-R - Todos los derechos reservado</a>
        </center>
        </div>
    </footer>
    </div>
    <!--Pie de pagina-->
  
  

    ';
}
?>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<?php foreach($query as $data ) { ?>
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header" style="background-color: #CA0403;">
    
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $data ['Nombre']; ?></h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <center>
    <img width="300px" height="300px" src="<?php echo $data['ImgRuta']?>">
    </center>
<br>
        <h4 class="modal-titile">Descripcion:</h4>
      <?php echo $data ['Descripcion']; ?>
      </div>
     
      
      </div>
    </div>
    
    <?php } ?>
  </div>
  
</div>


<!-- Bootstrap 4.5 css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<div class="container my-4 w-50">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <!-- Diapositivas -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card h-100">
                        <img src="https://i.stack.imgur.com/yyE56.png" class="card-img-top w-100 bg-dark" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title 1</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card h-100">
                        <img src="https://i.stack.imgur.com/yyE56.png" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title 2</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card h-100">
                        <img src="https://i.stack.imgur.com/yyE56.png" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title 3</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controles -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div><!--//container-->
    
<!-- jQuery full con ajax -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<!-- Bootstrap 4.5 js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


<div class="carousel">
  <div class="carousel__card">Contenido de la tarjeta 1</div>
  <div class="carousel__card">Contenido de la tarjeta 2</div>
  <div class="carousel__card">Contenido de la tarjeta 3</div>
  <!-- Agrega más tarjetas según tus necesidades -->
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.querySelector('.carousel');
  const cards = document.querySelectorAll('.carousel__card');
  const cardWidth = cards[0].offsetWidth;
  const numVisibleCards = 3;
  let isScrolling = false;
  
  carousel.addEventListener('wheel', function(event) {
    event.preventDefault();
    carousel.scrollLeft += event.deltaY;
    clearTimeout(isScrolling);
    isScrolling = setTimeout(function() {
      const scrollPos = Math.round(carousel.scrollLeft / cardWidth);
      carousel.scrollTo({
        left: scrollPos * cardWidth,
        behavior: 'smooth'
      });
    }, 100);
  });
});

</script>

<h2>Formulario de contacto</h2>
    <form action="enviar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>


    <?php
// Inicializar los contadores
$likes = 0;
$dislikes = 0;

// Comprobar si ya existen cookies para likes y dislikes
if (isset($_COOKIE['likes'])) {
    $likes = $_COOKIE['likes'];
}

if (isset($_COOKIE['dislikes'])) {
    $dislikes = $_COOKIE['dislikes'];
}

// Procesar votos
if (isset($_POST['like'])) {
    $likes++;
    setcookie('likes', $likes, time() + 3600 * 24 * 30); // Cookie válida por 30 días
} elseif (isset($_POST['dislike'])) {
    $dislikes++;
    setcookie('dislikes', $dislikes, time() + 3600 * 24 * 30);
}

// Mostrar los contadores y botones de votación
echo "Likes: $likes Dislikes: $dislikes<br>";
?>
<form method="post">
    <button type="submit" name="like">Like</button>
    <button type="submit" name="dislike">Dislike</button>
</form>

<?php
// Función para obtener el contador actual
function obtenerContador($archivo) {
    if (file_exists($archivo)) {
        return intval(file_get_contents($archivo));
    } else {
        return 0;
    }
}

// Función para incrementar el contador
function incrementarContador($archivo) {
    $contador = obtenerContador($archivo);
    $contador++;
    file_put_contents($archivo, $contador);
}

// Archivos para los contadores de likes y dislikes
$archivoLikes = 'likes.txt';
$archivoDislikes = 'dislikes.txt';

// Procesar votos
if (isset($_POST['like'])) {
    incrementarContador($archivoLikes);
} elseif (isset($_POST['dislike'])) {
    incrementarContador($archivoDislikes);
}

// Mostrar los contadores y botones de votación
echo "Likes: " . obtenerContador($archivoLikes) . " Dislikes: " . obtenerContador($archivoDislikes) . "<br>";
?>
<form method="post">
    <button type="submit" name="like">Like</button>
    <button type="submit" name="dislike">Dislike</button>
</form>








<script>
    // Deshabilitar el envío automático del formulario al cargar la página
    document.addEventListener("DOMContentLoaded", function() {
        var likeButton = document.querySelector('button[name="like"]');
        var dislikeButton = document.querySelector('button[name="dislike"]');
        
        likeButton.addEventListener("click", function(event) {
            event.preventDefault();
            document.querySelector('form').submit();
        });

        dislikeButton.addEventListener("click", function(event) {
            event.preventDefault();
            document.querySelector('form').submit();
        });
    });
</script>





</body>
</html>