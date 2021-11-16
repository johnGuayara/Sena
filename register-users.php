<!DOCTYPE html>
<html lang="en">
<head>
    <!-------------------------------------------------------------------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Usuarios</title>
    <!-------------------------------------------------------------------------------->
    <!-- COMIC NEUE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------------------------->
    <!-- ROBOTO FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------------------------->
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/a8b985f6c4.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------->
    <!-- CUSTOM CSS-->
    <link rel="stylesheet" href="css/Styles-register-users.css">
    <!-------------------------------------------------------------------------------->
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

                <form action="php/register-users.php">
                    
                    <div class="center">
                        <div class="row1">
                            <label for="user">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="user" placeholder="Correo">
                            </label>

                            <label for="user-name">
                                <i class="fas fa-user"></i>
                                <input type="text" name="user-name" placeholder="Nombre de usuario">
                            </label>
                            
                            
                        </div>
    
                        <div class="row2">
                            <label for="password">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Contraseña">
                            </label>

                            <label for="conpassword">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="conpassword" placeholder="Confirmar contraseña">
                            </label>
                        </div>
                    </div>
                    

                    <div class="button-submit">
                        <button type="submit" name="button">REGISTRARSE</button>
                    </div>

                </form>

                <div class="incorrect-pass" style="color: red;">
                    <p>¡Las contraseñas no coinciden!</p>
                    <p>¡El correo no es valido!</p>
                    <p>¡El nombre de usuario no puede contener caracteres especiales!</p>
                </div>

            </div>

        </div>
    </div>
    
</body>
</html>