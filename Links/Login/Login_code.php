<?php
$Users_name_user=$_POST['Users_name_user'];
$Users_password=md5($_POST['Users_password']);

$consulta=$conexion_bd->prepare("SELECT * FROM users WHERE (Users_email=:Users_name_user OR Users_name_user=:Users_name_user)
AND Users_password=:Users_password");
$consulta->bindParam(':Users_name_user',$Users_name_user);
$consulta->bindParam(':Users_password',$Users_password);
$consulta->execute();

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if ($consulta->rowCount()>=1) {
    $fila=$consulta->fetch();
    $_SESSION['Users_id'] = $fila['Users_id'];
    $_SESSION['Users_names'] = $fila['Users_names'];
    $_SESSION['Users_name_user'] = $fila['Users_name_user'];
    $_SESSION['Users_email'] = $fila['Users_email'];
    $_SESSION['Role_Role_id'] = $fila['Role_Role_id'];
    // echo '<script>location.href="../SystemAdmin/SystemAdmin.php";</script>';
    $_SESSION['token']=md5(uniqid(mt_rand(),true));
    
    switch ($_SESSION['Role_Role_id']) {
        case ($_SESSION['Role_Role_id'] == 1):
            echo '<script>location.href="Links/SystemAdmin/SystemAdmin.php";</script>';
            // $_SESSION['token']=md5(uniqid(mt_rand(),true));
            break;
        case ($_SESSION['Role_Role_id'] == 2):
            echo '<script>location.href="#";</script>';
            // $_SESSION['token']=md5(uniqid(mt_rand(),true));
            break;
        case ($_SESSION['Role_Role_id'] == 3):
            echo '<script>location.href="#";</script>';
            // $_SESSION['token']=md5(uniqid(mt_rand(),true));
            break;    
        case ($_SESSION['Role_Role_id'] == 4):
            echo '<script>location.href="#";</script>';
            // $_SESSION['token']=md5(uniqid(mt_rand(),true));
            break;
    }
}else{
    echo "Error Los Datos No son Correctos.";
}
?>