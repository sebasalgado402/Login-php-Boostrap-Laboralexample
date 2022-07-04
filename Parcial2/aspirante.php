<?php

$ci = $_SESSION['visualCi'];
$name = $_SESSION['visualNombre'];
$ape = $_SESSION['visualApellido'];
$dir = $_SESSION['visualDireccion'];
$tel = $_SESSION['visualTelefono'];
$form = $_SESSION['visualFormacion'];
$exp = $_SESSION['visualExplaboral'];
class Aspirante
{
      public $className;
      public $classApellido;
      public $classCi;
      public $classDireccion;
      public $classTelefono;
      public $classExperiencia;
      public $classFormacion;

    
      public function __construct($name,$ape, $ci, $dir, $tel, $exp, $form){

        $this->className=$name;
        $this->classApellido=$ape;
        $this->classCi=$ci;
        $this->classDireccion=$dir;
        $this->classTelefono=$tel;
        $this->classExperiencia=$exp;
        $this->classFormacion=$form;
        
      }        

}

?>