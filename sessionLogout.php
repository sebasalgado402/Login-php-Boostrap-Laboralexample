<?php
session_start();
 $_SESSION['nombAdm'] ='';
 $_SESSION['passAdm'] ='';
 $_SESSION['nombOp']= '';
 $_SESSION['passOp'] = '';
 $_SESSION['nombVisual']= '';
 $_SESSION['passVisual'] = '';
 
 //session_destroy();
 header("location:../Parcial2/index.php");
?>

