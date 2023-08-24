
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
        font-size: 19px;
        background-image: linear-gradient(135deg,
       #CA0403, #CA0403, #CA0403, #CA0403, #fff);
        background-size: 500%;
        
        
      }

     @keyframes fanimado{
        0%{
          background-position: 0% 50%;
        }
        50%{
          background-position: 100% 50%;
        }
        100%{
          background-position: 0% 50%;
        }
      }



      form{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    transition: all 1s;
    width: 50px;
    height: 50px;
    background: white;
    box-sizing: border-box;
    border-radius: 25px;
    border: 4px solid white;
    padding: 5px;
}

input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;;
    height: 42.5px;
    line-height: 30px;
    outline: 0;
    border: 0;
    display: none;
    font-size: 1em;
    border-radius: 20px;
    padding: 0 20px;
}

.fa{
    box-sizing: border-box;
    padding: 10px;
    width: 42.5px;
    height: 42.5px;
    position: absolute;
    top: 0;
    right: 0;
    border-radius: 50%;
    color: #07051a;
    text-align: center;
    font-size: 1.2em;
    transition: all 1s;
}

form:hover,
form:valid{
    width: 200px;
    cursor: pointer;
}

a:link {
    text-decoration: none
}

form:hover input,
form:valid input{
    display: block;
}

form:hover .fa,
form:valid .fa{
    background: #07051a;
    color: white;
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

.fijo ul li {
  float: left;
  
  
}

.fijo ul li a {
  display: block;
  pointer-events: auto;
  text-decoration: none;
  color: #333;
}


nav ul li a:hover {
  background-color: #fd0839;
}

a:hover{
  background-color: #fd0839;
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

    </style>

</head>
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
                  <li><a class="dropdown-item" href="cotizacion.php">COTIZACION</a></li>
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
                <li><a class="dropdown-item" href="index.php">TODOS</a></li>
                  <li><a class="dropdown-item" href="hogar.php">HOGAR</a></li>
                  <li><a class="dropdown-item" href="plomeria.php">PLOMERIA</a></li>
                  <li><a class="dropdown-item" href="pinturas.php">PINTURAS</a></li>
                  <li><a class="dropdown-item" href="electricos.php">ELECTRICOS</a></li>
                  <li><a class="dropdown-item" href="construccion.php">CONSTRUCCION</a></li>
                  <li><a class="dropdown-item" href="bombillos.php">BOMBILLOS</a></li>
                </ul>
              </div>
            </ul>
            
            <li class="navbar-nav">
              <a class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="top" title="Ferreteria Jotta-R"  >" Lideres en ofertas 🛒 "</a>
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
    $sql="SELECT * FROM hogar LIMIT $empieza,$por_pagina";
    $data=mysqli_query($conexion,$sql);
 




?>

<?php

if (!empty($_POST['buscar'])){
    $buscar=$_POST['buscar'];
    $sql="SELECT * FROM hogar  WHERE Nombre LIKE '%$buscar%'";
    

}else{
  $empieza=($pagina-1) * $por_pagina;
  $sql="SELECT * FROM hogar LIMIT $empieza,$por_pagina";
  $data=mysqli_query($conexion,$sql);

}
   

?>

<?php
$query=mysqli_query($conexion,$sql);
if($query){
    while($data=mysqli_fetch_assoc($query)){
      
    ?>




<!--Buscador-->


<form class="d-flex" id="form2" name="form2"  method="POST">
  
  
  <input style="background-color: #CA0403;" class="search-icon"  name="buscar" placeholder="Buscar productos" type="text">

 <!-- <input class="fa fa-search" type="submit" >Buscar</input>-->
</form>

<br>
<main>
  
  
    <div class="container">
    <a href="hogar.php" title="Refrescar" class="fa-solid fa-arrows-rotate fa-lg fa-spin" style="color: #EAECEC;"></a>
    <br>
    <br>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php foreach($query as $data) { 
      ?>
      
    <div class="col">
    <div class="card shadow-sm">
      <center>
    <img class="card-img-top" width="180" height="180"  src="<?php echo $data['ImgRuta']?>">
    </center>
    
    
    <div class="card-body">
      <center>
    <h5 class="card-tittle"><?php echo  $data['Nombre'] ?></h5>
    </center>
    <br>
    
    
    <div class="d-flex justify-content-between align-items-center">
    <div class="btn-group">
    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Detalles</button>
    </div>
    <p class="card-text" style="color:green"> <b> <?php echo $data ['precio'] ?></b></p>
    </div>
    </div>
    </div>
   
    </div>

    
    



    
    <?php } ?>


    <?php


$sql="SELECT * FROM hogar";
$data=mysqli_query($conexion,$sql);



$por_pagina=10;
$total_registros=mysqli_num_rows($data);
$total_paginas=ceil($total_registros/$por_pagina);

echo "
<center><a style='margin-left: 10px' class='aa' href='hogar.php?pagina=1'>" .'Anterior'. "</a>";

for($i=1; $i<=$total_paginas; $i++)

{
  echo"
  <a  style='margin-left: 10px' class='aa' href='hogar.php?pagina=".$i."'> ".$i."</a>  ";
}

echo"

 <a  class='aa'style='margin-left: 10px'  href='hogar.php?pagina=$total_paginas'>" .'Siguiente'."</a></center>
 ";






?>


 



    
    </div>
    
    <hr>
    <br>
    <center>
      <h3 style="color:#EAECEC">Novedades</h3>
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
  </div>
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
      <br>
      <center>
      <h6><b>(Los precios pueden estar sujeto a cambios)</b></h6>
    </center>
      
      </div>
    </div>

    
    
    <?php } ?>
  </div>
  
</div>










    <!--Barra izquierda-->


</body>
</html>