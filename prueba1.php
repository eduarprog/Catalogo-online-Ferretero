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
    <title>Productos | Ferreteria Jotta-R</title>
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

@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
body{
    font-family: 'Open Sans', sans-serif;
}
*:hover{
    -webkit-transition: all 1s ease;
    transition: all 1s ease;
}
section{
    float:left;
    width:100%;
    background: #fff;  /* fallback for old browsers */
    padding:30px 0;
}
h1{float:left; width:100%; color:#232323; margin-bottom:30px; font-size: 14px;}
h1 span{font-family: 'Libre Baskerville', serif; display:block; font-size:45px; text-transform:none; margin-bottom:20px; margin-top:30px; font-weight:700}
h1 a{color:#131313; font-weight:bold;}

/*Profile Card 1*/
.profile-card-1 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  color: #ffffff;
  text-align: center;
  height:368px;
  border:none;
}
.profile-card-1 .background {
  width:100%;
  vertical-align: top;
  opacity: 0.9;
  -webkit-filter: blur(5px);
  filter: blur(5px);
   -webkit-transform: scale(1.8);
  transform: scale(2.8);
}
.profile-card-1 .card-content {
  width: 100%;
  padding: 15px 25px;
  position: absolute;
  left: 0;
  top: 50%;
}
.profile-card-1 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.profile-card-1 h2 {
  margin: 0 0 5px;
  font-weight: 600;
  font-size:25px;
}
.profile-card-1 h2 small {
  display: block;
  font-size: 15px;
  margin-top:10px;
}
.profile-card-1 i {
  display: inline-block;
    font-size: 16px;
    color: #ffffff;
    text-align: center;
    border: 1px solid #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-1 .icon-block{
    float:left;
    width:100%;
    margin-top:15px;
}
.profile-card-1 .icon-block a{
    text-decoration:none;
}
.profile-card-1 i:hover {
  background-color:#fff;
  color:#2E3434;
  text-decoration:none;
}

/*Profile card 2*/
.profile-card-2 .card-img-block{
    float:left;
    width:100%;
    height:150px;
    overflow:hidden;
}
.profile-card-2 .card-body{
    position:relative;
}
.profile-card-2 .profile {
  border-radius: 50%;
  position: absolute;
  top: -42px;
  left: 15%;
  max-width: 75px;
  border: 3px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.profile-card-2 h5{
    font-weight:600;
    color:#6ab04c;
}
.profile-card-2 .card-text{
    font-weight:300;
    font-size:15px;
}
.profile-card-2 .icon-block{
    float:left;
    width:100%;
}
.profile-card-2 .icon-block a{
    text-decoration:none;
}
.profile-card-2 i {
  display: inline-block;
    font-size: 16px;
    color: #6ab04c;
    text-align: center;
    border: 1px solid #6ab04c;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-2 i:hover {
  background-color:#6ab04c;
  color:#fff;
}

/*Profile Card 3*/
.profile-card-3 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  text-align: center;
  height:368px;
  border:none;
}
.profile-card-3 .background-block {
    float: left;
    width: 100%;
    height: 200px;
    overflow: hidden;
}
.profile-card-3 .background-block .background {
  width:100%;
  vertical-align: top;
  opacity: 0.9;
  -webkit-filter: blur(0.5px);
  filter: blur(0.5px);
   -webkit-transform: scale(1.8);
  transform: scale(2.8);
}
.profile-card-3 .card-content {
  width: 100%;
  padding: 15px 25px;
  color:#232323;
  float:left;
  background:#efefef;
  height:50%;
  border-radius:0 0 5px 5px;
  position: relative;
  z-index: 9999;
}
.profile-card-3 .card-content::before {
    content: '';
    background: #efefef;
    width: 120%;
    height: 100%;
    left: 11px;
    bottom: 51px;
    position: absolute;
    z-index: -1;
    transform: rotate(-13deg);
}
.profile-card-3 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
  z-index:99999;
}
.profile-card-3 h2 {
  margin: 0 0 5px;
  font-weight: 600;
  font-size:25px;
}
.profile-card-3 h2 small {
  display: block;
  font-size: 15px;
  margin-top:10px;
}
.profile-card-3 i {
  display: inline-block;
    font-size: 16px;
    color: #232323;
    text-align: center;
    border: 1px solid #232323;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-3 .icon-block{
    float:left;
    width:100%;
    margin-top:15px;
}
.profile-card-3 .icon-block a{
    text-decoration:none;
}
.profile-card-3 i:hover {
  background-color:#232323;
  color:#fff;
  text-decoration:none;
}


