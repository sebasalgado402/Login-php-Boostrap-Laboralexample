<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Bolsa Laboral</title>
</head>

<body>
  
  <div class="container col-4 mt-5">
    <div class="row ">
      
      <div class="col-offset-md-6">
        <form action="comparar.php" method="post" class="bg-dark">
          
          <h1 class="display-6 text-center mb-4 text-danger">Iniciar Sesión</h1>
            <div class="mb-4">
              <!-- <label for="usuario" class="form-label">Ingrese nombre de usuario</label> -->
              <input type="text" name="usuario" id="txtUser" class="form-control" placeholder="Ingrese nombre de usuario" Required>

            </div>
            <div class="mb-4">
              <!-- <label for="password" class="form-label">Ingrese Contraseña</label> -->
              <input type="password" name="passwd" id="txtPasswd" class="form-control" placeholder="Ingrese contraseña" Required>

            </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-outline-danger" id="btnIngresar" >Iniciar Sesión</button>
              </div>
                            
        </form>
      </div>
      
    </div>
  </div>

</body>
</html>