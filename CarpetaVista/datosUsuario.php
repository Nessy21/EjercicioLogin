<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "../CarpetaModelo/Usuario.php";
        session_start();
        if (isset($_SESSION['datosUser'])){ 
            $datos = $_SESSION['datosUser'];
            echo "Nombre: ";
            echo $datos->getNombre();
            echo "<br>";
            echo "Apellidos: ";
            echo $datos->getApellidos();
            echo "<br>"; 
            echo "Usuario : ";
            echo $datos->getLogin();
            echo "<br>";
            echo "Contraseña : ";
            echo $datos->getPassword();
        }
      
        // $user = $_GET['user'];
        // $password = $_GET['password'];
        
    ?>
    <form action="desloguear.php" method="POST">
        <input type="submit" value="Desloguear">
    </form>
</body>
</html>