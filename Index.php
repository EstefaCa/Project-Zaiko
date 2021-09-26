<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="Assets/css/Styles.css">
    <title>Zaiko</title>
    <style>
        html{
            scroll-behavior:smooth;
        }
    </style>
</head>
<body>
    <div class="General">
    <!-- Menú de navegación 
    @author Daniel Puerta Bernal 
    @email danielpuerta5789@gmail.com-->

    <nav>
        <div class="Nav_container">
            <label class="Logo"><b>Zaiko</b></label>
            <label for="menu" class="Nav_logo">
                <img src="Assets/img/Icons/Hamburgerwhite.svg" alt="">
            </label>
                <input type="checkbox" id="menu" class="Nav_input">
            <div class="Nav_menu">
                <ul>
                    <li><a href="#Masthead" class="Nav_items"><b>Inicio</b></a></li>
                    <li><a href="#We" class="Nav_items"><b>Nosotros</b></a></li>
                    <li><a href="#Services" class="Nav_items"><b>Servicios</b></a></li>
                    <li><a href="#Contacts" class="Nav_items"><b>Contactos</b></a></li>
                </ul>
            </div> 
         
        </div>
    </nav>

    <!-- Fin del menú de navegación -->

    <!-- Masthead/Cabecera
    @author Estefanía Carmona Alarcón 
    @email estefaniaalarcon2011@gmail.com-->
    
    <header id="Masthead">
        <div class="container"> 
            <div>
                <h1 class="Title"><b>Zaiko</b></h1>
                <h2 class="Slogan">Administrador de inventarios</h2>
                <a href="Links/Login/Login.php" class="Button">Ingresar</a>
            </div>  
                <img src="Assets/img/Inventary.svg" class="img1">
        </div>
    </header>

    <div class="Bead2"></div>
    <div class="Bead"></div>
    <!-- Fin Masthead -->

    <!-- Us 
    @author Daniel Puerta Bernal
    @email danielpuerta5789@gmail.com-->

    <section id="We" class="Section_We">
        <div class="Container" class="container">
            <div class="Slider-container">
                <section class="Slider-content"> 
                    <h1><b>Nosotros</b></h1>
                    <div class="Text-we">
                        <h4>El nombre del aplicativo proviene del japonés 在庫, el cual significa inventario y existencias. Zaiko se ofrece como una solución efectiva, didáctica y precisa para optimizar el trabajo de las diferentes entidades que cuentan con inventarios físicos que desean adaptarse al mercado actual.</h4> 
                    </div>
                    <img src="Assets/img/Team.svg" class="Us-img">
                </section>
            </div>
        </div>
    </section>
    
    <!-- Fin Us -->

         <!-- 
    Masthead/Cabecera
    @author Estefanía Carmona Alarcón 
    @email estefaniaalarcon2011@gmail.com-
     -->
     <section id="Services">
        <h1 class="Stext"><b>Servicios</b></h1>
        <div class="SContainer" class="container">
            <div class="Slider-box">
            <div class="Details">
                    <img src="Assets/img/Icons/Qr.svg" alt="" class="Model">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, excepturi!</p>
            </div>
            </div>
            <div class="Slider-box" class="container">
            <div class="Details">
                    <img src="Assets/img/Icons/Manage.svg" alt="" class="Model">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, excepturi!</p>
            </div>
            </div>
            <div class="Slider-box" class="container">
            <div class="Details">
                    <img src="Assets/img/Icons/Calendar.svg" alt="" class="Model">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, excepturi!</p>
            </div>
            </div>
            <div class="Slider-box" class="container">
            <div class="Details">
                    <img src="Assets/img/Icons/Notification.svg" alt="" class="Model">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, excepturi!</p>
            </div>
            </div>
        </div>
     </section>

     <!-- Fin Services -->

    <!-- Footer
    @author Duvan Felipe Valencia Vargas
    @email dfvv.1406@gmail.com -->
    <img src="Assets/img/Wave.svg" class="Wave">
    <footer id="Contacts">
            <div class="footer-content">
            <h3><b>Contáctanos</b></h3>
            <p>Abejorral, CR 26 B CL 43D-33,Ant. <br>
            <a href="#">314-721-8522</a> <br>
            <a href="#">zaikoproject@gmail.com</a></p>
        </div>
    </footer>
    <!-- Fin footer -->
    </div>
    <script src="Assets/js/Slider.js"></script>
</body>
</html>