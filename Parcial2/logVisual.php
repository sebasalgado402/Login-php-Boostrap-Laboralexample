<?php
    include_once('datosGuardados.php');
    
    /* error_reporting(0); */
    
   if(isset($_SESSION['nombVisual']) && $_SESSION['nombVisual'] !='0'){

   }else{
       header("location:../Parcial2/index.php");
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
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Visualizador</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
      <form class="d-flex">
        <a href='sessionLogout.php' class="btn btn-outline-primary">cerrar sesion</a>
      </form>
    </div>
  </div>
</nav>
<div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-6 text-center">Lista de Aspirantes</h1>
                
            </div>
            <?php

         generarAspirante($name,$ape, $ci, $dir, $tel, $exp, $form);
         
        ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>