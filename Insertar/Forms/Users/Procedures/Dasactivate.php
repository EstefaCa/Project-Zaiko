<?php

if (!isset($_GET['Users_id'])){
	exit();

}
$Users_id= $_GET['Users_id'];
$Users_active=False;
date_default_timezone_set('America/Bogota'); 
$DateAndTime = date('Y-m-d h:i:s', time());  
include '../../../../Connection/Connection.php';
$sentencia = $conexion_bd -> prepare("UPDATE users SET  Users_end_date=?, Users_active=? WHERE Users_id = ?;");
$resultado=$sentencia -> execute([$DateAndTime, $Users_active, $Users_id]);

if ($resultado === TRUE ){
	header('location: ../../../../Links/SystemAdmin/SelectUsers.php');
}else{
	echo "Error al Desactivar";
     }
 ?>