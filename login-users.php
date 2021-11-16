<!DOCTYPE html>
<html lang="en">
<head>
    <!--------------------------------------------------------------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Usuarios</title>
    <!--------------------------------------------------------------------------->
    <!-- COMIC NEUE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!--------------------------------------------------------------------------->
    <!-- ROBOTO FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!--------------------------------------------------------------------------->
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/a8b985f6c4.js" crossorigin="anonymous"></script>
    <!--------------------------------------------------------------------------->
    <!-- CUSTOM CSS-->
    <link rel="stylesheet" href="css/Styles-login-users.css">
    <!--------------------------------------------------------------------------->
</head>
<body>

    <div class="page">
        
        <div class="nav">
            <a href="display.php" class="nav__compare">
                <i class="fas fa-tv"></i>
                Compare
            </a>
            <a href="login-users.php" class="nav__login">
                <i class="fas fa-sign-in-alt"></i>
                Iniciar Sesion
            </a>
            <a href="register-users.php" class="nav__register">
                <i class="fas fa-user-plus"></i>
                Registrarse
            </a>
        </div>

        <div class="section">

            <div class="target-left">
                <div class="image"></div>
            </div>

            <div class="loginbox">
                <div class="box-changer">
                    <a href="login-users.php" class="login-text">INICIAR SESION</a>

                    <hr />

                    <a href="register-users.php" class="signup-text">REGISTRARSE</a>
                </div>

                <form action="#" method="POST">
                    <label for="user">Usuario: <br><br>
                        <i class="fas fa-user"></i>
                        <input type="text" name="user" placeholder="alguien@example.com">
                    </label>
                    
                    <label for="pass">Contraseña: <br><br>
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password">
                    </label>
                    

                    <div class="button-submit">
                        <button type="submit" name="button">ENTRAR</button>
                    </div>

                </form>

                <div class="forgotpass">
                    <a href="#">He olvidado mi contraseña</a>
                </div>

            </div>

            <div class="registerbox">

            </div>

        </div>
    </div>
     <?php
include_once 'conexion.php';
session_start();
if(isset($_POST['cerrar_sesion']))
{
        include_once 'cerrar.php';
}
if(isset($_SESSION['rol']))
{
    switch ($_SESSION['rol'])
     {
        case 1:
            header('Location: controlpanel.php');
            break;
        case 2:
            header('Location: display.php');
            break;
        default:
            echo "Este rol no existe dentro de las opciones";
            break;
    }
}
if(isset($_POST['user']) && (isset($_POST['password'])))
{
    $username=$_POST['user'];
        $password=$_POST['password'];

        $db=new Database();
        $query=$db->connectar()->prepare('SELECT * FROM usuarios WHERE EMAIL=:user AND PASSWORD=:password');
        $query->execute(['user'=>$username,'password'=>$password]);
        $arreglofila=$query->fetch(PDO::FETCH_NUM);

        if ($arreglofila == true ) 
            {
                $rol=$arreglofila[3];
                $_SESSION['rol']=$rol;
                switch ($rol) 
         {
            case 1:
                header('Location: controlpanel.php');
            break;
            case 2:
                header('Location: display.php');
            break;
            default:
                echo "Este rol de no existe dentro de las opciones";
            break;
        }
            $usuario=$arreglofila[1];
            $_SESSION['nomusuario']=$usuario;
            $ft=$arreglofila[5];
            $_SESSION['foto']=$ft;
    }
    else
    {
        echo "Nombre de usuario o contraseña incorrecto";
    }
}
?> 
    
</body>
</html>