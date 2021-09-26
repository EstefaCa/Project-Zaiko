<?php
$Users_name_user=$_POST['Users_name_user'];
$Users_password=md5($_POST['Users_password']);

$consulta=$conexion_bd->prepare("SELECT * FROM users WHERE (Users_email=:Users_name_user OR Users_name_user=:Users_name_user)
AND Users_password=:Users_password");
$consulta->bindParam(':Users_name_user',$Users_name_user);
$consulta->bindParam(':Users_password',$Users_password);
$consulta->execute();
if ($consulta->rowCount()>=1) {
    session_start();
    $fila=$consulta->fetch();
    $_SESSION['Users_names']=$fila['Users_names'];
    $_SESSION['Users_name_user']=$fila['Users_name_user'];
    $_SESSION['Users_email']=$fila['Users_email'];
    $_SESSION['Role_Role_id']=$fila['Role_Role_id'];
    switch ($_SESSION['Role_Role_id']) {
        case $_SESSION['Role_Role_id']==1:
            header("Location: ../SystemAdmin/Dashboard_SystemAdmin.php");
            break;
        case $_SESSION['Role_Role_id']==2:
            header("Location: ../SystemUsers/Dashboard_SystemUsers.php");
                break;
        default:
            break;
    }
    $_SESSION['token']=md5(uniqid(mt_rand(),true));
        // header("Location: ../SystemAdmin/Dashboard_SystemAdmin.php");
}else{
    echo "Error Los Datos No son Correctos.";
}





?>