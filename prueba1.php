<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Resto de las etiquetas HEAD ... -->
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
                    <a href="index.php" title="Refrescar" class="fa-solid fa-arrows-rotate " style=" background-color: transparent; color: #e20321;"></a>
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
    <?php foreach($query as $data) { 
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
   
    </div>  <!-- ... Tu código para mostrar los resultados ... -->
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

    $por_pagina = 10;
    $total_registros = mysqli_num_rows($data);
    $total_paginas = ceil($total_registros / $por_pagina);

    echo "<center><a style='margin-left: 10px' class='aa' href='index.php?pagina=1'>" . 'Anterior' . "</a>";

    for ($i = 1; $i <= $total_paginas; $i++) {
        echo "<a  style='margin-left: 10px' class='aa' href='index.php?pagina=" . $i . "'> " . $i . "</a>  ";
    }

    echo "<a  class='aa' style='margin-left: 10px'  href='index.php?pagina=$total_paginas'>" . 'Siguiente' . "</a></center>";
    ?>

</div>

<!-- ... El pie de página y otros elementos HTML ... -->

</body>
</html>
