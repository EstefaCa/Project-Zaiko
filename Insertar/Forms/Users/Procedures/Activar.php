<?php
if (!isset($_GET['Users_id'])){
	exit();

}
$Users_id= $_GET['Users_id'];
$Users_active=true;
date_default_timezone_set('America/Bogota'); 
$Users_start_date = date('Y-m-d h:i:s', time());
$Users_end_date = date('', time());   
include '../../../../Connection/Connection.php';
$sentencia = $conexion_bd -> prepare("UPDATE users SET  Users_start_date=?, Users_end_date=?, Users_active=? WHERE Users_id = ?;");
$resultado=$sentencia -> execute([$Users_start_date,$Users_end_date, $Users_active, $Users_id]);

if ($resultado === TRUE ){
	header('location: ../../../../Links/SystemAdmin/SelectUsersD.php');
}else{
	echo "Error a Activar";
     }
 ?>