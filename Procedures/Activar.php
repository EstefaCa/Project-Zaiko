<?php
//print_r($_GET);

if (!isset($_GET['Users_number_dni'])){
	exit();

}
$Users_number_dni= $_GET['Users_number_dni'];
$Users_active=true;
date_default_timezone_set('America/Bogota'); 
$Users_start_date = date('Y-m-d h:i:s', time());
$Users_end_date = date('', time());   
include '../Connection/Connection.php';
$sentencia = $conexion_bd -> prepare("UPDATE users SET  Users_start_date=?, Users_end_date=?, Users_active=? WHERE Users_number_dni = ?;");
$resultado=$sentencia -> execute([$Users_start_date,$Users_end_date, $Users_active, $Users_number_dni]);

if ($resultado === TRUE ){
	header('location:Select.php');
}else{
	echo "Error a Activar";
     }
 ?>