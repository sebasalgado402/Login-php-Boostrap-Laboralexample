<?php
    session_start();
    error_reporting(0);

    function validar($nombre , $passwd){
          if($nombre == $_SESSION['nombAdm'] && $passwd == $_SESSION['passAdm']){
            header("location:../Parcial2/logAdmin.php");
          }elseif($nombre == $_SESSION['nombOp'] && $passwd == $_SESSION['passOp']){
            header("location:../Parcial2/logOperador.php");
          }elseif($nombre == $_SESSION['nombVisual'] && $passwd == $_SESSION['passVisual']){
            header("location:../Parcial2/logVisual.php");
          }else{
            echo "<script> alert('Datos Incorrectos , serás redireccionado');window.location ='index.php'</script>";
          }
    }

    
    function datosPost(){
      // if ($_POST['txtCi'] =='' &&
      // $_POST['txtNombre'] == ''&&
      // $_POST['txtApellido'] =='' &&
      // $_POST['txtDireccion'] =='' &&
      // $_POST['txtTelefono'] ==''&&
      // $_POST['txtFormacion'] == ''&&
      // $_POST['txtExplaboral'] == ''){
      //  #### no pasa nada 
      // }else{

        if(!isset($_SESSION['data'])){
          $_SESSION['data'] = [];
        }

        $persona = array($_POST['txtNombre'],$_POST['txtApellido'],$_POST['txtCi'],$_POST['txtDireccion'],$_POST['txtTelefono'],$_POST['txtFormacion'],$_POST['txtExplaboral']);

        array_push($_SESSION['data'],$persona);

      
    }
    

    function generarAspirante(){
      
      ######
      foreach($_SESSION['data'] as $value){
                    echo "<div class='row'>";
                        echo "<div class='col-12'>";
                             echo "<div class='card col-md-8 offset-md-2'>";
                                echo "<div class='card-body col-12 border bg-light'>";
                                echo "<div class='row col-12'>";
                                echo  "<div class='col-6'>";
                    echo "<h5 class='card-title'>";
                    echo $value[0];
                    echo " ";
                    echo $value[1]; 
                    echo "</h5>";
                    echo "</div>";
                    echo "<div class='col-6'>";
                    echo "<h5 class='card-title'>Ci :";
                    echo $value[2];
                    echo "</h1>";
                    echo "</div>";
                    echo "</div>";
                    echo"<p class='card-text'>Telefono :";
                    echo $value[3];
                    echo "</p>";
                    echo "<p class='card-text'>Direccion :";
                    echo $value[4];
                    echo "</p>";
                    echo "<p class='card-text'>Formación académica :";
                    echo $value[5];
                    echo "</p>";
                    echo "<p class='card-text'>Experiencia Laboral :";
                    echo $value[6];
                    echo"</p>";
                    echo"</div>";
                    
                    echo"</div>";
                    echo"</div>";
                    echo"</div>";
                  }
                           
      
    }
    

    
?>