<?php
  include_once('funciones.php');
  
  datosPost();
  
  if(isset($_SESSION['nombAdm']) && $_SESSION['nombAdm'] !==''){
    echo "<script> alert('Datos ingresados con exito!');window.location ='logAdmin.php'</script>";
  }else if(isset($_SESSION['nombOp']) && $_SESSION['nombOp'] !==''){
    echo "<script> alert('Datos ingresados con exito!');window.location ='logOperador.php'</script>";
  }else{
    echo "<script> alert('Datos ingresados con exito!');window.location ='logAdmin.php'</script>";
  }  

?>