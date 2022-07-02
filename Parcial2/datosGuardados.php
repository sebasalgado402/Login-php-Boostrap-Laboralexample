<?php
  include_once('funciones.php');
  require_once('aspirante.php');
   error_reporting(0);  

    datosPost();
  
        
  $postulante = new Aspirante($name,$ape, $ci, $dir, $tel, $exp, $form);
  
  
  
  

  if(isset($_SESSION['nombAdm']) && $_SESSION['nombAdm'] !=='0'){
    echo "<script> alert('Datos ingresados con exito!');window.location ='logAdmin.php'</script>";
  }else if(isset($_SESSION['nombOp']) && $_SESSION['nombOp'] !=='0'){
    echo "<script> alert('Datos ingresados con exito!');window.location ='logOperador.php'</script>";
  }else{
    
  }  

  


  


 

 /*  if ($postCi != '' &&
      $postNombre != '' &&
      $postApellido !='' &&
      $postDireccion !='' &&
      $postTelefono !=''&&
      $postFormacion != ''&&
      $postExpLaboral != ''){
        echo "<script> alert('Datos ingresados con exito!');window.location ='logOperador.php'</script>";
    }else{
        echo "<script> alert('Verifica ingresar bien los datos..');window.location ='logOperador.php'</script>";
      } */

?>