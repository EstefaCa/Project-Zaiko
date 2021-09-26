<?php
session_start();
include_once '../Login/Seguridad.php';
if (!isset($_SESSION['Role_Role_id'])) {
    header("Location: ../../Index.php");
    include_once '../Login/Logout.php';
}else{
    if($_SESSION['Role_Role_id'] !=1){
        header("Location: ../../Index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&family=Raleway:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Assets/css/SystemAdmin/Dashboard_SystemAdmin.css">
    <title>Admin</title>
</head>
<body>
    <main>
        <section class="Glass">
            <div class="Dashboard">
                <div class="User">
                    <img src="../../Assets/img/Avatar.svg" class="Profile">
                    <h3><?php   echo$_SESSION['Users_names'];?></h3>
                    <p><?php
                    
                    
                    
                    if($_SESSION['Role_Role_id']== 1){ echo 'Administrador de Sistemas';}
                    
                    
                    ?></p>
                </div>
                <div class="Links">
                    <div class="Link"> 
                        <img src="../../Assets/img/Icons/Home.svg" alt="">
                        <a href=""><h2>Inicio</h2></a>
                    </div>
                    <div class="Link"> 
                        <img src="../../Assets/img/Icons/Inventories.svg" alt="">
                        <a href=""><h2>Inventarios</h2></a>
                    </div>
                    <div class="Link"> 
                        <img src="../../Assets/img/Icons/Loans.svg" alt="">
                        <a href=""><h2>Préstamos</h2></a>
                    </div>
                    <div class="Link"> 
                        <img src="../../Assets/img/Icons/Person-add.svg" alt="">
                        <a href="../../Forms/Users.php"><h2>Crear Usuarios</h2></a>
                    </div>
                    <div class="Link"> 
                        <img src="../../Assets/img/Icons/Profile.svg" alt="">
                        <a href="../../Functions/Show_Users/Show_Users.php"><h2>Usuarios</h2></a>
                    </div> 
                    <div class="Link"> 
                        <img src="../../Assets/img/Icons/Notifications.svg" alt="">
                        <a href=""><h2>Notificaciones</h2></a>
                    </div>
                    <div class="Link"> 
                        <img src="../../Assets/img/Icons/Settings.svg" alt="">
                        <a href="../../Functions/Reset_Password/Reset_Password.php"><h2>Configuración</h2></a>
                    </div>
                    <div class="Link"> 
                        <img src="../../Assets/img/Icons/Exit.svg" alt="">
                        <a href="../Login/Logout.php?tk=<?php echo $_SESSION['token'];?>"><h2>Cerrar sesión</h2></a>
                    </div>
                </div>
            </div>   
        </section>   
    </main>
</body>
</html>