/*Profile card 4*/
.profile-card-4 .card-img-block{
    float:left;
    width:100%;
    height:150px;
    overflow:hidden;
}
.profile-card-4 .card-body{
    position:relative;
}
.profile-card-4 .profile {
    border-radius: 50%;
    position: absolute;
    top: -62px;
    left: 50%;
    width:100px;
    border: 3px solid rgba(255, 255, 255, 1);
    margin-left: -50px;
}
.profile-card-4 .card-img-block{
    position:relative;
}
.profile-card-4 .card-img-block > .info-box{
    position:absolute;
    background:rgba(217,11,225,0.6);
    width:100%;
    height:100%;
    color:#fff;
    padding:20px;
    text-align:center;
    font-size:14px;
   -webkit-transition: 1s ease;
    transition: 1s ease;
    opacity:0;
}
.profile-card-4 .card-img-block:hover > .info-box{
    opacity:1;
    -webkit-transition: all 1s ease;
    transition: all 1s ease;
}
.profile-card-4 h5{
    font-weight:600;
    color:#d90be1;
}
.profile-card-4 .card-text{
    font-weight:300;
    font-size:15px;
}
.profile-card-4 .icon-block{
    float:left;
    width:100%;
}
.profile-card-4 .icon-block a{
    text-decoration:none;
}
.profile-card-4 i {
  display: inline-block;
    font-size: 16px;
    color: #d90be1;
    text-align: center;
    border: 1px solid #d90be1;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-4 i:hover {
  background-color:#d90be1;
  color:#fff;
}

/*Profile Card 5*/
.profile-card-5{
    margin-top:20px;
}
.profile-card-5 .btn{
    border-radius:2px;
    text-transform:uppercase;
    font-size:12px;
    padding:7px 20px;
}
.profile-card-5 .card-img-block {
    width: 91%;
    margin: 0 auto;
    position: relative;
    top: -20px;
    
}
.profile-card-5 .card-img-block img{
    border-radius:5px;
    box-shadow:0 0 10px rgba(0,0,0,0.63);
}
.profile-card-5 h5{
    color:#4E5E30;
    font-weight:600;
}
.profile-card-5 p{
    font-size:14px;
    font-weight:300;
}
.profile-card-5 .btn-primary{
    background-color:#4E5E30;
    border-color:#4E5E30;
}

    </style>
</head>
<body>
<div class="fijo">
    <!-- ... Tu barra de navegación ... -->
</div>

<br>
<br>
<br>

<form class="d-flex" id="form2" name="form2"  method="POST">
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <div class="card p-4 mt-3">
                    <a href="prueba1.php" title="Refrescar" class="fa-solid fa-arrows-rotate " style=" background-color: transparent; color: #e20321;"></a>
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

<?php
require 'conexion.php';
$conexion = conexion();
$por_pagina = 6;

if (isset($_GET['pagina']))
    $pagina = $_GET['pagina'];
else
    $pagina = 1;

$empieza = ($pagina - 1) * $por_pagina;

if (!empty($_POST['buscar'])) {
    $buscar = $_POST['buscar'];
    $sql = "SELECT * FROM registro  WHERE Nombre LIKE '%$buscar%' OR Descripcion LIKE '%$buscar%' OR categoria LIKE '%$buscar%'";
} else {
    $sql = "SELECT * FROM registro LIMIT $empieza,$por_pagina";
}

