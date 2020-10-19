<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        $cont=1;
        if(!isset($_COOKIE['numvisitas'])){
            setcookie('numvisitas', $cont, time()+60);
        }else{
            $cont=$_COOKIE['numvisitas'];
        }

        if($cont==4){
            echo "demasiados intentos...vuelva a intentarlo más tarde";
        }else{
            echo $cont."<br>";
            
            echo ' <form action="autenticar.php" method="POST">
            <label for="user">Usuario:</label>
            <input type="text" name="user" id="user" placeholder="Introduce tu usuario...">
            <br>
            <label for="pwd">Contraseña:</label>
            <input type="password" name="password" id="password" placeholder="Introduce la contraseña...">
            <br>
            <input type="submit" value="Enviar">
        </form>';
        }
    ?>
</body>
</html>