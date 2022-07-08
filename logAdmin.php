<?php
    include_once('funciones.php');
        
     if(isset($_SESSION['nombAdm']) && $_SESSION['nombAdm']!=''){

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
    <title>Administrador</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Administrador</a>
    
    <form class="d-flex">
      <a href='sessionLogout.php' class="btn btn-outline-danger">cerrar sesion</a>
    </form>
  </div>
</div>
</nav>
<div class="row">

<div class="col-6">
<h1 class="display-6 text-center m-3"> Lista de Aspirantes </h1>
<?php
 $ci=$_SESSION['visualCi'];
 $name=$_SESSION['visualNombre'];
 $ape=$_SESSION['visualApellido'];
 $dir=$_SESSION['visualDireccion'];
 $tel=$_SESSION['visualTelefono'];
 $form=$_SESSION['visualFormacion'];
 $exp=$_SESSION['visualExplaboral'];

 if($_SESSION['data']==''){
  echo "<h1 class='display-6 text-center'> No se encontraron datos </h1>";
 }else{
   generarAspirante($name,$ape, $ci, $dir, $tel, $exp, $form);
 }

         
?>

</div>
<div class="col-6">

  <div class="container-sm border bg-light">
    <form class="row" action="datosGuardados.php" method="post">
      <div class="col-12 mb-2">
        <h1 class="display-6 text-center m-3">Formulario de Aspirante</h1>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="txtCi" class="form-label">Ingresar C.I</label >
                    <input type="number" maxlength="8" name="txtCi" id="" class="form-control">
                </div>
                <div class="col-12">
                    <label class="text-muted form-label">*Maximo 8 digitos , sin puntos ni guiones*</label>
                </div>
              </div>
              <div class="col-6">
                <label for="txtNombre" class="form-label">Nombres</label>
                <input type="text" name="txtNombre" id="" class="form-control">
            </div>
            <div class="col-6">
                <label for="txtApellido" class="form-label">Apellidos</label>
                <input type="text" name="txtApellido" id="" class="form-control">
              </div>
            <div class="col-12">
                <label for="txtDireccion" class="form-label">Dirección</label>
                <input type="text" name="txtDireccion" id="" class="form-control">
            </div>
            <div class="col-6">
                <label for="txtTelefono" class="form-label">Número de teléfono</label>
                <input type="number" min="0" name="txtTelefono" maxlength="9" id="" class="form-control">
            </div>
            <div class="col-12">
                <label for="txtFormacion" class="form-label">Formación académica</label>
                <textarea class="form-control" name="txtFormacion" rows="3"></textarea>
            </div>
            <div class="col-12">
              <label for="txtExplaboral" class="form-label">Experiencia Laboral</label>
              <textarea class="form-control" name="txtExplaboral" rows="3"></textarea>
            </div>
            <div class="d-grid mt-2 mb-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            
        </form>
      </div>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>