$query = mysqli_query($conexion, $sql);
$resultados_encontrados = false;
?>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        if ($query) {
            while ($data = mysqli_fetch_assoc($query)) {
                $resultados_encontrados = true;
        ?>
                <br>
<main>
  <br>
  
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >
    <?php foreach($query as $data)
      ?>
      
    <div class="col">
    <div class="card shadow-sm">
      <center>
    <img class="card-img-top" width="180" height="180" src="<?php echo $data['ImgRuta']?>">
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
    <h2 style="visibility:hidden" ><?php echo $data['categoria']?></h2>
    <p class="card-text" style="color:green"> <b> <?php echo $data ['precio'] ?>$RD</b></p>
    </div>
    </div>
    </div>
   
    </div>
        <?php
            }
        }
        ?>
    </div>

    <?php
    if (!$resultados_encontrados) {
        echo '<div class="alert alert-warning">Los datos no existen.</div>';
    }
    ?>

    <?php
    $sql = "SELECT * FROM registro";
    $data = mysqli_query($conexion, $sql);

    $por_pagina = 3;
    $total_registros = mysqli_num_rows($data);
    $total_paginas = ceil($total_registros / $por_pagina);

    echo "<center><a style='margin-left: 10px' class='aa' href='prueba1.php?pagina=1'>" . 'Anterior' . "</a>";

    for ($i = 1; $i <= $total_paginas; $i++) {
        echo "<a  style='margin-left: 10px' class='aa' href='prueba1.php?pagina=" . $i . "'> " . $i . "</a>  ";
    }

    echo "<a  class='aa' style='margin-left: 10px'  href='index.php?pagina=$total_paginas'>" . 'Siguiente' . "</a></center>";
    ?>

</div>

<li><a href="https://twitter.com/tupagina" target="_blank">Twitter</a></li>
        <li><a href="https://www.instagram.com/http://localhost/ferreteriajotta-R/prueba1.php target="_blank">Instagram</a></li>

<!-- ... El pie de página y otros elementos HTML ... -->
<a href="https://www.instagram.com/explore/tags/tupalabraclave/" target="_blank" title="Compartir en Instagram">
  <img src="icono-de-instagram.png" alt="Instagram" width="32" height="32">
</a>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section>
    <div class="container">
    	<div class="row">
    	    
    		<div class="col-md-4">
    		    <div class="card profile-card-1">
    		        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
    		        <img src="https://randomuser.me/api/portraits/women/20.jpg" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Savannah Fields<small>Engineer</small></h3>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p>
    		</div>
    		
    		<div class="col-md-4">
    		    <div class="card profile-card-2">
                    <div class="card-img-block">
                        <img class="img-fluid" src="https://images.pexels.com/photos/870903/pexels-photo-870903.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Card image cap">
                    </div>
                    <div class="card-body pt-5">
                        <img src="https://randomuser.me/api/portraits/men/64.jpg" alt="profile-image" class="profile"/>
                        <h5 class="card-title">Landon Hunt</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Social Profile Card</strong></p>
    		</div>
    		
    		<!--Profile Card 3-->
    		<div class="col-md-4">
    		    <div class="card profile-card-3">
    		        <div class="background-block">
    		            <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
    		        </div>
    		        <div class="profile-thumb-block">
    		            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
    		        </div>
    		        <div class="card-content">
                    <h2>Justin Mccoy<small>Designer</small></h3>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Modren Profile Card</strong></p>
    		</div>
    		
    		<!--Profile Card 4-->
    		<div class="col-md-4 mt-4">
    		    <div class="card profile-card-4">
                    <div class="card-img-block">
                        <div class="info-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <img class="img-fluid" src="https://images.pexels.com/photos/965157/pexels-photo-965157.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Card image cap">
                    </div>
                    <div class="card-body pt-5">
                        <img src="https://randomuser.me/api/portraits/women/14.jpg" alt="profile-image" class="profile"/>
                        <h5 class="card-title text-center">Gail Schmidt</h5>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="icon-block text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Info block with hover</strong></p>
    		</div>
    		
    		<!--Profile Card 5-->
    		<div class="col-md-4 mt-4">
    		    <div class="card profile-card-5">
    		        <div class="card-img-block">
    		            <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Florence Garza</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                  </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Card with Floting Picture</strong></p>
    		</div>
    		
    	</div>
    </div>
</section>

</body>
</html>
