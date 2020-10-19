<?php
    include_once "../CarpetaVista/autenticar.php";
    include_once "Usuario.php";
    class AutenticacionMock{
        

        function autenticarUsuario ($user, $password){
            //creacion de objetos
            $u1 = new Usuario ("Flor", "Pérez", "flo", "123" );
            $u2 = new Usuario ("Carlos", "Salas", "cali", "1234");

            //array de objetos
            $a = array (
                1=> $u1,
                2=> $u2
            );
            
            //invocar un getlogin y getpassword
            foreach($a as $usu){
                //si es correcto devuelve tipo user, sino un false
                if(strcmp($user, $usu->getLogin())==0){//mirar si coincide el usuario
                   //comprobar aqui las contraseñas
                    if(strcmp($password, $usu->getPassword())==0){
                        return $usu;
                    }
                }
            }//final de comprobacion
            return false; 
        }//Autenticar usuario
    }
?>