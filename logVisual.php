<?php
    include_once('funciones.php');
    
    error_reporting(0);
    
   if(isset($_SESSION['nombVisual']) && $_SESSION['nombVisual'] !=''){

   }else{
    echo "<script> alert('No tienes permiso para acceder aquí');window.location ='index.php'</script>";
   }
   
   
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="styleVisual.css">
    <title>Visualizador</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Visualizador</a>
   
      <form class="d-flex">
        <a href='sessionLogout.php' class="btn btn-outline-danger">cerrar sesion</a>
      </form>
    </div>
  </div>
</nav>
<div class="container bg-dark mt-2">
<div class="col-8 offset-md-2 bg-dark mt-2">
        <div class="row">
            <div class="col-12">
                <h1 class="display-6 text-center text-danger">Lista de Aspirantes</h1>
                
            </div>
            <?php
            if($_SESSION['data']==''){
              
              echo "<h1 class='display-6 text-center text-danger'> No se encontraron datos </h1>";
              echo '</div>';
             }else{
              
               generarAspirante();
               echo '</div>';
             }
         
        ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>