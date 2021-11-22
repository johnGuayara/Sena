<!DOCTYPE html>
<html lang="en">
<head>
    <!-------------------------------------------------------------------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-------------------------------------------------------------------------------->
    <title>CompareApp | Login</title>
        <!-------------------------------------------------------------------------------->
    <!-- CUSTOM FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------------------------->
    <link rel="shortcut icon" href="img/Logo.png">
    <!-------------------------------------------------------------------------------->
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="css/Styles.css">
    <!-------------------------------------------------------------------------------->
</head>
<body>

    <div class="page-box">
        <header class="header">
            <div class="page-box__targets">
                <div class="page-box__targets-left">
                    <div class="page-box__targets-left-title">
                        <label>LOGIN</label>
                    </div>
                    <div class="page-box__targets-left-logo">
                    </div>
                </div>
                
                <form class="page-box__targets-rigth" action="php/logi2.php" method="POST">

                        <div class="page-box__targets-rigth-data">
                            <label class="correo">
                                <span>
                                    Correo:
                                </span>
                            </label>
                            <input name="user" class="input-email" type="email" placeholder="alguien@example.com" required>
                            <label class="password">
                                <span>
                                    Contraseña:
                                </span>
                            </label>
                            <input name="pass" type="password" required>
                        </div>
                    
                            <div class="page-box__targets-rigth-button">
                                <button type="submit" class="button-submit">Entrar</button>
                            </div>

                </form>
            </div>
        </header>
    </div>

        <footer class="footer-box">
                <p class="footer-text">SERVICIO NACIONAL DE APRENDIZAJE SENA - CENTRO DE MATERIALES Y ENSAYOS</p>
        </footer>
    </div>
</body>
</html>