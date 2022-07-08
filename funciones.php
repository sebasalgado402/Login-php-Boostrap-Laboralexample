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
        if($_POST['selectFormacion'] == ''){
          $_POST['selectFormacion'] = 'Sin Datos';
        }
        $persona = array($_POST['txtNombre'],$_POST['txtApellido'],$_POST['txtCi'],$_POST['txtTelefono'],$_POST['txtDireccion'],$_POST['selectFormacion'],$_POST['txtExplaboral']);

        array_push($_SESSION['data'],$persona);

      
    }
   

    function generarAspirante(){
      foreach($_SESSION['data'] as $value){
        echo '<div class="container-fluid">';
                    echo "<div class='row mb-2 '>";
                        echo "<div class='col-12'>";
                             echo "<div class='card col-md-12 '>";
                                echo "<div class='card-body col-12 border bg-dark fondo '>";
                                echo "<div class='row col-12'>";
                                echo  "<div class='col-6'>";
                    echo "<h5 class='card-title text-light'>";
                    echo $value[0];
                    echo " ";
                    echo $value[1]; 
                    echo "</h5>";
                    echo "</div>";
                    echo "<div class='col-6'>";
                    echo "<h5 class='card-title text-danger'>C.I : ";
                    echo "<span class='card-title text-light'>".$value[2]."</span>";
                    echo "</h5>";
                    
                    echo "</div>";
                    echo "</div>";
                    echo"<p class='card-text text-danger'>Teléfono : ";
                    echo "<span class='card-title text-light'>".$value[3]."</span>";
                    echo "</p>";
                    echo "<p class='card-text text-danger'>Dirección : ";
                    echo "<span class='card-title text-light'>".$value[4]."</span>";
                    echo "</p>";
                    echo "<p class='card-text text-danger'>-- Formación académica -- </p>";
                    echo "<p class='card-text text-light'>";
                    echo $value[5];
                    echo "</p>";
                    echo "<p class='card-text text-danger'>-- Experiencia Laboral -- </p>";
                    echo "<p class='card-text text-light'>";
                    echo $value[6];
                    echo"</p>";
                    echo"</div>";
                    
                    echo"</div>";
                    echo"</div>";
                    echo"</div>";
                    echo"</div>";
                    
                
                  }
    }
    
    

    
?>