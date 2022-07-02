<?php
session_start();
 $_SESSION['nombAdm'] ='0';
 $_SESSION['passAdm'] ='0';
 $_SESSION['nombOp']= '0';
 $_SESSION['passOp'] = '0';
 $_SESSION['nombVisual']= '0';
 $_SESSION['passVisual']='0';

 header("location:../Parcial2/index.php");
?>