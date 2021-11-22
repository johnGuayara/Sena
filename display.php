<!DOCTYPE html>
<html lang="en">
<head>
    <!-------------------------------------------------------------------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-------------------------------------------------------------------------------->
    <title>Compare</title>
    <!-------------------------------------------------------------------------------->
    <!-- FONT COMIC NEUE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------------------------->
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/a8b985f6c4.js" crossorigin="anonymous"></script>
    <!-------------------------------------------------------------------------------->
    <!-- FONT CEVINCHE ONE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------------------------->
    <!-- FONT ROBOTO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------------------------->
    <!-- PUSHBAR CSS FILE -->
    <link rel="stylesheet" href="css/pushbar.css">
    <!-------------------------------------------------------------------------------->
     <!-- JQUERY CDN --> 
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-------------------------------------------------------------------------------->
     <!-- PUSHBAR JS FILE -->
    <script src="js/pushbar.js"></script>
    <!-------------------------------------------------------------------------------->
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/Styles-display.css">
    <!-------------------------------------------------------------------------------->
</head>
<body>
    
    <div class="page-box">

        <div class="header_">

            <div class="ghost"></div>

            <nav class="nav-box">
                <p></p>
                
                <button data-pushbar-target="pushbar-menu" id="menu">
                    <i class="fas fa-bars fa-2x nav-box__menu" style="color: white;"></i>
                </button>

                <h1 class="nav-box__title">COMPARE</h1>
                <a class="nav-box__login" href="login-users.php">Iniciar sesion</a>
                <a class="nav-box__login" href="perfil.php">Perfil</a>
                <a href="#">
                    <i class="fas fa-home fa-2x" style="color: white;"></i>
                </a>
                <p></p>
            </nav>
    
            <header class="nav-header">
    
    
                    <a href="#" class="nav-header__graphics">
                        <h2>TARGETAS GRAFICAS</h2>
                    </a>
        
                    <a href="#" class="nav-header__processors">
                        <h2>PROCESADORES</h2>
                    </a>
        
                    <a href="#" class="nav-header__memories">
                        <h3>MEMORIAS RAM</h3>
                    </a>
        
                    <a href="#" class="nav-header__discs">
                        <h3>UNIDADES DE ALMACENAMIENTO</h3>
                    </a>
    
                    <a href="#" class="nav-header__monitors">
                        <h2>MONITORES</h2>
                    </a>
        
                    <a href="#" class="nav-header__headsets">
                        <h2>AUDIFONOS</h2>
                    </a>
        
                    <a href="#" class="nav-header__keyboards">
                        <h3>TECLADOS</h3>
                    </a>
        
                    <a href="#" class="nav-header__mauses">
                        <h3>RATONES</h3>
                    </a>
                    
            </header>

        </div>

        

        <form action="search.php" class="home-section__search-bar">
            <h3>Buscar:</h3>
            <input type="text" name="content">
            <button type="submit" method="post">
                <i class="fas fa-search fa-lg"></i>
            </button>
        </form>
        
        <section class="home-section">

                <div class="box-1"></div>
                <div class="box-2"></div>
                <div class="box-3"></div>
                <div class="box-4"></div>
                <div class="box-5"></div>
                <div class="box-6"></div>
                <div class="box-7"></div>
                <div class="box-8"></div>
        </section>
        <footer class="footer-box">
            <h3 class="footer-box__eula">SERVICIO NACIONAL DE APRENDIZAJE SENA | CENTRO DE MATERIALES Y ENSAYOS</h3>
        </footer>

    </div>

    <!-- Pushbar: Menu -->
		
    <div id="push-menu" data-pushbar-id="pushbar-menu" class="pushbar from_left menu pushbar-menu-default">
        <div class="btn-close-m">
            <button data-pushbar-close>
                <i class="fa fa-times fa-x2" style="color: white; background-color: black;"></i>
            </button>
        </div>
        <div class="sub-menu">
            <a href="#">Inicio</a>
            <a href="login-users.php">Iniciar sesion</a>
            <a href="#">Acerca De</a>
            <a href="index.php">Descargar App</a>
            <a href="login.php">Sesion Administrdores</a>
        </div>
    </div>

    <!-- Pushbars: Menu SCRIPTS-->

    <!-- JS TO SET BLUR & OVERLAY -->

    <script>
        var pushbar = new Pushbar({
        blur: true,
        overlay: true,
    });
    </script>

    <!-- CUSTOM PUSHBAR JS TO ACTIVE THE MENU -->

    <script>
        document.getElementById("menu").onclick = function() {muestraMenu()};

            function muestraMenu(evento){
                var menu = document.getElementById("push-menu");
                menu.classList.add("pushbar-menu");
            }
    </script>

    <!-- CUSTOM JS FILE -->
    <script src="js/display_script.js"></script>
    

</body>
</html>