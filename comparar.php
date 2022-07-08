<?php    
error_reporting(0);
    include_once('funciones.php');
    $user = $_POST['usuario'];
    $passwd = $_POST['passwd'];

    $admin = 'Admin';
    $contraAdmin = 'admin123'; /*admin123*/

    $operador = 'Operador';
    $contraOperador = 'oper123';/*oper123*/

    $visual = 'Visualizador';
    $contraVisual = 'visu123'; /*visu123*/

    if($user == $admin && $passwd == $contraAdmin){
        $_SESSION['nombAdm'] = 'Admin';
        $_SESSION['passAdm'] = 'admin123'; /*admin123*/
        
    }elseif($user == $operador && $passwd == $contraOperador){
        $_SESSION['nombOp'] = 'Operador';
        $_SESSION['passOp'] = 'oper123'; /*oper123*/
        
    }elseif($user == $visual && $passwd == $contraVisual){
        $_SESSION['nombVisual'] = 'Visualizador';
        $_SESSION['passVisual'] = 'visu123'; /*visu123*/
        
    }
    validar($user,$passwd);
?>