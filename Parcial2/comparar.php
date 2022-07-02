<?php    
    include_once('funciones.php');
    $user = $_POST['usuario'];
    $passwd = $_POST['passwd'];

    $admin = 'Admin';
    $contraAdmin = '1'; /*admin123*/

    $operador = 'Operador';
    $contraOperador = '1';/*oper123*/

    $visual = 'Visualizador';
    $contraVisual = '1'; /*visu123*/

    if($user == $admin && $passwd == $contraAdmin){
        $_SESSION['nombAdm'] = 'Admin';
        $_SESSION['passAdm'] = '1'; /*admin123*/
    }elseif($user == $operador && $passwd == $contraOperador){
        $_SESSION['nombOp'] = 'Operador';
        $_SESSION['passOp'] = '1'; /*oper123*/
    }elseif($user == $visual && $passwd == $contraVisual){
        $_SESSION['nombVisual'] = 'Visualizador';
        $_SESSION['passVisual'] = '1'; /*visu123*/
    }
    validar($user,$passwd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>