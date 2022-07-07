<?php
    session_start();
    error_reporting(0);

    function validar($nombre , $passwd){
          if($nombre == $_SESSION['nombAdm'] && $passwd == $_SESSION['passAdm']){
            header("location:../Parcialcopy/logAdmin.php");
          }elseif($nombre == $_SESSION['nombOp'] && $passwd == $_SESSION['passOp']){
            header("location:../Parcialcopy/logOperador.php");
          }elseif($nombre == $_SESSION['nombVisual'] && $passwd == $_SESSION['passVisual']){
            header("location:../Parcialcopy/logVisual.php");
          }else{
            echo "<script> alert('Datos Incorrectos , serás redireccionado');window.location ='index.php'</script>";
          }
    }

    
    function datosPost(){
      if ($_POST['txtCi'] =='' &&
      $_POST['txtNombre'] == ''&&
      $_POST['txtApellido'] =='' &&
      $_POST['txtDireccion'] =='' &&
      $_POST['txtTelefono'] ==''&&
      $_POST['txtFormacion'] == ''&&
      $_POST['txtExplaboral'] == ''){
       
      }else{
        $_SESSION['visualCi'] = $_POST['txtCi'];
        $_SESSION['visualNombre'] = $_POST['txtNombre'];
        $_SESSION['visualApellido'] = $_POST['txtApellido'];
        $_SESSION['visualDireccion'] = $_POST['txtDireccion'];
        $_SESSION['visualTelefono'] = $_POST['txtTelefono'];
        $_SESSION['visualFormacion'] = $_POST['txtFormacion'];
        $_SESSION['visualExplaboral'] = $_POST['txtExplaboral'];
      }
    }
    

    function generarAspirante($name,$ape, $ci, $dir, $tel, $exp, $form){
      echo "<div class='row'>";
          echo "<div class='col-12'>";
               echo "<div class='card col-md-8 offset-md-2'>";
                  echo "<div class='card-body col-12 border bg-light'>";
                  echo "<div class='row col-12'>";
                  echo  "<div class='col-6'>";
                            echo "<h5 class='card-title'>";
                            echo $name;
                            echo " ";
                            echo $ape; 
                            echo "</h5>";
                            echo "</div>";
                            echo "<div class='col-6'>";
                            echo "<h5 class='card-title'>Ci :";
                            echo $ci;
                            echo "</h1>";
                            echo "</div>";
                            echo "</div>";
                            echo"<p class='card-text'>Telefono :";
                            echo $tel;
                            echo "</p>";
                            echo "<p class='card-text'>Direccion :";
                            echo $dir;
                            echo "</p>";
                            echo "<p class='card-text'>Formación académica :";
                            echo $form;
                            echo "</p>";
                            echo "<p class='card-text'>Experiencia Laboral :";
                            echo $exp;
                            echo"</p>";
                            echo"</div>";
                            
                            echo"</div>";
                            echo"</div>";
                            echo"</div>";
      
    }
    function generarAspiranteAdmin($name,$ape, $ci, $dir, $tel, $exp, $form){
      echo "<div class='row'>";
          echo "<div class='col-12'>";
               echo "<div class='card '>";
                  echo "<div class='card-body col-12 border bg-light'>";
                  echo "<div class='row col-12'>";
                  echo  "<div class='col-12'>";
                            echo "<h5 class='card-title'>";
                            echo $name;
                            echo " ";
                            echo $ape; 
                            echo "</h5>";
                            echo "</div>";
                            echo "<div class='col-6'>";
                            echo "<h5 class='card-title'>Ci :";
                            echo $ci;
                            echo "</h1>";
                            echo "</div>";
                            echo "</div>";
                            echo"<p class='card-text'>Telefono :";
                            echo $tel;
                            echo "</p>";
                            echo "<p class='card-text'>Direccion :";
                            echo $dir;
                            echo "</p>";
                            echo "<p class='card-text'>Formación académica :";
                            echo $form;
                            echo "</p>";
                            echo "<p class='card-text'>Experiencia Laboral :";
                            echo $exp;
                            echo"</p>";
                            echo"</div>";
                            
                            echo"</div>";
                            echo"</div>";
                            echo"</div>";
      
    }

    
?>