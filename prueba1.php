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

<!-- ... El pie de página y otros elementos HTML ... -->

</body>
</html>
