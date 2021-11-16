<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ControPanel</title>
    <!-- GSAP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <!--    COMIC NEUE FONT: -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet"> 
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/a8b985f6c4.js" crossorigin="anonymous"></script>
   <!--    CUSTOM CSS FILE -->
    <link rel="stylesheet" href="css/Styles-controlPanel.css">
</head>
<body>

    <div class="page">

        <nav class="nav-box" style="font-size: 2rem;">
            <a href="index.php" class="nav-box__button">
                <i class="fas fa-angle-double-left fa-lg"> Salir
                </i>
            </a>
        </nav>

        <hr />

        <header class="header-box">
        </header>

        <section class="section-box">
            <div class="section-box__items">

                <div class="section-box__items-inicio">
                    <i class="fas fa-home fa-4x"></i>
                    <h3 class="section-box__items-inicio-title">Inicio</h3>
                </div>

                <div class="section-box__items-register">
                    <i class="fas fa-plus fa-4x"></i>
                    <h3 class="section-box__items-register-title">Registrar items</h3>
                </div>

                <div class="section-box__items-view">
                    <i class="fas fa-eye fa-4x"></i>
                    <h3 class="section-box__items-view-title">Ver registros</h3>
                </div>

                <div class="section-box__items-users">
                    <i class="fas fa-users fa-4x"></i>
                    <h3 class="section-box__items-users-title">Usuarios</h3>
                </div>

                <div class="section-box__items-desings">
                    <i class="fas fa-clone fa-4x"></i>
                    <h3 class="section-box__items-desings-title">Ver diseños</h3>
                </div>

                <div class="section-box__items-logout">
                    <i class="fas fa-sign-out-alt fa-4x"></i>
                    <h3 class="section-box__items-logout-title">Salir</h3>
                </div>

                  <form action="login-users.php" method="POST" >
                <div class="section-box__items-logout">
                    <i class="fas fa-sign-out-alt fa-4x"></i>
                      <input type="submit" value="Cerrar sesion" name="cerrar_sesion">
                </div>
                </form>

            </div>
        </section>

        <hr class="footer-hr" />

        <footer class="footer-box">
            <p class="footer-box__eula">SERVICIO NACIONAL DE APRENDIZAJE SENA | CENTRO DE MATERIALES Y ENSAYOS</p>
        </footer>


    </div>
    
</body>
</html>