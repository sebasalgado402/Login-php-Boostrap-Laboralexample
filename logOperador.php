<?php
   include_once('funciones.php');
    
   if(isset($_SESSION['nombOp']) && $_SESSION['nombOp'] !=''){

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
        <link rel="stylesheet" href="styleOperador.css">
    <title>Operador</title>
</head>

<body>
    <!-- datos requeridos: ci , Nombre , Apellido, dirección , teléfono, formación académica, experiencia laboral -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Operador</a>
    
      <form class="d-flex">
        <a href='sessionLogout.php' class="btn btn-outline-danger">cerrar sesion</a>
      </form>
    </div>
  </div>
</nav>
<div class="col-md-4 offset-md-4 mt-2">

<div class="container-fluid border bg-dark fondo ">
  <form class="row" action="datosGuardados.php" method="post">
    <div class="col-12 mb-2">
      <h1 class="display-6 text-center m-3 text-danger">Formulario de Aspirante</h1>
          </div>
          <div class="row">
              <div class="col-4">
                  <label for="txtCi" class="form-label text-light">Ingresar C.I</label >
                  <input type="number" name="txtCi" id="" class="form-control" required>
              </div>
              <div class="col-12">
                  <label class="text-muted form-label">*Maximo 8 digitos , sin puntos ni guiones*</label>
              </div>
            </div>
            <div class="col-6">
              <label for="txtNombre" class="form-label text-light">Nombres</label>
              <input type="text" name="txtNombre" id="" class="form-control" required>
          </div>
          <div class="col-6">
              <label for="txtApellido" class="form-label text-light">Apellidos</label>
              <input type="text" name="txtApellido" id="" class="form-control" required>
            </div>
          <div class="col-12">
              <label for="txtDireccion" class="form-label text-light">Dirección</label>
              <input type="text" name="txtDireccion" id="" class="form-control" required>
          </div>
          <div class="col-6">
              <label for="txtTelefono" class="form-label text-light">Número de teléfono</label>
              <input type="number" min="0" name="txtTelefono" maxlength="9" id="" class="form-control" required>
          </div>
          <div class="col-12">
                <label for="selectFormacion" class="form-label text-light">Formación académica</label>
                <!-- <textarea class="form-control" name="txtFormacion" rows="3"></textarea> -->

                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="selectFormacion">
                  <option selected disabled>Seleccione un nivel</option>
                  <option value="Bachillerato secundaria">Bachillerato secundaria</option>
                  <option value="Bachillerato tecnológico UTU">Bachillerato tecnológico UTU</option>
                  <option value="Ciclo básico">Ciclo básico</option>
                  <option value="Formación profesional básica">Formación profesional básica</option>
                  <option value="Magisterio o profesorado">Magisterio o profesorado</option>
                  <option value="Universitario">Universitario</option>
                </select>


            </div>
          <div class="col-12">
            <label for="txtExplaboral" class="form-label text-light">Experiencia Laboral</label>
            <textarea class="form-control text-dark" name="txtExplaboral" rows="3"></textarea>
          </div>
          <div class="d-grid mt-2 mb-2">
              <button type="submit" class="btn btn-danger mb-2 mt-2">Enviar</button>
          </div>
          
      </form>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>