<?php

    include_once "../CarpetaModelo/AutenticacionMock.php";
    $user = $_POST['user'];
    $paswsword = $_POST['password'];

    //llamamos a la funcion autenticar usuario//

    $mc = new AutenticacionMock();
    $mc-> autenticarUsuario($user, $pwd);//para invocar se utiliza ->
    $resultado=$mc-> autenticarUsuario($user, $pwd); //para guardar el resultado

    //Si no es falso-> objeto 
    if ($resultado!=false){
        header ("Location: datosUsuario.php?user=$user&password=$password");//redireccionar
    }else{
        header ("Location: errorAutenticacion.php");
    }
?>